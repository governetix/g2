<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class FormCheckbox extends Component
{
    public $name;
    public $id;
    public $label;
    public $checked;
    public $disabled;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $id = null, $label = '', $checked = false, $disabled = false)
    {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->label = $label;
        $this->checked = $checked;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('gcore::components.form-checkbox');
    }
}
