<?php

namespace Simtabi\Gechemba\Components;

use Simtabi\Gechemba\Traits\WithDisabled;
use Simtabi\Gechemba\Traits\WithHelp;
use Illuminate\View\Component;

class Arrayable extends Component
{
    use WithHelp, WithDisabled;

    public $props = [];
    public $attrs = [];

    public static function make($name, $label = null)
    {
        $component = new static();

        $component->props = [
            'name' => $name,
            'label' => $label,
            'fields' => [],
            'help' => null,
        ];

        $component->attrs = [
            'disabled' => false,
        ];

        return $component;
    }

    public function fields($fields = [])
    {
        $this->props['fields'] = $fields;

        return $this;
    }

    public function render()
    {
        return view('gechemba::arrayable');
    }
}
