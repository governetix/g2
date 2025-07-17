<div class="@if($responsive) gcore-table-responsive @endif">
    <table class="gcore-table @if($striped) striped @endif @if($bordered) bordered @endif @if($hoverable) hoverable @endif {{ $class }}" style="{{ $style }}" {{ $attributes }}>
        @if(count($headers) > 0)
            <thead>
                <tr>
                    @foreach($headers as $header)
                        <th>{{ $header }}</th>
                    @endforeach
                </tr>
            </thead>
        @endif
        <tbody>
            @if(count($rows) > 0)
                @foreach($rows as $row)
                    <tr>
                        @foreach($row as $cell)
                            <td>{{ $cell }}</td>
                        @endforeach
                    </tr>
                @endforeach
            @else
                {{ $slot }} {{-- Allow custom content for empty table or complex rows --}}
            @endif
        </tbody>
    </table>
</div>
