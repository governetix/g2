<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $type;    // 'button', 'submit', 'reset'
    public $variant; // 'primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark', 'link'
    public $size;    // 'sm', 'md', 'lg'
    public $outline; // boolean
    public $disabled; // boolean
    public $icon;    // Font Awesome icon class
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $type The button type.
     * @param string $variant The button visual variant.
     * @param string $size The button size.
     * @param bool $outline Whether the button is outlined.
     * @param bool $disabled Whether the button is disabled.
     * @param string $icon Optional icon class.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct(
        $type = 'button',
        $variant = 'primary',
        $size = 'md',
        $outline = false,
        $disabled = false,
        $icon = '',
        $class = '',
        $style = ''
    ) {
        $this->type = $type;
        $this->variant = $variant;
        $this->size = $size;
        $this->outline = $outline;
        $this->disabled = $disabled;
        $this->icon = $icon;
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
        // Pasa explícitamente todas las propiedades públicas a la vista
        // Explicitly pass all public properties to the view
        return view('gcore::components.button', [
            'type' => $this->type,
            'variant' => $this->variant,
            'size' => $this->size,
            'outline' => $this->outline,
            'disabled' => $this->disabled,
            'icon' => $this->icon,
            'class' => $this->class,
            'style' => $this->style,
        ]);
    }
}
