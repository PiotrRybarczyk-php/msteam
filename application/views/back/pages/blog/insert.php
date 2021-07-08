    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="pd-30">
            <h4 class="tx-gray-800 mg-b-5"><?php echo ucfirst(str_replace('_', ' ', $this->uri->segment(2))); ?></h4>
            <p class="mg-b-0"><?php echo subtitle(); ?></p>
            <hr>
        </div><!-- d-flex -->

        <div class="br-pagebody mg-t-0 pd-x-30">
            <?php if (isset($_SESSION['flashdata'])) : ?>
                <div id="alert-box"><?php echo $_SESSION['flashdata']; ?></div>
            <?php endif; ?>

            <form class="form-layout form-layout-2" action="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/action/<?php echo $this->uri->segment(4) . '/' . $this->uri->segment(2); ?>" method="post" enctype="multipart/form-data">

                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="row">
                            <!-- set -->
                            <div class="col-md-6 pr-0">
                                <div class="form-group bd-r-1-force bd-b-0-force">
                                    <label class="form-control-label">Tytuł: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="title" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-6 px-0">
                                <div class="form-group bd-l-0-force bd-r-0-force bd-b-0-force">
                                    <label class="form-control-label">Podtytuł:</label>
                                    <input class="form-control" type="text" name="subtitle">
                                </div>
                            </div><!-- col-4 -->
                        </div> <!-- set -->
                        <div class="row">
                            <!-- set -->
                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-t-1-force bd-b-0-force bd-r-0-force">
                                    <label class="form-control-label">Opis:</label>
                                    <textarea class="summernote" name="description"></textarea>
                                </div>
                            </div><!-- col-4 -->
                        </div> <!-- set -->
                        <div class="row">
                            <!-- set -->
                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-t-1-force bd-b-0-force bd-r-0-force">
                                    <label class="form-control-label">Opis:</label>
                                    <textarea class="summernote" name="description2"></textarea>
                                </div>
                            </div><!-- col-4 -->
                        </div> <!-- set -->
                        <div class="row">
                            <div class="col-md-12 pr-0">
                                <div class="form-layout-footer bd pd-20 bd-r-0-force">
                                    <button class="btn btn-info" type="submit">Zapisz</button>
                                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Anuluj</button>
                                </div><!-- form-group -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-md-12">
                            <div id="photoViewer_1" class="form-group bd-l-1-force text-center">
                                <img class="img-fluid img-thumbnail" src="http://via.placeholder.com/64x64" alt="">
                            </div>
                        </div><!-- col-12 -->
                        <div class="col-md-12">
                            <div class="form-group bd-t-0-force bd-l-1-force">
                                <label class="form-control-label">Zdjęcie:</label>
                                <input type="hidden" id="name_photo_1" name="name_photo_1">
                                <button type="button" class="btn btn-info white w-100" onclick="openModal(1);">Dodaj</button>
                            </div>
                        </div><!-- col-12 -->
                        <div class="col-md-12">
                            <div id="photoViewer_1" class="form-group bd-b-0-force bd-t-0-force bd-l-1-force">
                                <label class="form-control-label">Tekst alternatywny zdjęcia:</label>
                                <input class="form-control" type="text" name="alt">
                            </div>
                        </div><!-- col-12 -->
                        <div class="col-md-12">
                            <div id="photoViewer_2" class="form-group bd-l-1-force text-center delete_photo cursor" onclick="clear_box(2);">
                                <?php if (@$value->photo2 != '') {
                                    echo '<img class="img-fluid img-thumbnail" src="' . base_url() . 'uploads/' . @$value->photo2 . '" width=75%>';
                                } else {
                                    echo '<img class="img-fluid img-thumbnail" src="http://via.placeholder.com/64x64" alt="">';
                                } ?>
                            </div>
                        </div><!-- col-12 -->
                        <div class="col-md-12">
                            <div class="form-group bd-t-0-force bd-l-1-force">
                                <label class="form-control-label">Zdjęcie:</label>
                                <input type="hidden" id="name_photo_2" name="name_photo_2">
                                <button type="button" class="btn btn-info white w-100" onclick="openModal(2);">Dodaj</button>
                            </div>
                        </div><!-- col-12 -->
                        <div class="col-md-12">
                            <div id="photoViewer_2" class="form-group bd-t-0-force bd-l-1-force">
                                <label class="form-control-label">Tekst alternatywny zdjęcia:</label>
                                <input class="form-control" type="text" name="alt2" value="<?php echo @$value->alt2; ?>">
                            </div>
                        </div><!-- col-12 -->
                        <div class="col-md-12">
                            <div id="photoViewer_3" class="form-group bd-l-1-force text-center delete_photo cursor" onclick="clear_box(3);">
                                <?php if (@$value->photo3 != '') {
                                    echo '<img class="img-fluid img-thumbnail" src="' . base_url() . 'uploads/' . @$value->photo3 . '" width=75%>';
                                } else {
                                    echo '<img class="img-fluid img-thumbnail" src="http://via.placeholder.com/64x64" alt="">';
                                } ?>
                            </div>
                        </div><!-- col-12 -->
                        <div class="col-md-12">
                            <div class="form-group bd-t-0-force bd-l-1-force">
                                <label class="form-control-label">Zdjęcie:</label>
                                <input type="hidden" id="name_photo_3" name="name_photo_3">
                                <button type="button" class="btn btn-info white w-100" onclick="openModal(3);">Dodaj</button>
                            </div>
                        </div><!-- col-12 -->
                        <div class="col-md-12">
                            <div id="photoViewer_3" class="form-group bd-t-0-force bd-l-1-force">
                                <label class="form-control-label">Tekst alternatywny zdjęcia:</label>
                                <input class="form-control" type="text" name="alt3">
                            </div>
                        </div><!-- col-12 -->
                    </div>
                </div>
        </div><!-- row -->
        <?php $this->load->view('back/forms/double_modal'); ?>
        </form><!-- form-layout -->