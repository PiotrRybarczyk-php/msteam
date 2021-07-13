        <?php $c = 0; ?>
        <section>
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <?php foreach ($slider as $slide) : ?>
                        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="<?= $c; ?>" class="<?php if ($c == 0) echo 'active'; ?>" aria-current="true" aria-label="Slide <?= $c + 1; ?>"></button>
                        <?php $c++; ?>
                    <?php endforeach; ?>
                    <?php $c = 0; ?>
                </div>
                <div class="carousel-inner">
                    <?php foreach ($slider as $slide) : ?>
                        <?php $c++; ?>
                        <div class="carousel-item <?php if ($c == 1) echo 'active'; ?>">
                            <div class="carousel-photo" style="background-image: url(<?= base_url('uploads/') . $slide->photo; ?>">
                                <div class="carousel-content d-md-block">
                                    <h1><?= $slide->title; ?></h1>
                                    <div><?= $slide->subtitle; ?></div>
                                    <a href="<?= base_url() . $slide->link; ?>"><?= $slide->button; ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-control-prev d-none d-md-block" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-none d-md-block" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="header-section">
                    <div class="separator-line"></div>
                    <div class="header-title">tak działamy</div>
                    <div class="separator-line"></div>
                </div>
                <div class="content-section">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tempus odio ut arcu euismod consectetur. Etiam fermentum enim sit amet dolor consequat efficitur. Pellentesque feugiat odio quis placerat rutrum. Aenean et tincidunt massa. Duis accumsan, odio eu vestibulum pharetra, nisi augue pulvinar ipsum, congue hendrerit nisi turpis vehicula diam. Phasellus posuere eleifend diam in malesuada. Donec euismod nunc sed dignissim bibendum. Integer id justo in erat pharetra venenatis viverra ac elit. Praesent sodales augue sed placerat commodo. Sed nec dictum ante. Nulla in lobortis risus lectus.
                </div>
            </div>
            <div class="grid-1 main_padding">
                <div class="grid-3 gtab-1 mb-5">
                    <div class="item_container_center small_padding">
                        <div class="absolute_el" style="top:0px;left:0px;"><span class="line_a_h_black"></span><span class="line_a_h_cyan"></span><span class="line_a_v_black"></span></div>
                        <div class="offer-photo-border">
                            <div class="offer-photo" style="background-image: url(<?= base_url(); ?>assets/front/img/ms_photo_2.jpg);">
                                <div class="img_overlay">
                                    <p>Sieci i Instalacje Elektryczne</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item_container_center tab_show my-4">
                        <a class="blank" href="#"><button class="btn_JS">Sprawdź Ofertę</button></a>
                    </div>
                    <div class="item_container_center small_padding">
                        <div class="offer-photo-border">
                            <div class="offer-photo" style="background-image: url(<?= base_url(); ?>assets/front/img/ms_photo_10.jpg);">
                                <div class="img_overlay">
                                    <p>Fotowoltaika</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item_container_center tab_show my-4">
                        <a class="blank" href="#"><button class="btn_JS">Sprawdź Ofertę</button></a>
                    </div>
                    <div class="item_container_center small_padding">
                        <div class="absolute_el" style="bottom:0px;right:0px;"><span class="line_b_h_black"></span><span class="line_b_v_cyan"></span><span class="line_b_v_black"></span></div>
                        <div class="offer-photo-border">
                            <div class="offer-photo" style="background-image: url(<?= base_url(); ?>assets/front/img/ms_photo_5.jpg);">
                                <div class="img_overlay">
                                    <p>Roboty Ziemne</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item_container_center tab_show my-4">
                        <a class="blank" href="#"><button class="btn_JS">Sprawdź Ofertę</button></a>
                    </div>
                </div>
                <div class="grid-3 gtab-1 mt-5 tab_hide">
                    <div class="item_container_center">
                        <a class="blank" href="#"><button class="btn_JS">Sprawdź Ofertę</button></a>
                    </div>
                    <div class="item_container_center">
                        <a class="blank" href="#"><button class="btn_JS">Sprawdź Ofertę</button></a>
                    </div>
                    <div class="item_container_center">
                        <a class="blank" href="#"><button class="btn_JS">Sprawdź Ofertę</button></a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="header-section">
                    <div class="separator-line"></div>
                    <div class="header-title">JESTEŚMY RENOMOWANYM WYKONAWCĄ INSTALACJI ELEKTRYCZNYCH</div>
                    <div class="separator-line"></div>
                </div>
            </div>
            <div class="grid-2 gtab-1 main_padding">
                <div class="item_container">
                    <div class="inner_container_1 small_padding">
                        <div class="absolute_el tab_hide" style="bottom:0px;right:0px;"><span class="line_b_h_black"></span><span class="line_b_v_cyan"></span><span class="line_b_v_black"></span></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus efficitur scelerisque posuere. Pellentesque ultrices semper velit nec cursus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed et porttitor nibh, eget porta sapien. Pellentesque elementum dolor risus, varius pellentesque odio volutpat id. Ut nec elit et enim imperdiet tempus id nec ipsum. Suspendisse velit ex, lacinia sit amet feugiat ac, gravida eget dui. Nunc faucibus condimentum magna sed luctus. Nullam luctus quam metus, eu accumsan lectus fermentum et. Nam ac varius enim, ut porttitor leo. Curabitur imperdiet diam non mattis feugiat.</p>
                        <p>Vivamus nec nisl eros. Ut pellentesque nulla feugiat metus rutrum, vitae vestibulum felis faucibus. Morbi nec magna non nisl ornare lobortis. Nunc tortor sapien, dignissim at congue ac, feugiat id nunc. Aenean at augue et diam ultrices congue. Donec viverra erat malesuada massa sollicitudin mollis. Donec interdum ullamcorper tellus, ac pulvinar diam varius varius nulla.V</p>
                        <div class="item_flex flex_r tab_hide"><a class="blank" href="#"><button class="btn_JS">Poznaj Nas</button></a></div>
                    </div>
                </div>
                <div class="item_container_align small_padding">
                    <div class="offer-photo" style="background-image: url(<?= base_url(); ?>assets/front/img/ms_photo_7.jpg);"></div>
                </div>
                <div class="item_container_center tab_show mt-5"><a class="blank" href="#"><button class="btn_JS">Poznaj Nas</button></a></div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="header-section">
                    <div class="separator-line"></div>
                    <div class="header-title">FACHOWI I KOMPETENTNI</div>
                    <div class="separator-line"></div>
                </div>
                <div class="content-section">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tempus odio ut arcu euismod consectetur. Etiam fermentum enim sit amet dolor consequat efficitur. Pellentesque feugiat odio quis placerat rutrum. Aenean et tincidunt massa. Duis accumsan, odio eu vestibulum pharetra, nisi augue pulvinar ipsum, congue hendrerit nisi turpis vehicula diam. Phasellus posuere eleifend diam in malesuada. Donec euismod nunc sed dignissim bibendum. Integer id justo in erat pharetra venenatis viverra ac elit. Praesent sodales augue sed placerat commodo. Sed nec dictum ante. Nulla in lobortis risus lectus.
                </div>
            </div>
            <div class="box_center main_padding">
                <div class="grid-4 gtab-2 gmob-1">
                    <div class="item_container small_padding">
                        <div class="item_container_center"><span class="blue_circle"><img class="circle_icon" src="<?= base_url(); ?>assets/front/icons/quality.svg"></span></div>
                        <div class="item_container_center">
                            <p class="tile_header">SYSTEM ZARZĄDZANIA JAKOŚCIĄ</p>
                        </div>
                        <div class="item_container_center">
                            <p class="tile_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis elit vitae nisi finibus commodo. Donec in elit venenatis, lacinia orci id, tempus neque. Cras molestie mauris non dignissim ultrices. Etiam et turpis eu mauris varius elementum. Aliquam at arcu id massa malesuada laoreet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas convallis nisi sed nibh egestas, a eleifend lacus gravida. Cras gravida fringilla metus, et pharetra risus sit.</p>
                        </div>
                    </div>
                    <div class="item_container small_padding">
                        <div class="item_container_center"><span class="blue_circle"><img class="circle_icon" src="<?= base_url(); ?>assets/front/icons/permission.svg"></span></div>
                        <div class="item_container_center">
                            <p class="tile_header">Uprawnienia</p>
                        </div>
                        <div class="item_container_center">
                            <p class="tile_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis elit vitae nisi finibus commodo. Donec in elit venenatis, lacinia orci id, tempus neque. Cras molestie mauris non dignissim ultrices. Etiam et turpis eu mauris varius elementum. Aliquam at arcu id massa malesuada laoreet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas convallis nisi sed nibh egestas, a eleifend lacus gravida. Cras gravida fringilla metus, et pharetra risus sit.</p>
                        </div>
                    </div>
                    <div class="item_container small_padding">
                        <div class="item_container_center"><span class="blue_circle"><img class="circle_icon" src="<?= base_url(); ?>assets/front/icons/permission.svg"></span></div>
                        <div class="item_container_center">
                            <p class="tile_header">Uprawnienia</p>
                        </div>
                        <div class="item_container_center">
                            <p class="tile_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis elit vitae nisi finibus commodo. Donec in elit venenatis, lacinia orci id, tempus neque. Cras molestie mauris non dignissim ultrices. Etiam et turpis eu mauris varius elementum. Aliquam at arcu id massa malesuada laoreet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas convallis nisi sed nibh egestas, a eleifend lacus gravida. Cras gravida fringilla metus, et pharetra risus sit.</p>
                        </div>
                    </div>
                    <div class="item_container small_padding">
                        <div class="item_container_center"><span class="blue_circle"><img class="circle_icon" src="<?= base_url(); ?>assets/front/icons/certificate.svg"></span></div>
                        <div class="item_container_center">
                            <p class="tile_header">CERTYFIKAT JAKOŚCI</p>
                        </div>
                        <div class="item_container_center">
                            <p class="tile_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis elit vitae nisi finibus commodo. Donec in elit venenatis, lacinia orci id, tempus neque. Cras molestie mauris non dignissim ultrices. Etiam et turpis eu mauris varius elementum. Aliquam at arcu id massa malesuada laoreet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas convallis nisi sed nibh egestas, a eleifend lacus gravida. Cras gravida fringilla metus, et pharetra risus sit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="header-section">
                    <div class="separator-line"></div>
                    <div class="header-title">DO NASZYCH EKIP POSZUKUJEMY</div>
                    <div class="separator-line"></div>
                </div>
            </div>
            <div class="grid-2 gtab-1 main_padding" style="min-height:504px;">
                <div class="box_flex flex_mob" style="min-height:500px;">
                    <div class="item_container_picture" style="max-width:642px;background-image:url(<?= base_url(); ?>assets/front/img/ms_photo_9.jpg)"></div>
                </div>
                <div class="box_flex flex_mob small_padding">
                    <div class="grid-1" style="max-width:640px;">
                        <div class="box_flex">
                            <div class="absolute_el" style="top:70px;left:0px;"><span class="line_a_h_black"></span><span class="line_a_h_cyan"></span><span class="line_a_v_black"></span></div>
                            <p class="second_header">STANOWISKO</p>
                        </div>
                        <p class="content_with_padding">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus in sodales tellus, quis egestas lorem. Quisque sit amet risus suscipit, aliquam enim ac, rhoncus diam. In faucibus nibh sed sem efficitur, in dapibus sapien venenatis. Sed odio ante, maximus nec nisi ac, dapibus aliquam nibh. Duis consequat luctus felis vitae hendrerit. Nam mattis ultricies fermentum. Nullam ullamcorper elit proin.</p>
                        <div class="grid-2 gmob-1" style="max-width:504px;">
                            <div class="item_container_center mb-1"><a class="blank" href="#"><button class="btn_static">Kontakt</button></a></div>
                            <div class="item_container_center mb-1"><a class="blank" href="#"><button class="btn_static">Zobacz Więcej Ofert</button></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="header-section">
                    <div class="separator-line"></div>
                    <div class="header-title">AKTUALNOŚCI</div>
                    <div class="separator-line"></div>
                </div>
                <div class="content-section" style="text-align:center;">
                    W naszej zakładce przeczytasz o aktualnościach w branży o realizacjach i doświadczeniach oraz o naszej obecności w środowisku lokalnym
                </div>
            </div>
            <div class="grid-2 gtab-1 main_padding" style="min-height:504px;">
                <div class="box_flex flex_mob_l small_padding">
                    <div class="grid-1" style="max-width:520px;">
                        <div class="box_flex">
                            <p class="second_header">NOWE PRZEPISY DLA BRANŻY INSTALATORSKIEJ</p>
                        </div>
                        <p class="content_with_padding">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus in sodales tellus, quis egestas lorem. Quisque sit amet risus suscipit, aliquam enim ac, rhoncus diam. In faucibus nibh sed sem efficitur, in dapibus sapien venenatis. Sed odio ante, maximus nec nisi ac, dapibus aliquam nibh. Duis consequat luctus felis vitae hendrerit. Nam mattis ultricies fermentum. Nullam ullamcorper elit proin.</p>
                        <div class="box_flex flex_mob tab_hide"><a class="blank" href="#"><button class="btn_static">Czytaj Więcej</button></a></div>
                    </div>
                </div>
                <div class="box_flex flex_mob_l" style="min-height:500px;">
                    <div class="item_container_picture" style="max-width:642px;background-image:url(<?= base_url(); ?>assets/front/img/ms_photo_6.jpg)"></div>
                </div>
                <div class="box_flex flex_mob tab_show mt-1"><a class="blank" href="#"><button class="btn_static">Czytaj Więcej</button></a></div>
            </div>
        </section>
        <section style="margin-bottom:140px">
            <div class="container">
                <div class="header-section">
                    <div class="separator-line"></div>
                    <div class="header-title">WSPÓŁPRACOWALI Z NAMI</div>
                    <div class="separator-line"></div>
                </div>
                <div class="content-section" style="text-align:center;">
                    Istniejemy na rynku od 1992 roku. W tym czasie wykonaliśmy naprawdę wiele realizacji. Zobacz nasze projekty i kontrahentów
                </div>
            </div>
            <div class="grid-1 main_padding">
                <div class="grid-3 gtab-1 mb-5">
                    <div class="item_container_center small_padding">
                        <div class="absolute_el" style="top:0px;left:0px;"><span class="line_a_h_black"></span><span class="line_a_h_cyan"></span><span class="line_a_v_black"></span></div>
                        <div class="offer-photo-border">
                            <div class="offer-photo" style="background-image: url(<?= base_url(); ?>assets/front/img/ms_photo_2.jpg);height:21vw;">
                                <div class="img_overlay">
                                    <div class="item_container">
                                        <p class="small_content" style="text-transform:lowercase;">Wykonanie instalacji elektrycznej na terenie</p>
                                        <p class="inner_header">KGHM GŁOGÓW</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item_container_center small_padding">
                        <div class="offer-photo-border">
                            <div class="offer-photo" style="background-image: url(<?= base_url(); ?>assets/front/img/ms_photo_13.jpg);height:21vw;">
                                <div class="img_overlay">
                                    <div class="item_container">
                                        <p class="small_content" style="text-transform:lowercase;">Modernizacja oświetlenia drogowego</p>
                                        <p class="inner_header">Miasto Jawor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item_container_center small_padding">
                        <div class="absolute_el" style="bottom:0px;right:0px;"><span class="line_b_h_black"></span><span class="line_b_v_cyan"></span><span class="line_b_v_black"></span></div>
                        <div class="offer-photo-border">
                            <div class="offer-photo" style="background-image: url(<?= base_url(); ?>assets/front/img/ms_photo_11.jpg);height:21vw;">
                                <div class="img_overlay">
                                    <div class="item_container">
                                        <p class="small_content" style="text-transform:lowercase;">Montaż instalacji PhotoVoltaicznej na stadionie piłkarskim</p>
                                        <p class="inner_header">FC Ingolstadt 04</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-1">
                    <div class="item_container_center">
                        <a class="blank" href="#"><button class="btn_JS">ZOBACZ INNE REALIZACJE</button></a>
                    </div>
                </div>
            </div>
        </section>