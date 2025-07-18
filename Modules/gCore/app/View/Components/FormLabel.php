<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class FormLabel extends Component
{
    public $for;
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($for = null, $value = null)
    {
        $this->for = $for;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('gcore::components.form-label');
    }
}
