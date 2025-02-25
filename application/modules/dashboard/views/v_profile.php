<nav class="navbar navbar-main navbar-expand-lg px-0  shadow border-radius-xl mb-4 mt-2" id="navbarBlur" data-scroll="false">
       <div class="container-fluid py-1 px-3">
              <nav aria-label="breadcrumb">
                     <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                            <li class="breadcrumb-item text-sm">
                                   <a class="text-black" href="javascript:;">
                                          Dashboard
                                   </a>
                            </li>
                            <li class="breadcrumb-item text-sm text-black active" aria-current="page"><?php echo ucfirst(end(explode("/", $_SERVER['REQUEST_URI']))) ?> </li>
                     </ol>
              </nav>
              <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                     <a class="btn btn-warning btn-m" href="<?php echo base_url('dashboard'); ?>" role="button">Kembali</a>
              </div>
       </div>
</nav>
<div>

</div>


<div class="card shadow">
       <div class=" card-body">
              <div class="row gx-4">
                     <div class="col-auto">
                            <div class="avatar avatar-xl position-relative">
                                   <img src="../assets/images/profile.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                            </div>
                     </div>
                     <div class="col-auto my-auto">
                            <div class="h-100">
                                   <h5 class="mb-1">
                                          Sayo Kravits
                                   </h5>
                                   <p class="mb-0 font-weight-bold text-sm">
                                          Public Relations
                                   </p>
                            </div>
                     </div>
                     <!-- <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                            <div class="nav-wrapper position-relative end-0">
                                   <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                          <li class="nav-item">
                                                 <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                                        <i class="ni ni-app"></i>
                                                        <span class="ms-2">App</span>
                                                 </a>
                                          </li>
                                          <li class="nav-item">
                                                 <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                                        <i class="ni ni-email-83"></i>
                                                        <span class="ms-2">Messages</span>
                                                 </a>
                                          </li>
                                          <li class="nav-item">
                                                 <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                                        <i class="ni ni-settings-gear-65"></i>
                                                        <span class="ms-2">Settings</span>
                                                 </a>
                                          </li>
                                   </ul>
                            </div>
                     </div> -->
              </div>
       </div>
</div>

<div class="container-fluid py-4">
       <div class="row">
              <div class="col-md-4 p-0">
                     <div class="card position-sticky top-1" style="margin-right: 25px;">
                            <ul class="nav flex-column bg-white border-radius-lg p-3">
                                   <li class="nav-item pt-2">
                                          <a class="nav-link text-body d-flex align-items-center" data-scroll="" href="#basic-info">
                                                 <i class="ni ni-books me-2 text-dark opacity-6"></i>
                                                 <span class="text-sm">Basic Info</span>
                                          </a>
                                   </li>
                                   <li class="nav-item pt-2">
                                          <a class="nav-link text-body d-flex align-items-center" data-scroll="" href="#password">
                                                 <i class="ni ni-atom me-2 text-dark opacity-6"></i>
                                                 <span class="text-sm">Change Password</span>
                                          </a>
                                   </li>
                                   <li class="nav-item pt-2">
                                          <a class="nav-link text-body d-flex align-items-center" data-scroll="" href="#delete">
                                                 <i class="ni ni-settings-gear-65 me-2 text-dark opacity-6"></i>
                                                 <span class="text-sm">Delete Account</span>
                                          </a>
                                   </li>
                                   <li class="nav-item pt-2">
                                          <a class="nav-link text-center">
                                                 <button class="btn btn-primary btn-m m-auto" onclick="dash.editProfile()">Edit Profile</button>
                                          </a>
                                   </li>
                            </ul>
                     </div>
              </div>
              <div class="col-md-8 p-0">
                     <div class="card" id="basic-info">
                            <div class="card-body">
                                   <p class="text-uppercase text-sm">Informasi User</p>
                                   <div class="row">
                                          <div class="col-md-6">
                                                 <div class="form-group">
                                                        <label for="example-text-input" class="form-control-label">Username</label>
                                                        <input class="form-control" type="text" value="lucky.jesse" disabled>
                                                 </div>
                                          </div>
                                          <div class="col-md-6">
                                                 <div class="form-group">
                                                        <label for="example-text-input" class="form-control-label">Alamat Email</label>
                                                        <input class="form-control" type="email" value="jesse@example.com" disabled>
                                                 </div>
                                          </div>
                                          <div class="col-md-6">
                                                 <div class="form-group">
                                                        <label for="example-text-input" class="form-control-label">Nama Depan</label>
                                                        <input class="form-control" type="text" value="Jesse" disabled>
                                                 </div>
                                          </div>
                                          <div class="col-md-6">
                                                 <div class="form-group">
                                                        <label for="example-text-input" class="form-control-label">Nama Belakang</label>
                                                        <input class="form-control" type="text" value="Lucky" disabled>
                                                 </div>
                                          </div>
                                   </div>
                                   <hr class="horizontal dark">
                                   <p class="text-uppercase text-sm">Informasi Kontak</p>
                                   <div class="row">
                                          <div class="col-md-12">
                                                 <div class="form-group">
                                                        <label for="example-text-input" class="form-control-label">Alamat</label>
                                                        <input class="form-control" type="text" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" disabled>
                                                 </div>
                                          </div>
                                          <div class="col-md-4">
                                                 <div class="form-group">
                                                        <label for="example-text-input" class="form-control-label">Kota</label>
                                                        <input class="form-control" type="text" value="New York" disabled>
                                                 </div>
                                          </div>
                                          <div class="col-md-4">
                                                 <div class="form-group">
                                                        <label for="example-text-input" class="form-control-label">Provinsi</label>
                                                        <input class="form-control" type="text" value="United States" disabled>
                                                 </div>
                                          </div>
                                          <div class="col-md-4">
                                                 <div class="form-group">
                                                        <label for="example-text-input" class="form-control-label">Kode Pos</label>
                                                        <input class="form-control" type="text" value="437300" disabled>
                                                 </div>
                                          </div>
                                          <div class="col-md-4">
                                                 <div class="form-group">
                                                        <label for="example-text-input" class="form-control-label">Nomor Telp</label>
                                                        <input class="form-control" type="text" value="08522223336655" disabled>
                                                 </div>
                                          </div>
                                   </div>
                                   <hr class="horizontal dark">
                                   <p class="text-uppercase text-sm">About me</p>
                                   <div class="row">
                                          <div class="col-md-12">
                                                 <div class="form-group">
                                                        <label for="example-text-input" class="form-control-label">About me</label>
                                                        <input class="form-control" type="text" value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source.">
                                                 </div>
                                          </div>
                                   </div>
                            </div>
                     </div>
                     <br>

                     <div class="card" id="password">
                            <div class="card-header">
                                   <h5>Change Password</h5>
                            </div>
                            <div class="card-body pt-0">
                                   <label class="form-label">Current password</label>
                                   <div class="form-group">
                                          <input class="form-control" type="password" placeholder="Current password">
                                   </div>
                                   <label class="form-label">New password</label>
                                   <div class="form-group">
                                          <input class="form-control" type="password" placeholder="New password">
                                   </div>
                                   <label class="form-label">Confirm new password</label>
                                   <div class="form-group">
                                          <input class="form-control" type="password" placeholder="Confirm password">
                                   </div>
                                   <h5 class="mt-5">Password requirements</h5>
                                   <p class="text-muted mb-2">
                                          Please follow this guide for a strong password:
                                   </p>
                                   <ul class="text-muted ps-4 mb-0 float-start">
                                          <li>
                                                 <span class="text-sm">One special characters</span>
                                          </li>
                                          <li>
                                                 <span class="text-sm">Min 6 characters</span>
                                          </li>
                                          <li>
                                                 <span class="text-sm">One number (2 are recommended)</span>
                                          </li>
                                          <li>
                                                 <span class="text-sm">Change it often</span>
                                          </li>
                                   </ul>
                                   <button class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Update password</button>
                            </div>
                     </div>
                     <br>
                     <div class="card" id="delete">
                            <div class="card-header">
                                   <h5>Delete Account</h5>
                                   <p class="text-sm mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                            </div>
                            <div class="card-body d-sm-flex pt-0">
                                   <div class="d-flex align-items-center mb-sm-0 mb-4">
                                          <div>
                                                 <div class="form-check form-switch mb-0">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault0">
                                                 </div>
                                          </div>
                                          <div class="ms-2">
                                                 <span class="text-dark font-weight-bold d-block text-sm">Confirm</span>
                                                 <span class="text-xs d-block">I want to delete my account.</span>
                                          </div>
                                   </div>
                                   <button class="btn btn-outline-secondary mb-0 ms-auto" type="button" name="button">Deactivate</button>
                                   <button class="btn bg-gradient-danger mb-0 ms-2" type="button" name="button">Delete Account</button>
                            </div>
                     </div>
              </div>
       </div>
</div>
</div>
</div>