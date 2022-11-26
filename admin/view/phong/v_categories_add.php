<?php include_once '././view/layout/header.php'; ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">Categorie Info</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Categorie name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="uname" name="categorie_name" placeholder=" Username Here"  <?php if (isset($error_1)) echo 'value="'.$categorie_name.'"';?> >
                                    <?php if (isset($error_1)) echo "<span style='color: red'>".$error_1['categorie_name']."</span>"?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Categorie meaningful</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" name="categorie_mean" placeholder="Full Name Here">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Upload Image</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="validatedCustomFile">
                                        <label class="custom-file-label" for="validatedCustomFile" id="file-label">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary" name="btn_add_categorie">Thêm</button>
                                <button type="button" class="btn btn-primary" onclick="location.href='?ctr=categorie_list'">Danh sách</button>
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
    fileInput.addEventListener("change",()=>{
        filelabel.innerHTML="";
        for (i of fileInput.files){
            let fileName=i.name;
            filelabel.innerHTML=`<p>${fileName}</p>`;
        }
    })
</script>
<?php include_once 'view/layout/footer.php'; ?>