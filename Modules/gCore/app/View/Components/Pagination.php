<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class Pagination extends Component
{
    public $paginator; // Laravel Paginator instance
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param \Illuminate\Pagination\LengthAwarePaginator|\Illuminate\Pagination\Paginator $paginator The paginator instance.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct($paginator, $class = '', $style = '')
    {
        $this->paginator = $paginator;
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
        return view('gcore::components.pagination');
    }
}
