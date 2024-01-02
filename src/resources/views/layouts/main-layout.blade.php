@include('layouts.head')

<body class="layout-fluid">
  <div class="page">
    @include('layouts.sidebar')
    <div class="page-wrapper">
      <!-- Page header -->
      <x-page-header pretitle="Overview" title="Flight information">
        <x-action-button>
          <span class="d-none d-sm-inline">
            <a href="#" class="btn">New view</a>
          </span>
          <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
            {{-- SVG Icon --}}
            <x-icons.checkbox-icon />
            Create new report
          </a>
          <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
            {{-- SVG Icon --}}
            <x-icons.checkbox-icon />
          </a>
        </x-action-button>
      </x-page-header>
      <!-- Page body -->
      <div class="page-body">
        <div class="container-xl">
          <div class="row row-cards">
            <div class="col-lg-12">
              <div class="card">
                <div class="table-responsive">
                  <table class="table table-vcenter card-table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th class="w-1"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Paweł Kuna</td>
                        <td class="text-muted">
                          UI Designer, Training
                        </td>
                        <td class="text-muted"><a href="#" class="text-reset">paweluna@howstuffworks.com</a></td>
                        <td class="text-muted">
                          User
                        </td>
                        <td>
                          <a href="#">Edit</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        @include('layouts.footer')
      </div>
      <!-- Scripts -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <!-- Libs JS -->
      <script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js?1684106062') }}" defer></script>
      <script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js?1684106062') }}" defer></script>
      <script src="{{ asset('libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062') }}" defer></script>
      <script src="{{ asset('libs/jsvectormap/dist/maps/world.js?1684106062') }}" defer></script>
      <script src="{{ asset('libs/jsvectormap/dist/maps/world-merc.js?1684106062') }}" defer></script>
      <!-- Tabler Core -->
      <script src="{{ asset('js/tabler.min.js?1684106062') }}" defer></script>
      <script src="{{ asset('js/demo.min.js?1684106062') }}" defer></script>
      <!-- Scripts -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      @stack('scripts')
</body>

</html>