<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    public $name;
    public $type;
    public $placeholder;
    public $id;
    public $label;

    public function __construct($name, $type = 'text', $placeholder = '', $id = null, $label = null)
    {
        $this->name = $name;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->id = $id ?? $name;
        $this->label = $label ?? $name;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-field');
    }
}
