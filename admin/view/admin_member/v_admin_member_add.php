<?php include_once '././view/layout/header.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" id="example-form" action="" method="post">
                            <div class="card-body">
                                <h4 class="card-title">Personal Info</h4>
                                <div class="form-group row">
                                    <label for="username"
                                           class="col-sm-3 text-right control-label col-form-label ">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control required" id="username" name="username"
                                               placeholder=" Username Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password"
                                           class="col-sm-3 text-right control-label col-form-label ">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control required" id="password"
                                               name="password"
                                               placeholder="Password Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fullname" class="col-sm-3 text-right control-label col-form-label ">Full
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control required" id="fullname" name="fullname"
                                               placeholder="Full Name Here">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email"
                                           class="col-sm-3 text-right control-label col-form-label ">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control required email" id="email" name="email"
                                               placeholder="Email Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label ">Vai trò</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select required"
                                                style="width: 100%; height:36px;" name="role">
                                            <option>Select</option>
                                            <option value="0">Admin</option>
                                            <option value="1"></option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary" name="btn_add_member">Thêm</button>
                                    <!-- <button type="button" class="btn btn-primary" onclick="location.href='admin_member_list.php'">Danh sách</button> -->
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once '././view/layout/footer.php'; ?>