<?php

declare(strict_types=1);

namespace OpenSeaWave\Keycloak\Representation;

use OpenSeaWave\Keycloak\Enums\CredentialType;

/**
 * CredentialRepresentation data transfer object class.
 *
 * @package OpenSeaWave\Keycloak\Representation
 * @author  Omar Haris
 */
class CredentialRepresentation extends Representation
{
    /**
     * CredentialRepresentation constructor.
     *
     * @param string|null $id The unique ID of the credential.
     * @param CredentialType|null $type The type of the credential (e.g., '
     * @param string|null $userLabel The user-defined label for the credential.
     * @param int|null $createdDate The date the credential was created (in milliseconds since epoch).
     * @param string|null $secretData Secret data for the credential (optional).
     * @param string|null $credentialData CredentialRepresentation data for the credential (optional).
     * @param int|null $priority The priority of the credential.
     * @param string|null $value The value for the credential.
     * @param bool|null $temporary Whether the credential is temporary.
     * @param string|null $device The device associated with the credential (deprecated).
     * @param string|null $hashedSaltedValue The hashed salted value (deprecated).
     * @param string|null $salt The salt for hashing (deprecated).
     * @param int|null $hashIterations The number of hash iterations (deprecated).
     * @param int|null $counter The counter for the credential (deprecated).
     * @param string|null $algorithm The algorithm used (deprecated).
     * @param int|null $digits The number of digits (deprecated).
     * @param int|null $period The time period (deprecated).
     * @param array|null $config Configuration object for the credential (deprecated).
     */
    public function __construct(
        /**
         * @var string|null The unique ID of the credential.
         * @example 'c1e9b67f-67d9-47e9-9e69-8c9b0a9e2c98'
         */
        public ?string $id = null,

    /**
     * @var CredentialType|null The type of the credential (e.g., 'password', 'otp', 'secret').
     */
    public ?CredentialType $type = null,

    /**
     * @var string|null The user-defined label for the credential.
     */
    public ?string $userLabel = null,

    /**
     * @var int|null The date the credential was created (in milliseconds since epoch).
     */
    public ?int $createdDate = null,

    /**
     * @var string|null Secret data for the credential (optional).
     */
    public ?string $secretData = null,

    /**
     * @var string|null CredentialRepresentation data for the credential (optional).
     */
    public ?string $credentialData = null,

    /**
     * @var int|null The priority of the credential.
     */
    public ?int $priority = null,

    /**
     * @var string|null The value for the credential.
     */
    public ?string $value = null,

    /**
     * @var bool|null Whether the credential is temporary.
     */
    public ?bool $temporary = null,

    // Deprecated fields are included for backward compatibility.
    /**
     * @var string|null The device associated with the credential (deprecated).
     * @deprecated
     */
    public ?string $device = null,

    /**
     * @var string|null The hashed salted value (deprecated).
     * @deprecated
     */
    public ?string $hashedSaltedValue = null,

    /**
     * @var string|null The salt for hashing (deprecated).
     * @deprecated
     */
    public ?string $salt = null,

    /**
     * @var int|null The number of hash iterations (deprecated).
     * @deprecated
     */
    public ?int $hashIterations = null,

    /**
     * @var int|null The counter for the credential (deprecated).
     * @deprecated
     */
    public ?int $counter = null,

    /**
     * @var string|null The algorithm used (deprecated).
     * @deprecated
     */
    public ?string $algorithm = null,

    /**
     * @var int|null The number of digits (deprecated).
     * @deprecated
     */
    public ?int $digits = null,

    /**
     * @var int|null The time period (deprecated).
     * @deprecated
     */
    public ?int $period = null,

    /**
     * @var array|null Configuration object for the credential (deprecated).
     * @deprecated
     */
    public ?array $config = null,
    ){}
}
