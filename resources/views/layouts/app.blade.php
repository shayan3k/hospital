<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.header')

<body class='min-vh-100 position-relative'>

    @include('partials.navbar')

    @section('jumbotron')
    @show


    <div class="container">
        @include('partials.errors')
        @section('contents')
        @show
    </div>

    @include('partials.footer')

    @include('partials.scripts')

</body>

</html>
