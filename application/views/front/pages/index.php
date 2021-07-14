        <?php
        $c = 0;
        $work_title = "";
        $work_desc = "";
        $work_photo = "";
        $blog_id = 0;
        $blog_title = "";
        $blog_desc = "";
        $blog_photo = "";
        foreach ($work as $work_item) {
            if ($work_item->title == $info[3]->work_link) {
                $work_title = $work_item->title;
                $work_desc = $work_item->description;
                $work_photo = $work_item->photo;
            }
        }
        foreach ($update as $blog_item) {
            if ($blog_item->title == $info[4]->update_link) {
                $blog_title = $blog_item->title;
                $blog_desc = $blog_item->description;
                $blog_photo = $blog_item->photo;
                $blog_id = $blog_item->id;
            }
        }
        ?>
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
                    <div class="header-title"><?= $info[0]->title; ?></div>
                    <div class="separator-line"></div>
                </div>
                <div class="content-section">
                    <?= textlim($info[0]->description, 600); ?>
                </div>
            </div>
            <div class="grid-1 main_padding">
                <div class="grid-3 gtab-1 mb-5">
                    <div class="item_container_center small_padding">
                        <div class="absolute_el" style="top:0px;left:0px;"><span class="line_a_h_black"></span><span class="line_a_h_cyan"></span><span class="line_a_v_black"></span></div>
                        <div class="offer-photo-border">
                            <div class="offer-photo" style="background-image: url(<?= base_url('uploads/') . $offer[1]->photo; ?>);">
                                <div class="img_overlay">
                                    <p><?= $offer[1]->title; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item_container_center tab_show my-4">
                        <a class="blank" href="#"><button class="btn_JS">Sprawdź Ofertę</button></a>
                    </div>
                    <div class="item_container_center small_padding">
                        <div class="offer-photo-border">
                            <div class="offer-photo" style="background-image: url(<?= base_url('uploads/') . $offer[2]->photo; ?>);">
                                <div class="img_overlay">
                                    <p><?= $offer[2]->title; ?></p>
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
                            <div class="offer-photo" style="background-image: url(<?= base_url('uploads/') . $offer[3]->photo; ?>);">
                                <div class="img_overlay">
                                    <p><?= $offer[3]->title; ?></p>
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
                    <div class="header-title"><?= $info[1]->title; ?></div>
                    <div class="separator-line"></div>
                </div>
            </div>
            <div class="grid-2 gtab-1 main_padding">
                <div class="item_container">
                    <div class="inner_container_1 small_padding">
                        <div class="absolute_el tab_hide" style="bottom:0px;right:0px;"><span class="line_b_h_black"></span><span class="line_b_v_cyan"></span><span class="line_b_v_black"></span></div>
                        <?= textlim($info[1]->description, 1000); ?>
                        <div class="item_flex flex_r tab_hide"><a class="blank" href="<?= $info[1]->link; ?>"><button class="btn_JS"><?= $info[1]->button; ?></button></a></div>
                    </div>
                </div>
                <div class="item_container_align small_padding">
                    <div class="offer-photo" style="background-image: url(<?= base_url('uploads/') . $info[1]->photo;  ?>);"></div>
                </div>
                <div class="item_container_center tab_show mt-5"><a class="blank" href="<?= $info[1]->link; ?>"><button class="btn_JS"><?= $info[1]->button; ?></button></a></div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="header-section">
                    <div class="separator-line"></div>
                    <div class="header-title"><?= $info[2]->title; ?></div>
                    <div class="separator-line"></div>
                </div>
                <div class="content-section">
                    <?= $info[2]->description; ?>
                </div>
            </div>
            <div class="box_center main_padding">
                <div class="grid-4 gtab-2 gmob-1">
                    <div class="item_container small_padding">
                        <div class="item_container_center"><span class="blue_circle"><img class="circle_icon" src="<?= base_url('uploads/') . $tile[0]->photo; ?>"></span></div>
                        <div class="item_container_center">
                            <p class="tile_header"><?= $tile[0]->title; ?></p>
                        </div>
                        <div class="item_container_center">
                            <div class="tile_content"><?= textlim($tile[0]->description, 500); ?></div>
                        </div>
                    </div>
                    <div class="item_container small_padding">
                        <div class="item_container_center"><span class="blue_circle"><img class="circle_icon" src="<?= base_url('uploads/') . $tile[1]->photo; ?>"></span></div>
                        <div class="item_container_center">
                            <p class="tile_header"><?= $tile[1]->title; ?></p>
                        </div>
                        <div class="item_container_center">
                            <div class="tile_content"><?= textlim($tile[1]->description, 500); ?></div>
                        </div>
                    </div>
                    <div class="item_container small_padding">
                        <div class="item_container_center"><span class="blue_circle"><img class="circle_icon" src="<?= base_url('uploads/') . $tile[2]->photo; ?>"></span></div>
                        <div class="item_container_center">
                            <p class="tile_header"><?= $tile[2]->title; ?></p>
                        </div>
                        <div class="item_container_center">
                            <div class="tile_content"><?= textlim($tile[2]->description, 500); ?></div>
                        </div>
                    </div>
                    <div class="item_container small_padding">
                        <div class="item_container_center"><span class="blue_circle"><img class="circle_icon" src="<?= base_url('uploads/') . $tile[3]->photo; ?>"></span></div>
                        <div class="item_container_center">
                            <p class="tile_header"><?= $tile[3]->title; ?></p>
                        </div>
                        <div class="item_container_center">
                            <div class="tile_content"><?= textlim($tile[3]->description, 500); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="header-section">
                    <div class="separator-line"></div>
                    <div class="header-title"><?= $info[3]->title; ?></div>
                    <div class="separator-line"></div>
                </div>
            </div>
            <div class="grid-2 gtab-1 main_padding" style="min-height:504px;">
                <div class="box_flex flex_mob" style="min-height:500px;">
                    <div class="item_container_picture" style="max-width:642px;background-image:url(<?= base_url('uploads/'); ?><?= $work_photo; ?>)"></div>
                </div>
                <div class="box_flex flex_mob small_padding">
                    <div class="grid-1" style="max-width:640px;">
                        <div class="box_flex">
                            <div class="absolute_el" style="top:70px;left:0px;"><span class="line_a_h_black"></span><span class="line_a_h_cyan"></span><span class="line_a_v_black"></span></div>
                            <p class="second_header"><?= $work_title; ?></p>
                        </div>
                        <div class="content_with_padding">
                            <?= textlim($work_desc, 400); ?>
                        </div>
                        <div class="grid-2 gmob-1" style="max-width:504px;">
                            <div class="item_container_center mb-1"><a class="blank" href="kontakt"><button class="btn_static">Kontakt</button></a></div>
                            <div class="item_container_center mb-1"><a class="blank" href="praca"><button class="btn_static">Zobacz Więcej Ofert</button></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="header-section">
                    <div class="separator-line"></div>
                    <div class="header-title"><?= $info[4]->title; ?></div>
                    <div class="separator-line"></div>
                </div>
                <div class="content-section" style="text-align:center;">
                    <?= $info[4]->subtitle; ?>
                </div>
            </div>
            <div class="grid-2 gtab-1 main_padding" style="min-height:504px;">
                <div class="box_flex flex_mob_l small_padding">
                    <div class="grid-1" style="max-width:520px;">
                        <div class="box_flex">
                            <p class="second_header"><?= $blog_title; ?></p>
                        </div>
                        <div class="content_with_padding">
                            <?= textlim($blog_desc, 400); ?>
                        </div>
                        <div class="box_flex flex_mob tab_hide"><a class="blank" href="wpis/<?= $blog_id; ?>/Artykul"><button class="btn_static"><?= $info[4]->button; ?></button></a></div>
                    </div>
                </div>
                <div class="box_flex flex_mob_l" style="min-height:500px;">
                    <div class="item_container_picture" style="max-width:642px;background-image:url(<?= base_url('uploads/'); ?><?= $blog_photo; ?>)"></div>
                </div>
                <div class="box_flex flex_mob tab_show mt-1"><a class="blank" href="wpis/<?= $blog_id; ?>/Artykul"><button class="btn_static"><?= $info[4]->button; ?></button></a></div>
            </div>
        </section>
        <section style="margin-bottom:140px">
            <div class="container">
                <div class="header-section">
                    <div class="separator-line"></div>
                    <div class="header-title"><?= $info[5]->title; ?></div>
                    <div class="separator-line"></div>
                </div>
                <div class="content-section" style="text-align:center;">
                    <?= $info[5]->subtitle; ?>
                </div>
            </div>
            <div class="grid-1 main_padding">
                <div class="grid-3 gtab-1 mb-5">
                    <div class="item_container_center small_padding">
                        <div class="absolute_el" style="top:0px;left:0px;"><span class="line_a_h_black"></span><span class="line_a_h_cyan"></span><span class="line_a_v_black"></span></div>
                        <div class="offer-photo-border">
                            <div class="offer-photo" style="background-image: url(<?= base_url('uploads/') . $project[0]->photo; ?>);height:21vw;">
                                <a href="<?= $project[0]->link; ?>" class="blank img_overlay">
                                    <div class="item_container">
                                        <p class="small_content" style="text-transform:lowercase;"><?= $project[0]->subtitle; ?></p>
                                        <p class="inner_header"><?= $project[0]->title; ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item_container_center small_padding">
                        <div class="offer-photo-border">
                            <div class="offer-photo" style="background-image: url(<?= base_url('uploads/') . $project[1]->photo; ?>);height:21vw;">
                                <a href="<?= $project[1]->link; ?>" class="blank img_overlay">
                                    <div class="item_container">
                                        <p class="small_content" style="text-transform:lowercase;"><?= $project[1]->subtitle; ?></p>
                                        <p class="inner_header"><?= $project[1]->title; ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item_container_center small_padding">
                        <div class="absolute_el" style="bottom:0px;right:0px;"><span class="line_b_h_black"></span><span class="line_b_v_cyan"></span><span class="line_b_v_black"></span></div>
                        <div class="offer-photo-border">
                            <div class="offer-photo" style="background-image: url(<?= base_url('uploads/') . $project[2]->photo; ?>);height:21vw;">
                                <a href="<?= $project[2]->link; ?>" class="blank img_overlay">
                                    <div class="item_container">
                                        <p class="small_content" style="text-transform:lowercase;"><?= $project[2]->subtitle; ?></p>
                                        <p class="inner_header"><?= $project[2]->title; ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-1">
                    <div class="item_container_center">
                        <a class="blank" href="<?= $info[5]->link; ?>"><button class="btn_JS"><?= $info[5]->button; ?></button></a>
                    </div>
                </div>
            </div>
        </section>