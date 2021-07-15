<?php $c = -1; ?>
<div class="banner" style="background-position:center <?= $banner->position; ?>%;background-image:url(<?= base_url('uploads/') . $banner->photo; ?>);">
    <div class="item_container_align" style="background-image: linear-gradient(270deg, rgba(0, 171, 215, 0) 0%,rgba(0, 171, 215, 0.2) 60%, #000000 100%);">
        <p><?= $banner->title; ?></p>
    </div>
</div>
<section>
    <div class="container" style="margin-top:140px;">
        <div class="content-section" style="text-align:center;">
            <?= $offer[0]->description; ?>
        </div>
    </div>
    <div class="container">
        <div class="header-section">
            <div class="separator-line"></div>
            <div class="header-title">Zakres naszych usług</div>
            <div class="separator-line"></div>
        </div>
    </div>
</section>
<?php foreach ($offer as $element) : ?>
    <section>
        <?php if ($c != -1) : ?>
            <?php if ($c % 2 == 0) : ?>
                <div class="box_flex flex_mob_l main_padding">
                    <div class="grid-2 gtab-1 mb-5" style="min-height:504px;max-width:1440px;">
                        <div class="box_flex flex_c" style="min-height:500px;">
                            <div class="work-photo-border">
                                <div class="item_container_picture" style="max-width:642px;background-image:url(<?= base_url('uploads/') . $element->photo; ?>);"></div>
                            </div>
                        </div>
                        <div class="box_flex flex_c small_padding">
                            <div class="grid-1" style="max-width:540px;">
                                <div class="box_flex">
                                    <p class="second_header"><?= $element->title; ?></p>
                                </div>
                                <div class="content_with_padding"><?= $element->description; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="box_flex flex_mob main_padding tab_hide">
                    <div class="grid-2 gtab-1 mb-5" style="min-height:504px;max-width:1440px;">
                        <div class="box_flex flex_c small_padding">
                            <div class="grid-1" style="max-width:540px;">
                                <div class="box_flex">
                                    <p class="second_header"><?= $element->title; ?></p>
                                </div>
                                <div class="content_with_padding"><?= $element->description; ?></div>
                            </div>
                        </div>
                        <div class="box_flex flex_c" style="min-height:500px;">
                            <div class="work-photo-border">
                                <div class="item_container_picture" style="max-width:642px;background-image:url(<?= base_url('uploads/') . $element->photo; ?>);"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box_flex flex_mob_l main_padding tab_show">
                    <div class="grid-2 gtab-1 mb-5" style="min-height:504px;max-width:1440px;">
                        <div class="box_flex flex_c" style="min-height:500px;">
                            <div class="work-photo-border">
                                <div class="item_container_picture" style="max-width:642px;background-image:url(<?= base_url('uploads/') . $element->photo; ?>);"></div>
                            </div>
                        </div>
                        <div class="box_flex flex_c small_padding">
                            <div class="grid-1" style="max-width:540px;">
                                <div class="box_flex">
                                    <p class="second_header"><?= $element->title; ?></p>
                                </div>
                                <div class="content_with_padding"><?= $element->description; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <hr class="tab_show" style="margin-left:1.2vw;margin-right:1.2vw;">
        <?php endif; ?>
    </section>
    <?php $c++; ?>
<?php endforeach; ?>