<div class="gcore-empty-state {{ $class }}" style="{{ $style }}" {{ $attributes }}>
    @if($icon)
        <div class="gcore-empty-state-icon">
            <i class="{{ $icon }}"></i>
        </div>
    @endif
    <h4 class="gcore-empty-state-title">{{ $title }}</h4>
    <p class="gcore-empty-state-message">{{ $message ?? $slot }}</p>
</div>
