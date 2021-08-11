<div class="banner" style="background-position:center <?= $banner->position; ?>%;background-image:url(<?= base_url('uploads/') . $banner->photo; ?>);">
    <div class="item_container_align" style="background-image: linear-gradient(270deg, rgba(0, 171, 215, 0) 0%,rgba(0, 171, 215, 0.2) 60%, #000000 100%);">
        <p><?= $banner->title; ?></p>
    </div>
</div>
<div class="box_normal main_padding v_margin">
    <div class="grid-4 gtab-2 gmob-1" style="grid-row-gap:20px;">
        <?php foreach ($picture as $item) : ?>
            <div class="work-photo-border" style="max-width:360px;height:340px;">
                <a href="<?= base_url('uploads/') . $item->photo; ?>" data-lightbox="image-1" class="item_container_picture" style="background-image:url(<?= base_url('uploads/') . $item->photo; ?>);"></a>
            </div>
        <?php endforeach; ?>
    </div>
</div>