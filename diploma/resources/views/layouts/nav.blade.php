<div id='app'>
  <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
    <a class="navbar-brand" href="/"><h3>ELENA<span>BREZGER</span></h3></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item">
          <a class="nav-link" href="/services">DIENSTLEISTUNGEN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/price">PREIS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contacts">KONTAKTE</a>
        </li>
        @if (Auth::check())
        <li class="nav-item">
          <a class="btn btn-primary ButtonNav" href="/logout">LOGOUT</a>
        </li>
        @else
        <li class="nav-item">
          <a class="btn btn-primary ButtonNav" href="/login">SIGN UP</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary ButtonNav" href="/register">REGISTER</a>
        </li>
        @endif
      </ul>
    </div>
  </nav>