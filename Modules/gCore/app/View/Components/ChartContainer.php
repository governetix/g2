<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class ChartContainer extends Component
{
    public $title;
    public $description;
    public $width;
    public $height;
    public $backgroundColor;
    public $borderColor;
    public $borderWidth;
    public $borderRadius;
    public $boxShadow;
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $title The title of the chart.
     * @param string $description A short description for the chart.
     * @param string $width Optional width for the chart container.
     * @param string $height Optional height for the chart container.
     * @param string $backgroundColor Optional background color for the container.
     * @param string $borderColor Optional border color for the container.
     * @param string $borderWidth Optional border width for the container.
     * @param string $borderRadius Optional border radius for the container.
     * @param string $boxShadow Optional box shadow for the container.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct(
        $title = '',
        $description = '',
        $width = '100%',
        $height = 'auto',
        $backgroundColor = 'var(--grafico-fondo-contenedor)',
        $borderColor = 'var(--color-borde-base)',
        $borderWidth = '1px',
        $borderRadius = '8px',
        $boxShadow = '0 2px 4px hsla(var(--color-sombra-base), 0.1)',
        $class = '',
        $style = ''
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->width = $width;
        $this->height = $height;
        $this->backgroundColor = $backgroundColor;
        $this->borderColor = $borderColor;
        $this->borderWidth = $borderWidth;
        $this->borderRadius = $borderRadius;
        $this->boxShadow = $boxShadow;
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
        return view('gcore::components.chart-container');
    }
}