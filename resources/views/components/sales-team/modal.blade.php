<!-- Modal -->
<div class="modal fade" id="exampleModal-{{$id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $salesTeam->person_name }}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <x-table-stripped :table-headers="''">
            <tr>
                <th>ID:</th>
                <td>{{ $salesTeam->id }}</td>
            </tr>
            <tr>
                <th>Full Name:</th>
                <td>{{ $salesTeam->person_name }}</td>
            </tr>
            <tr>
                <th>Email Address:</th>
                <td>{{ $salesTeam->email }}</td>
            </tr>
            <tr>
                <th>Telephone:</th>
                <td>{{ $salesTeam->telephone }}</td>
            </tr>
            <tr>
                <th>Joined Date:</th>
                <td>{{ $salesTeam->joined_date }}</td>
            </tr>
            <tr>
                <th>Current Routes:</th>
                <td>{{ $salesTeam->current_route }}</td>
            </tr>
            <tr>
                <th>Comments:</th>
                <td>{{ $salesTeam->comments }}</td>
            </tr>
        </x-table-stripped>
      </div>
    </div>
  </div>
</div>