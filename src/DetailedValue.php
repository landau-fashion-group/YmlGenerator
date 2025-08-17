<?php

namespace Bukashk0zzz\YmlGenerator;

class DetailedValue
{
    /**
     * @var string
     */
    private $value;

    /**
     * @var array
     */
    private $attributes;

    public function __construct($value, $attributes = [])
    {
        $this->value = $value;

        if (!is_array($attributes)) {
            throw new \InvalidArgumentException('Attributes must be an array');
        }

        $this->attributes = $attributes;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
}
