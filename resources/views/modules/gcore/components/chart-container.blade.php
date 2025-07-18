<div class="gcore-chart-container {{ $class }}"
     style="width: {{ $width }}; height: {{ $height }}; background-color: {{ $backgroundColor }}; border: {{ $borderWidth }} solid {{ $borderColor }}; border-radius: {{ $borderRadius }}; box-shadow: {{ $boxShadow }}; {{ $style }}"
     {{ $attributes }}>
    @if($title)
        <h3 class="gcore-chart-title">{{ $title }}</h3>
    @endif
    @if($description)
        <p class="gcore-chart-description">{{ $description }}</p>
    @endif
    <div class="gcore-chart-body">
        {{ $slot }} {{-- Placeholder for chart rendering library --}}
    </div>
</div>