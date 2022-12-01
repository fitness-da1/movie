<?php include_once 'view/layout/header.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <h4 class="card-title">Thêm phim lịch chiếu</h4>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label ">Chọn chi
                                        nhánh</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select required chi_nhanh"
                                                style="width: 100%; height:36px;" name="id_chi_nhanh"
                                                onchange="loadphim()">
                                                                                        <option value="">Chi nhánh</option>
                                            <?php foreach ($chi_nhanh as $cn): ?>
                                                <option value="<?= $cn->id ?>"><?= $cn->name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label ">Chọn phim</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select required chi_nhanh"
                                                style="width: 100%; height:36px;" name="id_phim"
                                                id="phim">
                                                <option value="">Chọn phim</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="post_content" class="col-sm-3 text-right control-label col-form-label">Ngày chiếu</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="ngay_chieu" name="ngay_chieu" placeholder="Ngày chiếu">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label ">Chọn giờ chiếu - phòng</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select required chi_nhanh"
                                                style="width: 100%; height:36px;" name="gio_chieu"
                                                onchange="loadphim()">
                                            <option value="">Giờ chiếu-Phòng</option>
                                            <?php foreach ($gio_chieu as $gc): ?>
                                                <option value="<?= $gc->id ?>"><?= $gc->gio_chieu ?> - <?= $gc->ten_phong ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary" name="btn_add_lich_chieu">Thêm</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
            integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"
            integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        // $(document).ready(function () {
        //     $(".chi_nhanh").on("change",function (e){
        //         loadphim();
        //     });
        //     console.log(111);
        // });
        function loadphim() {
            var id_chi_nhanh = $(".chi_nhanh").val();
            // console.log(id_chi_nhanh);
                $.ajax({
                    url: '?ctr=load_phim_of_chi_nhanh&id=' + id_chi_nhanh,
                    dataType: 'json',
                    success: function (data) {
                        $('#phim').html("");
                        for (i = 0; i < data.length; i++) {
                            var phim = data[i];
                            var str =`
                            <option value="${phim['id']}">${phim['name']}</option>
                            `;
                            $('#phim').append(str);
                        }

                    }
                });
            }
    </script>

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
        $('.demo').each(function () {
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

                change: function (value, opacity) {
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