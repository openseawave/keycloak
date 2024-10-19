<?php

namespace OpenSeaWave\Keycloak;

use OpenSeaWave\Keycloak\Representation\AddUserRolesRequest;
use OpenSeaWave\Keycloak\Representation\CountUsersRequest;
use OpenSeaWave\Keycloak\Representation\CreateRoleRequest;
use OpenSeaWave\Keycloak\Representation\DeleteUserRolesRequest;
use OpenSeaWave\Keycloak\Representation\GetRolesRequest;
use OpenSeaWave\Keycloak\Representation\GetUsersRequest;
use OpenSeaWave\Keycloak\Representation\UpdateRoleRequest;
use OpenSeaWave\Keycloak\Representation\UserRepresentation;

/**
 * Interface KeycloakInterface
 *
 * @author  Omar Haris
 */
interface KeycloakInterface
{
    /**
     * Set the base URL for Keycloak.
     */
    public function setBaseUrl(string $baseUrl): Keycloak;

    /**
     * Set the realm for Keycloak.
     */
    public function setRealm(string $realm): Keycloak;

    /**
     * Set the username for Keycloak.
     */
    public function setUsername(string $username): Keycloak;

    /**
     * Set the password for Keycloak.
     */
    public function setPassword(string $password): Keycloak;

    /**
     * Set the client ID for Keycloak.
     */
    public function setClientId(string $clientId): Keycloak;

    /**
     * Set the client secret for Keycloak.
     */
    public function setClientSecret(string $clientSecret): Keycloak;

    /**
     * Set the grant type for Keycloak.
     */
    public function setGrantType(string $grantType): Keycloak;

    /**
     * Retrieve a token from Keycloak.
     */
    public function getToken(?string $realm = null): object;

    /**
     * Count the total number of users in a realm.
     */
    public function countUsers(?string $realm = null, ?CountUsersRequest $query = null): int;

    /**
     * Retrieve a list of users from Keycloak.
     */
    public function getUsers(?string $realm = null, ?GetUsersRequest $query = null): array;

    /**
     * Retrieve a specific user by their ID.
     */
    public function getUser(string $id, ?string $realm = null): object;

    /**
     * Create a new user in Keycloak.
     */
    public function createUser(UserRepresentation $data, ?string $realm = null): UserRepresentation;

    /**
     * Update an existing user.
     */
    public function updateUser(string $id, UserRepresentation $data, ?string $realm = null): UserRepresentation;

    /**
     * Delete a user from Keycloak.
     */
    public function deleteUser(string $id, ?string $realm = null): bool;

    /**
     * Retrieve a list of roles from the realm.
     */
    public function getRoles(?GetRolesRequest $request, ?string $realm = null): array;

    /**
     * Create a new role in the realm.
     */
    public function createRole(CreateRoleRequest $data, ?string $realm = null): bool;

    /**
     * Update an existing role.
     */
    public function updateRole(string $roleName, UpdateRoleRequest $data, ?string $realm = null): void;

    /**
     * Delete a role from the realm.
     */
    public function deleteRole(string $roleName, ?string $realm = null): void;

    /**
     * Retrieve roles assigned to a specific user.
     */
    public function getUserRoles(string $userId, ?string $realm = null): array;

    /**
     * Assign roles to a user.
     */
    public function addUserRoles(string $userId, AddUserRolesRequest $roles, ?string $realm = null): void;

    /**
     * Remove roles from a user.
     */
    public function deleteUserRoles(string $userId, DeleteUserRolesRequest $roles, ?string $realm = null): void;

    /**
     * Change user password.
     */
    public function changeUserPassword(string $userId, string $password, ?string $realm = null): void;

    /**
     * Change user activation status.
     */
    public function changeUserActivationStatus(string $userId, bool $enabled, ?string $realm = null): void;
}
