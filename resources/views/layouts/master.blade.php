<!DOCTYPE html>
 <html lang="en">
    @include('partials._meta')
    @include('partials._css')
    <body>
    @include('partials._navigation')
    @yield('content')

    @include('partials._footer')
    @include('partials._js')
    @include('components.head.tinymce-config')
    </body>
 </html>
