<div class="banner bottom_sep" style="background-position:center <?= $banner->position; ?>%;background-image:url(<?= base_url('uploads/') . $banner->photo; ?>);">
    <div class="item_container_align" style="background-image: linear-gradient(270deg, rgba(0, 171, 215, 0) 0%,rgba(0, 171, 215, 0.2) 60%, #000000 100%);">
        <p><?= $banner->title; ?></p>
    </div>
</div>

<section>

    <div class="grid-1 main_padding bottom_sep">
        <div class="grid-3 gtab-1 mb-5">
            <div class="item_container_center small_padding mb-3">
                <div class="absolute_el" style="top:0px;left:0px;"><span class="line_a_h_black"></span><span class="line_a_h_cyan"></span><span class="line_a_v_black"></span></div>
                <a href="<?= base_url() . 'realizacja_1'; ?>" class="offer-photo blank alter_align" style="background-image: url(<?= base_url('uploads/') . $project[0]->photo; ?>);">
                    <div class="img_overlay_click_2">
                        <p><?= $project[0]->title; ?></p>
                    </div>
                </a>
            </div>
            <div class="item_container_center small_padding mb-3">
                <a href="<?= base_url() . 'realizacja_2'; ?>" class="offer-photo blank alter_align" style="background-image: url(<?= base_url('uploads/') . $project[1]->photo; ?>);">
                    <div class="img_overlay_click_2">
                        <p><?= $project[1]->title; ?></p>
                    </div>
                </a>
            </div>
            <div class="item_container_center small_padding mb-3">
                <div class="absolute_el" style="bottom:0px;right:0px;"><span class="line_b_h_black"></span><span class="line_b_v_cyan"></span><span class="line_b_v_black"></span></div>
                <a href="<?= base_url() . 'realizacja_3'; ?>" class="offer-photo blank alter_align" style="background-image: url(<?= base_url('uploads/') . $project[2]->photo; ?>);">
                    <div class="img_overlay_click_2">
                        <p><?= $project[2]->title; ?></p>
                    </div>
                </a>
            </div>
        </div>
    </div>

</section>