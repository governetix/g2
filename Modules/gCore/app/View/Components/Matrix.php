<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class Matrix extends Component
{
    public $headers; // Array of column headers
    public $rows;    // Array of rows, where each row is ['row_header', 'value1', 'value2', ...]
    public $responsive; // boolean
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param array $headers An array of column headers (first element is usually empty for row headers).
     * @param array $rows An array of arrays for matrix data, including row headers.
     * @param bool $responsive Whether the matrix should be responsive (horizontal scroll).
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct(
        $headers = [],
        $rows = [],
        $responsive = false,
        $class = '',
        $style = ''
    ) {
        $this->headers = $headers;
        $this->rows = $rows;
        $this->responsive = $responsive;
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
        return view('gcore::components.matrix');
    }
}