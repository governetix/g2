<section class="gcore-cta-section {{ $class }}"
    style="background-color: {{ $backgroundColor }}; color: {{ $textColor }}; {{ $style }}"
    {{ $attributes }}>
    <h2 class="gcore-cta-title">{{ $title }}</h2>
    @if($subtitle)
        <p class="gcore-cta-subtitle">{{ $subtitle }}</p>
    @endif
    {{ $slot }} {{-- For buttons or other content --}}
</section>