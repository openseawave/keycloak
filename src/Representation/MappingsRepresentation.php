<?php

declare(strict_types=1);

namespace OpenSeaWave\Keycloak\Representation;

/**
 * MappingsRepresentation data transfer object class.
 *
 * @author  Omar Haris
 */
class MappingsRepresentation extends Representation
{
    /**
     * MappingsRepresentation constructor.
     *
     * @param  RoleRepresentation[]  $realmMappings  A list of realm roles associated with the client (optional).
     * @param  ClientMappingsRepresentation[]  $clientMappings  A list of client roles associated with the client (optional).
     */
    public function __construct(
        public ?array $realmMappings = null,
        public ?array $clientMappings = null,
    ) {}
}
