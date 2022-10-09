<div>
    <button {{ $attributes->merge(['class' => 'btn btn-secondary '. $className]) }} type="{{ $type }}" value="{{ $value }}">
        {{ $slot}}
    </button>
</div>