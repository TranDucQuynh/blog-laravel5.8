<!DOCTYPE html>
<html lang="en">
    <head>
        @include('user.layouts.head')
    </head>

    <body>

    @include('user.layouts.header')

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    @include('user.layouts.footer')

    </body>
</html>
