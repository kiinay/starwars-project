<div class="container">
  <a href="{{ url('/legal') }}">Mentions</a>
  <a href="{{ url('/contact') }}">Contact</a>
  <?php if (Auth::check()): ?>
  <a href="{{ url('/admin/dashboard') }}">Dashboard</a>
    <a href="{{ url('/admin/history') }}">Historique</a>
  <a href="{{ url('/auth/logout') }}">Logout</a>
  <?php else: ?>
  <a href="{{ url('/admin/dashboard') }}">Connexion (admin)</a>
  <?php endif ?>
</div>