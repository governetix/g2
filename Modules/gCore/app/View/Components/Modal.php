<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $id;
    public $title;
    public $size; // 'sm', 'md', 'lg', 'xl'
    public $backdrop; // boolean
    public $keyboard; // boolean
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $id The unique ID for the modal.
     * @param string $title The title of the modal header.
     * @param string $size The size of the modal.
     * @param bool $backdrop Whether to show a backdrop.
     * @param bool $keyboard Whether to close the modal with ESC key.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct(
        $id,
        $title = '',
        $size = 'md',
        $backdrop = true,
        $keyboard = true,
        $class = '',
        $style = ''
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->size = $size;
        $this->backdrop = $backdrop;
        $this->keyboard = $keyboard;
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
        return view('gcore::components.modal');
    }
}
