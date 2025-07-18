<div class="gcore-progress {{ $class }}" style="{{ $style }}" {{ $attributes }}>
    <div class="gcore-progress-bar gcore-progress-bar-{{ $variant }} @if($striped) striped @endif @if($animated) animated @endif"
        role="progressbar"
        aria-valuenow="{{ $value }}"
        aria-valuemin="0"
        aria-valuemax="{{ $max }}"
        style="width: {{ ($value / $max) * 100 }}%;"
    >
        @if($showLabel)
            {{ round(($value / $max) * 100) }}%
        @endif
    </div>
</div>
