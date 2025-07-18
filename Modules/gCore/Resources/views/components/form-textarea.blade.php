@props(['name', 'id', 'value' => '', 'placeholder', 'rows', 'required', 'disabled', 'readonly'])

<textarea name="{{ $name }}" id="{{ $id }}" placeholder="{{ $placeholder }}" rows="{{ $rows }}"
    {{ $required ? 'required' : '' }}
    {{ $disabled ? 'disabled' : '' }}
    {{ $readonly ? 'readonly' : '' }}
    {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm'])
}}>
{{ (string) $value ?? $slot }}
</textarea>
