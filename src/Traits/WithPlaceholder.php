<?php

namespace Simtabi\Gechemba\Traits;

trait WithPlaceholder
{
    public function placeholder($placeholder)
    {
        $this->attrs['placeholder'] = $placeholder;

        return $this;
    }
}
