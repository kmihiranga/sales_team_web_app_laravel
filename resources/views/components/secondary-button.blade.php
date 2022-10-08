<div>
    <button {{ $attributes->merge(['class' => 'btn btn-secondary '. $className]) }} type="{{ $type }}">
        {{ $slot}}
    </button>
</div>