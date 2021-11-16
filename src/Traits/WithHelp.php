<?php

namespace Simtabi\Gechemba\Traits;

trait WithHelp
{
    public function help($help)
    {
        $this->props['help'] = $help;

        return $this;
    }
}
