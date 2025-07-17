<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;    // 'info', 'success', 'warning', 'danger'
    public $message;
    public $dismissible; // boolean
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $type The type of alert (determines color).
     * @param string $message The message content.
     * @param bool $dismissible Whether the alert can be dismissed.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct(
        $type = 'info',
        $message = '',
        $dismissible = false,
        $class = '',
        $style = ''
    ) {
        $this->type = $type;
        $this->message = $message;
        $this->dismissible = $dismissible;
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
        return view('gcore::components.alert');
    }
}
