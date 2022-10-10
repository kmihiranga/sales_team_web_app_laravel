<div>
    <table class="table table-striped table-hover table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Telephone</th>
                <th scope="col">Current Route</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($salesTeams))
                @foreach($salesTeams as $salesTeam)
                <tr>
                    <td>{{ $salesTeam->id }}</td>
                    <td>{{ $salesTeam->person_name }}</td>
                    <td>{{ $salesTeam->email }}</td>
                    <td>{{ $salesTeam->telephone }}</td>
                    <td>{{ $salesTeam->current_route }}</td>
                    <td>
                        <x-external-link role="button" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $salesTeam->id }}"  href="#">View</x-external-link>
                        <x-external-link href="{{ route('sales_team.edit', $salesTeam->id) }}">Edit</x-external-link>
                        <x-external-link href="#">Delete</x-external-link>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    
<!-- modal -->
@if(!empty($salesTeams))
    @foreach($salesTeams as $salesTeam)
        <x-sales-team.modal :id="$salesTeam->id" :sales-team="$salesTeam"></x-sales-team.modal>
    @endforeach
@endif
</div>