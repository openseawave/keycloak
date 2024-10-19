<?php

namespace OpenSeaWave\Keycloak\Enums;

/**
 * UserActionType enum class.
 *
 * @package OpenSeaWave\Keycloak\Enums
 * @author  Omar Haris
 */
enum UserActionType: string
{
    /**
     *  Update password action type.
     *
     * The user must verify their email address.
     */
    case UPDATE_PASSWORD = 'UPDATE_PASSWORD';

    /**
     *  Verify email action type.
     *
     * The user must verify their email address.
     */
    case VERIFY_EMAIL = 'VERIFY_EMAIL';

    /**
     *  Update profile action type.
     *
     * The user must update their profile.
     */
    case UPDATE_PROFILE = 'UPDATE_PROFILE';

    /**
     *  Configure TOTP action type.
     *
     * The user must configure TOTP.
     */
    case CONFIGURE_TOTP = 'CONFIGURE_TOTP';
}
