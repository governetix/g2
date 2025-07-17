<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;

class Tabs extends Component
{
    public $tabs; // Array of tab titles/ids: [['id' => 'tab1', 'label' => 'Tab 1', 'icon' => 'fas fa-home'], ...]
    public $activeTab; // ID of the initially active tab
    public $width;
    public $height;
    public $backgroundColor;
    public $borderColor;
    public $textColor;
    public $tabColor;
    public $tabActiveColor;
    public $tabHoverColor;
    public $borderWidth;
    public $borderRadius;
    public $boxShadow;
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param array $tabs An array of tab data.
     * @param string $activeTab The ID of the initially active tab.
     * @param string $width Optional width for the tabs container.
     * @param string $height Optional height for the tabs container.
     * @param string $backgroundColor Optional background color for the tabs container.
     * @param string $borderColor Optional border color for the tabs container.
     * @param string $textColor Optional text color for tab labels.
     * @param string $tabColor Optional background color for inactive tabs.
     * @param string $tabActiveColor Optional background color for the active tab.
     * @param string $tabHoverColor Optional background color for tabs on hover.
     * @param string $borderWidth Optional border width for the tabs container.
     * @param string $borderRadius Optional border radius for the tabs container.
     * @param string $boxShadow Optional box shadow for the tabs container.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct(
        $tabs = [],
        $activeTab = '',
        $width = '100%',
        $height = 'auto',
        $backgroundColor = 'var(--color-fondo-principal)',
        $borderColor = 'var(--color-borde-base)',
        $textColor = 'var(--color-texto-principal)',
        $tabColor = 'transparent',
        $tabActiveColor = 'var(--color-primario)',
        $tabHoverColor = 'var(--color-primario)',
        $borderWidth = '1px',
        $borderRadius = '5px',
        $boxShadow = 'none',
        $class = '',
        $style = ''
    ) {
        $this->tabs = $tabs;
        $this->activeTab = $activeTab;
        $this->width = $width;
        $this->height = $height;
        $this->backgroundColor = $backgroundColor;
        $this->borderColor = $borderColor;
        $this->textColor = $textColor;
        $this->tabColor = $tabColor;
        $this->tabActiveColor = $tabActiveColor;
        $this->tabHoverColor = $tabHoverColor;
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
        return view('gcore::components.tabs');
    }
}