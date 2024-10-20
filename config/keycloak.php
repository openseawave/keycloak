<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Keycloak Base URL
    |--------------------------------------------------------------------------
    |
    | This value is the base URL of your Keycloak server. It should include
    | the protocol (http or https) and the domain or IP address where your
    | Keycloak instance is accessible.
    |
    */
    'base_url' => env('KEYCLOAK_BASE_URL','http://localhost:8080'),

    /*
    |--------------------------------------------------------------------------
    | Keycloak Username
    |--------------------------------------------------------------------------
    |
    | The username of the Keycloak user that will be used to authenticate with
    | the Keycloak API.
    |
    */
    'username' => env('KEYCLOAK_USERNAME','admin'),

    /*
    |--------------------------------------------------------------------------
    | Keycloak Password
    |--------------------------------------------------------------------------
    |
    | The password of the Keycloak user that will be used to authenticate to the
    | Keycloak API.
    |
    */
    'password' => env('KEYCLOAK_PASSWORD'),

    /*
    |--------------------------------------------------------------------------
    | Keycloak Realm
    |--------------------------------------------------------------------------
    |
    | The realm in Keycloak that you wish to interact with. Realms are isolated
    | partitions in Keycloak, and this setting specifies which realm your
    | application will communicate with.
    |
    */
    'realm' => env('KEYCLOAK_REALM','master'),

    /*
    |--------------------------------------------------------------------------
    | Keycloak Client ID
    |--------------------------------------------------------------------------
    |
    | The client ID registered with Keycloak for your application. This client
    | should have the appropriate roles and permissions set in your Keycloak
    | realm to allow API interactions.
    |
    */
    'client_id' => env('KEYCLOAK_CLIENT_ID','admin-cli'),

    /*
    |--------------------------------------------------------------------------
    | Keycloak Client Secret
    |--------------------------------------------------------------------------
    |
    | The client secret associated with the above client ID. This secret is used
    | for authenticating your application with Keycloak when obtaining tokens
    | and making API requests.
    |
    */
    'client_secret' => env('KEYCLOAK_CLIENT_SECRET'),

    /*
    |--------------------------------------------------------------------------
    | Keycloak Grant Type
    |--------------------------------------------------------------------------
    |
    | The grant type to use when authenticating with Keycloak. This value should
    | be set to 'password' if using the username and password authentication
    | method. Other grant types are available, such as 'client_credentials'.
    |
    */
    'grant_type' => env('KEYCLOAK_GRANT_TYPE','password'),
];
