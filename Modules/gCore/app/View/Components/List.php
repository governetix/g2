<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class List extends Component
{
    public $type; // 'ul' or 'ol'
    public $items; // Array of list items
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $type The type of list ('ul' for unordered, 'ol' for ordered).
     * @param array $items An array of list items.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct($type = 'ul', $items = [], $class = '', $style = '')
    {
        $this->type = $type;
        $this->items = $items;
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
        return view('gcore::components.list');
    }
}
