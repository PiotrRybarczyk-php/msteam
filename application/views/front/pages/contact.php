<?php
if (isset($_GET['link'])) {
    $subject = $_GET['link'];
} else {
    $subject = '';
}
?>
<div class="banner" style="background-position:center <?= $banner->position; ?>%;background-image:url(<?= base_url('uploads/') . $banner->photo; ?>);">
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
<div class="box_normal main_padding bottom_sep">
    <div class="grid-3 gtab-2">
        <div class="box_normal tab_size-2">
            <div class="contact_sb">
                <img class="contact_svg" src="<?= base_url('assets/front/icons/ms_map.svg') ?>">
                <div class="contact_card">
                    <div>
                        <h1><?= $contact->company; ?></h1>
                        <p><?= $contact->address ?></p>
                        <p><?= $contact->zip_code . ' ' . $contact->city; ?></p>
                    </div>
                </div>
            </div>
            <div class="contact_sb">
                <img class="contact_svg" src="<?= base_url('assets/front/icons/ms_phone.svg') ?>">
                <div class="contact_card">
                    <div>
                        <p>tel. <?= $contact->phone1; ?></p>
                        <p>fax. <?= $contact->phone3; ?></p>
                        <p>email: <?= $contact->email1; ?></p>
                    </div>
                </div>
            </div>

        </div>
        <div class="box_flex flex_c flex_align_c size-2">
            <div class="work-photo-border" style="height:383px;margin-top:100px;">
                <div class="item_container_picture" style="max-width:796px;background-image:url(<?= base_url('assets/front/img/ms_contact.jpg'); ?>);"></div>
            </div>
        </div>
    </div>
</div>
<div class="box_normal main_padding">
    <div class="grid-3 gtab-2">
        <div class="contact_form size-2 small_padding">
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
                    <div class="box_flex">
                        <div class="item_container_center" style="max-width:40px">
                            <input type="checkbox" class="form-check-input" name="rodo1" id="rodo1">
                            <label for="rodo1">
                            </label>
                        </div>
                        <div class="item_container_center small_padding">
                            <p style="font-weight:100;line-height:18px;"><?= $settings->rodo; ?></p>
                        </div>
                    </div>
                    <div class="box_flex">
                        <div class="item_container_center" style="max-width:40px">
                            <input type="checkbox" class="form-check-input" name="rodo2" id="rodo2">
                            <label for="rodo2">
                            </label>
                        </div>
                        <div class="item_container_center small_padding">
                            <p style="font-weight:100;line-height:18px;"><?= $settings->rodo_tel; ?></p>
                        </div>
                    </div>
                    <div class="box_flex">
                        <div class="item_container_center" style="max-width:40px">
                            <input type="checkbox" class="form-check-input" name="rodo3" id="rodo3">
                            <label for="rodo3">
                            </label>
                        </div>
                        <div class="item_container_center small_padding">
                            <p style="font-weight:100;line-height:18px;"><?= $settings->rodo_mail; ?></p>
                        </div>
                    </div>
                    <div class="item_container_center py-3">
                        <button type="submit" class="btn_JS">Wyślij Formularz</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="box_flex flex_c tab_size-2">
            <div class="work-photo-border" style="height:363px;max-width:532px;margin-top:100px;">
                <div class="item_container_picture"><iframe src="<?= $contact->map; ?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
            </div>
        </div>
    </div>
</div>