<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project CV</title>

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        

    @livewireStyles    
    </head>
    <body>
    
        @include('nav')

        @livewire('post-component')            {{-- {{ $slot ?? ''}}  --}}

        @livewire('table-softdelete')

        @yield('content')
    
        @livewireScripts

        <script type="{{ asset('js/app.js') }}"></script>
        

    </body>
</html>