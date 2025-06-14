<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.header')
    @include('layouts.schema', ['pageMeta' => \Request::path()])
</head>

<body>
    <!-- <div class="pageloader is-active"></div> -->
    @include('layouts.gtm')
    @include('layouts.nav')
    @yield('content')
    @include('layouts.footer')
    @yield('js')
</body>

</html>
