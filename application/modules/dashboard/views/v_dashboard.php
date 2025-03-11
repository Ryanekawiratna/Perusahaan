<div class="min-height-300 bg-dark position-absolute w-100"></div>


<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
       <div class="sidenav-header">
              <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
              <a class="navbar-brand m-0 text-center">
                     <img src="<?= base_url() ?>assets/images/logo_baru_putih_png.png" width="50px" height="35px" class="navbar-brand-img h-100" alt="main_logo">
              </a>
       </div>
       <hr class="horizontal dark mt-0">
       <ul class="navbar-nav">
              <li class="nav-item ">
                     <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Menu</h6>
              </li>
              <li class="nav-item">
                     <a class="nav-link active" href="">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                   <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Main Dashboard</span>
                     </a>
              </li>
              <li class="nav-item">
                     <a class="nav-link " href="../pages/tables.html">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                   <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Example</span>
                     </a>
              </li>

              <li class="nav-item ">
                     <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
              </li>
              <li class="nav-item">
                     <a class="nav-link " href="<?= base_url('dashboard/profile') ?>">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                   <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Profile</span>
                     </a>
              </li>

       </ul>
</aside>


<main class="main-content position-relative border-radius-lg ">
       <!-- Navbar -->
       <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
              <div class="container-fluid py-1 px-3">
                     <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                                   <li class="breadcrumb-item text-sm">
                                          <a class="opacity-5 text-white" href="javascript:;">
                                                 Default
                                          </a>
                                   </li>
                                   <li class="breadcrumb-item text-sm text-white active" aria-current="page"><?php echo ucfirst(end(explode("/", $_SERVER['REQUEST_URI']))) ?></li>
                            </ol>
                     </nav>
                     <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none">
                            <a href="javascript:;" class="nav-link p-0" id="iconNavbarSidenav">
                                   <div class="sidenav-toggler-inner">
                                          <i class="sidenav-toggler-line bg-white"></i>
                                          <i class="sidenav-toggler-line bg-white"></i>
                                          <i class="sidenav-toggler-line bg-white"></i>
                                   </div>
                            </a>
                     </div>
                     <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                                   <div class="input-group">
                                          <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                          <input type="text" class="form-control" placeholder="Type here...">
                                   </div>
                            </div>
                            <ul class="navbar-nav  justify-content-end">
                                   <li class="nav-item d-flex align-items-center">
                                          <a href="<?= base_url() ?>" class="nav-link text-white font-weight-bold px-0">
                                                 <i class="fa fa-user me-sm-1"></i>
                                                 <span class="d-sm-inline d-none">Sign out</span>
                                          </a>
                                   </li>
                            </ul>
                     </div>
              </div>
       </nav>
       <!-- End Navbar -->

       <div class="container-fluid py-4">
              <div class="row">
                     <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                            <div class="card">
                                   <div class="card-body p-3">
                                          <div class="row">
                                                 <div class="col-8">
                                                        <div class="numbers">
                                                               <p class="text-sm mb-0 text-uppercase font-weight-bold">All Stock</p>
                                                               <h5 class="font-weight-bolder">
                                                                      <?= $jumlah_barang['jumlah'] ?> Item
                                                               </h5>
                                                        </div>
                                                 </div>
                                                 <div class="col-4 text-end">
                                                        <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                                               <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                                        </div>
                                                 </div>
                                          </div>
                                   </div>
                            </div>
                     </div>
                     <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                            <div class="card">
                                   <div class="card-body p-3">
                                          <div class="row">
                                                 <div class="col-8">
                                                        <div class="numbers">
                                                               <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Keluar</p>
                                                               <h5 class="font-weight-bolder">

                                                               </h5>
                                                               <p class="mb-0">

                                                               </p>
                                                        </div>
                                                 </div>
                                                 <div class="col-4 text-end">
                                                        <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                                               <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                                        </div>
                                                 </div>
                                          </div>
                                   </div>
                            </div>
                     </div>
                     <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                            <div class="card">
                                   <div class="card-body p-3">
                                          <div class="row">
                                                 <div class="col-8">
                                                        <div class="numbers">
                                                               <p class="text-sm mb-0 text-uppercase font-weight-bold">New Clients</p>
                                                               <h5 class="font-weight-bolder">

                                                               </h5>
                                                               <p class="mb-0">

                                                               </p>
                                                        </div>
                                                 </div>
                                                 <div class="col-4 text-end">
                                                        <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                                               <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                                        </div>
                                                 </div>
                                          </div>
                                   </div>
                            </div>
                     </div>
                     <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                   <div class="card-body p-3">
                                          <div class="row">
                                                 <div class="col-8">
                                                        <div class="numbers">
                                                               <p class="text-sm mb-0 text-uppercase font-weight-bold">Sales</p>
                                                               <h5 class="font-weight-bolder">

                                                               </h5>
                                                               <p class="mb-0">

                                                               </p>
                                                        </div>
                                                 </div>
                                                 <div class="col-4 text-end">
                                                        <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                                               <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                                        </div>
                                                 </div>
                                          </div>
                                   </div>
                            </div>
                     </div>
              </div>
              <div class="row mt-4">
                     <div class="col-lg-7 mb-lg-0 mb-4">
                            <div class="card z-index-2 h-100">
                                   <div class="card-header pb-0 pt-3 bg-transparent">
                                          <h6 class="text-capitalize">Sales overview</h6>
                                          <p class="text-sm mb-0">
                                                 <i class="fa fa-arrow-up text-success"></i>

                                          </p>
                                   </div>
                                   <div class="card-body p-3">
                                          <div class="chart">

                                          </div>
                                   </div>
                            </div>
                     </div>
                     <div class="col-lg-5">
                            <div class="card card-carousel overflow-hidden h-100 p-0">
                                   <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">

                                   </div>
                            </div>
                     </div>
              </div>
              <div class="row mt-4">
                     <div class="col-lg-7 mb-lg-0 mb-4">
                            <div class="card ">
                                   <div class="card-header pb-0 p-3">
                                          <div class="d-flex justify-content-between">
                                                 <h6 class="mb-2">Sales by Country</h6>
                                          </div>
                                   </div>
                                   <div class="table-responsive">

                                   </div>
                            </div>
                     </div>
                     <div class="col-lg-5">
                            <div class="card">
                                   <div class="card-header pb-0 p-3">
                                          <h6 class="mb-0">Categories</h6>
                                   </div>
                                   <div class="card-body p-3">

                                   </div>
                            </div>
                     </div>
              </div>

       </div>


</main>