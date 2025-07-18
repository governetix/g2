@props(['name', 'id', 'value', 'label', 'checked', 'disabled'])

<div class="flex items-center">
    <input type="radio" name="{{ $name }}" id="{{ $id }}" value="{{ $value }}"
        {{ $checked ? 'checked' : '' }}
        {{ $disabled ? 'disabled' : '' }}
        {{ $attributes->merge(['class' => 'focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300'])
}}>
    @if ($label)
        <label for="{{ $id }}" class="ml-2 block text-sm text-gray-900">{{ $label }}</label>
    @endif
</div>
