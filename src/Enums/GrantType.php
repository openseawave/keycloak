<?php

namespace OpenSeaWave\Keycloak\Enums;

/**
 * Class GrantType
 *
 * @author  Omar Haris
 */
enum GrantType: string
{
    /*
     * Password grant type
     */
    case PASSWORD = 'password';

    /*
     * Authorization code grant type
     */
    case CLIENT_CREDENTIALS = 'client_credentials';
}
