<nav aria-label="breadcrumb" class="gcore-breadcrumbs {{ $class }}" style="{{ $style }}" {{ $attributes }}>
    <ol class="gcore-breadcrumb-list">
        @foreach($links as $index => $link)
            <li class="gcore-breadcrumb-item @if($loop->last) active @endif" @if($loop->last) aria-current="page" @endif>
                @if(!$loop->last)
                    <a href="{{ $link['url'] }}">{{ $link['label'] }}</a>
                @else
                    {{ $link['label'] }}
                @endif
            </li>
        @endforeach
    </ol>
</nav>
