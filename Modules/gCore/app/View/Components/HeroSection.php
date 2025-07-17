<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class HeroSection extends Component
{
    public $title;
    public $subtitle;
    public $imageUrl;
    public $overlayColor;
    public $height;
    public $textColor;
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $title The main title of the hero section.
     * @param string $subtitle The subtitle or descriptive text.
     * @param string $imageUrl Optional background image URL.
     * @param string $overlayColor Optional overlay color (e.g., 'rgba(0,0,0,0.5)').
     * @param string $height Optional height for the hero section (e.g., '400px', '50vh').
     * @param string $textColor Optional text color for the title and subtitle.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct(
        $title,
        $subtitle = '',
        $imageUrl = '',
        $overlayColor = 'rgba(0,0,0,0.4)',
        $height = '400px',
        $textColor = 'var(--color-fondo-principal)',
        $class = '',
        $style = ''
    ) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->imageUrl = $imageUrl;
        $this->overlayColor = $overlayColor;
        $this->height = $height;
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
        return view('gcore::components.hero-section');
    }
}