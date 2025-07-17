@if($type === 'ol')
    <ol {{ $attributes->merge(['class' => $class, 'style' => $style]) }}>
@else
    <ul {{ $attributes->merge(['class' => $class, 'style' => $style]) }}>
@endif
    @if(count($items) > 0)
        @foreach($items as $item)
            <li>{{ $item }}</li>
        @endforeach
    @else
        {{ $slot }}
    @endif
@if($type === 'ol')
    </ol>
@else
    </ul>
@endif
