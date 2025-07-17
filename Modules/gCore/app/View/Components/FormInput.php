<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class FormInput extends Component
{
    public $name;
    public $id;
    public $type;
    public $value;
    public $placeholder;
    public $required;
    public $disabled;
    public $readonly;
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $name The name attribute of the input.
     * @param string $id The id attribute of the input.
     * @param string $type The type of the input (text, email, password, number, etc.).
     * @param string $value The default value of the input.
     * @param string $placeholder The placeholder text.
     * @param bool $required Whether the input is required.
     * @param bool $disabled Whether the input is disabled.
     * @param bool $readonly Whether the input is read-only.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct(
        $name,
        $id = null,
        $type = 'text',
        $value = '',
        $placeholder = '',
        $required = false,
        $disabled = false,
        $readonly = false,
        $class = '',
        $style = ''
    ) {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->type = $type;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->disabled = $disabled;
        $this->readonly = $readonly;
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
        return view('gcore::components.form-input');
    }
}
