<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class InfoBox extends Component
{
    public $type;    // 'info', 'success', 'warning', 'error'
    public $title;
    public $message;
    public $icon;    // Font Awesome icon class, e.g., 'fas fa-info-circle'
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $type The type of info box (determines color/icon).
     * @param string $title The title of the info box.
     * @param string $message The message content.
     * @param string $icon Optional icon class.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct($type = 'info', $title = '', $message = '', $icon = '', $class = '', $style = '')
    {
        $this->type = $type;
        $this->title = $title;
        $this->message = $message;
        $this->icon = $icon;
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
        return view('gcore::components.info-box');
    }
}
