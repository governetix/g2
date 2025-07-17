<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class ProgressBar extends Component
{
    public $value; // Current progress value (0-100)
    public $max;   // Max value (default 100)
    public $variant; // 'primary', 'success', 'warning', 'danger', 'info'
    public $striped; // boolean
    public $animated; // boolean
    public $showLabel; // boolean
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param int $value The current progress value.
     * @param int $max The maximum value.
     * @param string $variant The visual variant of the progress bar.
     * @param bool $striped Whether the progress bar is striped.
     * @param bool $animated Whether the progress bar is animated.
     * @param bool $showLabel Whether to show the percentage label.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct(
        $value = 0,
        $max = 100,
        $variant = 'primary',
        $striped = false,
        $animated = false,
        $showLabel = false,
        $class = '',
        $style = ''
    ) {
        $this->value = $value;
        $this->max = $max;
        $this->variant = $variant;
        $this->striped = $striped;
        $this->animated = $animated;
        $this->showLabel = $showLabel;
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
        return view('gcore::components.progress-bar');
    }
}
