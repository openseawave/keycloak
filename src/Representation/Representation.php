<?php

declare(strict_types=1);

namespace OpenSeaWave\Keycloak\Representation;

/**
 * Representation data transfer object class.
 *
 * @author  Omar Haris
 */
class Representation
{
    /**
     * Convert the Dto object to an associative array.
     */
    public function toArray(): array
    {
        $array = [];

        // Loop through all the properties of the object.
        foreach (get_object_vars($this) as $key => $value) {
            if (! is_null($value)) {
                $array[$key] = $this->optimize($value);
            }
        }

        // Remove all the null values from the array.
        return array_filter($array, function ($value) {
            return ! is_null($value);
        });
    }

    /**
     * Optimize the value for serialization.
     *
     * @param  mixed  $value  The value to optimize.
     */
    private function optimize(mixed $value): mixed
    {
        if (is_bool($value)) {
            return var_export($value, true);
        }

        return $value;
    }
}
