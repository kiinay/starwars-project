<nav role="navigation" id="navigation" class="container">
  <a href="{{ url('/') }}">Accueil</a>
  <a href="{{ url('/category/1') }}">Lasers</a>
  <a href="{{ url('/category/2') }}">Casques</a>

  <span class="customers_actions">
    <a href="{{ url('/register') }}">inscription (client)</a>
    <a href="{{ url('/cart') }}">Panier</a>
  </span>
</nav>
