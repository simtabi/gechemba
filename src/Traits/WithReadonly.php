<?php

namespace Simtabi\Gechemba\Traits;

trait WithReadonly
{
    public function readonly($readonly = true)
    {
        $this->attrs['readonly'] = $readonly;

        return $this;
    }
}
