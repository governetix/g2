<div class="gcore-kpi {{ $class }}" style="{{ $style }}" {{ $attributes }}>
    <div class="gcore-kpi-header">
        @if($icon)
            <i class="gcore-kpi-icon {{ $icon }}"></i>
        @endif
        <span class="gcore-kpi-label">{{ $label }}</span>
    </div>
    <div class="gcore-kpi-value">
        {{ $value }}@if($unit)<span class="gcore-kpi-unit">{{ $unit }}</span>@endif
    </div>
    @if($change)
        <div class="gcore-kpi-change gcore-kpi-change-{{ $changeType }}">
            {{ $change }}
        </div>
    @endif
</div>
