<?php

namespace App\Traits;
use Carbon\Carbon;
use Illuminate\Support\Collection;

trait ModelMethod
{
    /**
     * Get the primary key of the model.
     *
     * @return string
     */
    public function getPrimaryKey(): string
    {
        return $this->primaryKey;
    }

    /**
     * Get the filename where the model data is stored.
     *
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }

    /**
     * Get the attributes that should be cast to native types.
     *
     * @return array
     */
    public function getCasts(): array
    {
        return $this->casts;
    }


    /**
     * This method casts the attributes of the given item
     * based on the defined casts in the model.
     * It converts the values to their respective types
     * such as int, float, string, datetime, date, time,
     * boolean, array, object, json, or null.
     * 
     * @param object $item
     * @return object
     */
    protected function castAttributes(object $item): object
    {
        foreach ($this->casts as $key => $type) {

            if (!property_exists($item, $key)) {
                continue;
            }

            $value = $item->{$key};

            $item->{$key} = match ($type) {
                'int' => (int)$value,
                'float' => (float)$value,
                'double' => (double)$value,
                'string' => (string)$value,
                'datetime' => Carbon::parse($value),
                'date' => Carbon::parse($value)->toDateString(),
                'time' => Carbon::parse($value)->toTimeString(),
                'boolean' => (boolean)$value,
                'array' => is_array($value) ? $value : json_decode($value, true),
                'object' => is_object($value) ? $value : json_decode($value),
                'json' => is_string($value) ? json_decode($value, true) : $value,
                'null' => null,
                default => $value,
            };
        }
        return $item;
    }
}