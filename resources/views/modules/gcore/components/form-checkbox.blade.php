@props(['name', 'id', 'label', 'checked', 'disabled'])

<div class="flex items-center">
    <input type="checkbox" name="{{ $name }}" id="{{ $id }}" value="1"
        {{ $checked ? 'checked' : '' }}
        {{ $disabled ? 'disabled' : '' }}
        {{ $attributes->merge(['class' => 'rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500'])
}}>
    @if ($label)
        <label for="{{ $id }}" class="ml-2 block text-sm text-gray-900">{{ $label }}</label>
    @endif
</div>
