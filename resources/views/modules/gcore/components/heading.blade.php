@props([
    'level' => 'h1',
    'text' => '',
    'fontFamily' => null,
    'fontSize' => null,
    'fontWeight' => null,
    'fontStyle' => null,
    'color' => null,
    'textAlign' => null,
    'textTransform' => null,
    'textDecoration' => null,
    'lineHeight' => null,
    'letterSpacing' => null,
    'marginTop' => null,
    'marginBottom' => null,
    'padding' => null,
])

@php
    $tag = $level;
    $styles = [];

    if ($fontFamily) $styles[] = "font-family: {$fontFamily}";
    if ($fontSize) $styles[] = "font-size: {$fontSize}";
    if ($fontWeight) $styles[] = "font-weight: {$fontWeight}";
    if ($fontStyle) $styles[] = "font-style: {$fontStyle}";
    if ($color) $styles[] = "color: {$color}";
    if ($textAlign) $styles[] = "text-align: {$textAlign}";
    if ($textTransform) $styles[] = "text-transform: {$textTransform}";
    if ($textDecoration) $styles[] = "text-decoration: {$textDecoration}";
    if ($lineHeight) $styles[] = "line-height: {$lineHeight}";
    if ($letterSpacing) $styles[] = "letter-spacing: {$letterSpacing}";
    if ($marginTop) $styles[] = "margin-top: {$marginTop}";
    if ($marginBottom) $styles[] = "margin-bottom: {$marginBottom}";
    if ($padding) $styles[] = "padding: {$padding}";

    $styleAttribute = count($styles) > 0 ? 'style="' . implode('; ', $styles) . '"' : '';
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => '']) }} {!! $styleAttribute !!}>
    {{ $text ?? $slot }}
</{{ $tag }}>