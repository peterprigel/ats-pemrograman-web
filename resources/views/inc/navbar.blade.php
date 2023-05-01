<nav class="navbar bg-dark fixed-top navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="
    @if (Auth::check())
        /dashboard
    @else
        /
    @endif
    ">
        <img src="{{asset("img/24thrift-logo-1080-white.png")}}" width="100">
    </a>
    {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> --}}
    
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav {{-- me-auto mb-2 mb-lg-0 --}} "> {{-- membuat content <ul> di kiri --}}
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/contact">KONTAK</a>
        </li>
      </ul>
      
      
      @if (Auth::check())
        <form action="/logout" class="d-flex me-auto mb-2 mb-lg-0">
          <button class="btn btn-light lokal-nav-margin" type="submit">Logout</button>
        </form>
      @else
        <form action="/login" class="d-flex me-auto mb-2 mb-lg-0">
          {{-- <input class="form-control me-2 lokal-nav-margin" type="search" placeholder="Search" aria-label="Search"> --}}
          <button class="btn btn-outline-light lokal-nav-margin" type="submit">Login</button>
        </form>
        <form action="/signup">
          <button class="btn btn-light lokal-nav-margin" type="submit">Sign up</button>
        </form>
      @endif
    </div>
  </div>
</nav>