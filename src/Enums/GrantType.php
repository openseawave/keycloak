<?php

namespace OpenSeaWave\Keycloak\Enums;

/**
 * Class GrantType
 *
 * @author  Omar Haris
 */
enum GrantType: string
{
    /**
     * Password grant type
     */
    case PASSWORD = 'password';

    /**
     * Authorization code grant type
     */
    case CLIENT_CREDENTIALS = 'client_credentials';

    /**
     * Retrieve a GrantType instance from its name.
     *
     * @param  string  $name  The name of the grant type.
     * @return GrantType The corresponding GrantType instance.
     */
    public static function fromName(string $name): GrantType
    {
        return constant("self::$name");
    }
}
