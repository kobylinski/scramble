<?php

namespace Dedoc\Scramble\Support\Generator\Types;

class MixedType extends Type
{
    public function __construct()
    {
        parent::__construct('mixed');
    }

    public function toArray()
    {
        return [];
    }
}