@include('admin.layout.head')
<!--page wrapper-->
<div id="wrapper">
    @include('admin.layout.navbar')
    <!--content wrapper-->
    <div id="content-wrapper" class="d-flex-column">
        <!--main content-->
        <div id="content">
            @include('admin.layout.sidebar')
            <!--start page content-->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!--//container-fluid-->
        </div>
        <!--end Main content-->
        @include('admin.layout.footer')
    </div>
    <!---end content wrapper-->
</div>
<!--End page wrapper-->
@include('admin.layout.js')
