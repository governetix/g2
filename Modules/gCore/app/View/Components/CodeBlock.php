<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class CodeBlock extends Component
{
    public $language;
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $language Optional programming language for highlighting.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct($language = 'php', $class = '', $style = '')
    {
        $this->language = $language;
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
        return view('gcore::components.code-block');
    }
}
