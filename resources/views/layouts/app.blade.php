<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <title>@yield('title')</title>
</head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partials.navbar')
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {{-- content --}}
                     @yield('content')

                </div>
            </div>
            {{-- footer --}}

        </div>
        {{-- header --}}
    </body>
</html>
