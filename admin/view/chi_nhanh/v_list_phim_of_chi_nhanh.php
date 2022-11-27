<?php include_once 'view/layout/header.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Basic Datatable</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tên Phim</th>
                                <th>Mô tả</th>
                                <th>Thời lượng</th>
                                <th>Rate</th>
                                <th>Avatar</th>
                                <th>Ngày khởi chiếu</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($phim as $item => $value): ?>
                                <tr>
                                    <td><?= $value->id?></td>
                                    <td><?= $value->name?></td>
                                    <td><?= $value->description?></td>
                                    <td><?= $value->thoi_luong?></td>
                                    <td><?= $value->rate?></td>
                                    <td><img src="../public/image/<?= $value->avatar?>" alt="<?= $value->avatar?>" height="40" width="40"></td>
                                    <td><?= $value->ngay_khoi_chieu?></td>

                                    <td>
                                        <button type="button" class="btn btn-primary" onclick="return confirm_delete('<?=$value->id_phim_of_cn?>','<?=$value->name?>') ">Xóa</button>
                                    </td>
                                </tr>
                            <?php endforeach;?>

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Tên Phim</th>
                                <th>Mô tả</th>
                                <th>Thời lượng</th>
                                <th>Rate</th>
                                <th>Avatar</th>
                                <th>Ngày khởi chiếu</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="./view/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="./view/assets/extra-libs/sparkline/sparkline.js"></script>
    <!-- this page js -->
    <script src="./view/assets/libs/jquery/dist/jquery.min.js"></script>
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
                window.open('?ctr=phim_cn_delete&id='+id,'_self');
            }
        }
    </script>

<?php include_once 'view/layout/footer.php'; ?>