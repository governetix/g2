<div class="@if($responsive) gcore-matrix-responsive @endif">
    <table class="gcore-matrix-table {{ $class }}" style="{{ $style }}" {{ $attributes }}>
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
            @foreach($rows as $row)
                <tr>
                    @foreach($row as $key => $cell)
                        @if($key === 0) {{-- First cell is the row header --}}
                            <th>{{ $cell }}</th>
                        @else
                            <td>{{ $cell }}</td>
                        @endif
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>