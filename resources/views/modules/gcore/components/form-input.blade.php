<input
    type="{{ $type }}"
    name="{{ $name }}"
    id="{{ $id }}"
    value="{{ old($name, $value) }}"
    placeholder="{{ $placeholder }}"
    @if($required) required @endif
    @if($disabled) disabled @endif
    @if($readonly) readonly @endif
    class="gcore-form-input {{ $class }}"
    style="{{ $style }}"
    {{ $attributes }}
>
