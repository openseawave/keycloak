<?php

namespace OpenSeaWave\Keycloak;

/**
 * Class KeycloakUrlBuilder
 *
 * @package OpenSeaWave\Keycloak
 * @author  Omar Haris
 */
class KeycloakUrlBuilder
{
    /**
     * The base URL for Keycloak.
     *
     * @var string
     */
    private string $baseUrl;

    /**
     * The realm for which requests are made.
     *
     * @var ?string
     */
    private ?string $realm;

    /**
     * KeycloakUrlBuilder constructor.
     *
     * @param string $baseUrl The base URL of the Keycloak server.
     * @param ?string $realm The realm to be used for the API calls.
     */
    public function __construct(string $baseUrl, ?string $realm)
    {
        $this->baseUrl = rtrim($baseUrl, '/');

        $this->realm = $realm;
    }

    /**
     * Get the URL for obtaining a token.
     *
     * @return string
     */
    public function getTokenUrl(): string
    {
        return "{$this->baseUrl}/realms/{$this->realm}/protocol/openid-connect/token";
    }

    /**
     * Get the URL for counting users in a realm.
     *
     * @return string
     */
    public function getCountUsersUrl(): string
    {
        return "{$this->baseUrl}/admin/realms/{$this->realm}/users/count";
    }

    /**
     * Get the URL for retrieving users in a realm.
     *
     * @return string
     */
    public function getUsersUrl(): string
    {
        return "{$this->baseUrl}/admin/realms/{$this->realm}/users";
    }

    /**
     * Get the URL for a specific user by ID.
     *
     * @param string $userId The ID of the user.
     * @return string
     */
    public function getUserByIdUrl(string $userId): string
    {
        return "{$this->baseUrl}/admin/realms/{$this->realm}/users/{$userId}";
    }

    /**
     * Get the URL for managing roles in a realm.
     *
     * @return string
     */
    public function getRolesUrl(): string
    {
        return "{$this->baseUrl}/admin/realms/{$this->realm}/roles";
    }

    /**
     * Get the URL for a specific role by role name.
     *
     * @param string $roleName The name of the role.
     * @return string
     */
    public function getRoleByNameUrl(string $roleName): string
    {
        return "{$this->baseUrl}/admin/realms/{$this->realm}/roles/{$roleName}";
    }

    /**
     * Get the URL for role mappings in the realm.
     *
     * @param $userId
     * @return string
     */
    public function getRealmRoleMappingsUrl($userId): string {
        return "{$this->baseUrl}/admin/realms/{$this->realm}/users/{$userId}/role-mappings/realm";
    }
}
