<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>">
          <img class="nav_logo" src="<?= base_url('uploads/') . $logo->photo; ?>" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link <?php if ($cp == 'onas') {
                                    echo 'active';
                                  } ?>" href="<?= base_url('onas'); ?>"><?= $subpages[0]->title; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($cp == 'oferty' || $cp == 'oferta') {
                                    echo 'active';
                                  } ?>" href="<?= base_url('oferty'); ?>"><?= $subpages[1]->title; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($cp == 'realizacje') {
                                    echo 'active';
                                  } ?>" href="<?= base_url('realizacje'); ?>"><?= $subpages[2]->title; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($cp == 'praca') {
                                    echo 'active';
                                  } ?>" href="<?= base_url('praca'); ?>"><?= $subpages[3]->title; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($cp == 'kontakt') {
                                    echo 'active';
                                  } ?>" href="<?= base_url('kontakt'); ?>"><?= $subpages[4]->title; ?></a>
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