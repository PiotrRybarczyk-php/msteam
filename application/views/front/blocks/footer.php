</main>
<footer>
    <div class="grid-12 main_padding" style="min-height:455px;padding-top:50px;">
        <div class="item_container size-5 tab_size-6 mob_size-12">
            <div class="item_container" style="min-height:85px;">
                <p style="font-size:20px;font-weight:600;opacity:1;">O firmie</p>
            </div>
            <div class="item_container" style="min-height:165px;">
                <p style="font-size:20px;font-weight:400;text-transform:uppercase;opacity:1;">SIEDZIBA W POLSCE</p>
                <p><?= $contact->address . ' ' . $contact->zip_code . ' ' . $contact->city; ?></p>
                <p>NIP <?= $contact->NIP; ?>, REGON <?= $contact->REGON; ?> , KRS <?= $contact->KRS; ?></p>
                <p>tel. + <?= $contact->phone1; ?>, fax.+ <?= $contact->phone3; ?></p>
                <p>email: <?= $contact->email1; ?></p>
            </div>
            <div class="item_container" style="min-height:150px;">
                <p style="font-size:20px;font-weight:400;text-transform:uppercase;opacity:1;">ODDZIAŁ W NIEMCZECH</p>
                <p><?= $contact->address2; ?></p>
                <p><?= $contact->label2; ?>: <?= $contact->phone2 ?></p>
                <p><?= $contact->phone4; ?></p>
                <p>email: <?= $contact->email2; ?></p>
            </div>
        </div>
        <div class="item_container size-3 tab_size-3 mob_size-6">
            <div class="item_container" style="height:85px;">
                <p style="font-size:20px;font-weight:600;opacity:1;">Ważne Informacje</p>
            </div>
            <div class="item_container" style="height:65px;">
                <a class="footer_link" href="<?php echo base_url(); ?>uploads/<?= $settings->privace;  ?>" target="_blank">
                    <p style="font-size:20px;">Polityka RODO</p>
                </a>
            </div>
            <div class="item_container" style="height:65px;">
                <a class="footer_link" href="<?= base_url('kontakt'); ?>">
                    <p style="font-size:20px;"><?= $subpages[4]->title; ?></p>
                </a>
            </div>
        </div>
        <div class="item_container size-1 tab_size-3 mob_size-6">
            <div class="item_container" style="height:85px;">
                <p style="font-size:20px;font-weight:600;opacity:1;">Loren Ipsum</p>
            </div>
            <div class="item_container" style="height:65px;">
                <a class="footer_link" href="<?= base_url('aktualnosci'); ?>">
                    <p style="font-size:20px;"><?= $subpages[5]->title; ?></p>
                </a>
            </div>
            <div class="item_container" style="height:65px;">
                <a class="footer_link" href="<?= base_url('praca'); ?>">
                    <p style="font-size:20px;"><?= $subpages[3]->title; ?></p>
                </a>
            </div>
            <div class="item_container" style="height:65px;">
                <a class="footer_link" href="<?= base_url('oferty'); ?>">
                    <p style="font-size:20px;">Oferta</p>
                </a>
            </div>
            <div class="item_container" style="height:65px;">
                <a class="footer_link" href="<?= base_url('realizacje'); ?>">
                    <p style="font-size:20px;"><?= $subpages[2]->title; ?></p>
                </a>
            </div>
        </div>
        <div class="box_flex flex_mob flex_align_c size-3 tab_size-12">
            <a href="<?= $settings->fb_link; ?>" class="social_icon"><i class="footer_icon"><img src="<?= base_url(); ?>assets/front/icons/fb.svg"></i></a>
            <a href="<?= $settings->tw_link; ?>" class="social_icon"><i class="footer_icon"><img src="<?= base_url(); ?>assets/front/icons/tw.svg"></i></a>
            <a href="<?= $settings->vi_link; ?>" class="social_icon"><i class="footer_icon"><img src="<?= base_url(); ?>assets/front/icons/vi.svg"></i></a>
            <a href="<?= $settings->xi_link; ?>" class="social_icon"><i class="footer_icon"><img src="<?= base_url(); ?>assets/front/icons/xi.svg"></i></a>
            <a href="<?= $settings->pe_link; ?>" class="social_icon"><i class="footer_icon"><img src="<?= base_url(); ?>assets/front/icons/pe.svg"></i></a>
        </div>
    </div>
    <div class="box_flex main_padding copyright">
        <p style="width:50%">Copyright by <?= $contact->company; ?> 2021</p>
        <p style="width:50%;text-align:right;">Created with love by AD Awards</p>
    </div>
</footer>
<script type="text/javascript" src="<?= assets(); ?>js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?= assets(); ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= assets(); ?>dist/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?= assets(); ?>js/lc_lightbox.lite.js"></script>
<script type="text/javascript" src="<?= assets(); ?>js/lightbox.js"></script>
<script type="text/javascript" src="<?= assets(); ?>js/qanim.js"></script>
<?php if ($cp == 'kontakt') : ?><script src="https://www.google.com/recaptcha/api.js?render=<?= $settings->captcha ?>"></script> <?php endif; ?>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js"></script>

<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('<?= $settings->captcha ?>', {
            action: 'homepage'
        }).then(function(token) {

        });
    });
</script>
<script>
    window.addEventListener("load", function() {
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "<?= $settings->first_color; ?>",
                    "text": "#000"
                },
                "button": {
                    "background": "#eee",
                    "text": "#1C2331!important"
                }
            },
            "type": "opt-out",
            "content": {
                "message": "Nasza strona internetowa korzysta z plików cookie. Dzięki temu możemy zapewnić naszym użytkownikom satysfakcjonujące wrażenia z przeglądania naszej witryny i jej prawidłowe funkcjonowanie.",
                "dismiss": "Rozumiem",
                "deny": "",
                "allow": "Rozumiem",
                "link": "Czytaj więcej...",
                "href": "<?php echo base_url(); ?>uploads/<?= $settings->privace;  ?>"
            }
        })
    });
</script>
<?php if ($cp == 'kontakt') : ?>

    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('<?= $settings->captcha ?>', {
                action: 'homepage'
            }).then(function(token) {

            });
        });
    </script>
    <script type="text/javascript">
        $('#contact-form').submit(function(event) {
            event.preventDefault();
            var email = $('#email').val();

            grecaptcha.ready(function() {
                grecaptcha.execute('<?= $settings->captcha ?>', {
                    action: 'mailer/send'
                }).then(function(token) {
                    $('#contact-form').prepend('<input type="hidden" name="token" value="' + token + '">');
                    $('#contact-form').unbind('submit').submit();
                });;
            });
        });
    </script>
<?php endif; ?>

</body>

</html>