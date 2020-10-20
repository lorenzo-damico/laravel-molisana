<header>
  <div class="container">
    <div class="logo">
      <img src="{{ asset("images/logo-molisana.png") }}" alt="Logo molisana">
    </div>
    <nav class="header-navbar">
      <ul class="main-menu">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a class="active" href="{{ route('prodotti') }}">Prodotti</a></li>
        <li><a href="{{ route('news') }}">News</a></li>
      </ul>
    </nav>
  </div>
</header>
