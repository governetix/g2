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
