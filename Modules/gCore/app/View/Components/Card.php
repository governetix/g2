<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $header;
    public $footer;
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $title Optional title for the card.
     * @param string $header Optional content for the card header.
     * @param string $footer Optional content for the card footer.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct($title = '', $header = '', $footer = '', $class = '', $style = '')
    {
        $this->title = $title;
        $this->header = $header;
        $this->footer = $footer;
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
        return view('gcore::components.card');
    }
}
