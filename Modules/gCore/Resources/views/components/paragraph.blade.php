<p {{ $attributes->merge(['class' => $class, 'style' => $style]) }}>
    {{ $text ?? $slot }}
</p>
