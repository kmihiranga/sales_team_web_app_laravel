<table {{ $attributes->merge(['class' => 'table table-striped']) }}>
    @if(!empty($tableHeaders))
    <thead>
        <tr>
            @for($column = 0; $column < count($tableHeaders); $column++) 
                <th scope="col">{{ $column }}</th>
            @endfor
        </tr>
    </thead>
    @endif
    <tbody>
        {{ $slot }}
    </tbody>
</table>