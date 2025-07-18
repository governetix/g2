<div class="gcore-notification gcore-notification-{{ $type }} gcore-notification-{{ $position }} {{ $class }}"
    style="{{ $style }}"
    data-duration="{{ $duration }}"
    role="alert"
    aria-live="assertive"
    aria-atomic="true"
    {{ $attributes }}
>
    <div class="gcore-notification-header">
        @if($title)
            <strong class="gcore-notification-title">{{ $title }}</strong>
        @endif
        <button type="button" class="gcore-notification-dismiss" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="gcore-notification-body">
        {{ $message ?? $slot }}
    </div>
</div>
