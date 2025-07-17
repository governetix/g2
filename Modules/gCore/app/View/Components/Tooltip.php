<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class Tooltip extends Component
{
    public $text;
    public $position; // 'top', 'bottom', 'left', 'right'
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $text The text content of the tooltip.
     * @param string $position The position of the tooltip relative to its trigger.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct($text = '', $position = 'top', $class = '', $style = '')
    {
        $this->text = $text;
        $this->position = $position;
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
        return view('gcore::components.tooltip');
    }
}
