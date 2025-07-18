<?php
    // Definición defensiva de todas las propiedades del componente.
    // Esto asegura que las variables existan en el ámbito de la vista,
    // incluso si Laravel no las inyecta automáticamente por alguna razón.
    $type = $type ?? 'button';
    $variant = $variant ?? 'primary';
    $size = $size ?? 'md';
    $outline = $outline ?? false;
    $disabled = $disabled ?? false;
    $icon = $icon ?? '';
    $class = $class ?? '';
    $style = $style ?? '';

    // Define Tailwind CSS classes based on the variant
    // Define las clases de Tailwind CSS basadas en la variante
    $variantClasses = [
        'primary' => 'bg-blue-600 hover:bg-blue-700 text-white',
        'secondary' => 'bg-gray-300 hover:bg-gray-400 text-gray-800',
        'success' => 'bg-green-600 hover:bg-green-700 text-white',
        'danger' => 'bg-red-600 hover:bg-red-700 text-white',
        'warning' => 'bg-yellow-600 hover:bg-yellow-700 text-white',
        'info' => 'bg-blue-400 hover:bg-blue-500 text-white',
        'light' => 'bg-gray-100 hover:bg-gray-200 text-gray-800',
        'dark' => 'bg-gray-800 hover:bg-gray-900 text-white',
        'link' => 'text-blue-600 hover:text-blue-800 bg-transparent', // Link variant for text-only buttons
    ];

    // Define Tailwind CSS classes for outlined variants
    // Define las clases de Tailwind CSS para variantes outline
    $outlineClasses = [
        'primary' => 'border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white',
        'secondary' => 'border border-gray-400 text-gray-800 hover:bg-gray-400 hover:text-gray-800',
        'success' => 'border border-green-600 text-green-600 hover:bg-green-600 hover:text-white',
        'danger' => 'border border-red-600 text-red-600 hover:bg-red-600 hover:text-white',
        'warning' => 'border border-yellow-600 text-yellow-600 hover:bg-yellow-600 hover:text-white',
        'info' => 'border border-blue-400 text-blue-400 hover:bg-blue-400 hover:text-white',
        'light' => 'border border-gray-300 text-gray-800 hover:bg-gray-300 hover:text-gray-800',
        'dark' => 'border border-gray-800 text-gray-800 hover:bg-gray-800 hover:text-white',
        'link' => 'text-blue-600 hover:text-blue-800 bg-transparent', // Link variant for text-only buttons
    ];

    // Define Tailwind CSS classes for button sizes
    // Define las clases de Tailwind CSS para los tamaños de botón
    $sizeClasses = [
        'sm' => 'py-1 px-3 text-sm',
        'md' => 'py-2 px-4 text-base',
        'lg' => 'py-3 px-6 text-lg',
    ];

    // Obtener las clases base para la variante o la variante outline
    $baseStyling = $outline ? ($outlineClasses[$variant] ?? '') : ($variantClasses[$variant] ?? '');

    // Combinar todas las clases, asegurando que los estilos comunes del botón siempre estén presentes
    $combinedClasses = trim("
        font-semibold rounded-lg shadow-md
        {$baseStyling}
        {$sizeClasses[$size]}
        {$class}
    ");
?>

<button type="{{ $type }}"
    class="{{ $combinedClasses }}"
    @if($disabled) disabled @endif
    style="{{ $style }}"
    {{ $attributes }}
>
    @if($icon)<i class="{{ $icon }} mr-2"></i>@endif
    {{ $slot }}
</button>
