<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class Spinner extends Component
{
    public $size; // 'sm', 'md', 'lg'
    public $color; // CSS color value or variable
    public $type; // 'border', 'grow'
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $size The size of the spinner.
     * @param string $color The color of the spinner.
     * @param string $type The type of spinner ('border' or 'grow').
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct(
        $size = 'md',
        $color = 'var(--color-primario)',
        $type = 'border',
        $class = '',
        $style = ''
    ) {
        $this->size = $size;
        $this->color = $color;
        $this->type = $type;
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
        return view('gcore::components.spinner');
    }
}
