<nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="static/media/image/studio_brox_basic_pixel_light.png" alt="Bootstrap" width="auto" height="80">
    </a>
    <button class="navbar-toggler" onclick="toggleNavbarButton(this);" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <svg width="50" height="50" viewBox="0 0 100 100">
        <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
        <path class="line line2" d="M 20,50 H 80" />
        <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
      </svg>
    </button>
    <div class="collapse navbar-collapse fs-3" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex justify-content-around w-sm-50">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/?page=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/?page=about">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/?page=assets" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Assets
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item fs-4" href="/?page=assets">All</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item fs-4" href="/?page=assets&category=graphics">Graphics</a></li>
            <li><a class="dropdown-item fs-4" href="/?page=assets&category=music">Music</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/?page=contact">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <?php
        if (!isset($_SESSION['username'])) {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="/?page=signin">Sign In / Register</a>
          </li>
        <?php
        } else {
        ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/?page=assets" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item fs-4" href="/?page=accountInfo">My Account</a></li>
              <li><a class="dropdown-item fs-4" href="/?page=accountAssets">My Assets</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item fs-4" href="/?page=accountSettings">Settings</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item fs-4" href="/?page=signout">Signout</a></li>
            </ul>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav>