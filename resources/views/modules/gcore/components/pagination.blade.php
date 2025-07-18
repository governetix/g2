<?php
    // Asegura que las variables opcionales estén definidas, si no, asigna un valor por defecto.
    // Ensures optional variables are defined, otherwise assigns a default value.
    if (!isset($class)) {
        $class = '';
    }
    if (!isset($style)) {
        $style = '';
    }
    // Para $attributes, necesitamos una instancia de ComponentAttributeBag si no está definida.
    // For $attributes, we need a ComponentAttributeBag instance if it's not defined.
    if (!isset($attributes)) {
        $attributes = new Illuminate\View\ComponentAttributeBag();
    }
?>

@if ($paginator->hasPages())
    <nav class="gcore-pagination {{ $class }}" style="{{ $style }}" {{ $attributes }}>
        <ul class="gcore-pagination-list">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="gcore-pagination-item disabled" aria-disabled="true">
                    <span class="gcore-pagination-link">&laquo;</span>
                </li>
            @else
                <li class="gcore-pagination-item">
                    <a class="gcore-pagination-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="gcore-pagination-item disabled" aria-disabled="true"><span class="gcore-pagination-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="gcore-pagination-item active" aria-current="page"><span class="gcore-pagination-link">{{ $page }}</span></li>
                        @else
                            <li class="gcore-pagination-item"><a class="gcore-pagination-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="gcore-pagination-item">
                    <a class="gcore-pagination-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
                </li>
            @else
                <li class="gcore-pagination-item disabled" aria-disabled="true">
                    <span class="gcore-pagination-link">&raquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif

<style>
    /* Estilos básicos para la paginación, puedes ajustarlos con Tailwind */
    .gcore-pagination {
        display: flex;
        justify-content: center;
        margin-top: 1.5rem; /* mt-6 */
    }

    .gcore-pagination-list {
        display: inline-flex;
        border-radius: 0.375rem; /* rounded-md */
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05); /* shadow-sm */
        -space-x-px: 1px; /* -space-x-px */
    }

    .gcore-pagination-item {
        list-style: none;
        margin: 0;
    }

    .gcore-pagination-link {
        position: relative;
        display: inline-flex;
        align-items: center;
        padding: 0.5rem 1rem; /* px-4 py-2 */
        border: 1px solid #D1D5DB; /* border border-gray-300 */
        background-color: #FFFFFF; /* bg-white */
        font-size: 0.875rem; /* text-sm */
        font-weight: 500; /* font-medium */
        color: #6B7280; /* text-gray-500 */
        text-decoration: none;
        transition: background-color 0.15s ease-in-out;
    }

    .gcore-pagination-link:hover {
        background-color: #F9FAFB; /* hover:bg-gray-50 */
    }

    .gcore-pagination-item:first-child .gcore-pagination-link {
        border-top-left-radius: 0.375rem; /* rounded-l-md */
        border-bottom-left-radius: 0.375rem; /* rounded-l-md */
    }

    .gcore-pagination-item:last-child .gcore-pagination-link {
        border-top-right-radius: 0.375rem; /* rounded-r-md */
        border-bottom-right-radius: 0.375rem; /* rounded-r-md */
    }

    .gcore-pagination-item.active .gcore-pagination-link {
        z-index: 10;
        background-color: #DBEAFE; /* bg-blue-50 */
        border-color: #3B82F6; /* border-blue-500 */
        color: #2563EB; /* text-blue-600 */
    }

    .gcore-pagination-item.disabled .gcore-pagination-link {
        color: #9CA3AF; /* text-gray-400 */
        cursor: default;
        background-color: #FFFFFF;
        opacity: 0.6;
    }
</style>
