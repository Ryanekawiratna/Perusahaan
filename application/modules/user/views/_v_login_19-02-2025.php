<div id="loginForm" class="container">
       <div class="row d-flex justify-content-center align-items-center h-70">
              <div class="col-10 col-md-8 col-lg-6 col-xl-5">

                     <div class="text-center">
                            <center>
                                   <img class="profile-img my-2" src="<?= base_url() ?>assets/images/logo.png">
                            </center>
                     </div>
                     <div class="card-login card shadow-lg" style="border-radius: 0.5rem;">
                            <div id="form_login" class="row text-center justify-content-center my-3">
                                   <p class="fs-3 mb-4">Login</p>
                                   <div class="col-lg-6 col-md-8 col-sm-6 col-8">
                                          <input type="text" id="username" class="form-control text-center fs-4" placeholder="Username" autocomplete="off" />
                                          <br>
                                          <input type="password" id="password" class="form-control text-center fs-4" placeholder="Password" autocomplete="off" />
                                          <button type="submit" id="btn_login" class="btn btn-success mt-3 fs-5" onclick="login.doLogin()">
                                                 Login
                                          </button>
                                   </div>
                            </div>


                     </div>

              </div>
       </div>
</div>