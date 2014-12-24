<?php

namespace Butterfly\Component\Transform\Type;

use Butterfly\Component\Transform\ITransformer;

class ToInt implements ITransformer
{
    /**
     * @param mixed $value
     * @return int
     */
    public function transform($value)
    {
        return (int)$value;
    }
}
