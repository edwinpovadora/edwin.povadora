
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            
            <div class="pcoded-main-container" style="margin-top: 0px;">
                <div class="pcoded-wrapper">
                    
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <i class="icofont icofont-file-code bg-c-blue"></i>
                                                    <div class="d-inline">
                                                        <h4>Create Admin</h4>
                                                        <span>Add another administrator </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <!-- <h5>Website Information</h5> -->
                                                        <!-- <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> -->
                                                        <div class="card-header-right"><i
                                                            class="icofont icofont-spinner-alt-5"></i></div>

                                                            <div class="card-header-right">
                                                                <i class="icofont icofont-spinner-alt-5"></i>
                                                            </div>

                                                        </div>
                                                        <div class="card-block">
                                                            <h4 class="sub-title">Add New Admin</h4>
                                                            <div class="row ">
                                                                <div class="col-md-12">
                                                                    <label style="color: red; " ><?= $this->session->flashdata('msg_settings_error');?></label>
                                                                    <label style="color: green;" ><?= $this->session->flashdata('msg_settings');?></label>
                                                                </div>
                                                            </div>
                                                            <form action="<?= base_url();?>index.php/insertFromAdmin" method="post">
                                                        
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Full Name</label>
                                                                    <div class="col-sm-10">
                                                                        <input name="full_admin" type="text" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Email</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="email" name="email_admin" type="text" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Password</label>
                                                                <div class="col-sm-10">
                                                                    <input name="pass_admin" class="form-control" id="password" type="password" placeholder="Input your password" required>
                                                                </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                <label name="con_pass_admin" class="col-sm-2 col-form-label">Confirm Password</label>
                                                                    <div class="col-sm-10">
                                                                    <input name="con_pass_admin" class="form-control" id="confirm_password" type="password" placeholder="Confirm your password" required>
                                                                </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">User Type</label>
                                                                <div class="col-sm-10">
                                                                    <select name="user_type" class="form-control" required>
                                                                        <option value="user">User</option>
                                                                        <option value="admin">Admin</option>
                                                                    </select>
                                                                </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md-2">
                                                                        <button type="submit" name="create_admin_btn" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" >Add</button>
                                                                    </div>
                                                                </div>
                                                            </form> 
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



