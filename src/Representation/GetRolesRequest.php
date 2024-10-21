<?php

namespace OpenSeaWave\Keycloak\Representation;

/**
 * Class GetRolesRequest
 *
 * @author  Omar Haris
 */
class GetRolesRequest extends Representation
{
    /*
     * GetRolesRequest constructor.
     *
     * @param bool|null $briefRepresentation The brief representation of the roles.
     * @param int|null $first The first result to retrieve.
     * @param int|null $max The maximum number of results to retrieve.
     * @param string|null $search The search string to filter the results.
     */
    public function __construct(
        public ?bool $briefRepresentation = false,
        public ?int $first = null,
        public ?int $max = null,
        public ?string $search = null,
    ) {}
}
