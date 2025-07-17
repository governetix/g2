<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class Kpi extends Component
{
    public $label;
    public $value;
    public $unit;
    public $icon;
    public $change;
    public $changeType; // 'positive', 'negative', 'neutral'
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $label The label for the KPI.
     * @param string $value The main value of the KPI.
     * @param string $unit Optional unit for the value (e.g., '%', '$').
     * @param string $icon Optional Font Awesome icon class (e.g., 'fas fa-chart-line').
     * @param string $change Optional change value (e.g., '+5%', '-2.1').
     * @param string $changeType Optional type of change for styling ('positive', 'negative', 'neutral').
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct(
        $label,
        $value,
        $unit = '',
        $icon = '',
        $change = '',
        $changeType = 'neutral',
        $class = '',
        $style = ''
    ) {
        $this->label = $label;
        $this->value = $value;
        $this->unit = $unit;
        $this->icon = $icon;
        $this->change = $change;
        $this->changeType = $changeType;
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
        return view('gcore::components.kpi');
    }
}
