<?php

namespace OpenSeaWave\Keycloak;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use OpenSeaWave\Keycloak\Exceptions\KeycloakException;
use OpenSeaWave\Keycloak\Representation\AddUserRolesRequest;
use OpenSeaWave\Keycloak\Representation\CountUsersRequest;
use OpenSeaWave\Keycloak\Representation\CreateRoleRequest;
use OpenSeaWave\Keycloak\Representation\DeleteUserRolesRequest;
use OpenSeaWave\Keycloak\Representation\GetRolesRequest;
use OpenSeaWave\Keycloak\Representation\GetUsersRequest;
use OpenSeaWave\Keycloak\Representation\UpdateRoleRequest;
use OpenSeaWave\Keycloak\Representation\UserRepresentation;

/**
 * Keycloak class.
 *
 * @author  Omar Haris
 */
class Keycloak implements KeycloakInterface
{
    /**
     * The HTTP client instance.
     */
    protected Client $httpClient;

    /**
     * The base URL for Keycloak.
     */
    public string $baseUrl;

    /**
     * The username for the keycloak admin.
     */
    public ?string $username;

    /**
     * The password for the keycloak admin.
     */
    public ?string $password;

    /**
     * The realm for which requests are made.
     */
    public ?string $realm;

    /**
     * The client ID.
     */
    protected ?string $clientId;

    /**
     * The client secret.
     */
    protected ?string $clientSecret;

    /**
     * The grant type.
     */
    protected ?string $grantType;

    /**
     * KeycloakClient constructor.
     *
     * Initializes the HTTP client and retrieves the access token.
     */
    public function __construct(
        ?string $baseUrl = null,
        ?string $realm = null,
        ?string $username = null,
        ?string $password = null,
        ?string $clientId = null,
        ?string $clientSecret = null,
        ?string $grantType = null
    ) {
        $this->username = $username ?? config('keycloak.username');
        $this->password = $password ?? config('keycloak.password');
        $this->baseUrl = $baseUrl ?? config('keycloak.base_url');
        $this->realm = $realm ?? config('keycloak.realm');
        $this->clientId = $clientId ?? config('keycloak.client_id');
        $this->clientSecret = $clientSecret ?? config('keycloak.client_secret');
        $this->grantType = $grantType ?? config('keycloak.grant_type');

        $this->httpClient = new Client([
            'base_uri' => $this->baseUrl,
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    /**
     * Set base URL for the Keycloak client.
     *
     * @param  string  $baseUrl  The base URL to set.
     */
    public function setBaseUrl(string $baseUrl): Keycloak
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * Set realm for the Keycloak client.
     *
     * @param  string  $realm  The realm to set.
     */
    public function setRealm(string $realm): Keycloak
    {
        $this->realm = $realm;

        return $this;
    }

    /**
     * Set grant type for the Keycloak client.
     *
     * @param  string  $grantType  The grant type to set.
     */
    public function setGrantType(string $grantType): Keycloak
    {
        $this->grantType = $grantType;

        return $this;
    }

    /**
     * Set Client ID for the Keycloak client.
     *
     * @param  string  $clientId  The client ID to set.
     */
    public function setClientId(string $clientId): Keycloak
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Set Client secret for the Keycloak client.
     *
     * @param  string  $clientSecret  The client secret to set.
     */
    public function setClientSecret(string $clientSecret): Keycloak
    {
        $this->clientSecret = $clientSecret;

        return $this;
    }

    /**
     * Set username for the Keycloak client.
     *
     * @param  string  $username  The username to set.
     */
    public function setUsername(string $username): Keycloak
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Set password for the Keycloak client.
     *
     * @param  string  $password  The password to set.
     */
    public function setPassword(string $password): Keycloak
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Retrieve an access token from Keycloak.
     *
     * @param  ?string  $realm  The realm for which to retrieve the token.
     * @return object the token object.
     *
     * @throws GuzzleException If the HTTP request fails.
     */
    public function getToken(?string $realm = null): object
    {
        // Create a new instance of the KeycloakUrlBuilder
        $urlBuilder = new KeycloakUrlBuilder(
            baseUrl: $this->baseUrl,
            realm: $realm ?? $this->realm
        );

        // Make a POST request to the token endpoint
        $response = $this->httpClient->post($urlBuilder->getTokenUrl(), [
            'form_params' => [
                'grant_type' => $this->grantType,
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
                'username' => $this->username,
                'password' => $this->password,
            ],
        ]);

        // Return the token object
        return json_decode(
            $response->getBody()->getContents()
        );
    }

    /**
     * Count the total number of users in a realm based on filters.
     *
     * @param  ?CountUsersRequest  $query  An object representing the query parameters.
     * @param  ?string  $realm  The realm for which to count users.
     * @return int The number of users matching the criteria.
     *
     * @throws GuzzleException If the HTTP request fails.
     */
    public function countUsers(?string $realm = null, ?CountUsersRequest $query = null): int
    {
        // Create a new instance of the KeycloakUrlBuilder
        $urlBuilder = new KeycloakUrlBuilder(
            baseUrl: $this->baseUrl,
            realm: $realm ?? $this->realm
        );

        // Make a GET request to the count users endpoint
        $response = $this->httpClient->get($urlBuilder->getCountUsersUrl(), [
            'headers' => [
                'Authorization' => "Bearer {$this->getToken()->access_token}",
            ],
            'query' => $query?->toArray(),
        ]);

        // Return the count of users
        return json_decode(
            $response->getBody()->getContents()
        );
    }

    /**
     * Retrieve a list of users based on filters.
     *
     * @param  ?GetUsersRequest  $query  An object representing the query parameters.
     * @param  ?string  $realm  The realm for which to retrieve users.
     * @return array An array of user objects.
     *
     * @throws GuzzleException If the HTTP request fails.
     */
    public function getUsers(?string $realm = null, ?GetUsersRequest $query = null): array
    {
        // Create a new instance of the KeycloakUrlBuilder
        $urlBuilder = new KeycloakUrlBuilder(
            baseUrl: $this->baseUrl,
            realm: $realm ?? $this->realm
        );

        // Make a GET request to the count users endpoint
        $response = $this->httpClient->get($urlBuilder->getUsersUrl(), [
            'headers' => [
                'Authorization' => "Bearer {$this->getToken()->access_token}",
            ],
            'query' => $query?->toArray(),
        ]);

        return json_decode(
            $response->getBody()->getContents()
        );
    }

    /**
     * Retrieve user details by user ID.
     *
     * @param  string  $id  The UUID of the user to retrieve.
     * @param  ?string  $realm  The realm for which to retrieve the user.
     * @return object A user representation.
     *
     * @throws GuzzleException If the HTTP request fails.
     */
    public function getUser(string $id, ?string $realm = null): object
    {
        // Create a new instance of the KeycloakUrlBuilder
        $urlBuilder = new KeycloakUrlBuilder(
            baseUrl: $this->baseUrl,
            realm: $realm ?? $this->realm
        );

        // Make a GET request to the user endpoint
        $response = $this->httpClient->get($urlBuilder->getUserByIdUrl($id), [
            'headers' => [
                'Authorization' => "Bearer {$this->getToken()->access_token}",
            ],
        ]);

        // Return the user object
        return json_decode(
            $response->getBody()->getContents()
        );
    }

    /**
     * Retrieve user details by username.
     *
     * @param  string  $username  The username of the user to retrieve.
     * @param  ?string  $realm  The realm for which to retrieve the user.
     * @return object A user representation.
     *
     * @throws GuzzleException|KeycloakException If the HTTP request fails.
     */
    public function getUserByUsername(string $username, ?string $realm = null): object
    {
        // Retrieve the user by username
        $users = $this->getUsers(
            realm: $realm,
            query: new GetUsersRequest(
                username: $username
            )
        );

        // Throw an exception if the user is not found
        if (count($users) === 0) {
            throw new KeycloakException('User not found', 0);
        }

        // Return the user object
        return $users[0];
    }

    /**
     * Create a new user in the realm.
     *
     * @param  UserRepresentation  $data  The user data for creating a new user.
     * @param  ?string  $realm  The realm for which to create the user.
     * @return UserRepresentation The user object that was created.
     *
     * @throws KeycloakException If the API request fails.
     * @throws GuzzleException
     */
    public function createUser(UserRepresentation $data, ?string $realm = null): UserRepresentation
    {
        // Create a new instance of the KeycloakUrlBuilder
        $urlBuilder = new KeycloakUrlBuilder(
            baseUrl: $this->baseUrl,
            realm: $realm ?? $this->realm
        );

        // Make a POST request to the users endpoint
        $response = $this->httpClient->post($urlBuilder->getUsersUrl(), [
            'json' => $data,
            'headers' => [
                'Authorization' => "Bearer {$this->getToken()->access_token}",
            ],
        ]);

        // Return the user object
        if (! $this->isSuccessfulResponse($response)) {
            throw new KeycloakException('Failed to create user', 0);
        }

        return $response;
    }

    /**
     * Update an existing user in the realm.
     *
     * @param  UserRepresentation  $data  The user data for creating a new user.
     * @param  ?string  $realm  The realm for which to create the user.
     * @return UserRepresentation The user object that was created.
     *
     * @throws KeycloakException If the API request fails.
     * @throws GuzzleException
     */
    public function updateUser(string $id, UserRepresentation $data, ?string $realm = null): UserRepresentation
    {
        // Create a new instance of the KeycloakUrlBuilder
        $urlBuilder = new KeycloakUrlBuilder(
            baseUrl: $this->baseUrl,
            realm: $realm ?? $this->realm
        );

        // Make a POST request to the users endpoint
        $response = $this->httpClient->put($urlBuilder->getUserByIdUrl($id), [
            'json' => $data,
            'headers' => [
                'Authorization' => "Bearer {$this->getToken()->access_token}",
            ],
        ]);

        // Return the user object
        if (! $this->isSuccessfulResponse($response)) {
            throw new KeycloakException('Failed to update user', 0);
        }

        return $data;
    }

    /**
     * Delete a user in the realm.
     *
     * @param  string  $id  The UUID of the user to delete.
     * @param  string|null  $realm  The realm for which to delete the user.
     * @return bool True if the user was deleted successfully.
     *
     * @throws GuzzleException If the HTTP request fails.
     * @throws KeycloakException If the API request fails.
     */
    public function deleteUser(string $id, ?string $realm = null): bool
    {
        $urlBuilder = new KeycloakUrlBuilder(
            baseUrl: $this->baseUrl,
            realm: $realm ?? $this->realm
        );

        $response = $this->httpClient->delete($urlBuilder->getUserByIdUrl($id), [
            'headers' => [
                'Authorization' => "Bearer {$this->getToken()->access_token}",
            ],
        ]);

        if (! $this->isSuccessfulResponse($response)) {
            throw new KeycloakException('Failed to update user', 0);
        }

        return true;
    }

    /**
     *  Retrieve a list of roles from the realm.
     *
     * @param  string|null  $realm  The realm for which to retrieve roles.
     * @param  GetRolesRequest|null  $request  An object representing the query parameters.
     * @return array An array of role objects.
     *
     * @throws GuzzleException If the HTTP request fails.
     * @throws KeycloakException If the API request fails.
     */
    public function getRoles(?GetRolesRequest $request, ?string $realm = null): array
    {
        $urlBuilder = new KeycloakUrlBuilder(
            baseUrl: $this->baseUrl,
            realm: $realm ?? $this->realm
        );

        $response = $this->httpClient->get($urlBuilder->getRolesUrl(), [
            'headers' => [
                'Authorization' => "Bearer {$this->getToken()->access_token}",
            ],
            'query' => $request?->toArray(),
        ]);

        if (! $this->isSuccessfulResponse($response)) {
            throw new KeycloakException('Failed to retrieve roles', 0);
        }

        return json_decode(
            $response->getBody()->getContents()
        );
    }

    /**
     * Create a new role in the realm.
     *
     * @param  CreateRoleRequest  $data  The role data for creating a new role.
     * @param  string|null  $realm  The realm for which to create the role.
     * @return bool True if the role was created successfully.
     *
     * @throws GuzzleException If the HTTP request fails.
     * @throws KeycloakException If the API request fails.
     */
    public function createRole(CreateRoleRequest $data, ?string $realm = null): bool
    {
        $urlBuilder = new KeycloakUrlBuilder(
            baseUrl: $this->baseUrl,
            realm: $realm ?? $this->realm
        );

        $response = $this->httpClient->post($urlBuilder->getRolesUrl(), [
            'json' => $data,
            'headers' => [
                'Authorization' => "Bearer {$this->getToken()->access_token}",
            ],
        ]);

        if (! $this->isSuccessfulResponse($response)) {
            throw new KeycloakException('Failed to create role', 0);
        }

        return true;
    }

    public function updateRole(string $roleName, UpdateRoleRequest $data, ?string $realm = null): void
    {
        // TODO: Implement updateRole() method.
    }

    public function deleteRole(string $roleName, ?string $realm = null): void
    {
        // TODO: Implement deleteRole() method.
    }

    public function getUserRoles(string $userId, ?string $realm = null): array
    {
        // TODO: Implement getUserRoles() method.
    }

    public function addUserRoles(string $userId, AddUserRolesRequest $roles, ?string $realm = null): void
    {
        // TODO: Implement addUserRoles() method.
    }

    public function deleteUserRoles(string $userId, DeleteUserRolesRequest $roles, ?string $realm = null): void
    {
        // TODO: Implement deleteUserRoles() method.
    }

    public function changeUserPassword(string $userId, string $password, ?string $realm = null): void
    {
        // TODO: Implement changeUserPassword() method.
    }

    public function changeUserActivationStatus(string $userId, bool $enabled, ?string $realm = null): void
    {
        // TODO: Implement changeUserActivationStatus() method.
    }

    /**
     * Check if the response is successful.
     */
    private function isSuccessfulResponse($response): bool
    {
        return $response->getStatusCode() === 201 || $response->getStatusCode() === 200 || $response->getStatusCode() === 204 || $response->getStatusCode() === 202;
    }
}
