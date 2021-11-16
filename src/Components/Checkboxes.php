<?php

namespace Simtabi\Gechemba\Components;

use Simtabi\Gechemba\Traits\WithDisabled;
use Simtabi\Gechemba\Traits\WithHelp;
use Simtabi\Gechemba\Traits\WithModel;
use Simtabi\Gechemba\Traits\WithOptions;
use Simtabi\Gechemba\Traits\WithPrefix;
use Simtabi\Gechemba\Traits\WithSwitch;
use Illuminate\View\Component;

class Checkboxes extends Component
{
    use WithPrefix, WithOptions, WithSwitch, WithHelp, WithModel, WithDisabled;

    public $props = [];
    public $attrs = [];

    public static function make($name, $label = null)
    {
        $component = new static();

        $component->props = [
            'name' => $name,
            'label' => $label,
            'prefix' => null,
            'options' => [],
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
        return view('gechemba::checkboxes');
    }
}
