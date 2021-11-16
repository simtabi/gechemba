<?php

namespace Simtabi\Gechemba\Components;

use Simtabi\Gechemba\Traits\WithDisabled;
use Simtabi\Gechemba\Traits\WithHelp;
use Simtabi\Gechemba\Traits\WithModel;
use Simtabi\Gechemba\Traits\WithPlaceholder;
use Simtabi\Gechemba\Traits\WithPrefix;
use Simtabi\Gechemba\Traits\WithReadonly;
use Simtabi\Gechemba\Traits\WithSizing;
use Illuminate\View\Component;

class Input extends Component
{
    use WithPrefix, WithSizing, WithHelp, WithModel, WithDisabled, WithReadonly, WithPlaceholder;

    public $props = [];
    public $attrs = [];

    public static function make($name, $label = null)
    {
        $component = new static();

        $component->props = [
            'name' => $name,
            'label' => $label,
            'prefix' => null,
            'append' => null,
            'prepend' => null,
            'plaintext' => false,
            'small' => false,
            'large' => false,
            'help' => null,
            'model' => '.defer',
        ];

        $component->attrs = [
            'type' => 'text',
            'inputmode' => 'text',
            'disabled' => false,
            'readonly' => false,
        ];

        return $component;
    }

    public function type($type)
    {
        $this->attrs['type'] = $type;

        if ($type == 'text') {
            $this->attrs['inputmode'] = 'text';
        } else if ($type == 'number') {
            $this->attrs['inputmode'] = 'numeric';
        } else if ($type == 'tel') {
            $this->attrs['inputmode'] = 'tel';
        } else if ($type == 'search') {
            $this->attrs['inputmode'] = 'search';
        } else if ($type == 'email') {
            $this->attrs['inputmode'] = 'email';
        } else if ($type == 'url') {
            $this->attrs['inputmode'] = 'url';
        }

        return $this;
    }

    public function append($append)
    {
        $this->props['append'] = $append;

        return $this;
    }

    public function prepend($prepend)
    {
        $this->props['prepend'] = $prepend;

        return $this;
    }

    public function plaintext($plaintext = true)
    {
        $this->props['plaintext'] = $plaintext;
        $this->attrs['readonly'] = $plaintext;

        return $this;
    }

    public function render()
    {
        return view('gechemba::input');
    }
}
