<?php

declare(strict_types=1);

namespace OpenSeaWave\Keycloak\Representation;

/**
 * CreateRoleRequest data transfer object class.
 *
 * @package OpenSeaWave\Keycloak
 * @author  Omar Haris
 */
class CreateRoleRequest extends Representation
{
    /**
     * CreateRoleRequest constructor.
     *
     * @param string|null $id The unique identifier of the role.
     * @param string $name The name of the role.
     * @param string|null $description The description of the role.
     * @param bool|null $composite Whether the role is composite.
     * @param bool|null $clientRole Whether the role is a client role.
     * @param string|null $containerId The container ID of the role.
     */
    public function __construct(
        /**
         * @var string The name of the role (required).
         */
        public string $name,

        /**
         * @var string|null The unique identifier of the role (optional).
         * @example 'c1e9b67f-67d9-47e9-9e69-8c9b0a9e2c98'
         */
        public ?string $id = null,

        /**
         * @var string|null A description of the role (optional).
         */
        public ?string $description = null,

        /**
         * @var bool|null Whether the role is a default role (optional).
         * @deprecated
         */
        public ?bool $scopeParamRequired = null,

        /**
         * @var bool|null Whether the role is a composite role (optional).
         */
        public ?bool $composite = null,

        /**
         * @var CompositesRepresentation|null A list of composite roles if this role is a composite (optional).
         */
        public ?CompositesRepresentation $composites = null,

        /**
         * @var bool|null Whether the role is a client role (optional).
         */
        public ?bool $clientRole = null,

        /**
         * @var string|null The client ID of the client that the role belongs to (optional).
         * @example 'c1e9b67f-67d9-47e9-9e69-8c9b0a9e2c98'
         */
        public ?string $containerId = null,

        /**
         * @var array|null A list of attributes associated with the role (optional).
         */
        public ?array $attributes = null,
    ){}
}
