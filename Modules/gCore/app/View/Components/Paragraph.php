<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class Paragraph extends Component
{
    public $text;
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $text The text content of the paragraph.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct($text = '', $class = '', $style = '')
    {
        $this->text = $text;
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
        return view('gcore::components.paragraph');
    }
}
