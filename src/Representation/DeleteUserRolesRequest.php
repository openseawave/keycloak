<?php

declare(strict_types=1);

namespace OpenSeaWave\Keycloak\Representation;

/**
 * DeleteUserRolesRequest data transfer object class.
 *
 * @author  Omar Haris
 */
class DeleteUserRolesRequest extends Representation
{
    /**
     * DeleteUserRolesRequest constructor.
     *
     * @param  RoleRepresentation[]  $roles  An array of RoleRepresentation objects to remove from the user.
     */
    public function __construct(
        /**
         * @var RoleRepresentation[] A list of role representations to remove from the user.
         */
        public array $roles
    ) {}
}
