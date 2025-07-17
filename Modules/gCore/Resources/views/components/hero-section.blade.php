<section class="gcore-hero-section {{ $class }}"
    style="height: {{ $height }}; color: {{ $textColor }}; background-image: url('{{ $imageUrl }}'); {{ $style }}"
    {{ $attributes }}>
    <div class="gcore-hero-overlay" style="background-color: {{ $overlayColor }};"></div>
    <div class="gcore-hero-content">
        <h1 class="gcore-hero-title">{{ $title }}</h1>
        @if($subtitle)
            <p class="gcore-hero-subtitle">{{ $subtitle }}</p>
        @endif
        {{ $slot }} {{-- For buttons or other content --}}
    </div>
</section>