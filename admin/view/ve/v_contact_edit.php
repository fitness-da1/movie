<?php include_once '././view/layout/header.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">

                        <form class="form-horizontal" action="?ctr=contact_update" method="post">
                            <div class="card-body">
                                <h4 class="card-title">Contact Info</h4>
                                <input type="text" class="form-control" id="id" name="id"
                                        value="<?= $contact ->id ?>" hidden>

                                <div class="form-group row">
                                    <label for="full_name" class="col-sm-3 text-right control-label col-form-label">Full
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="full_name" name="full_name"
                                               placeholder="Full Name Here" value="<?=$contact->full_name?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email"
                                           class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email" name="email"
                                               placeholder="Email Here" value="<?=$contact->email?>">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="message"
                                           class="col-sm-3 text-right control-label col-form-label">Message</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="message" name="message"
                                               placeholder="Email Here" value="<?=$contact->message?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Status</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select"
                                                style="width: 100%; height:36px;" name="status">
                                            <option>Select</option>
                                            <option value="0" <?= $contact->status==0?'selected':null ?> >Hoạt động</option>
                                            <option value="1" <?= $contact->status==1?'selected':null ?>>Không hoạt động</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary" name="btn_update_contact">Update</button>
                                     <button type="button" class="btn btn-primary" onclick="location.href='?ctr=contact_list'">Danh sách</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();

        function confirm_edit(id,full_name){
            if(confirm('Bạn chắc chắn muốn sửa '+full_name)){
                window.open('?ctr=admin_plant_delete&id='+id,'full_name');
            }
        }
    </script>
<?php include_once '././view/layout/footer.php'; ?>