<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
  <nav
    class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
  >
    <a
      href=""
      class="navbar-brand font-weight-bold text-secondary"
      style="font-size: 40px"
    >
      <span class="text-primary">Noipunno Digital</span>
    </a>
    <button
      type="button"
      class="navbar-toggler"
      data-toggle="collapse"
      data-target="#navbarCollapse"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div
      class="collapse navbar-collapse justify-content-between"
      id="navbarCollapse"
    >
      <div class="navbar-nav font-weight-bold mx-auto py-0">
        <a href="{{route('landing')}}" class="nav-item nav-link active">Home</a>
        <a href="{{route('about')}}" class="nav-item nav-link">About</a>
        <a href="#" class="nav-item nav-link">Schools</a>
        <a href="#" class="nav-item nav-link">Contact</a>
      </div>
      <a href="{{route('noipunno')}}" target="_blank" class="btn btn-primary px-4">Get Started</a>
    </div>
  </nav>
</div>
<!-- Navbar End -->