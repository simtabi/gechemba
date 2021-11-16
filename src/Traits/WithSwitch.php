<?php

namespace Simtabi\Gechemba\Traits;

trait WithSwitch
{
    public function switch()
    {
        $this->props['switch'] = true;

        return $this;
    }
}
