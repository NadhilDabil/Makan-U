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
                        <img src="allAboutDash/assets/img/small-logos/logo-spotify.svg" style="clip-path: circle(50% at 50% 50%); object-fit: cover;" class="avatar avatar-sm  me-3 ">
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
                            <img src="data:image/jpeg;base64,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" style="clip-path: circle(50% at 50% 50%); object-fit: cover;" class="avatar avatar-sm me-3" alt="atlassian">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Add Progress Track</h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Rp3,000 </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="allAboutDash/assets/img/small-logos/logo-slack.svg" style="clip-path: circle(50% at 50% 50%); object-fit: cover;" class="avatar avatar-sm me-3" alt="team7">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Fix Platform Errors</h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Rp2,000 </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="allAboutDash/assets/img/small-logos/logo-spotify.svg" style="clip-path: circle(50% at 50% 50%); object-fit: cover;" class="avatar avatar-sm me-3" alt="spotify">
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
                            <img src="allAboutDash/assets/img/small-logos/logo-jira.svg" style="clip-path: circle(50% at 50% 50%); object-fit: cover;" class="avatar avatar-sm me-3" alt="jira">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Add the New Pricing Page</h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Rp500 </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="allAboutDash/assets/img/small-logos/logo-invision.svg" style="clip-path: circle(50% at 50% 50%); object-fit: cover;" class="avatar avatar-sm me-3" alt="invision">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Redesign New Online Shop</h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Rp2,000 </span>
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
