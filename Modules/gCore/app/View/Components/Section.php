<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class Section extends Component
{
    public $title;
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $title Optional title for the section.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct($title = '', $class = '', $style = '')
    {
        $this->title = $title;
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
        return view('gcore::components.section');
    }
}
