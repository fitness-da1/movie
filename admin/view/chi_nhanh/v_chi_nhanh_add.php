<?php include_once '././view/layout/header.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <h4 class="card-title">Thêm chi nhánh</h4>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Tên chi
                                        nhánh</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" name="name"
                                               placeholder="" <?= isset($error) ? 'value="' . $name.'"' : '' ?>>
                                        <span class="text-danger" <?= !isset($error) ? 'hidden' : '' ?> ><?php echo $error; ?></span>
                                    </div>
                                </div>

                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary" name="btn_add_chi_nhanh">Thêm</button>
                                    <button type="button" class="btn btn-primary"
                                            onclick="location.href='?ctr=chi_nhanh_list'">Danh sách
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--hiển thị file name-->
    <script>
        let fileInput = document.querySelector('#validatedCustomFile');
        let filelabel = document.querySelector('#file-label');
        fileInput.addEventListener("change", () => {
            filelabel.innerHTML = "";
            for (i of fileInput.files) {
                let fileName = i.name;
                filelabel.innerHTML = `<p>${fileName}</p>`;
            }
        })
    </script>
<?php include_once 'view/layout/footer.php'; ?>