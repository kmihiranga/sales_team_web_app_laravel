<input {{ $attributes }} type="{{ $type }}" id="{{ $id }}" class="form-control @error($id) is-invalid @enderror" placeholder="Enter {{ $placeholder }}..." autocomplete="off" />
