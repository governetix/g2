<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class Blockquote extends Component
{
    public $cite;
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $cite Optional source of the quotation.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct($cite = '', $class = '', $style = '')
    {
        $this->cite = $cite;
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
        return view('gcore::components.blockquote');
    }
}
