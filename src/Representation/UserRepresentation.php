<?php

declare(strict_types=1);

namespace OpenSeaWave\Keycloak\Representation;

use OpenSeaWave\Keycloak\Enums\UserActionType;

/**
 * UserRepresentation data transfer object class.
 *
 * @package OpenSeaWave\Keycloak
 * @author  Omar Haris
 */
class UserRepresentation extends Representation
{
    /**
     * UserRepresentation constructor.
     *
     * @param string|null $id The unique identifier of the user (optional).
     * @param string|null $username The user's username (optional).
     * @param bool|null $enabled Whether the user is enabled or not (optional).
     * @param string|null $email The user's email address (optional).
     * @param bool|null $emailVerified Whether the user's email is verified (optional).
     * @param string|null $firstName The user's first name (optional).
     * @param string|null $lastName The user's last name (optional).
     * @param array|null $attributes An array of user attributes (optional).
     * @param CredentialRepresentation[]|null $credentials The user's credentials (optional).
     * @param UserActionType[]|null $requiredActions A list of actions required by the user on the next login (optional).
     * @param array|null $groups A list of groups the user belongs to (optional).
     * @param array|null $realmRoles A list of realm roles assigned to the user (optional).
     * @param array|null $federatedIdentities Federated identities associated with the user from external identity providers (optional).
     * @param array|null $clientRoles A list of client roles assigned to the user (optional).
     * @param array|null $disableableCredentialTypes Types of credentials that are disabled for the user (optional).
     * @param array|null $access Access level control for the user (optional).
     * @param array|null $userProfileMetadata The user's profile metadata (optional).
     * @param int|null $createdTimestamp The timestamp when the user was created (optional).
     * @param array|null $applicationRoles A list of application roles assigned to the user (optional).
     * @param array|null $socialLinks A list of social links associated with the user (optional).
     * @param bool|null $totp Whether the user has time-based OTP enabled (optional).
     * @param string|null $serviceAccountClientId The client ID for the service account associated with the user (optional).
     * @param array|null $clientConsents A list of client consents granted by the user (optional).
     * @param int|null $notBefore The "not before" timestamp for the user (optional).
     * @param string|null $self The self-link for the user (optional).
     * @param string|null $origin The origin of the user (optional).
     */
    public function __construct(
        /**
         * @var string|null The unique identifier of the user (optional).
         * @example 'c1e9b67f-67d9-47e9-9e69-8c9b0a9e2c98'
         */
        public ?string $id = null,

        /**
         * @var string|null The user's username (optional).
         */
        public ?string $username = null,

        /**
         * @var bool|null Whether the user is enabled or not (optional).
         */
        public ?bool $enabled = null,

        /**
         * @var string|null The user's email address (optional).
         */
        public ?string $email = null,

        /**
         * @var bool|null Whether the user's email is verified (optional).
         */
        public ?bool $emailVerified = null,

        /**
         * @var string|null The user's first name (optional).
         */
        public ?string $firstName = null,

        /**
         * @var string|null The user's last name (optional).
         */
        public ?string $lastName = null,

        /**
         * @var array|null An array of user attributes (optional).
         * @example ['phone' => '1234567890', 'address' => '123 Baghdad St']
         */
        public ?array $attributes = null,

        /**
         * @var CredentialRepresentation[]|null The user's credentials (optional).
         */
        public ?array $credentials = null,

        /**
         * @var UserActionType[]|null A list of actions required by the user on the next login (optional).
         * @example ['UPDATE_PASSWORD']
         */
        public ?array $requiredActions = null,

        /**
         * @var array|null A list of groups the user belongs to (optional).
         * @example ['/developers', '/admin']
         */
        public ?array $groups = null,

        /**
         * @var array|null A list of realm roles assigned to the user (optional).
         * @example ['offline_access', 'uma_authorization']
         */
        public ?array $realmRoles = null,

        /**
         * @var array|null Federated identities associated with the user from external identity providers (optional).
         * @example [['identityProvider' => 'google', 'userId' => '1234567890', 'userName' => 'googleuser@example.com']]
         */
        public ?array $federatedIdentities = null,

        /**
         * @var array|null A list of client roles assigned to the user (optional).
         * @example ['client-id' => ['role1', 'role2']]
         */
        public ?array $clientRoles = null,

        /**
         * @var array|null Types of credentials that are disabled for the user (optional).
         * @example ['password', 'otp']
         */
        public ?array $disableableCredentialTypes = null,

        /**
         * @var array|null Access level control for the user (optional).
         * @example ['manageGroupMembership' => true, 'view' => true, 'mapRoles' => true, 'impersonate' => false]
         */
        public ?array $access = null,

        /**
         * @var array|null The user's profile metadata (optional).
         */
        public ?array $userProfileMetadata = null,

        /**
         * @var int|null The timestamp when the user was created (optional).
         * @example 1631234567
         */
        public ?int $createdTimestamp = null,

        /**
         * @var array|null A list of application roles assigned to the user (optional).
         * @deprecated
         */
        public ?array $applicationRoles = null,

        /**
         * @var array|null A list of social links associated with the user (optional).
         * @deprecated
         */
        public ?array $socialLinks = null,

        /**
         * @var bool|null Whether the user has time-based OTP enabled (optional).
         * @example false
         */
        public ?bool $totp = null,

        /**
         * @var string|null The client ID for the service account associated with the user (optional).
         */
        public ?string $serviceAccountClientId = null,

        /**
         * @var array|null A list of client consents granted by the user (optional).
         */
        public ?array $clientConsents = null,

        /**
         * @var int|null The "not before" timestamp for the user (optional).
         * @example 1627683600
         */
        public ?int $notBefore = null,

        /**
         * @var string|null The self-link for the user (optional).
         */
        public ?string $self = null,

        /**
         * @var string|null The origin of the user (optional).
         */
        public ?string $origin = null,
    ){}
}
