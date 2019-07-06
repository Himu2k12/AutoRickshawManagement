@include('admin.includes.header')

    <title>@yield('title')</title>


@include('admin.includes.navbar')
<div class="content-wrapper">
    <!-- /.content-wrapper-->
@yield('content')
</div>
    <!-- /.container-fluid-->
@include('admin.includes.footer')