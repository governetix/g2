<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class Breadcrumbs extends Component
{
    public $links; // Array of links: [['url' => '/home', 'label' => 'Home'], ...]
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param array $links An array of breadcrumb links.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct($links = [], $class = '', $style = '')
    {
        $this->links = $links;
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
        return view('gcore::components.breadcrumbs');
    }
}
