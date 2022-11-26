<?php include_once './view/layout/header.php'; ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">Class Info</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Post name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="post_name" name="post_name" placeholder=" Post name here">
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Post avatar</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" name="post_avatar" required>
                                        <label class="custom-file-label" for="validatedCustomFile" id="file-label">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                            </div>
<!--                            <div class="row">-->
<!--                                <div class="col-12">-->
<!--                                    <div class="card">-->
<!--                                        <div class="card-body">-->
<!---->
<!--                                            <h4 class="card-title">Post content</h4>-->
                                           <!-- Create the editor container -->
<!--                                            <div id="editor" style="height: 300px;">-->
<!--                                            </div>-->
<!---->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="form-group row">
                                <label for="post_content" class="col-sm-3 text-right control-label col-form-label">Post content</label>
                                <div class="col-sm-9">
                                    <textarea name="post_content" cols="40" rows="16" id="post_content" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary" name="btn_add_blog" id="btn_add_blog">Thêm</button>
                                <button type="button" class="btn btn-primary" onclick="location.href='?ctr=blog_list'">Danh sách</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./view/assets/libs/quill/dist/quill.min.js"></script>
<!--<script>-->
<!---->
<!--    let options = {-->
<!--        placeholder: 'Waiting for your precious content',-->
<!--        theme: 'snow'-->
<!--    };-->
<!--    let quill = new Quill('#editor', options);-->
<!--    quill.on('text-change', function() {-->
<!--        // var delta = editor.getContents();-->
<!--        // var text = editor.getText();-->
<!--        let justHtml = quill.root.innerHTML;-->
<!--        // preciousContent.innerHTML = JSON.stringify(delta);-->
<!--        // justTextContent.innerHTML = text;-->
<!--        test.innerHTML = justHtml;-->
<!--    });-->
<!--    $('#btn_add_blog').on('click',function () {-->
<!--        $.ajax({-->
<!--            type: 'POST',-->
<!--            url: '?ctr=blog_add',-->
<!--            data:{-->
<!--                // post_name : $('input[name="post_name"]').val();-->
<!--                post_content: quill.root.innerHTML,-->
<!--            }-->
<!--        })-->
<!--    })-->
<!--</script>-->

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

<?php include_once './view/layout/footer.php'; ?>