<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class FormTextarea extends Component
{
    public $name;
    public $id;
    public $value;
    public $placeholder;
    public $rows;
    public $required;
    public $disabled;
    public $readonly;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $id = null, $value = '', $placeholder = '', $rows = 3, $required = false, $disabled = false, $readonly = false)
    {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->rows = $rows;
        $this->required = $required;
        $this->disabled = $disabled;
        $this->readonly = $readonly;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('gcore::components.form-textarea');
    }
}

