<?php

namespace Butterfly\Component\Transform\Type;

use Butterfly\Component\Transform\ITransformer;

class ToString implements ITransformer
{
    /**
     * @param mixed $value
     * @return string
     */
    public function transform($value)
    {
        return (string)$value;
    }
}
