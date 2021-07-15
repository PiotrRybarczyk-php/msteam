<div class="banner" style="background-position:center <?= $banner->position; ?>%;background-image:url(<?= base_url('uploads/') . $banner->photo; ?>);">
    <div class="item_container_align" style="background-image: linear-gradient(270deg, rgba(0, 171, 215, 0) 0%,rgba(0, 171, 215, 0.2) 60%, #000000 100%);">
        <p>aktualności</p>
    </div>
</div>
<section>
    <div class="container">
        <div class="header-section">
            <div class="separator-line"></div>
            <div class="header-title"><?= $blog->title; ?></div>
            <div class="separator-line"></div>
        </div>
    </div>
    <div class="box_flex flex_c main_padding bottom_sep">
        <div class="article-photo-border">
            <div class="item_container_picture" style="min-height:504px;background-image:url(<?= base_url('uploads/') . $blog->photo; ?>);"></div>
        </div>
    </div>
    <div class="box_normal main_padding ">
        <div class="grid-2 gtab-1">
            <div class="item_container">
                <div class="grid-1 tab_show_g" style="max-width:674px;">
                    <div class="box_flex">
                        <p class="second_header"><?= $blog->subtitle; ?></p>
                    </div>
                    <div class="content_with_padding" style="max-width:672px;"><?= $blog->description; ?></div>
                </div>
                <div class="article-photo-border bottom_sep">
                    <div class="item_container_picture" style="min-height:504px;background-image:url(<?= base_url('uploads/') . $blog->photo2; ?>);"></div>
                </div>
                <div class="article-photo-border bottom_sep">
                    <div class="item_container_picture" style="min-height:504px;background-image:url(<?= base_url('uploads/') . $blog->photo3; ?>);"></div>
                </div>
                <div class="box_flex flex_mob_l mob_show"><a class="blank" href="#"><button class="btn_static">Wróć</button></a></div>
            </div>
            <div class="box_flex flex_mob small_padding">
                <div class="grid-1 tab_hide" style="max-width:674px;">
                    <div class="box_flex">
                        <p class="second_header"><?= $blog->subtitle; ?></p>
                    </div>
                    <div class="content_with_padding" style="max-width:672px;"><?= $blog->description; ?></div>
                    <div class="box_flex flex_mob_l"><a class="blank" href="<?= base_url('aktualnosci'); ?>"><button class="btn_static">Wróć</button></a></div>
                </div>
            </div>
        </div>
    </div>
</section>