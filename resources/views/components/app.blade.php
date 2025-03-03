
{{-- HEADER --}}
@include('components.header')

<body>
    <!-- Layout wrapper -->
    <div class="">
        <div class="">
          <!-- Menu -->

          {{-- SIDEBAR --}}
          @include('components.sidebar')
          <!-- / Menu -->

          <!-- Layout container -->
          <div class="">

            <!-- Navbar -->
            @include('components.navbar')
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="">

              <!-- Content -->
              <div class="container-xxl flex-grow-1 container-p-y">
                @yield('content')
              </div>
              <!-- / Content -->

              <!-- Footer -->
              {{-- @include('components.footer') --}}
              <!-- / Footer -->

              <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
          </div>
          <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
      </div>
    <!--/ Layout wrapper -->

    @vite('resources/js/app.js')


    @include('components.scripts')
    @yield('components.specific_page_scripts')
</body>

</html>
