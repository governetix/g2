<?php

namespace Modules\GCore\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Config;

class Heading extends Component
{
    public $level;
    public $text;
    public $fontFamily;
    public $fontSize;
    public $fontWeight;
    public $fontStyle;
    public $color;
    public $textAlign;
    public $textTransform;
    public $textDecoration;
    public $lineHeight;
    public $letterSpacing;
    public $marginTop;
    public $marginBottom;
    public $padding;
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param string $level The heading level (h1, h2, h3, h4, h5, h6).
     * @param string $text The text content of the heading.
     * @param string|null $fontFamily Optional font family. Defaults to config.
     * @param string|null $fontSize Optional font size. Defaults to config.
     * @param string|null $fontWeight Optional font weight. Defaults to config.
     * @param string|null $fontStyle Optional font style. Defaults to config.
     * @param string|null $color Optional text color. Defaults to config.
     * @param string|null $textAlign Optional text alignment. Defaults to config.
     * @param string|null $textTransform Optional text transformation. Defaults to config.
     * @param string|null $textDecoration Optional text decoration. Defaults to config.
     * @param string|null $lineHeight Optional line height. Defaults to config.
     * @param string|null $letterSpacing Optional letter spacing. Defaults to config.
     * @param string|null $marginTop Optional top margin. Defaults to config.
     * @param string|null $marginBottom Optional bottom margin. Defaults to config.
     * @param string|null $padding Optional padding. Defaults to config.
     * @param string $class Optional CSS classes.
     * @param string $style Optional inline CSS styles.
     * @return void
     */
    public function __construct(
        $level = 'h1',
        $text = '',
        $fontFamily = null,
        $fontSize = null,
        $fontWeight = null,
        $fontStyle = null,
        $color = null,
        $textAlign = null,
        $textTransform = null,
        $textDecoration = null,
        $lineHeight = null,
        $letterSpacing = null,
        $marginTop = null,
        $marginBottom = null,
        $padding = null,
        $class = '',
        $style = ''
    ) {
        $this->level = $level;
        $this->text = $text;

        $defaultStyles = Config::get('gcore.typography.text-elements.heading.' . $level, []);

        $this->fontFamily = $fontFamily ?? $defaultStyles['font-family'] ?? 'inherit';
        $this->fontSize = $fontSize ?? $defaultStyles['font-size'] ?? 'inherit';
        $this->fontWeight = $fontWeight ?? $defaultStyles['font-weight'] ?? 'inherit';
        $this->fontStyle = $fontStyle ?? $defaultStyles['font-style'] ?? 'normal';
        $this->color = $color ?? $defaultStyles['color'] ?? 'inherit';
        $this->textAlign = $textAlign ?? $defaultStyles['text-align'] ?? 'left';
        $this->textTransform = $textTransform ?? $defaultStyles['text-transform'] ?? 'none';
        $this->textDecoration = $textDecoration ?? $defaultStyles['text-decoration'] ?? 'none';
        $this->lineHeight = $lineHeight ?? $defaultStyles['line-height'] ?? 'normal';
        $this->letterSpacing = $letterSpacing ?? $defaultStyles['letter-spacing'] ?? 'normal';
        $this->marginTop = $marginTop ?? $defaultStyles['margin-top'] ?? '0';
        $this->marginBottom = $marginBottom ?? $defaultStyles['margin-bottom'] ?? '0';
        $this->padding = $padding ?? $defaultStyles['padding'] ?? '0';

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
        return view('gcore::components.heading');
    }
}
