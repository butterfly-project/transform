<?php

namespace Butterfly\Component\Transform;

interface ITransformer
{
    /**
     * @param mixed $value
     * @return mixed
     * @throws \InvalidArgumentException if incorrect value type
     */
    public function transform($value);
}
