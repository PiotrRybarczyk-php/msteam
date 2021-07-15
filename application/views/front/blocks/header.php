<body>
  <script type="text/javascript">
    function changeLang(lang) {
      $.ajax({
        url: "<?php echo base_url(); ?>home/change/" + lang + "",
        success: function() {
          location.reload();
        }
      });
    }
  </script>

  <?php if ($_SESSION['lang'] != 'pl') : ?>
    <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({
          pageLanguage: 'pl',
          layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT
        }, 'google_translate_element');
      }
      jQuery('.lang-select').click(function() {
        var theLang = jQuery(this).attr('data-lang');
        jQuery('.goog-te-combo').val(theLang);
        window.location = jQuery(this).attr('href');
        location.reload();
      });
    </script>
  <?php endif; ?>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <style>
    .goog-te-banner-frame.skiptranslate {
      display: none !important;
    }
  </style>
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
              <a class="blank" href="#googtrans(pl|pl)" data-lang="en" onclick="changeLang('pl');"><img src="<?= base_url(); ?>assets/front/icons/pl.svg" alt="" width="25"></a>
              <a class="blank mx-3" href="#googtrans(pl|en)" data-lang="en" onclick="changeLang('en');"><img src="<?= base_url(); ?>assets/front/icons/eng.svg" alt="" width="25"></a>
              <a class="blank" href="#googtrans(pl|de)" data-lang="en" onclick="changeLang('de');"><img src="<?= base_url(); ?>assets/front/icons/de.svg" alt="" width="25"></a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main>