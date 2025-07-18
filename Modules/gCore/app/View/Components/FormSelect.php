<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class FormSelect extends Component
{
    public $name;
    public $id;
    public $options;
    public $selected;
    public $required;
    public $disabled;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $id = null, $options = [], $selected = null, $required = false, $disabled = false)
    {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->options = $options;
        $this->selected = $selected;
        $this->required = $required;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('gcore::components.form-select');
    }
}
