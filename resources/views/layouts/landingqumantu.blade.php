<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.landing.meta')

    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('includes.favicon')
    @include('includes.landing.font')
    @include('includes.landing.style')

    @stack('style')


</head>

<body class="font-sans antialiased">
    <div class="">
        <main>
            @yield('slot')
        </main>
    </div>



    @stack('script')

    @include('includes.landing.script')


</body>

</html>