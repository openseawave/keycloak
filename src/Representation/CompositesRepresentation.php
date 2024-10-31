<?php

declare(strict_types=1);

namespace OpenSeaWave\Keycloak\Representation;

/**
 * CompositesRepresentation data transfer object class.
 *
 * @author  Omar Haris
 */
class CompositesRepresentation extends Representation
{
    public function __construct(
        /**
         * @var string[]|null A list of realm-level roles.
         *
         * @example ['admin', 'user', 'manager']
         */
        public ?array $realm = null,

        /**
         * @var array|null A mapping of client IDs to an array of client-level roles.
         *                 Each client ID maps to a list of role names.
         *
         * @example ['client-id-1' => ['role1', 'role2'], 'client-id-2' => ['role3']]
         */
        public ?array $client = null,

        /**
         * @var array|null A mapping of application IDs to an array of application-level roles (deprecated).
         *                 Each application ID maps to a list of role names.
         *
         * @example ['app-id-1' => ['app-role1', 'app-role2']]
         *
         * @deprecated
         */
        public ?array $application = null,
    ) {}
}
