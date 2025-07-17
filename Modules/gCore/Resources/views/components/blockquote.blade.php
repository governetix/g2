<blockquote {{ $attributes->merge(['class' => $class, 'style' => $style]) }}>
    {{ $slot }}
    @if($cite)
        <cite>{{ $cite }}</cite>
    @endif
</blockquote>
