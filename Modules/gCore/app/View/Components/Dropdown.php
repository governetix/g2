<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class Dropdown extends Component
{
    public $label; // Text for the dropdown toggle button
    public $align; // 'left', 'right'
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $label The text for the dropdown toggle button.
     * @param string $align The alignment of the dropdown menu ('left' or 'right').
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct($label = 'Dropdown', $align = 'left', $class = '', $style = '')
    {
        $this->label = $label;
        $this->align = $align;
        $this->class = $class;
        $this->style = $style;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('gcore::components.dropdown');
    }
}