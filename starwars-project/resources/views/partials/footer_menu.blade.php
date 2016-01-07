<div class="container">
  <a href="#">Mentions</a>
  <a href="#">Contact</a>
  <?php if (Auth::check()): ?>
  <a href="{{ url('/admin/dashboard') }}">Dashboard (admin)</a>
  <a href="{{ url('/auth/logout') }}">Logout (admin)</a>
  <?php else: ?>
  <a href="{{ url('/admin/dashboard') }}">Connexion (admin)</a>
  <?php endif ?>
</div>