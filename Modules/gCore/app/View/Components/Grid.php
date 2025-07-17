<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class Grid extends Component
{
    public $columns; // e.g., '2', '3', '1fr 1fr', 'repeat(auto-fit, minmax(200px, 1fr))'
    public $gap;     // e.g., '10px', '1rem', '20px 10px'
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $columns CSS grid-template-columns value.
     * @param string $gap CSS grid-gap value.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct($columns = '1fr', $gap = '20px', $class = '', $style = '')
    {
        $this->columns = $columns;
        $this->gap = $gap;
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
        return view('gcore::components.grid');
    }
}
