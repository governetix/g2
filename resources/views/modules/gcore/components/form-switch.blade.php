@props(['name', 'id', 'label', 'checked', 'disabled'])

<div class="flex items-center">
    <label for="{{ $id }}" class="flex items-center cursor-pointer">
        <div class="relative">
            <input type="checkbox" name="{{ $name }}" id="{{ $id }}" class="sr-only"
                {{ $checked ? 'checked' : '' }}
                {{ $disabled ? 'disabled' : '' }}
                value="1">
            <div class="block bg-gray-600 w-14 h-8 rounded-full transition-colors duration-300 ease-in-out"></div>
            <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition-transform duration-300 ease-in-out"></div>
        </div>
        @if ($label)
            <div class="ml-3 text-gray-700 font-medium">{{ $label }}</div>
        @endif
    </label>
</div>

<style>
    input:checked ~ .block {
        background-color: hsl(var(--color-primario));
    }
    input:checked ~ .dot {
        transform: translateX(100%);
    }
</style>
