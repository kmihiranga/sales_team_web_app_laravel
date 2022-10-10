<!-- Modal -->
<div class="modal fade" id="dialog-{{$id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $title }}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      {{ $slot }}
    </div>
  </div>
</div>