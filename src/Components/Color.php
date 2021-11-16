<?php

namespace Simtabi\Gechemba\Components;

use Simtabi\Gechemba\Traits\WithDisabled;
use Simtabi\Gechemba\Traits\WithHelp;
use Simtabi\Gechemba\Traits\WithModel;
use Simtabi\Gechemba\Traits\WithPrefix;
use Simtabi\Gechemba\Traits\WithReadonly;
use Simtabi\Gechemba\Traits\WithSizing;
use Illuminate\View\Component;

class Color extends Component
{
    use WithPrefix, WithSizing, WithHelp, WithModel, WithDisabled, WithReadonly;

    public $props = [];
    public $attrs = [];

    public static function make($name, $label = null)
    {
        $component = new static();

        $component->props = [
            'name' => $name,
            'label' => $label,
            'prefix' => null,
            'small' => false,
            'large' => false,
            'help' => null,
            'model' => '.defer',
        ];

        $component->attrs = [
            'type' => 'color',
            'disabled' => false,
            'readonly' => false,
        ];

        return $component;
    }

    public function render()
    {
        return view('gechemba::color');
    }
}
