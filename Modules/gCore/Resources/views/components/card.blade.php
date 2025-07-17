<div class="gcore-card {{ $class }}" style="{{ $style }}" {{ $attributes }}>
    @if($header || $title)
        <div class="gcore-card-header">
            @if($title)
                <h4 class="gcore-card-title">{{ $title }}</h4>
            @endif
            @if($header)
                {{ $header }}
            @endif
        </div>
    @endif
    <div class="gcore-card-body">
        {{ $slot }}
    </div>
    @if($footer)
        <div class="gcore-card-footer">
            {{ $footer }}
        </div>
    @endif
</div>
