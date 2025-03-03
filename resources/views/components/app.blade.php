
{{-- HEADER --}}
@include('components.header')

<body class="body" style="background-color: #F1F5F9;">
    <!-- Layout wrapper -->
    <div class="layout-wrapper">
        <!-- Floating Sidebar -->
        @include('components.sidebar')

        <!-- Floating Navbar -->
        @include('components.navbar')

        <!-- Content wrapper -->
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    @vite('resources/js/app.js')
    @include('components.scripts')
    @yield('components.specific_page_scripts')
</body>

</html>
