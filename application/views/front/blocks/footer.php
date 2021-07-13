</main>
<footer>
    <div class="grid-12 main_padding" style="min-height:455px;padding-top:50px;">
        <div class="item_container size-5 tab_size-6 mob_size-12">
            <div class="item_container" style="min-height:85px;">
                <p style="font-size:20px;font-weight:600;opacity:1;">O firmie</p>
            </div>
            <div class="item_container" style="min-height:165px;">
                <p style="font-size:20px;font-weight:400;text-transform:uppercase;opacity:1;">SIEDZIBA W POLSCE</p>
                <p>ul. Kościuszki 13, 59-400 Jawor</p>
                <p>NIP 6951530456, REGON 381991930 , KRS 0000761418</p>
                <p>tel. + 48 76 87 03 651, fax.+ 48 76 87 03 651</p>
                <p>email: biuro@msteam.com.pl</p>
            </div>
            <div class="item_container" style="min-height:150px;">
                <p style="font-size:20px;font-weight:400;text-transform:uppercase;opacity:1;">ODDZIAŁ W NIEMCZECH</p>
                <p>Oberebaustr 22, 90478 Nürnberg</p>
                <p>mobile: 015221635562</p>
                <p>tel. + 48 76 87 03 651, fax.+ 48 76 87 03 651</p>
                <p>e-mail: i.dagalas@msteam.com.pl</p>
            </div>
        </div>
        <div class="item_container size-3 tab_size-3 mob_size-6">
            <div class="item_container" style="height:85px;">
                <p style="font-size:20px;font-weight:600;opacity:1;">Ważne Informacje</p>
            </div>
            <div class="item_container" style="height:65px;">
                <a class="blank" href="#">
                    <p style="font-size:20px;">Polityka RODO</p>
                </a>
            </div>
            <div class="item_container" style="height:65px;">
                <a class="blank" href="<?= base_url('kontakt'); ?>">
                    <p style="font-size:20px;"><?= $subpages[4]->title; ?></p>
                </a>
            </div>
        </div>
        <div class="item_container size-1 tab_size-3 mob_size-6">
            <div class="item_container" style="height:85px;">
                <p style="font-size:20px;font-weight:600;opacity:1;">Loren Ipsum</p>
            </div>
            <div class="item_container" style="height:65px;">
                <a class="blank" href="<?= base_url('aktualnosci'); ?>">
                    <p style="font-size:20px;"><?= $subpages[5]->title; ?></p>
                </a>
            </div>
            <div class="item_container" style="height:65px;">
                <a class="blank" href="<?= base_url('praca'); ?>">
                    <p style="font-size:20px;"><?= $subpages[3]->title; ?></p>
                </a>
            </div>
            <div class="item_container" style="height:65px;">
                <a class="blank" href="<?= base_url('oferty'); ?>">
                    <p style="font-size:20px;">Oferta</p>
                </a>
            </div>
            <div class="item_container" style="height:65px;">
                <a class="blank" href="<?= base_url('realizacje'); ?>">
                    <p style="font-size:20px;"><?= $subpages[2]->title; ?></p>
                </a>
            </div>
        </div>
        <div class="box_flex flex_mob flex_align_c size-3 tab_size-12">
            <i class="footer_icon"><img src="<?= base_url(); ?>assets/front/icons/fb.svg"></i>
            <i class="footer_icon"><img src="<?= base_url(); ?>assets/front/icons/tw.svg"></i>
            <i class="footer_icon"><img src="<?= base_url(); ?>assets/front/icons/vi.svg"></i>
            <i class="footer_icon"><img src="<?= base_url(); ?>assets/front/icons/xi.svg"></i>
            <i class="footer_icon"><img src="<?= base_url(); ?>assets/front/icons/pe.svg"></i>
        </div>
    </div>
    <div class="box_flex main_padding copyright">
        <p style="width:50%">Copyright by ms team 2021</p>
        <p style="width:50%;text-align:right;">Created with love by AD Awards</p>
    </div>
</footer>
<script src="<?= base_url(); ?>assets/front/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/front/js/scripts.js"></script>
</body>

</html>