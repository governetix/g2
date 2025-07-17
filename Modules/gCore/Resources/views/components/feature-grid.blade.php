<div class="gcore-feature-grid {{ $class }}"
    style="display: grid; grid-template-columns: repeat({{ $columns }}, 1fr); gap: {{ $gap }}; {{ $style }}"
    {{ $attributes }}>
    @foreach($features as $feature)
        <div class="gcore-feature-item">
            @if(isset($feature['icon']))
                <i class="gcore-feature-icon {{ $feature['icon'] }}"></i>
            @endif
            @if(isset($feature['title']))
                <h3 class="gcore-feature-title">{{ $feature['title'] }}</h3>
            @endif
            @if(isset($feature['description']))
                <p class="gcore-feature-description">{{ $feature['description'] }}</p>
            @endif
            {{-- Allow additional content per feature item via slot if needed --}}
            @if(isset($feature['slot']))
                {{ $feature['slot'] }}
            @endif
        </div>
    @endforeach
</div>