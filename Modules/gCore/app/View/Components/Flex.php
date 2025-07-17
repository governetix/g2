<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class Flex extends Component
{
    public $direction; // 'row', 'column', 'row-reverse', 'column-reverse'
    public $justify;   // 'flex-start', 'flex-end', 'center', 'space-between', 'space-around', 'space-evenly'
    public $align;     // 'flex-start', 'flex-end', 'center', 'baseline', 'stretch'
    public $wrap;      // 'nowrap', 'wrap', 'wrap-reverse'
    public $gap;       // e.g., '10px', '1rem'
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $direction CSS flex-direction value.
     * @param string $justify CSS justify-content value.
     * @param string $align CSS align-items value.
     * @param string $wrap CSS flex-wrap value.
     * @param string $gap CSS gap value.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct($direction = 'row', $justify = 'flex-start', $align = 'stretch', $wrap = 'nowrap', $gap = '0', $class = '', $style = '')
    {
        $this->direction = $direction;
        $this->justify = $justify;
        $this->align = $align;
        $this->wrap = $wrap;
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
        return view('gcore::components.flex');
    }
}
