<!-- define first button class category and other classes using class name variable -->
<!-- ex: 'primary btn-sm' -->
<a {{ $attributes->merge(['class' => 'btn btn-'.$className]) }} role="button">
    {{ $slot }}
</a>