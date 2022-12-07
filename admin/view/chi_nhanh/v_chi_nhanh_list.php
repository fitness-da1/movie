<?php include_once 'view/layout/header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Danh sách chi nhánh</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            <tr>
                                <th>Chi nhánh</th>
                                <th>Action</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($chi_nhanh as $item => $value): ?>
                            <tr>
                                <td><?= $value->name?></td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick=" location.href='?ctr=chi_nhanh_edit&id=<?=$value->id?>' ">Sửa</button>
                                    <button type="button" class="btn btn-primary" onclick="return confirm_delete('<?=$value->id?>','<?=$value->name?>') ">Xóa</button>
                                    <button type="button" class="btn btn-primary" onclick=" location.href='?ctr=list_film_of_chi_nhanh&id=<?=$value->id?>' ">Danh sách phim</button>
                                    <button type="button" class="btn btn-primary" onclick=" location.href='?ctr=read_lich_chieu&id=<?=$value->id?>' ">Danh sách lịch chiếu</button>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Chi nhánh</th>
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
        if(confirm('Bạn chắc chắn muốn xóa chi nhánh'+name)){
            window.open('?ctr=chi_nhanh_delete&id='+id,'_self');
        }
    }
</script>

<?php include_once 'view/layout/footer.php'; ?>