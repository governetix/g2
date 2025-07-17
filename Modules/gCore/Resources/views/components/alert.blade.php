<div class="gcore-alert gcore-alert-{{ $type }} {{ $class }}" style="{{ $style }}" role="alert" {{ $attributes }}>
    {{ $message ?? $slot }}
    @if($dismissible)
        <button type="button" class="gcore-alert-dismiss" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    @endif
</div>
