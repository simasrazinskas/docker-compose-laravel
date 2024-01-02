<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>@yield('title', 'Flight Records')</title>
  <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --tblr-font-sans-serif: 'Inter';
    }
  </style>

</head>

<body class='theme-dark'>
  <div class="container mt-4">
    @yield('content')
  </div>

  <div class="toast-container position-fixed bottom-0 end-0 p-3" id="toastContainer">
    @if(session('success'))
    @include('partials.toast', [
    'image' => 'success-icon-url',
    'title' => 'Success',
    'message' => session('success')
    ])
    @endif

    @if(session('error'))
    @include('partials.toast', [
    'image' => 'error-icon-url',
    'title' => 'Error',
    'message' => session('error')
    ])
    @endif
  </div>



  <!-- Scripts -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  @stack('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var toastElList = [].slice.call(document.querySelectorAll('.toast'));
      var toastList = toastElList.map(function (toastEl) {
        return new bootstrap.Toast(toastEl).show();
      });
      ;
  </script>


</body>

</html>