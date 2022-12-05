<?php include_once 'view/layout/header.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" action="?ctr=edit_ve_lich_chieu" method="post" enctype="multipart/form-data">
                            <div class="card-body">

                                <h4 class="card-title">Cập nhật số ghế</h4>
                                <input type="text" class="form-control" id="id" name="id" value="<?=$ve->id?>" hidden>
                                <div class="form-group row">
                                    <label for="idve" class="col-sm-3 text-right control-label col-form-label">ID vé</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="idve" name="idve" placeholder="" value="<?=$ve->id?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Chọn ghế</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control m-t-15" multiple="multiple" style="height: 36px;width: 100%;" name="ghe[]">
                                            <?php $ghe=explode(",",$ve->ghe);
                                            foreach ($ghe as $gh): ?>

                                                <option value="<?=$gh?>" selected><?=$gh?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

<!--                                <div class="form-group row">-->
<!--                                    <label for="ghe" class="col-sm-3 text-right control-label col-form-label">Số ghế</label>-->
<!--                                    <div class="col-sm-9">-->
<!--                                        <input type="text" class="form-control" id="ghe" name="ghe" placeholder="" value="">-->
<!--                                        <span style="color: red">Thêm dấu " , " vào sau mỗi số ghế</span>-->
<!--                                    </div>-->
<!--                                </div>-->

                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary" name="btn_edit_ve">Cập nhật</button>
                                    <button type="button" class="btn btn-primary" onclick="location.href='?ctr=load_ve_of_lich_chieu&id=<?=$_GET['id_lc']?>&id_cn=<?=$_GET['id_cn']?>'">Danh sách</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--hiển thị file name-->
    <script src="view/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="view/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="view/dist/js/pages/mask/mask.init.js"></script>

    <script src="view/assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="view/assets/libs/select2/dist/js/select2.full.min.js"></script>

    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
            //
            // Dear reader, it's actually very easy to initialize MiniColors. For example:
            //
            //  $(selector).minicolors();
            //
            // The way I've done it below is just for the demo, so don't get confused
            // by it. Also, data- attributes aren't supported at this time...they're
            // only used for this demo.
            //
            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
<?php include_once 'view/layout/footer.php'; ?>