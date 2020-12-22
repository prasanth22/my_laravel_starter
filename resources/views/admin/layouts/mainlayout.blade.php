<!DOCTYPE html>
<html lang="en">
 <head>
   @include('admin.layouts.partials.head')
 </head>
 <body>
    <div id="wrapper">
        @include('admin.layouts.partials.nav')
        @yield('content')
    </div>
        @include('admin.layouts.partials.footer')
 </body>
</html>