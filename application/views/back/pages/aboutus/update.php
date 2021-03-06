    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="pd-30">
            <h4 class="tx-gray-800 mg-b-5"><?php echo ucfirst(str_replace('_', ' ', $this->uri->segment(2))); ?> #<?php echo $value->id; ?></h4>
            <p class="mg-b-0"><?php echo subtitle(); ?></p>
            <hr>
        </div><!-- d-flex -->

        <div class="br-pagebody mg-t-0 pd-x-30">
            <?php if (isset($_SESSION['flashdata'])) : ?>
                <div id="alert-box"><?php echo $_SESSION['flashdata']; ?></div>
            <?php endif; ?>

            <form class="form-layout form-layout-2" action="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/action/<?php echo $this->uri->segment(4) . '/' . $this->uri->segment(2) . '/' . $value->id; ?>" method="post" enctype="multipart/form-data">

                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="row">
                            <!-- set -->
                            <div class="col-md-12 pr-0">
                                <div class="form-group">
                                    <label class="form-control-label"><?php echo $value->title; ?></label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-12 pr-0">
                                <div class="form-group">
                                    <label class="form-control-label">Tytuł: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="subtitle" value="<?php echo $value->subtitle; ?>" required>
                                </div>
                            </div><!-- col-4 -->
                            <?php if ($value->update_link != "ommit") : ?>
                                <div class="col-md-12 pr-0">
                                    <div class="form-group bd-t-0-force">
                                        <label for="update" class="form-control-label">Wybierz Aktualność w zakładce O nas: <span class="tx-danger">*</span></label>
                                        <select class="form-control" id="update" name="update_link">
                                            <?php foreach ($update as $element) : ?>
                                                <option <?php if ($value->update_link == $element->id) echo 'selected'; ?> value="<?= $element->id; ?>"><?= $element->title; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div><!-- col-4 -->
                            <?php endif; ?>
                        </div> <!-- set -->
                        <div class="row">
                            <!-- set -->
                            <?php if ($value->description != "ommit") : ?>
                                <div class="col-md-12 pr-0">
                                    <div class="form-group bd-t-0-force bd-b-0-force">
                                        <label class="form-control-label">Opis działu:</label>
                                        <textarea class="summernote" name="description"><?php echo $value->description; ?></textarea>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <!-- col-4 -->
                        </div> <!-- set -->
                        <div class="row">
                            <div class="col-md-12 pr-0">
                                <div class="form-layout-footer bd pd-20">
                                    <button class="btn btn-info" type="submit">Zapisz</button>
                                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Anuluj</button>
                                </div><!-- form-group -->
                            </div>
                        </div>
                    </div>
                    <?php if ($value->photo != "ommit") : ?>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div id="photoViewer_1" class="form-group bd-l-0-force text-center delete_photo cursor" onclick="clear_box(1);">
                                    <?php if ($value->photo != '') {
                                        echo '<img class="img-fluid img-thumbnail" src="' . base_url() . 'uploads/' . $value->photo . '" width=75%>';
                                    } else {
                                        echo '<img class="img-fluid img-thumbnail" src="http://via.placeholder.com/64x64" alt="">';
                                    } ?>
                                </div>
                            </div><!-- col-12 -->
                            <div class="col-md-12">
                                <div class="form-group bd-t-0-force bd-l-0-force">
                                    <label class="form-control-label">Zdjęcie:</label>
                                    <input type="hidden" id="name_photo_1" name="name_photo_1">
                                    <button type="button" class="btn btn-info white w-100" onclick="openModal(1);">Dodaj</button>
                                </div>
                            </div><!-- col-12 -->
                            <div class="col-md-12">
                                <div id="photoViewer_1" class="form-group bd-t-0-force bd-l-0-force">
                                    <label class="form-control-label">Tekst alternatywny zdjęcia:</label>
                                    <input class="form-control" type="text" name="alt" value="<?php echo $value->alt; ?>">
                                </div>
                            </div><!-- col-12 -->
                        </div>
                    <?php endif; ?>
                </div><!-- row -->
                <?php $this->load->view('back/forms/double_modal'); ?>
            </form><!-- form-layout -->