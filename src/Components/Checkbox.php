<?php

namespace Simtabi\Gechemba\Components;

use Simtabi\Gechemba\Traits\WithDisabled;
use Simtabi\Gechemba\Traits\WithHelp;
use Simtabi\Gechemba\Traits\WithModel;
use Simtabi\Gechemba\Traits\WithPrefix;
use Simtabi\Gechemba\Traits\WithSwitch;
use Illuminate\View\Component;

class Checkbox extends Component
{
    use WithPrefix, WithSwitch, WithHelp, WithModel, WithDisabled;

    public $props = [];
    public $attrs = [];

    public static function make($name, $label)
    {
        $component = new static();

        $component->props = [
            'name' => $name,
            'label' => $label,
            'prefix' => null,
            'switch' => false,
            'help' => null,
            'model' => '.defer',
        ];

        $component->attrs = [
            'type' => 'checkbox',
            'disabled' => false,
        ];

        return $component;
    }

    public function render()
    {
        return view('gechemba::checkbox');
    }
}
