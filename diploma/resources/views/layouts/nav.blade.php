<div id='app'>
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item actives">
          <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/price">Price</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contacts">Contacts</a>
        </li>
        @if (Auth::check())
        <li class="nav-item">
          <a class="btn btn-primary ButtonNav" href="/logout">Logout</a>
        </li>
        @else
        <li class="nav-item">
          <a class="btn btn-primary ButtonNav" href="/login">Sign up</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary ButtonNav" href="/register">Register</a>
        </li>
        @endif
      </ul>
    </div>
  </nav>