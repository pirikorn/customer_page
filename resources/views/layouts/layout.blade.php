<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="container">
            <header class="row">
                @include('includes.header')
            </header>

            <div id="main" class="row">
                    @yield('content')
                    @include('sweetalert::alert')
            </div>

            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>
