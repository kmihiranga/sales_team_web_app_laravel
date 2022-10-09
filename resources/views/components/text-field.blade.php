<button {{ $attributes->merge(['btn', 'btn-'. $className]) }} type="{{ $type }}">
    {{ $slot }}
</button>