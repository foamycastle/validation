<?php

namespace Foamycastle\Tools;

abstract class Validation
{
    abstract public function validate($rules):bool;
}