<?php include_once '././view/layout/header.php'; ?>

    <div class="page-wrapper">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Basic Datatable</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                
                                <th>Full name</th>
                                <th>Email</th>
                                <th>Role</th>

                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            foreach ($admin_member as $key => $value) { ?>

                            <tr>
                                <td><?= $value->full_name ?></td>
                                <td><?= $value->email ?></td>
                                <td><?= $value->vai_tro==0?'Admin':'' ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="location.href='?ctr=admin_member_edit&id=<?= $value->id ?>'">Sửa
                                    </button>
                                    <button type="button" class="btn btn-primary"
                                            onclick="return confirm_delete('<?= $value->id ?>','<?= $value->full_name ?>') ">Xóa
                                    </button>
                                </td>

                            </tr>
                            <?php } ?>
                            </tbody>
                            <tfoot>
                            <tr>
                              
                                <th>Full name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="./view/assets/libs/jquery/dist/jquery.min.js"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="./view/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="./view/assets/extra-libs/sparkline/sparkline.js"></script>
    <!-- this page js -->
    <script src="./view/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="./view/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="./view/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();

        function confirm_delete(id,name){
            if(confirm('Bạn chắc chắn muốn xóa '+name)){
                window.open('?ctr=admin_member_delete&id='+id,'_self');
            }
        }
    </script>

<?php include_once '././view/layout/footer.php'; ?>