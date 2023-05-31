<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SyntraPXL</title>
    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('custom.css') }}">
  </head>
  <body>

    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./images/logo.png" alt="logo" height="35" width="auto">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="{{Request::path() === '/' ? 'nav-link active active' : 'nav-link' }}" href="/">Home</a></li>
              <li class="nav-item"><a class="{{Request::path() === 'about' ? 'nav-link active active' : 'nav-link' }}" href="/about">About us</a></li>
              <li class="nav-item"><a class="{{Request::path() === 'faq' ? 'nav-link active active' : 'nav-link' }}" href="/faq">FAQ</a></li>
              <li class="nav-item"><a class="{{Request::path() === 'contact' ? 'nav-link active active' : 'nav-link' }}" href="/contact">Contact us</a></li>
            </ul>

            {{-- @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-primary">Logout</button>
                </form>
            @else
                <a class="nav-link" href="/login"><button class="btn btn-outline-primary">Log in</button></a>
                <span class="me-3"></span>
                <a class="nav-link" href="/register"><button class="btn btn-outline-primary">Sign up</button></a>
            @endauth --}}
               
            <a class="nav-link" href="/register"><button class="btn btn-outline-primary">Sign up</button></a>
        </div>
        </div>
      </nav>
      {{-- end navbar --}}

    <div class="container-fluid" style="min-height: 100vh;">
        @yield('content')
    </div>

    {{-- footer --}}
    <div class="container-fluid justify-content-center">
      <p class="text-muted text-center">© 2023 SyntraPXL</p>
    </div>
    {{-- end footer --}}

    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    {{-- end bootstrap js --}
  </body>
</html>