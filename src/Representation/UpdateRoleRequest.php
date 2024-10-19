<?php

declare(strict_types=1);

namespace OpenSeaWave\Keycloak\Representation;

/**
 * UpdateRoleRequest data transfer object class.
 *
 * @package OpenSeaWave\Keycloak
 * @author  Omar Haris
 */
class UpdateRoleRequest extends Representation
{
    /**
     * UpdateRoleRequest constructor.
     *
     * @param string|null $name The new name of the role (optional).
     * @param string|null $description A new description of the role (optional).
     * @param bool|null $composite Whether the role is a composite role (optional).
     * @param array|null $composites A list of composite roles if this role is a composite (optional).
     */
    public function __construct(
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
    ){}
}
