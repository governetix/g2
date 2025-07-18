<section class="gcore-section {{ $class }}" style="{{ $style }}" {{ $attributes }}>
    @if($title)
        <h2 class="gcore-section-title">{{ $title }}</h2>
    @endif
    {{ $slot }}
</section>
