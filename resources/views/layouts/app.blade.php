<!DOCTYPE html>
<html lang="en">

@section('header')
    @include('layouts.header')
@show

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">
        @include('layouts.navbar')
        @yield('content')
    </div>

    @include('layouts.footer')
</body>

</html>
