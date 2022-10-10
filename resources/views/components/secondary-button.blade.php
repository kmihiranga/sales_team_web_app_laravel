<div>
    <button {{ $attributes->merge(['class' => 'btn btn-'. $className]) }} type="{{ $type }}">
        {{ $slot}}
    </button>
</div>