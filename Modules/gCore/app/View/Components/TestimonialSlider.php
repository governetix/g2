<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class TestimonialSlider extends Component
{
    public $testimonials; // Array of testimonial objects: [['quote' => '...', 'author' => '...', 'title' => '...', 'avatar' => '...'], ...]
    public $autoplay; // boolean
    public $interval; // milliseconds
    public $showControls; // boolean
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param array $testimonials An array of testimonial data.
     * @param bool $autoplay Whether the slider should autoplay.
     * @param int $interval Autoplay interval in milliseconds.
     * @param bool $showControls Whether to show navigation controls.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct(
        $testimonials = [],
        $autoplay = true,
        $interval = 5000,
        $showControls = true,
        $class = '',
        $style = ''
    ) {
        $this->testimonials = $testimonials;
        $this->autoplay = $autoplay;
        $this->interval = $interval;
        $this->showControls = $showControls;
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
        return view('gcore::components.testimonial-slider');
    }
}