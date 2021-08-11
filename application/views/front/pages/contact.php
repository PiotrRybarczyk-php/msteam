<?php
if (isset($_GET['link'])) {
    $subject = $_GET['link'];
} else {
    $subject = '';
}
?>
<div class="banner bottom_sep" style="background-position:center <?= $banner->position; ?>%;background-image:url(<?= base_url('uploads/') . $banner->photo; ?>);">
    <div class="item_container_align" style="background-image: linear-gradient(270deg, rgba(0, 171, 215, 0) 0%,rgba(0, 171, 215, 0.2) 60%, #000000 100%);">
        <p><?= $banner->title; ?></p>
    </div>
</div>
<?php if ($this->session->flashdata('success')) : ?>
    <div class="box_flex main_padding">
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong><?= $this->session->flashdata('success') ?></strong>
        </div>
    </div>
<?php endif; ?>
<?php if ($this->session->flashdata('error')) : ?>
    <div class="box_flex flex_mob_l main_padding">
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong><?= $this->session->flashdata('error') ?></strong>
        </div>
    </div>
<?php endif; ?>
<div class="box_flex flex_mob_l main_padding">
    <div class="grid-2 gtab-1 bottom_sep" style="min-height:504px;max-width:1440px;">
        <div class="box_flex flex_c" style="min-height:500px;">
            <div class="work-photo-border">
                <div class="item_container_picture" style="max-width:642px;background-image:url(<?= base_url('uploads/') . $about->photo; ?>);"></div>
            </div>
        </div>
        <div class="box_flex flex_c small_padding">
            <div class="grid-1" style="max-width:540px;">
                <div class="box_flex">
                    <p class="second_header"><?= $about->title; ?></p>
                </div>
                <div class="content_with_padding"><?= $about->description; ?></div>
            </div>
        </div>
    </div>
</div>

<div class="box_flex flex_mob_l main_padding">
<iframe src="<?= $contact->map; ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<div class="box_center main_padding" id="form">
    <div class="contact_form pt-3">
        <h2 class="contact_title">MAJĄ PAŃSTWO PYTANIA? ZAPRASZAMY DO KONTAKTU!</h2>
        <form action="<?= base_url(); ?>mailer/send" method="POST" id="contact-form">
            <div class="grid-2 gtab-1">
                <div class="item_container_center small_padding">
                    <div class="grid-1">
                        <input required type="subject" id="defaultContactFormSubject" class="contact_input" style="margin-bottom:40px;" placeholder="Napisz Temat Wiadomości" value="<?= $subject; ?>" name="subject">
                        <input required type="text" id="defaultContactFormName" class="contact_input" style="margin-bottom:40px;" placeholder="Imię i nazwisko" name="name">
                        <input required type="text" id="defaultContactFormPhone" class="contact_input" style="margin-bottom:40px;" placeholder="Telefon Kontakotwy" name="phone">
                        <input required type="email" id="defaultContactFormEmail" class="contact_input" style="margin-bottom:40px;" placeholder="Adres E-mailowy" name="email">
                    </div>
                </div>
                <div class="item_container_center small_padding" style="align-items:flex-start;">
                    <textarea required class="contact_area" id="exampleFormControlTextarea2" rows="7" placeholder="Treść pytania..." name="message"></textarea>
                </div>
            </div>
            <div class="grid-1">
                <div class="item_container_center">
                    <input type="checkbox" class="form-check-input" name="rodo1" id="rodo1">
                    <label for="rodo1">
                    </label>
                </div>
                <div class="item_container_center small_padding">
                    <p style="font-weight:100;"><?= $settings->rodo; ?></p>
                </div>
                <div class="item_container_center">
                    <input type="checkbox" class="form-check-input" name="rodo2" id="rodo2">
                    <label for="rodo2">
                    </label>
                </div>
                <div class="item_container_center small_padding">
                    <p style="font-weight:100;"><?= $settings->rodo_tel; ?></p>
                </div>
                <div class="item_container_center">
                    <input type="checkbox" class="form-check-input" name="rodo3" id="rodo3">
                    <label for="rodo3">
                    </label>
                </div>
                <div class="item_container_center small_padding">
                    <p style="font-weight:100;"><?= $settings->rodo_mail; ?></p>
                </div>
                <div class="item_container_center py-3">
                    <button type="submit" class="btn_JS">Wyślij Wiadomość</button>
                </div>
            </div>
        </form>
    </div>
</div>