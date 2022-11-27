<?php include_once './view/layout/header.php'; ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên phim</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mô tả</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="description" name="description" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Thời lượng</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="thoi_luong" name="thoi_luong" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Rate</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="rate" name="rate" placeholder="">
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Avatar</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" name="avatar" required>
                                        <label class="custom-file-label" for="validatedCustomFile" id="file-label">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="post_content" class="col-sm-3 text-right control-label col-form-label">Ngày khởi chiếu</label>
                                <div class="col-sm-9">
                                <input type="date" class="form-control" id="ngay_khoi_chieu" name="ngay_khoi_chieu" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary" name="btn_add_phim" id="btn_add_phim">Thêm</button>
                                <button type="button" class="btn btn-primary" onclick="location.href='?ctr=phim_list'">Danh sách</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./view/assets/libs/quill/dist/quill.min.js"></script>

    <script>
        let fileInput = document.querySelector('#validatedCustomFile');
        let filelabel = document.querySelector('#file-label');
        fileInput.addEventListener("change",()=>{
            filelabel.innerHTML="";
            for (i of fileInput.files){
                let fileName=i.name;
                filelabel.innerHTML=`<p>${fileName}</p>`;
            }
        })
    </script>

<?php include_once './view/layout/footer.php'; ?>