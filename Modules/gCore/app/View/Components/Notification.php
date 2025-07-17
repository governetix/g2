<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class Notification extends Component
{
    public $type;    // 'info', 'success', 'warning', 'danger'
    public $message;
    public $title;
    public $position; // 'top-right', 'top-left', 'bottom-right', 'bottom-left'
    public $duration; // milliseconds, 0 for sticky
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $type The type of notification (determines color).
     * @param string $message The message content.
     * @param string $title Optional title for the notification.
     * @param string $position The position on the screen.
     * @param int $duration The duration in milliseconds before auto-hiding.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct(
        $type = 'info',
        $message = '',
        $title = '',
        $position = 'top-right',
        $duration = 5000,
        $class = '',
        $style = ''
    ) {
        $this->type = $type;
        $this->message = $message;
        $this->title = $title;
        $this->position = $position;
        $this->duration = $duration;
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
        return view('gcore::components.notification');
    }
}
