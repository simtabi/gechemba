<?php

namespace Simtabi\Gechemba\Traits;

trait WithRequired
{
    public function required($required = true)
    {
        $this->attrs['required'] = $required;

        return $this;
    }
}