<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class FeatureGrid extends Component
{
    public $features; // Array of feature objects: [['icon' => 'fas fa-star', 'title' => 'Feature 1', 'description' => '...'], ...]
    public $columns; // Number of columns for the grid
    public $gap; // Gap between grid items
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param array $features An array of feature data.
     * @param int $columns Number of columns for the grid layout.
     * @param string $gap Gap between grid items (e.g., '20px', '1rem').
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct(
        $features = [],
        $columns = 3,
        $gap = '20px',
        $class = '',
        $style = ''
    ) {
        $this->features = $features;
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
        return view('gcore::components.feature-grid');
    }
}