<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class Divider extends Component
{
    public $orientation; // 'horizontal' or 'vertical'
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $orientation The orientation of the divider ('horizontal' or 'vertical').
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct($orientation = 'horizontal', $class = '', $style = '')
    {
        $this->orientation = $orientation;
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
        return view('gcore::components.divider');
    }
}
