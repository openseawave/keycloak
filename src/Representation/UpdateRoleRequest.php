<?php

declare(strict_types=1);

namespace OpenSeaWave\Keycloak\Representation;

/**
 * UpdateRoleRequest data transfer object class.
 *
 * @author  Omar Haris
 */
class UpdateRoleRequest extends Representation
{
    /**
     * UpdateRoleRequest constructor.
     *
     * @param  string|null  $name  The new name of the role (optional).
     * @param  string|null  $description  A new description of the role (optional).
     * @param  bool|null  $composite  Whether the role is a composite role (optional).
     * @param  array|null  $composites  A list of composite roles if this role is a composite (optional).
     */
    public function __construct(
        /**
         * @var string|null The ID of the role to update.
         */
        public ?string $id = null,

        /**
         * @var string|null The new name of the role (optional).
         */
        public ?string $name = null,

        /**
         * @var string|null A new description of the role (optional).
         */
        public ?string $description = null,

        /**
         * @var bool|null Whether the role is a composite role (optional).
         */
        public ?bool $composite = null,

        /**
         * @var array|null A list of composite roles if this role is a composite (optional).
         */
        public ?array $composites = null,

        /**
         * @var bool|null Whether the role is a client role (optional).
         */
        public ?bool $clientRole = null,

        /**
         * @var string|null The ID of the client to which the role belongs (optional).
         */
        public ?string $containerId = null,

        /**
         * @var array|null A list of attributes for the role (optional).
         */
        public ?array $attributes = null,
    ) {}
}
