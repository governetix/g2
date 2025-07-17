<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public $headers; // Array of header strings
    public $rows;    // Array of arrays for row data
    public $striped; // boolean
    public $bordered; // boolean
    public $hoverable; // boolean
    public $responsive; // boolean
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param array $headers An array of table headers.
     * @param array $rows An array of arrays for table row data.
     * @param bool $striped Whether the table rows should be striped.
     * @param bool $bordered Whether the table should have borders.
     * @param bool $hoverable Whether table rows should have hover effect.
     * @param bool $responsive Whether the table should be responsive (horizontal scroll).
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct(
        $headers = [],
        $rows = [],
        $striped = false,
        $bordered = false,
        $hoverable = false,
        $responsive = false,
        $class = '',
        $style = ''
    ) {
        $this->headers = $headers;
        $this->rows = $rows;
        $this->striped = $striped;
        $this->bordered = $bordered;
        $this->hoverable = $hoverable;
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
        return view('gcore::components.table');
    }
}