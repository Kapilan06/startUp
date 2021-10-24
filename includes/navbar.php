<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="contactUs.php">Contact Us</a>
      <a class="nav-item nav-link" href="career.php">Career</a>
      <?php if(!isset($_SESSION['UserData']['Username'])) : ?>
      <a class="nav-item nav-link" href="login1.php">Login</a>
      <?php else:?>
        <a class="nav-item nav-link" href="index1.php">Check Feedback</a>
        <a class="nav-item nav-link" href="logout.php">Logout</a>
      <?php endif; ?>
    </div>
  </div>
</nav>