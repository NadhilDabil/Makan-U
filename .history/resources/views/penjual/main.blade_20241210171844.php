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
                        <img src="allAboutDash/assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
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
                        <img src="allAboutDash/assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm  me-3 ">
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
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
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
                            <img src="data:image/jpeg;base64,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" style="clip-path: circle(50% at 50% 50%); object-fit: cover;" class="avatar avatar-sm me-3" alt="xd">
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
                            <img src="allAboutDash/assets/img/small-logos/logo-atlassian.svg" class="avatar avatar-sm me-3" alt="atlassian">
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
                            <img src="allAboutDash/assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm me-3" alt="team7">
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
                            <img src="allAboutDash/assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm me-3" alt="spotify">
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
                            <img src="allAboutDash/assets/img/small-logos/logo-jira.svg" class="avatar avatar-sm me-3" alt="jira">
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
                            <img src="allAboutDash/assets/img/small-logos/logo-invision.svg" class="avatar avatar-sm me-3" alt="invision">
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
