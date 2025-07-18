<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class FormFileInput extends Component
{
    public $name;
    public $id;
    public $accept;
    public $multiple;
    public $disabled;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $id = null, $accept = '', $multiple = false, $disabled = false)
    {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->accept = $accept;
        $this->multiple = $multiple;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('gcore::components.form-file-input');
    }
}
