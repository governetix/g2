<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class EmptyState extends Component
{
    public $title;
    public $message;
    public $icon; // Font Awesome icon class
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $title The title for the empty state.
     * @param string $message The message content.
     * @param string $icon Optional icon class.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct(
        $title = 'No Data Available',
        $message = 'There is no content to display yet.',
        $icon = 'fas fa-box-open',
        $class = '',
        $style = ''
    ) {
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
        return view('gcore::components.empty-state');
    }
}
