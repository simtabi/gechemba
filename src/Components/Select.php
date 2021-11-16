<?php

namespace Simtabi\Gechemba\Components;

use Simtabi\Gechemba\Traits\WithDisabled;
use Simtabi\Gechemba\Traits\WithHelp;
use Simtabi\Gechemba\Traits\WithModel;
use Simtabi\Gechemba\Traits\WithOptions;
use Simtabi\Gechemba\Traits\WithPrefix;
use Simtabi\Gechemba\Traits\WithSizing;
use Illuminate\View\Component;

class Select extends Component
{
    use WithPrefix, WithOptions, WithSizing, WithHelp, WithModel, WithDisabled;

    public $props = [];
    public $attrs = [];

    public static function make($name, $label = null)
    {
        $component = new static();

        $component->props = [
            'name' => $name,
            'label' => $label,
            'prefix' => null,
            'placeholder' => null,
            'options' => [],
            'small' => false,
            'large' => false,
            'help' => null,
            'model' => '.defer',
        ];

        $component->attrs = [
            'disabled' => false,
        ];

        return $component;
    }

    public function placeholder($placeholder)
    {
        $this->props['placeholder'] = $placeholder;

        return $this;
    }

    public function render()
    {
        return view('gechemba::select');
    }
}
