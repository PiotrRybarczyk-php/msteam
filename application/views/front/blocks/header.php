<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>">
          <img class="nav_logo" src="<?= base_url(); ?>assets/front/img/logo/logo_ms_team.svg" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link <?php if ($cp == 'onas') {
                                    echo 'active';
                                  } ?>" href="<?= base_url('onas'); ?>">O nas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($cp == 'oferty' || $cp == 'oferta') {
                                    echo 'active';
                                  } ?>" href="<?= base_url('oferty'); ?>">Z nami zrealizujesz</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($cp == 'realizacje') {
                                    echo 'active';
                                  } ?>" href="<?= base_url('realizacje'); ?>">Realizacje</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($cp == 'praca') {
                                    echo 'active';
                                  } ?>" href="<?= base_url('praca'); ?>">Praca</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($cp == 'kontakt') {
                                    echo 'active';
                                  } ?>" href="<?= base_url('kontakt'); ?>">Kontakt</a>
            </li>
          </ul>
          <div class="mb-2">
            <div class="d-flex justify-content-center">
              <a href="#"><img src="<?= base_url(); ?>assets/front/icons/pl.svg" alt="" width="25"></a>
              <a href="#" class="mx-3"><img src="<?= base_url(); ?>assets/front/icons/eng.svg" alt="" width="25"></a>
              <a href="#"><img src="<?= base_url(); ?>assets/front/icons/de.svg" alt="" width="25"></a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main>