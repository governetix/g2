<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class CtaSection extends Component
{
    public $title;
    public $subtitle;
    public $backgroundColor;
    public $textColor;
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $title The main title of the CTA section.
     * @param string $subtitle The subtitle or descriptive text.
     * @param string $backgroundColor Optional background color for the section.
     * @param string $textColor Optional text color for the section.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct(
        $title,
        $subtitle = '',
        $backgroundColor = 'var(--color-primario)',
        $textColor = 'var(--color-fondo-principal)',
        $class = '',
        $style = ''
    ) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->backgroundColor = $backgroundColor;
        $this->textColor = $textColor;
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
        return view('gcore::components.cta-section');
    }
}