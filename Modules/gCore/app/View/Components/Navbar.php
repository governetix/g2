<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $brand; // Text or HTML for branding/logo
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $brand The brand text or HTML.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct($brand = 'Navbar', $class = '', $style = '')
    {
        $this->brand = $brand;
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
        return view('gcore::components.navbar');
    }
}
