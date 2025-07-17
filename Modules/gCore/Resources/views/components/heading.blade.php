<{{ $level }} class="{{ $class }}"
    style="font-family: {{ $fontFamily }};
             font-size: {{ $fontSize }};
             font-weight: {{ $fontWeight }};
             font-style: {{ $fontStyle }};
             color: {{ $color }};
             text-align: {{ $textAlign }};
             text-transform: {{ $textTransform }};
             text-decoration: {{ $textDecoration }};
             line-height: {{ $lineHeight }};
             letter-spacing: {{ $letterSpacing }};
             margin-top: {{ $marginTop }};
             margin-bottom: {{ $marginBottom }};
             padding: {{ $padding }};
             {{ $style }}"
    {{ $attributes }}>
    {{ $text ?? $slot }}
</{{ $level }}>

@php
    $googleFonts = config('gcore.typography.google-fonts');
    $fontUrl = null;

    foreach ($googleFonts as $fontKey => $fontData) {
        if (isset($fontData['name']) && str_contains($fontFamily, $fontData['name'])) {
            $fontUrl = $fontData['url-import'];
            break;
        }
    }
@endphp

@if($fontUrl)
<style>
    @import url('{{ $fontUrl }}');
</style>
@endif
