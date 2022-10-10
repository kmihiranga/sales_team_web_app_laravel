<select {{ $attributes->merge(['class' => 'form-select']) }} placeholder="{{ $placeholder }}" id="{{ $id }}">
	{{ $slot }}
</select>