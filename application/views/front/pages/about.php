<?php
$blog_id = 0;
$blog_title = '';
$blog_desc = '';
$blog_photo = '';
foreach ($update as $blog_item) {
    if ($blog_item->title == $about->update_link) {
        $blog_title = $blog_item->title;
        $blog_desc = $blog_item->description;
        $blog_photo = $blog_item->photo;
        $blog_id = $blog_item->id;
    }
}
?>
<div class="banner" style="background-position:center <?= $banner->position; ?>%;background-image:url(<?= base_url('uploads/') . $banner->photo; ?>);">
    <div class="item_container_align" style="background-image: linear-gradient(270deg, rgba(0, 171, 215, 0) 0%,rgba(0, 171, 215, 0.2) 60%, #000000 100%);">
        <p><?= $banner->title; ?></p>
    </div>
</div>
<section>
    <div class="container">
        <div class="header-section">
            <div class="separator-line"></div>
            <div class="header-title"><?= $about->title; ?></div>
            <div class="separator-line"></div>
        </div>
    </div>
    <div class="box_flex flex_mob main_padding">
        <div class="grid-2 gtab-1 mb-5" style="min-height:504px;">
            <div class="box_flex flex_c small_padding">
                <div class="absolute_el" style="bottom:0px;right:0px;"><span class="line_b_h_black"></span><span class="line_b_v_cyan"></span><span class="line_b_v_black"></span></div>
                <div class="grid-1">
                    <div class="content_with_padding" style="max-width:682px;">
                        <?= $about->description; ?>
                    </div>
                </div>
            </div>
            <div class="box_flex flex_c" style="min-height:500px;">
                <div class="work-photo-border" style="max-height:520px;">
                    <div class="item_container_picture" style="max-width:642px;background-image:url(<?= base_url('uploads/') . $about->photo; ?>);"></div>
                </div>
            </div>
        </div>
    </div>
    <hr class="tab_show" style="margin-left:1.2vw;margin-right:1.2vw;">
</section>
<section class="bottom_sep">
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
                    <p class="second_header"><?= $blog_title; ?></p>
                </div>
                <div class="content_with_padding"><?= textlim($blog_desc, 400); ?></div>
                <div class="box_flex flex_mob tab_hide"><a class="blank" href="wpis/<?= $blog_id; ?>/Artukul"><button class="btn_static">Czytaj Więcej</button></a></div>
            </div>
        </div>
        <div class="box_flex flex_mob_l" style="min-height:500px;">
            <div class="item_container_picture" style="max-width:642px;background-image:url(<?= base_url('uploads/') . $blog_photo; ?>);"></div>
        </div>
        <div class="box_flex flex_mob tab_show mt-1"><a class="blank" href="#"><button class="btn_static">Czytaj Więcej</button></a></div>
    </div>
</section>