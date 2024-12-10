<!--
=========================================================
* Material Dashboard 3 - v3.2.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="allAboutDash/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="allAboutDash/assets/img/favicon.png">
  <title>
    Material Dashboard 3 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <!-- Nucleo Icons -->
  <link href="allAboutDash/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="allAboutDash/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- CSS Files -->
  <link id="pagestyle" href="allAboutDash/assets/css/material-dashboard.css?v=3.2.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside style="background-color:#f1f2f7" class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 my-2" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand px-4 py-3 m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="allAboutDash/assets/img/logo-ct-dark.png" class="navbar-brand-img" width="26" height="26" alt="main_logo">
        <span class="ms-1 text-sm " style="color:#5a67ba">Creative Tim</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item mt-3" style="margin-left: -15px;">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Menu</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link active" style="color: #5a67ba; background-color: #d5dcf8">
            <i class="material-symbols-rounded opacity-5">dashboard</i>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " style="color:#5a67ba">
            <i class="material-symbols-rounded opacity-5">table_view</i>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " style="color:#5a67ba">
            <i class="material-symbols-rounded opacity-5">receipt_long</i>
            <span class="nav-link-text ms-1">Billing</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link "tml" style="color: #5a67ba;">
            <i class="material-symbols-rounded opacity-5">view_in_ar</i>
            <span class="nav-link-text ms-1">Virtual Reality</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " style="color:#5a67ba">
            <i class="material-symbols-rounded opacity-5">format_textdirection_r_to_l</i>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " style="color:#5a67ba">
            <i class="material-symbols-rounded opacity-5">notifications</i>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " style="color:#5a67ba">
            <i class="material-symbols-rounded opacity-5">person</i>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link "tml">
            <i class="material-symbols-rounded opacity-5">login</i>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link "tml">
            <i class="material-symbols-rounded opacity-5">assignment</i>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      {{-- <div class="mx-3">
        <a class="btn btn-outline-dark mt-4 w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard?ref=sidebarfree" type="button">Documentation</a>
        <a class="btn w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
      </div> --}}
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar" style="flex-direction: row; justify-content:space-between; align-items:center">
          <div class="pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline" style="width:600px; margin-left:-20px;">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div>
            <ul class="navbar-nav d-flex align-items-center  justify-content-end">
            <li class="nav-item dropdown pe-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="material-symbols-rounded">notifications</i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="allAboutDash/assets/img/team-2.jpg" style="clip-path: circle(50% at 50% 50%); object-fit: cover;" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaTFa8PPytnx5RdvYOjGAKVu-v-Q8TkOb-mfPQmQwJNluajTg-Y_UIXdKzXuhFjO6-I3s&usqp=CAU" style="clip-path: circle(50% at 50% 50%); object-fit: cover;" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div style="clip-path: circle(50% at 50% 50%); object-fit: cover;" class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-2">
      <div class="row">
        <div>
          <h3 class="mb-0 h5 font-weight-bolder">Dashboard</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7 col-md-6 mt-4 mb-4">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-0 ">Website Views</h6>
              {{-- <p class="text-sm ">Last Campaign Performance</p> --}}
              <div class="pe-2">
                <div class="chart">
                  <canvas id="chart-bars" class="chart-canvas" height="300"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 mt-4 mb-4">
          <div class="card ">
            <div class="card-body">
              <h6 class="mb-0 "> Sales Time Distribution </h6>
              {{-- <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p> --}}
              <div class="pe-2">
                <div class="chart">
                  <canvas id="chart-doughnut" class="chart-canvas" height="300"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-4">
         <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Most ordered Food</h6>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  {{-- <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Companies</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Members</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Budget</th>
                    </tr>
                  </thead> --}}
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaTFa8PPytnx5RdvYOjGAKVu-v-Q8TkOb-mfPQmQwJNluajTg-Y_UIXdKzXuhFjO6-I3s&usqp=CAU" style="clip-path: circle(50% at 50% 50%); object-fit: cover;" style="clip-path: circle(50% at 50% 50%); object-fit: cover;" class="avatar avatar-sm me-3" alt="xd">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Material XD Version</h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Rp14,000 </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaTFa8PPytnx5RdvYOjGAKVu-v-Q8TkOb-mfPQmQwJNluajTg-Y_UIXdKzXuhFjO6-I3s&usqp=CAU" style="clip-path: circle(50% at 50% 50%); object-fit: cover;" class="avatar avatar-sm me-3" alt="atlassian">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Add Progress Track</h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Rp30,000 </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaTFa8PPytnx5RdvYOjGAKVu-v-Q8TkOb-mfPQmQwJNluajTg-Y_UIXdKzXuhFjO6-I3s&usqp=CAU" style="clip-path: circle(50% at 50% 50%); object-fit: cover;" class="avatar avatar-sm me-3" alt="team7">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Fix Platform Errors</h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Rp20,000 </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaTFa8PPytnx5RdvYOjGAKVu-v-Q8TkOb-mfPQmQwJNluajTg-Y_UIXdKzXuhFjO6-I3s&usqp=CAU" style="clip-path: circle(50% at 50% 50%); object-fit: cover;" class="avatar avatar-sm me-3" alt="spotify">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Launch our Mobile App</h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Rp20,500 </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaTFa8PPytnx5RdvYOjGAKVu-v-Q8TkOb-mfPQmQwJNluajTg-Y_UIXdKzXuhFjO6-I3s&usqp=CAU" style="clip-path: circle(50% at 50% 50%); object-fit: cover;" class="avatar avatar-sm me-3" alt="jira">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Add the New Pricing Page</h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Rp50,000 </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaTFa8PPytnx5RdvYOjGAKVu-v-Q8TkOb-mfPQmQwJNluajTg-Y_UIXdKzXuhFjO6-I3s&usqp=CAU" style="clip-path: circle(50% at 50% 50%); object-fit: cover;" class="avatar avatar-sm me-3" alt="invision">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Redesign New Online Shop</h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Rp20,000 </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-6 mb-4">
          <div class="card ">
            <div class="card-body">
              <h6 class="mb-0 "> Daily Sales </h6>
              {{-- <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p> --}}
              <div class="pe-2">
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>

       
      </div>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-symbols-rounded py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-symbols-rounded">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter active" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn px-3 mb-2" data-class=" onclick="sidebarType(this)">Dark</button>
          <button class="btn px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn px-3 mb-2  active ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/material-dashboard-pro">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="allAboutDash/assets/js/core/popper.min.js"></script>
  <script src="allAboutDash/assets/js/core/bootstrap.min.js"></script>
  <script src="allAboutDash/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="allAboutDash/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="allAboutDash/assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
    type: "bar",
    data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"], // Label untuk hari dalam seminggu
        datasets: [
        {
            label: "This Week", // Label untuk minggu ini
            data: [320000, 345000, 422000, 528000, 350000, 660000, 676000], // Data minggu ini
            backgroundColor: "#5a6acf", // Warna batang untuk minggu ini
            borderRadius: 4,
            borderSkipped: false,
            barThickness: 'flex'
        },
        {
            label: "Last Week", // Label untuk minggu lalu
            data: [240000, 438000, 525000, 730000, 540005, 855000, 770000], // Data minggu lalu
            backgroundColor: "#8593ed", // Warna batang untuk minggu lalu
            borderRadius: 4,
            borderSkipped: false,
            barThickness: 'flex'
        },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
        legend: {
            display: true, // Tampilkan legenda untuk kedua dataset
            position: "top", // Posisi legenda di atas grafik
            labels: {
            color: "#737373", // Warna teks legenda
            font: {
                size: 12
            }
            }
        }
        },
        interaction: {
        intersect: false,
        mode: 'index', // Tooltip akan menampilkan kedua dataset secara berdampingan
        },
        scales: {
        y: {
            grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: '#e5e5e5'
            },
            ticks: {
            suggestedMin: 0,
            suggestedMax: 1000000, // Atur skala maksimum agar sesuai dengan data
            beginAtZero: true,
            padding: 10,
            font: {
                size: 14,
                lineHeight: 2
            },
            color: "#737373"
            },
        },
        x: {
            grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
            },
            ticks: {
            display: true,
            color: '#737373',
            padding: 10,
            font: {
                size: 14,
                lineHeight: 2
            },
            }
        },
        },
    },
    });


  var ctx2 = document.getElementById("chart-line").getContext("2d");

  new Chart(ctx2, {
    type: "line",
    data: {
      labels: ["M", "T", "W", "T", "F", "S", "S"], // Hari dalam seminggu
      datasets: [
        {
          label: "This Week", // Data untuk minggu berjalan
          tension: 0.4,
          borderWidth: 2,
          pointRadius: 3,
          pointBackgroundColor: "#5a6acf",
          pointBorderColor: "transparent",
          borderColor: "#5a6acf",
          fill: false,
          data: [150, 300, 200, 50, 70, 650, 700], // Data minggu berjalan
        },
        {
          label: "Last Week", // Data untuk minggu sebelumnya
          tension: 0.4,
          borderWidth: 2,
          pointRadius: 3,
          pointBackgroundColor: "#8593ed",
          pointBorderColor: "transparent",
          borderColor: "#8593ed",
          fill: false,
          data: [50, 75, 500, 20, 560, 760, 450], // Data minggu sebelumnya
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true, // Tampilkan legenda
          position: "top",
          labels: {
            color: "#737373",
            font: {
              size: 12,
            },
          },
        },
        tooltip: {
          callbacks: {
            title: function (context) {
              const days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
              return days[context[0].dataIndex]; // Tampilkan nama hari di tooltip
            },
            label: function (context) {
              return `${context.dataset.label}: ${context.raw}`; // Format label tooltip
            },
          },
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [4, 4],
            color: "#e5e5e5",
          },
          ticks: {
            display: true,
            color: "#737373",
            suggestedMax: 500,
            padding: 10,
            font: {
              size: 12,
              lineHeight: 2,
            },
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            color: "#737373",
            padding: 10,
            font: {
              size: 12,
              lineHeight: 2,
            },
          },
        },
      },
    },
  });


   var ctx2doughnuts = document.getElementById("chart-doughnut").getContext("2d");
   
new Chart(ctx2doughnuts, {
  type: "doughnut",
  data: {
    labels: ["Afternoon", "Evening", "Morning"], // Label untuk tiap bagian
    datasets: [{
      label: "Sales",
      data: [1890, 1512, 1323], // Nilai untuk tiap bagian
      backgroundColor: [
        "#5a6acf", // Warna Afternoon
        "#8593ed", // Warna Evening
        "#c7ceff", // Warna Morning
      ],
      borderColor: "#ffffff", // Warna border
      borderWidth: 0.5,
      time: ['11am - 4pm', '4pm - 8pm', '8am - 11am'], // Tambahkan data waktu
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        display: true,
        position: "bottom",
        labels: {
          color: "#737373",
          font: {
            size: 12
          }
        }
      },
      tooltip: {
        callbacks: {
          title: function(context) {
            return context[0].label; // Tampilkan label bagian
          },
          label: function(context) {
            const dataset = context.dataset; // Ambil dataset
            const dataIndex = context.dataIndex; // Indeks data
            const data = dataset.data[dataIndex]; // Nilai asli
            const time = dataset.time[dataIndex]; // Waktu dari indeks
            const total = dataset.data.reduce((acc, value) => acc + value, 0); // Hitung total
            const percentage = ((data / total) * 100).toFixed(2); // Hitung persentase
            return [`${time}`, `${percentage}% (${data})`]; // Format tooltip dengan baris baru
          }
        }
      }
    }
  },
});

  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="allAboutDash/assets/js/material-dashboard.min.js?v=3.2.0"></script>
</body>

</html>
