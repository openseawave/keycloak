<?php

declare(strict_types=1);

namespace OpenSeaWave\Keycloak\Representation;

/**
 * AddUserRolesRequest data transfer object class.
 *
 * @package OpenSeaWave\Keycloak
 * @author  Omar Haris
 */
class AddUserRolesRequest extends Representation
{
    /**
     * AddUserRolesRequest constructor.
     *
     * @param RoleRepresentation[] $roles An array of RoleRepresentation objects to assign to the user.
     */
    public function __construct(
        /**
         * @var RoleRepresentation[] A list of role representations to assign to the user.
         */
        public array $roles,
    ){}
}
