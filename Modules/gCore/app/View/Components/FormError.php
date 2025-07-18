<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class FormError extends Component
{
    public $messages;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($messages = [])
    {
        $this->messages = (array) $messages;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('gcore::components.form-error');
    }
}
