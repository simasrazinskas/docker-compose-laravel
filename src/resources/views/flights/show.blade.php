@extends('layouts.app')

@section('title', 'Flight Records')

@section('content')


<div class="page-header d-print-none m-3">
  <div class="row align-items-center">
    <div class="col-auto">
      <span class="avatar avatar-md" style="background-image: url(/static/companies/ryanair.jpg)"></span>
    </div>
    <div class="col">
      <h2 class="page-title">{{ $flight->flight_number }}</h2>
      <div class="page-subtitle">
        <div class="row">
          <div class="col-auto">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
              stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <line x1="3" y1="21" x2="21" y2="21" />
              <path d="M5 21v-14l8 -4v18" />
              <path d="M19 21v-10l-6 -4" />
              <line x1="9" y1="9" x2="9" y2="9.01" />
              <line x1="9" y1="12" x2="9" y2="12.01" />
              <line x1="9" y1="15" x2="9" y2="15.01" />
              <line x1="9" y1="18" x2="9" y2="18.01" />
            </svg>
            <a href="#" class="text-reset" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Palanga to Kaunas"
              data-bs-placement="bottom">
              {{ $flight->origin }} -> {{ $flight->destination }}
            </a>

          </div>
          <div class="col-auto">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
              stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <circle cx="9" cy="7" r="4" />
              <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
              <path d="M16 3.13a4 4 0 0 1 0 7.75" />
              <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
            </svg>
            <a href="#" class="text-reset" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Passengers" data-bs-placement="bottom">
              194
            </a>
          </div>
          <div class="col-auto text-success">
            <!-- SVG icon from http://tabler-icons.io/i/check -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M5 12l5 5l10 -10"></path>
            </svg>
            {{ $flight->status }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-auto d-none d-md-flex">
      <a href="#" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
          stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
          <line x1="8" y1="9" x2="16" y2="9" />
          <line x1="8" y1="13" x2="14" y2="13" />
        </svg>
        Edit
      </a>
    </div>
  </div>
</div>
<!-- Page body -->
<div class="page-body">
  <div class="container-xl">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Base info</h3>
        </div>
        <div class="card-body">
          <div class="datagrid">
            <div class="datagrid-item">
              <div class="datagrid-title">Flight Number</div>
              <div class="datagrid-content">{{ $flight->flight_number }}</div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Nameservers</div>
              <div class="datagrid-content">Third Party</div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Port number</div>
              <div class="datagrid-content">3306</div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Expiration date</div>
              <div class="datagrid-content">–</div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Creator</div>
              <div class="datagrid-content">
                <div class="d-flex align-items-center">
                  <span class="avatar avatar-xs me-2 rounded" style="background-image: url(./static/avatars/000m.jpg)"></span>
                  Paweł Kuna
                </div>
              </div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Age</div>
              <div class="datagrid-content">15 days</div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Edge network</div>
              <div class="datagrid-content">
                <span class="status status-green">
                  Active
                </span>
              </div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Avatars list</div>
              <div class="datagrid-content">
                <div class="avatar-list avatar-list-stacked">
                  <span class="avatar avatar-xs rounded" style="background-image: url(./static/avatars/000m.jpg)"></span>
                  <span class="avatar avatar-xs rounded">JL</span>
                  <span class="avatar avatar-xs rounded" style="background-image: url(./static/avatars/002m.jpg)"></span>
                  <span class="avatar avatar-xs rounded" style="background-image: url(./static/avatars/003m.jpg)"></span>
                  <span class="avatar avatar-xs rounded" style="background-image: url(./static/avatars/000f.jpg)"></span>
                  <span class="avatar avatar-xs rounded">+3</span>
                </div>
              </div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Checkbox</div>
              <div class="datagrid-content">
                <label class="form-check">
                  <input class="form-check-input" type="checkbox" checked="">
                  <span class="form-check-label">Click me</span>
                </label>
              </div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Icon</div>
              <div class="datagrid-content">
                <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M5 12l5 5l10 -10"></path>
                </svg>
                Checked
              </div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Form control</div>
              <div class="datagrid-content">
                <input type="text" class="form-control form-control-flush" placeholder="Input placeholder">
              </div>
            </div>
            <div class="datagrid-item">
              <div class="datagrid-title">Longer description</div>
              <div class="datagrid-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Card row -->
    <div class="row row-cards mt-3">
      <!-- Main tabbed card -->
      <div class="col-12">
        <div class="card">
          <!-- Card tabs -->
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
              <li class="nav-item">
                <a href="#tabs-1-ex1" class="nav-link active" data-bs-toggle="tab">General</a>
              </li>
              <li class="nav-item">
                <a href="#tabs-2-ex1" class="nav-link" data-bs-toggle="tab">Bags</a>
              </li>
            </ul>
          </div>
          <!-- Tab body -->
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active show" id="tabs-1-ex1">
                <!-- Card header -->
                <h4>Flight Number: {{ $flight->flight_number }}</h4>
                <!-- Card text -->
                <p class="card-text">Origin: {{ $flight->origin }}</br>Destination: {{ $flight->destination }}</p>
                <p class="card-text">Departure Time: {{ $flight->departure_time }}</br>Arrival Time: {{ $flight->arrival_time }}</p>
                <p class="card-text">Status: {{ $flight->status }}</p>
                <a href="{{ route('flights.index') }}" class="btn btn-primary">Back to List</a>
              </div>
              <div class="tab-pane" id="tabs-2-ex1">
                <div id="table-default" class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th><button class="table-sort" data-sort="sort-name">Origin</button></th>
                        <th><button class="table-sort" data-sort="sort-city">City</button></th>
                        <th><button class="table-sort" data-sort="sort-type">Type</button></th>
                        <th><button class="table-sort" data-sort="sort-score">Score</button></th>
                        <th><button class="table-sort" data-sort="sort-date">Date</button></th>
                        <th><button class="table-sort" data-sort="sort-quantity">Quantity</button></th>
                        <th><button class="table-sort" data-sort="sort-progress">Progress</button></th>
                      </tr>
                    </thead>
                    <tbody class="table-tbody">
                      <tr>
                        <td class="sort-name">{{ $flight->origin }}</td>
                        <td class="sort-city">Cedar Point, United States</td>
                        <td class="sort-type">RMC Hybrid</td>
                        <td class="sort-score">100,0%</td>
                        <td class="sort-date" data-date="1628071164">August 04, 2021</td>
                        <td class="sort-quantity">74</td>
                        <td class="sort-progress" data-progress="30">
                          <div class="row align-items-center">
                            <div class="col-12 col-lg-auto">30%</div>
                            <div class="col">
                              <div class="progress" style="width: 5rem">
                                <div class="progress-bar" style="width: 30%" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"
                                  aria-label="30% Complete">
                                  <span class="visually-hidden">30% Complete</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Page body -->
@endsection