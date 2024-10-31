<?php

declare(strict_types=1);

namespace OpenSeaWave\Keycloak\Representation;

/**
 * RoleRepresentation data transfer object class.
 *
 * @author  Omar Haris
 */
class RoleRepresentation extends Representation
{
    /**
     * RoleRepresentation constructor.
     *
     * @param  string  $id  The unique ID of the role.
     * @param  string  $name  The name of the role.
     * @param  string|null  $description  A description of the role.
     * @param  bool|null  $scopeParamRequired  Whether the role is a default role.
     * @param  bool|null  $composite  Whether the role is a composite role.
     * @param  CompositesRepresentation|null  $composites  A list of composite roles if this role is a composite.
     * @param  bool|null  $clientRole  Whether the role is a client role.
     * @param  string|null  $containerId  The client ID of the client that the role belongs to.
     * @param  array|null  $attributes  A list of attributes associated with the role.
     */
    public function __construct(
        /**
         * @var string The unique ID of the role.
         *
         * @example 'b8f2d5a1-d123-4567-a456-426614174000'
         */
        public string $id,

        /**
         * @var string The name of the role.
         */
        public string $name,

        /**
         * @var string|null A description of the role.
         */
        public ?string $description = null,

        /**
         * @var bool|null Whether the role is a default role.
         *
         * @deprecated
         */
        public ?bool $scopeParamRequired = null,

        /**
         * @var bool|null Whether the role is a composite role.
         */
        public ?bool $composite = null,

        /**
         * @var CompositesRepresentation|null A list of composite roles if this role is a composite.
         */
        public ?CompositesRepresentation $composites = null,

        /**
         * @var bool|null Whether the role is a client role.
         */
        public ?bool $clientRole = null,

        /**
         * @var string|null The client ID of the client that the role belongs to.
         *
         * @example 'b8f2d5a1-d123-4567-a456-426614174000'
         */
        public ?string $containerId = null,

        /**
         * @var array|null A list of attributes associated with the role.
         */
        public ?array $attributes = null,
    ) {}
}
