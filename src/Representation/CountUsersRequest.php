<?php

declare(strict_types=1);

namespace OpenSeaWave\Keycloak\Representation;

/**
 * CountUsersRequest data transfer object class.
 *
 * @author  Omar Haris
 */
class CountUsersRequest extends Representation
{
    /**
     *  CountUsersRequest constructor.
     *
     * @param  string|null  $email  Filter users by email address.
     * @param  bool|null  $emailVerified  Filter users by whether their email has been verified.
     * @param  bool|null  $enabled  Filter users based on whether they are enabled or disabled.
     * @param  string|null  $firstName  Filter users by their first name.
     * @param  string|null  $lastName  Filter users by their last name.
     * @param  string|null  $q  A general search filter applied across multiple fields such as username, firstName, lastName, and email.
     * @param  string|null  $search  A search string applied to fields such as username, firstName, lastName, or email.
     * @param  string|null  $username  Filter users by their username.
     * @param  bool|null  $briefRepresentation  If true, returns only basic user information.
     * @param  int|null  $first  The starting index of the result set (for pagination).
     * @param  int|null  $max  The maximum number of results to return (for pagination).
     */
    public function __construct(
        /**
         * Filter users by email address.
         *
         * @var string|null Filter users by email address.
         */
        public ?string $email = null,

        /**
         * Filter users by whether their email has been verified.
         *
         * @var bool|null Filter users by whether their email has been verified.
         */
        public ?bool $emailVerified = null,

        /**
         * Filter users based on whether they are enabled or disabled.
         *
         * @var bool|null Filter users based on whether they are enabled or disabled.
         */
        public ?bool $enabled = null,

        /**
         * Filter users by their first name.
         *
         * @var string|null Filter users by their first name.
         */
        public ?string $firstName = null,

        /**
         * Filter users by their last name.
         *
         * @var string|null Filter users by their last name.
         */
        public ?string $lastName = null,

        /**
         * A general search filter applied across multiple fields such as username, firstName, lastName, and email.
         *
         * @var string|null A general search filter applied across multiple fields such as username, firstName, lastName, and email.
         */
        public ?string $q = null,

        /**
         * A search string applied to fields such as username, firstName, lastName, or email.
         *
         * @var string|null A search string applied to fields such as username, firstName, lastName, or email.
         *                  Default search behavior is prefix-based (e.g., foo or foo*). Use *foo* for infix search and "foo" for exact search.
         */
        public ?string $search = null,

        /**
         * Filter users by their username.
         *
         * @var string|null Filter users by their username.
         */
        public ?string $username = null,

        /**
         * If true, returns only basic user information.
         *
         * @var bool|null If true, returns only basic user information.
         */
        public ?bool $briefRepresentation = null,

        /**
         * The starting index of the result set (for pagination).
         *
         * @var int|null The starting index of the result set (for pagination).
         */
        public ?int $first = null,

        /**
         * The maximum number of results to return (for pagination).
         *
         * @var int|null The maximum number of results to return (for pagination).
         */
        public ?int $max = null,
    ) {}
}
