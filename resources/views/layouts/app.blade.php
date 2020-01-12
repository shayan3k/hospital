<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.header')

<body class='min-vh-100 position-relative d-flex flex-column justify-content-between'>

    @include('partials.navbar')

    @section('jumbotron')
    @show


    <div class="container my-5">
        @include('partials.errors')
        @section('content')
        @show
    </div>

    @include('partials.footer')

    @include('partials.scripts')

</body>

</html>
