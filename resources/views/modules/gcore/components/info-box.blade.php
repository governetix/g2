<div class="gcore-info-box gcore-info-box-{{ $type }} {{ $class }}" style="{{ $style }}" {{ $attributes }}>
    @if($icon)
        <div class="gcore-info-box-icon">
            <i class="{{ $icon }}"></i>
        </div>
    @endif
    <div class="gcore-info-box-content">
        @if($title)
            <h4 class="gcore-info-box-title">{{ $title }}</h4>
        @endif
        <p class="gcore-info-box-message">{{ $message ?? $slot }}</p>
    </div>
</div>
