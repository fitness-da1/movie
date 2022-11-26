<?php include_once '././view/layout/header.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" action="?ctr=blog_update" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <h4 class="card-title">Trainers Info</h4>
                                <input type="text" class="form-control" id="id" name="id" value="<?=$blog->id?>" hidden>
                                <div class="form-group row">
                                    <label for="post_name" class="col-sm-3 text-right control-label col-form-label">Post name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="post_name" name="post_name" placeholder=" postname Here" value="<?=$blog->post_name?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="post_content" class="col-sm-3 text-right control-label col-form-label">Post content</label>
                                    <div class="col-sm-9">
                                        <textarea name="post_content" cols="40" rows="16" id="post_content" class="form-control"><?=$blog->post_content?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Upload Image</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" name="post_avatar" class="custom-file-input" id="validatedCustomFile">
                                            <label class="custom-file-label" for="validatedCustomFile" id="file-label"><?=$blog->post_avatar?></label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary" name="btn_update_blog">Update</button>
                                    <button type="button" class="btn btn-primary" onclick="location.href='?ctr=blog_list'">Danh sách</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<?php include_once '././view/layout/footer.php'; ?>