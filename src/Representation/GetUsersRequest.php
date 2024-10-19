<?php

declare(strict_types=1);

namespace OpenSeaWave\Keycloak\Representation;

/**
 * GetUsersRequest data transfer object class.
 *
 * @author  Omar Haris
 */
class GetUsersRequest extends Representation
{
    /**
     * GetUsersRequest constructor.
     *
     * @param  bool|null  $briefRepresentation  Defines whether brief representations are returned.
     * @param  string|null  $email  A string contained in email, or the complete email, if 'exact' is true.
     * @param  bool|null  $emailVerified  Whether the email has been verified.
     * @param  bool|null  $enabled  Boolean representing if the user is enabled or not.
     * @param  bool|null  $exact  Defines whether 'firstName', 'lastName', 'email', and 'username' must match exactly.
     * @param  int|null  $first  Pagination offset.
     * @param  string|null  $firstName  A string contained in the first name, or the complete first name if 'exact' is true.
     * @param  string|null  $idpAlias  The alias of an Identity Provider linked to the user.
     * @param  string|null  $idpUserId  The userId at an Identity Provider linked to the user.
     * @param  string|null  $lastName  A string contained in the last name, or the complete last name if 'exact' is true.
     * @param  int|null  $max  Maximum results size (pagination).
     * @param  string|null  $q  A query to search for custom attributes, in the format 'key1:value1 key2:value2'.
     * @param  string|null  $search  A string contained in username, first name, last name, or email.
     * @param  string|null  $username  A string contained in the username, or the complete username if 'exact' is true.
     */
    public function __construct(
        /**
         *  Defines whether brief representations are returned.
         *
         * @var bool|null Defines whether brief representations are returned.
         */
        public ?bool $briefRepresentation = null,

        /**
         *  A string contained in email, or the complete email, if 'exact' is true.
         *
         * @var string|null A string contained in email, or the complete email, if 'exact' is true.
         */
        public ?string $email = null,

        /**
         *  Whether the email has been verified.
         *
         * @var bool|null Whether the email has been verified.
         */
        public ?bool $emailVerified = null,

        /**
         *  Boolean representing if the user is enabled or not.
         *
         * @var bool|null Boolean representing if the user is enabled or not.
         */
        public ?bool $enabled = null,

        /**
         *  Defines whether 'firstName', 'lastName', 'email', and 'username' must match exactly.
         *
         * @var bool|null Defines whether 'firstName', 'lastName', 'email', and 'username' must match exactly.
         */
        public ?bool $exact = null,

        /**
         *  Pagination offset.
         *
         * @var int|null Pagination offset.
         */
        public ?int $first = null,

        /**
         *  A string contained in the first name, or the complete first name if 'exact' is true.
         *
         * @var string|null A string contained in the first name, or the complete first name if 'exact' is true.
         */
        public ?string $firstName = null,

        /**
         *  The alias of an Identity Provider linked to the user.
         *
         * @var string|null The alias of an Identity Provider linked to the user.
         */
        public ?string $idpAlias = null,

        /**
         *  The userId at an Identity Provider linked to the user.
         *
         * @var string|null The userId at an Identity Provider linked to the user.
         */
        public ?string $idpUserId = null,

        /**
         *  A string contained in the last name, or the complete last name if 'exact' is true.
         *
         * @var string|null A string contained in the last name, or the complete last name if 'exact' is true.
         */
        public ?string $lastName = null,

        /**
         *  Maximum results size (pagination).
         *
         * @var int|null Maximum results size (pagination).
         */
        public ?int $max = null,

        /**
         *  A query to search for custom attributes, in the format 'key1:value1 key2:value2'.
         *
         * @var string|null A query to search for custom attributes, in the format 'key1:value1 key2:value2'.
         */
        public ?string $q = null,

        /**
         *  A string contained in username, first name, last name, or email.
         *
         * @var string|null A string contained in username, first name, last name, or email.
         *                  Default search behavior is prefix-based.
         */
        public ?string $search = null,

        /**
         *  A string contained in the username, or the complete username if 'exact' is true.
         *
         * @var string|null A string contained in the username, or the complete username if 'exact' is true.
         */
        public ?string $username = null,
    ) {}
}
