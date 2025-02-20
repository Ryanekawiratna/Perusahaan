<style>
       .form-control {
              outline: 0;
              border-width: 0 0 2px;
              border-color: black
       }

       #btn_login {
              border-radius: 25px;
              height: 60px;
              width: 190px;
              font-size: 30px;
              background-color: black;
       }
</style>

<div class="row">
       <div class="col-md-6" style="margin-left: 70px; margin-top: 80px">
              <div class="col-md-12">
                     <div class="">
                            <h2>Log in.</h2>
                            <br>
                            <div class="col-md-12">
                                   <div class="row">
                                          <div class="col-md-12">
                                                 <label for="">Email</label>
                                                 <br>
                                          </div>
                                          <div class="col-md-12">
                                                 <input type="text" id="username" class="form-control" placeholder="Enter Your Email/Username" require>
                                                 <br>
                                          </div>
                                          <div class="col-md-12">
                                                 <label for="">Password</label>
                                                 <br>
                                          </div>
                                          <div class="col-md-12">
                                                 <input type="password" id="password" class="form-control" placeholder="Enter Your Password" require>
                                                 <br>
                                          </div>
                                          <div class="col-md-12 text-center">
                                                 <div class="" onclick="">
                                                        <a style="color:black;" href="">Password Help ?</a>
                                                 </div>
                                                 <br>
                                          </div>
                                          <div class="col-md-12 text-center">
                                                 <div class="col-md-12">
                                                        <button type="submit" id="btn_login" class="btn  btn-dark" onclick="login.doLogin()">
                                                               Login
                                                        </button>
                                                        <br>
                                                        <br>
                                                 </div>
                                          </div>
                                          <div class="col-md-12 text-center">
                                                 Don't Have Account ?
                                                 <a style="color: black;" href=""> Click Here !</a>
                                          </div>
                                   </div>
                            </div>
                     </div>
              </div>
       </div>
       <div class="col-md-5">
              <div class="card" style="background-color: black; margin-top: 80px; margin-left: 40px; height :80%; color: white;">
                     <div class="" id="sub-title">
                            <h2 style="margin-left: 10px;">Eureka </h2>
                     </div>
                     <div>

                     </div>
              </div>
       </div>
</div>