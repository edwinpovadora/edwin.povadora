
    <!-- Pre-loader end -->
    <?php foreach ($website_info as $row) :
        $site_name=$row->site_name;
        $about=$row->about;
        $contact=$row->contact;
        $email=$row->email;
        $location=$row->location;
        endforeach;
    ?>


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
                                                        <h4>Settings</h4>
                                                        <span>Change something from the site </span>
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
                                                            <h4 class="sub-title">Website Information</h4>
                                                            <div class="row ">
                                                                <div class="col-md-12">
                                                                    <label style="color: red; " ><?= $this->session->flashdata('msg_settings_error');?></label>
                                                                    <label style="color: green;" ><?= $this->session->flashdata('msg_settings');?></label>
                                                                </div>
                                                            </div>
                                                            <form action="<?= base_url();?>index.php/insertFromSettings" method="post">
                                                        
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Website Name</label>
                                                                    <div class="col-sm-10">
                                                                        <input value="<?php echo isset($site_name) ? $site_name : ''; ?>" name="site_info" type="text" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">About us</label>
                                                                    <div class="col-sm-10">
                                                                                    <textarea 
                                                                                     name="about_info" rows="10" cols="5" class="form-control"
                                                                                    placeholder="Your About us" required> <?php echo isset($about) ? $about : ''; ?></textarea>
                                                                                </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Contact Number</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number_format" value="<?php echo isset($contact) ? $contact : ''; ?>" name="contact_info" type="number_format" class="form-control"
                                                                        placeholder="Input number" required> 
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Email</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="email" value="<?php echo isset($email) ? $email : ''; ?>" name="email_info" type="text" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Location</label>
                                                                    <div class="col-sm-10">
                                                                        <input value="<?php echo isset($location) ? $location : ''; ?>" name="location_info" type="text" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row m-t-30">
                                                                    <div class="col-md-2">
                                                                        <button type="submit" name="settings_btn" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" >Save</button>
                                                                    </div>
                                                                </div>
                                                            </form> 
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



