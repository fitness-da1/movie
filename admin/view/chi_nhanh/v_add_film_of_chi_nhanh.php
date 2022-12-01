<?php include_once 'view/layout/header.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <h4 class="card-title">Thêm phim của chi nhánh</h4>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label ">Chọn chi nhánh</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select required"
                                                style="width: 100%; height:36px;" name="id_chi_nhanh">
                                            <option>Select</option>
                                            <?php foreach ($chi_nhanh as $cn): ?>
                                            <option value="<?=$cn->id?>"><?=$cn->name?></option>
                                            <?php endforeach; ?>
<!--                                            <option value="1"></option>-->
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Chọn phim</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control m-t-15" multiple="multiple" style="height: 36px;width: 100%;" name="id_phim[]">
                                            <?php foreach ($phim as $ph): ?>
                                                <option value="<?=$ph->id?>"><?=$ph->name?></option>
<!--                                                <option value="0">yoga 9:00am-11:00am</option>-->
                                            <?php endforeach; ?>
<!--                                            <optgroup label="Tuesday">-->
<!--                                                <option value="4">Gym 7:00am-9:00am</option>-->
<!--                                                <option value="3">yoga 9:00am-11:00am</option>-->
<!--                                            </optgroup>-->
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary" name="btn_add_phim_cn">Thêm</button>
<!--                                    <button type="button" class="btn btn-primary" onclick="location.href='?ctr=chi_nhanh_list'">Danh sách</button>-->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--hiển thị file name-->
<!--    <script>-->
<!--        let fileInput = document.querySelector('#validatedCustomFile');-->
<!--        let filelabel = document.querySelector('#file-label');-->
<!--        fileInput.addEventListener("change",()=>{-->
<!--            filelabel.innerHTML="";-->
<!--            for (i of fileInput.files){-->
<!--                let fileName=i.name;-->
<!--                filelabel.innerHTML=`<p>${fileName}</p>`;-->
<!--            }-->
<!--        })-->
<!--    </script>-->
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