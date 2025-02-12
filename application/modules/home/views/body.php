<style>
       body {
              font-family: 'jakarta-sans', sans-serif;
       }

       header {
              margin: 5;
              display: grid;
              background-color: black;
              font-size: x-large;
              color: white;
              /* border-radius: 20px; */
       }

       .navbar {
              display: flex;
              justify-content: space-between;
              align-items: center;
              padding: 10px;
       }

       #nav-group {
              display: flex;
              align-items: center;
              justify-content: flex-end;
       }

       #nav-title {
              flex-grow: 1;
              padding-left: 10px;
              position: relative;
              top: -3px;
       }

       #nav-login {
              cursor: pointer;
              text-align: center;
              position: relative;
              top: -4px;

       }

       #nav-search {
              cursor: pointer;
              text-align: center;
              position: relative;
              /* Add this line */
              /* top: 4px; */
       }
</style>
<div id="main-page">
       <header>
              <nav class="navbar navbar-dark">
                     <div id="nav-title" class="col-md-4">
                            Eureka
                     </div>
                     <div id="nav-group" class="col-md-4">
                            <div id="nav-login" class="col-md-2" onClick="window.location.href='<?php echo base_url('login'); ?>'">
                                   Login
                            </div>
                            <div id="nav-search" class="col-md-2" onclick="home.search()">
                                   <span class="mdi mdi-magnify"></span>
                            </div>
                     </div>
              </nav>
       </header>
       <div class="col-md-12" style="background-image: '<?php echo base_url('assets/images/Patagonia.jpg') ?>'">

       </div>
</div>