<div class="banner bottom_sep" style="background-image:url(<?= base_url(); ?>assets/front/img/slider/slider-photo.png)">
    <div class="item_container_align" style="background-image: linear-gradient(270deg, rgba(0, 171, 215, 0) 0%,rgba(0, 171, 215, 0.2) 60%, #000000 100%);">
        <p>Kontakt</p>
    </div>
</div>
<div class="box_flex flex_c main_padding">
    <div class="grid-2 gtab-1 bottom_sep" style="min-height:504px;max-width:1440px;">
        <div class="box_flex flex_c" style="min-height:500px;">
            <div class="work-photo-border">
                <div class="item_container_picture" style="max-width:642px;background-image:url(<?= base_url(); ?>assets/front/img/ms_photo_7.jpg)"></div>
            </div>
        </div>
        <div class="box_flex flex_c small_padding">
            <div class="grid-1" style="max-width:540px;">
                <div class="box_flex">
                    <p class="second_header">NAWIĄŻ WSPÓŁPRACĘ</p>
                </div>
                <p class="content_with_padding">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies mauris est, ac consectetur risus dictum at. Suspendisse scelerisque et lacus vitae ultrices. Fusce pulvinar odio eget purus molestie ornare. In ultricies dolor enim, vitae placerat enim sollicitudin sed. Phasellus consequat tortor vel mi pellentesque, non blandit erat malesuada. Nunc imperdiet leo eget purus rhoncus egestas. Aenean tincidunt sapien facilisis dui euismod porta. Vivamus gravida turpis ac turpis viverra fusce.</p>
            </div>
        </div>
    </div>
</div>
<div class="box_center main_padding">
    <div class="contact_form pt-3">
        <h2 class="contact_title">MAJĄ PAŃSTWO PYTANIA? ZAPRASZAMY DO KONTAKTU!</h2>
        <form action="<?= base_url(); ?>mailer/send" method="POST" id="contact-form">
            <div class="grid-2 gtab-1">
                <div class="item_container_center small_padding">
                    <div class="grid-1">
                        <input required type="subject" id="defaultContactFormSubject" class="contact_input" style="margin-bottom:40px;" placeholder="Napisz temat wiadomości" name="subject">
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
                    <p style="font-weight:100;">Wyrażam zgodę na przetwarzanie danych osobowych podanych w formularzu. Podanie danych jest dobrowolne. Administratorem podanych przez Pana/ Panią danych osobowych jest Ad Awards Sp. J z siedzibą w Legnicy, ul. Fabryczna 22. Pana/Pani dane będą przetwarzane w celach związanych z udzieleniem odpowiedzi, przedstawieniem oferty usług Ad Awards Sp. J oraz świadczeniem usług przez administratora danych. Przysługuje Panu/Pani prawo dostępu do treści swoich danych oraz ich poprawiania.</p>
                </div>
                <div class="item_container_center">
                    <input type="checkbox" class="form-check-input" name="rodo2" id="rodo2">
                    <label for="rodo2">
                    </label>
                </div>
                <div class="item_container_center small_padding">
                    <p style="font-weight:100;">Wyrażam zgodę na otrzymywanie informacji handlowych od Ad Awards Sp. J dotyczących jej oferty poprzez wiadomości elektroniczne z wykorzystaniem adresu email podanego w formularzu, a także zgodę na przetwarzanie moich danych osobowych w tym celu przez Ad Awards Sp. J oraz w celach promocji, reklamy i badania rynku.</p>
                </div>
                <div class="item_container_center">
                    <input type="checkbox" class="form-check-input" name="rodo3" id="rodo3">
                    <label for="rodo3">
                    </label>
                </div>
                <div class="item_container_center small_padding">
                    <p style="font-weight:100;">Wyrażam zgodę na otrzymywanie informacji handlowych od Ad Awards Sp. J dotyczących jej oferty w szczególności poprzez połączenia telefoniczne lub sms z wykorzystaniem numeru telefonu podanego w formularzu, a także zgodę na przetwarzanie moich danych osobowych w tym celu przez Ad Awards Sp. J oraz w celach promocji, reklamy i badania rynku.</p>
                </div>
                <div class="item_container_center py-3">
                    <button type="submit" class="btn_JS">Wyślij Wiadomość</button>
                </div>
            </div>
        </form>
    </div>
</div>