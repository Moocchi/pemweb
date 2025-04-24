<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.partials.head')

<body>
    @include('components.partials.nav')
    {{ $slot }}
    @include('components.partials.bottom')
</body>
@include('components.partials.script')

</html>