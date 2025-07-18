@props(['name', 'id', 'options' => [], 'selected' => null, 'required' => false, 'disabled' => false])

<select name="{{ $name }}" id="{{ $id }}"
    {{ $required ? 'required' : '' }}
    {{ $disabled ? 'disabled' : '' }}
    {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm'])
}}>
    @foreach ($options as $value => $label)
        <option value="{{ $value }}" {{ ($value == $selected) ? 'selected' : '' }}>{{ $label }}</option>
    @endforeach
    {{ $slot }}
</select>
