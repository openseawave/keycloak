<?php

namespace OpenSeaWave\Keycloak\Facades;

use Illuminate\Support\Facades\Facade;
use OpenSeaWave\Keycloak\Enums\GrantType;
use OpenSeaWave\Keycloak\Representation\AddUserRolesRequest;
use OpenSeaWave\Keycloak\Representation\CountUsersRequest;
use OpenSeaWave\Keycloak\Representation\CreateRoleRequest;
use OpenSeaWave\Keycloak\Representation\DeleteUserRolesRequest;
use OpenSeaWave\Keycloak\Representation\GetRolesRequest;
use OpenSeaWave\Keycloak\Representation\GetUsersRequest;
use OpenSeaWave\Keycloak\Representation\RoleRepresentation;
use OpenSeaWave\Keycloak\Representation\UserRepresentation;

/**
 * Class Keycloak
 *
 * @method static \OpenSeaWave\Keycloak\Keycloak setBaseUrl(string $baseUrl) Set the base URL for Keycloak.
 * @method static \OpenSeaWave\Keycloak\Keycloak setRealm(string $realm) Set the realm for Keycloak.
 * @method static \OpenSeaWave\Keycloak\Keycloak setUsername(string $username) Set the username for Keycloak.
 * @method static \OpenSeaWave\Keycloak\Keycloak setPassword(string $password) Set the password for Keycloak.
 * @method static \OpenSeaWave\Keycloak\Keycloak setClientId(string $clientId) Set the client ID for Keycloak.
 * @method static \OpenSeaWave\Keycloak\Keycloak setClientSecret(string $clientSecret) Set the client secret for Keycloak.
 * @method static \OpenSeaWave\Keycloak\Keycloak setGrantType(GrantType $grantType) Set the grant type for Keycloak.
 * @method static object getToken(?string $realm) Retrieve an access token from Keycloak.
 * @method static int countUsers(?string $realm,?CountUsersRequest $query) Count the total number of users in a realm.
 * @method static array getUsers(?string $realm,?GetUsersRequest $query) Retrieve a list of users from Keycloak.
 * @method static UserRepresentation getUser(string $id,?string $realm) Retrieve a specific user by their ID.
 * @method static object getUserByUsername(string $username,?string $realm) Retrieve a specific user by their username.
 * @method static UserRepresentation createUser(UserRepresentation $data, ?string $realm,) Create a new user in Keycloak.
 * @method static UserRepresentation updateUser(string $id, UserRepresentation $data, ?string $realm) Update an existing user.
 * @method static bool deleteUser(string $id,?string $realm) Delete a user from Keycloak.
 * @method static array getRoles(?GetRolesRequest $request,?string $realm) Retrieve a list of roles from the realm.
 * @method static RoleRepresentation createRole(CreateRoleRequest $data, ?string $realm) Create a new role in the realm.
 * @method static bool updateRole(string $roleName,array $data,?string $realm) Update an existing role.
 * @method static bool deleteRole(string $roleName,?string $realm) Delete a role from the realm.
 * @method static array getUserRealmRoles(string $userId,?string $realm) Retrieve realm roles assigned to a specific user.
 * @method static object addUserRealmRoles(string $userId, AddUserRolesRequest $roles, ?string $realm) Assign roles to a user.
 * @method static bool deleteUserRealmRoles(string $userId, DeleteUserRolesRequest $roles, ?string $realm) Remove roles from a user.
 * @method static void changeUserPassword(string $userId, string $password,?string $realm) Change a user's password.
 * @method static void changeUserActivationStatus(string $userId, bool $enabled,?string $realm) Change a user's activation status.
 *
 * @see \OpenSeaWave\Keycloak\Keycloak
 *
 * @author  Omar Haris
 */
class Keycloak extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return \OpenSeaWave\Keycloak\Keycloak::class;
    }
}
