<style>
       body {
              font-family: 'jakarta-sans', sans-serif;
       }

       header {
              display: grid;
              background-color: black;
              font-size: x-large;
              color: white;
              scroll-behavior: smooth;
              /* border-radius: 20px; */
       }


       /* .navbar {
              display: flex;
              justify-content: space-between;
              align-items: center;
              padding: 10px;
       } */

       #nav-group {
              display: flex;
              align-items: center;
              justify-content: flex-end;
       }

       #nav-title {
              /* flex-grow: 1; */
              /* padding-left: 10px; */
              text-align: center;
              position: relative;
              align-items: center;
              top: -1px;

       }

       #nav-login {
              cursor: pointer;
              text-align: center;
              position: relative;
              top: -1px;

       }

       #nav-search {
              cursor: pointer;
              text-align: center;
              position: relative;
              top: -1px;
       }

       #main-div {
              width: 100%;
              height: 90px;
              size: 40%;
              align-items: center;
              position: absolute;
              color: white;
              top: 120%;
              left: 20%;
       }

       #gambar {
              background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5)), url('assets/images/Patagonia.jpg');
              position: relative;
              height: 90vh;
              background-repeat: no-repeat;
              background-size: cover;
              padding-top: 90px;
              transition: filter 0.3s;

       }
</style>
<div id="main-page">
       <header>
              <nav class="navbar navbar-dark">
                     <div class="col-md-4">

                     </div>
                     <div id="nav-title" class="col-md-4" style="text-align:center;">
                            <img style="width: 20%;" src=" <?= base_url('assets/images/logo_black_terbaru.png') ?>" alt="">
                     </div>
                     <div id="nav-group" class="col-md-4">
                            <div id="nav-login" class="col-md-2" onClick="window.location.href='<?php echo base_url('login'); ?>'">
                                   <span class="mdi mdi-account-outline"></span>
                            </div>
                            <div id="nav-search" class="col-md-2" onclick="home.search()">
                                   <span class="mdi mdi-magnify"></span>
                            </div>
                     </div>
              </nav>
       </header>
       <div style="height: auto; width:auto\9 ;  position: relative;">
              <div id="gambar" class="col-md-12">
                     <div id="main_div" class="col-md-12">
                            <h1 style="color: white;">
                                   Welcome , comrade
                            </h1>
                     </div>
              </div>
       </div>

       <div id="kategori" class="col-md-12">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                     <div class="col-md-4">
                            Spring
                     </div>
                     <div class="col-md-4" style="margin: 0; padding : 0;">
                            Summer
                     </div>
                     <div class="col-md-4">
                            Winter
                     </div>
              </nav>
       </div>
</div>