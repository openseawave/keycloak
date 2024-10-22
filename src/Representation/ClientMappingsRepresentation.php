<?php

declare(strict_types=1);

namespace OpenSeaWave\Keycloak\Representation;

/**
 * ClientMappingsRepresentation data transfer object class.
 *
 * @author  Omar Haris
 */
class ClientMappingsRepresentation extends Representation
{
    /**
     * ClientMappingsRepresentation constructor.
     *
     * @param  string|null  $id  The ID of the client.
     * @param  string|null  $client  The client ID.
     * @param  array|null  $mappings  A list of mappings.
     */
    public function __construct(
        public ?string $id = null,
        public ?string $client = null,
        public ?array $mappings = null,
    ) {}
}
