<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class FormRadio extends Component
{
    public $name;
    public $id;
    public $value;
    public $label;
    public $checked;
    public $disabled;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $id, $value, $label = '', $checked = false, $disabled = false)
    {
        $this->name = $name;
        $this->id = $id;
        $this->value = $value;
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
        return view('gcore::components.form-radio');
    }
}
