<button type="{{ $type }}"
    class="gcore-btn gcore-btn-{{ $variant }} gcore-btn-{{ $size }} @if($outline) gcore-btn-outline @endif {{ $class }}"
    @if($disabled) disabled @endif
    style="{{ $style }}"
    {{ $attributes }}
>
    @if($icon)<i class="{{ $icon }}"></i>@endif
    {{ $slot }}
</button>
