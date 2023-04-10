@include('admin.partials.head')
@include('admin.partials.header')

<div class="main-wrapper">

    <!-- navbar vertical -->
    @include('admin.partials.navbar')

    <!-- main wrapper -->
    <main class="main-content-wrapper">
        @yield('admin-content')
    </main>
</div>
@include('admin.partials.footer')
