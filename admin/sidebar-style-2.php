<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
     <?php
      include 'side_bar_header.php' ;
     ?>
      <!-- End Sidebar -->

      <div class="main-panel">
    <?php
      include 'header.php' ;
     ?>

        <div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">Dashboard</h3>
                <h6 class="op-7 mb-2">Free Bootstrap 5 Admin Dashboard</h6>
              </div>
              <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                <a href="#" class="btn btn-primary btn-round">Add Customer</a>
              </div>
            </div>
            <div class="row row-card-no-pd">
              <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h6><b>Todays Income</b></h6>
                        <p class="text-muted">All Customs Value</p>
                      </div>
                      <h4 class="text-info fw-bold">$170</h4>
                    </div>
                    <div class="progress progress-sm">
                      <div
                        class="progress-bar bg-info w-75"
                        role="progressbar"
                        aria-valuenow="75"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                      <p class="text-muted mb-0">Change</p>
                      <p class="text-muted mb-0">75%</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h6><b>Total Revenue</b></h6>
                        <p class="text-muted">All Customs Value</p>
                      </div>
                      <h4 class="text-success fw-bold">$120</h4>
                    </div>
                    <div class="progress progress-sm">
                      <div
                        class="progress-bar bg-success w-25"
                        role="progressbar"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                      <p class="text-muted mb-0">Change</p>
                      <p class="text-muted mb-0">25%</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h6><b>New Orders</b></h6>
                        <p class="text-muted">Fresh Order Amount</p>
                      </div>
                      <h4 class="text-danger fw-bold">15</h4>
                    </div>
                    <div class="progress progress-sm">
                      <div
                        class="progress-bar bg-danger w-50"
                        role="progressbar"
                        aria-valuenow="50"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                      <p class="text-muted mb-0">Change</p>
                      <p class="text-muted mb-0">50%</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h6><b>New Users</b></h6>
                        <p class="text-muted">Joined New User</p>
                      </div>
                      <h4 class="text-secondary fw-bold">12</h4>
                    </div>
                    <div class="progress progress-sm">
                      <div
                        class="progress-bar bg-secondary w-25"
                        role="progressbar"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                      <p class="text-muted mb-0">Change</p>
                      <p class="text-muted mb-0">25%</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">User Statistics</div>
                      <div class="card-tools">
                        <a
                          href="#"
                          class="btn btn-label-success btn-round btn-sm me-2"
                        >
                          <span class="btn-label">
                            <i class="fa fa-pencil"></i>
                          </span>
                          Export
                        </a>
                        <a href="#" class="btn btn-label-info btn-round btn-sm">
                          <span class="btn-label">
                            <i class="fa fa-print"></i>
                          </span>
                          Print
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-container" style="min-height: 375px">
                      <canvas id="statisticsChart"></canvas>
                    </div>
                    <div id="myChartLegend"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-primary">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Daily Sales</div>
                      <div class="card-tools">
                        <div class="dropdown">
                          <button
                            class="btn btn-sm btn-label-light dropdown-toggle"
                            type="button"
                            id="dropdownMenuButton"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            Export
                          </button>
                          <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton"
                          >
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#"
                              >Something else here</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-category">March 25 - April 02</div>
                  </div>
                  <div class="card-body pb-0">
                    <div class="mb-4 mt-2">
                      <h1>$4,578.58</h1>
                    </div>
                    <div class="pull-in">
                      <canvas id="dailySalesChart"></canvas>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body pb-0">
                    <div class="h1 fw-bold float-end text-primary">+5%</div>
                    <h2 class="mb-2">17</h2>
                    <p class="text-muted">Users online</p>
                    <div class="pull-in sparkline-fix">
                      <div id="lineChart"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="row">
						<div class="col-md-4">
							<div class="card">
								<div class="card-body pb-0">
									<div class="h1 fw-bold float-end text-primary">+5%</div>
									<h2 class="mb-2">17</h2>
									<p class="text-muted">Users online</p>
									<div class="pull-in sparkline-fix">
										<div id="lineChart"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-body pb-0">
									<div class="h1 fw-bold float-end text-danger">-3%</div>
									<h2 class="mb-2">27</h2>
									<p class="text-muted">New Users</p>
									<div class="pull-in sparkline-fix">
										<div id="lineChart2"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-body pb-0">
									<div class="h1 fw-bold float-end text-warning">+7%</div>
									<h2 class="mb-2">213</h2>
									<p class="text-muted">Transactions</p>
									<div class="pull-in sparkline-fix">
										<div id="lineChart3"></div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
            <!-- <div class="row">
						<div class="col-md-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Top Products</div>
								</div>
								<div class="card-body pb-0">
									<div class="d-flex">
										<div class="avatar">
											<img src="assets/img/logoproduct.svg" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ms-2">
											<h6 class="fw-bold mb-1">CSS</h6>
											<small class="text-muted">Cascading Style Sheets</small>
										</div>
										<div class="d-flex ms-auto align-items-center">
											<h4 class="text-info fw-bold">+$17</h4>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar">
											<img src="assets/img/logoproduct.svg" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ms-2">
											<h6 class="fw-bold mb-1">J.CO Donuts</h6>
											<small class="text-muted">The Best Donuts</small>
										</div>
										<div class="d-flex ms-auto align-items-center">
											<h4 class="text-info fw-bold">+$300</h4>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar">
											<img src="assets/img/logoproduct3.svg" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ms-2">
											<h6 class="fw-bold mb-1">Ready Pro</h6>
											<small class="text-muted">Bootstrap 5 Admin Dashboard</small>
										</div>
										<div class="d-flex ms-auto align-items-center">
											<h4 class="text-info fw-bold">+$350</h4>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="pull-in">
										<canvas id="topProductsChart"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title fw-mediumbold">Suggested People</div>
									<div class="card-list">
										<div class="item-list">
											<div class="avatar">
												<img src="assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ms-3">
												<div class="username">Jimmy Denis</div>
												<div class="status">Graphic Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ms-3">
												<div class="username">Chad</div>
												<div class="status">CEO Zeleaf</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ms-3">
												<div class="username">Talha</div>
												<div class="status">Front End Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ms-3">
												<div class="username">John Doe</div>
												<div class="status">Back End Developer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ms-3">
												<div class="username">Talha</div>
												<div class="status">Front End Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ms-3">
												<div class="username">Jimmy Denis</div>
												<div class="status">Graphic Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-primary bg-primary-gradient">
								<div class="card-body">
									<h5 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Active user right now</h5>
									<h1 class="mb-4 fw-bold">17</h1>
									<h5 class="mt-3 b-b1 pb-2 mb-5 fw-bold">Page view per minutes</h5>
									<div id="activeUsersChart"></div>
									<h5 class="mt-5 pb-3 mb-0 fw-bold">Top active pages</h5>
									<ul class="list-unstyled">
										<li class="d-flex justify-content-between pb-1 pt-1"><small>/product/readypro/index.html</small> <span>7</span></li>
										<li class="d-flex justify-content-between pb-1 pt-1"><small>/product/kaiadmin/demo.html</small> <span>10</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div> -->
            <div class="row">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Page visits</div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <!-- Projects table -->
                      <table class="table align-items-center mb-0">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">Page name</th>
                            <th scope="col">Visitors</th>
                            <th scope="col">Unique users</th>
                            <th scope="col">Bounce rate</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">/kaiadmin/</th>
                            <td>4,569</td>
                            <td>340</td>
                            <td>
                              <i class="fas fa-arrow-up text-success me-3"></i>
                              46,53%
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">/kaiadmin/index.html</th>
                            <td>3,985</td>
                            <td>319</td>
                            <td>
                              <i
                                class="fas fa-arrow-down text-warning me-3"
                              ></i>
                              46,53%
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">/kaiadmin/charts.html</th>
                            <td>3,513</td>
                            <td>294</td>
                            <td>
                              <i
                                class="fas fa-arrow-down text-warning me-3"
                              ></i>
                              36,49%
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">/kaiadmin/tables.html</th>
                            <td>2,050</td>
                            <td>147</td>
                            <td>
                              <i class="fas fa-arrow-up text-success me-3"></i>
                              50,87%
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">/kaiadmin/profile.html</th>
                            <td>1,795</td>
                            <td>190</td>
                            <td>
                              <i class="fas fa-arrow-down text-danger me-3"></i>
                              46,53%
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">/kaiadmin/</th>
                            <td>4,569</td>
                            <td>340</td>
                            <td>
                              <i class="fas fa-arrow-up text-success me-3"></i>
                              46,53%
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">/kaiadmin/index.html</th>
                            <td>3,985</td>
                            <td>319</td>
                            <td>
                              <i
                                class="fas fa-arrow-down text-warning me-3"
                              ></i>
                              46,53%
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Top Products</div>
                  </div>
                  <div class="card-body pb-0">
                    <div class="d-flex">
                      <div class="avatar">
                        <img
                          src="assets/img/logoproduct.svg"
                          alt="..."
                          class="avatar-img rounded-circle"
                        />
                      </div>
                      <div class="flex-1 pt-1 ms-2">
                        <h6 class="fw-bold mb-1">CSS</h6>
                        <small class="text-muted">Cascading Style Sheets</small>
                      </div>
                      <div class="d-flex ms-auto align-items-center">
                        <h4 class="text-info fw-bold">+$17</h4>
                      </div>
                    </div>
                    <div class="separator-dashed"></div>
                    <div class="d-flex">
                      <div class="avatar">
                        <img
                          src="assets/img/logoproduct.svg"
                          alt="..."
                          class="avatar-img rounded-circle"
                        />
                      </div>
                      <div class="flex-1 pt-1 ms-2">
                        <h6 class="fw-bold mb-1">J.CO Donuts</h6>
                        <small class="text-muted">The Best Donuts</small>
                      </div>
                      <div class="d-flex ms-auto align-items-center">
                        <h4 class="text-info fw-bold">+$300</h4>
                      </div>
                    </div>
                    <div class="separator-dashed"></div>
                    <div class="d-flex">
                      <div class="avatar">
                        <img
                          src="assets/img/logoproduct3.svg"
                          alt="..."
                          class="avatar-img rounded-circle"
                        />
                      </div>
                      <div class="flex-1 pt-1 ms-2">
                        <h6 class="fw-bold mb-1">Ready Pro</h6>
                        <small class="text-muted"
                          >Bootstrap 5 Admin Dashboard</small
                        >
                      </div>
                      <div class="d-flex ms-auto align-items-center">
                        <h4 class="text-info fw-bold">+$350</h4>
                      </div>
                    </div>
                    <div class="separator-dashed"></div>
                    <div class="pull-in">
                      <canvas id="topProductsChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row row-card-no-pd">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                      <h4 class="card-title">Users Geolocation</h4>
                      <div class="card-tools">
                        <button
                          class="btn btn-icon btn-link btn-primary btn-xs"
                        >
                          <span class="fa fa-angle-down"></span>
                        </button>
                        <button
                          class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"
                        >
                          <span class="fa fa-sync-alt"></span>
                        </button>
                        <button
                          class="btn btn-icon btn-link btn-primary btn-xs"
                        >
                          <span class="fa fa-times"></span>
                        </button>
                      </div>
                    </div>
                    <p class="card-category">
                      Map of the distribution of users around the world
                    </p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="table-responsive table-hover table-sales">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="assets/img/flags/id.png"
                                      alt="indonesia"
                                    />
                                  </div>
                                </td>
                                <td>Indonesia</td>
                                <td class="text-end">2.320</td>
                                <td class="text-end">42.18%</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="assets/img/flags/us.png"
                                      alt="united states"
                                    />
                                  </div>
                                </td>
                                <td>USA</td>
                                <td class="text-end">240</td>
                                <td class="text-end">4.36%</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="assets/img/flags/au.png"
                                      alt="australia"
                                    />
                                  </div>
                                </td>
                                <td>Australia</td>
                                <td class="text-end">119</td>
                                <td class="text-end">2.16%</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="assets/img/flags/ru.png"
                                      alt="russia"
                                    />
                                  </div>
                                </td>
                                <td>Russia</td>
                                <td class="text-end">1.081</td>
                                <td class="text-end">19.65%</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="assets/img/flags/cn.png"
                                      alt="china"
                                    />
                                  </div>
                                </td>
                                <td>China</td>
                                <td class="text-end">1.100</td>
                                <td class="text-end">20%</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="assets/img/flags/br.png"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Brasil</td>
                                <td class="text-end">640</td>
                                <td class="text-end">11.63%</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mapcontainer">
                          <div
                            id="world-map"
                            class="w-100"
                            style="height: 300px"
                          ></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                      <div class="card-title">Recent Activity</div>
                      <div class="card-tools">
                        <div class="dropdown">
                          <button
                            class="btn btn-icon btn-clean"
                            type="button"
                            id="dropdownMenuButton"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="fas fa-ellipsis-h"></i>
                          </button>
                          <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton"
                          >
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#"
                              >Something else here</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <ol class="activity-feed">
                      <li class="feed-item feed-item-secondary">
                        <time class="date" datetime="9-25">Sep 25</time>
                        <span class="text"
                          >Responded to need
                          <a href="#">"Volunteer opportunity"</a></span
                        >
                      </li>
                      <li class="feed-item feed-item-success">
                        <time class="date" datetime="9-24">Sep 24</time>
                        <span class="text"
                          >Added an interest
                          <a href="#">"Volunteer Activities"</a></span
                        >
                      </li>
                      <li class="feed-item feed-item-info">
                        <time class="date" datetime="9-23">Sep 23</time>
                        <span class="text"
                          >Joined the group
                          <a href="single-group.php"
                            >"Boardsmanship Forum"</a
                          ></span
                        >
                      </li>
                      <li class="feed-item feed-item-warning">
                        <time class="date" datetime="9-21">Sep 21</time>
                        <span class="text"
                          >Responded to need
                          <a href="#">"In-Kind Opportunity"</a></span
                        >
                      </li>
                      <li class="feed-item feed-item-danger">
                        <time class="date" datetime="9-18">Sep 18</time>
                        <span class="text"
                          >Created need
                          <a href="#">"Volunteer Opportunity"</a></span
                        >
                      </li>
                      <li class="feed-item">
                        <time class="date" datetime="9-17">Sep 17</time>
                        <span class="text"
                          >Attending the event
                          <a href="single-event.php">"Some New Event"</a></span
                        >
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Support Tickets</div>
                      <div class="card-tools">
                        <ul
                          class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm"
                          id="pills-tab"
                          role="tablist"
                        >
                          <li class="nav-item">
                            <a
                              class="nav-link"
                              id="pills-today"
                              data-bs-toggle="pill"
                              href="#pills-today"
                              role="tab"
                              aria-selected="true"
                              >Today</a
                            >
                          </li>
                          <li class="nav-item">
                            <a
                              class="nav-link active"
                              id="pills-week"
                              data-bs-toggle="pill"
                              href="#pills-week"
                              role="tab"
                              aria-selected="false"
                              >Week</a
                            >
                          </li>
                          <li class="nav-item">
                            <a
                              class="nav-link"
                              id="pills-month"
                              data-bs-toggle="pill"
                              href="#pills-month"
                              role="tab"
                              aria-selected="false"
                              >Month</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="d-flex">
                      <div class="avatar avatar-online">
                        <span
                          class="avatar-title rounded-circle border border-white bg-info"
                          >J</span
                        >
                      </div>
                      <div class="flex-1 ms-3 pt-1">
                        <h6 class="text-uppercase fw-bold mb-1">
                          Joko Subianto
                          <span class="text-warning ps-3">pending</span>
                        </h6>
                        <span class="text-muted"
                          >I am facing some trouble with my viewport. When i
                          start my</span
                        >
                      </div>
                      <div class="float-end pt-1">
                        <small class="text-muted">8:40 PM</small>
                      </div>
                    </div>
                    <div class="separator-dashed"></div>
                    <div class="d-flex">
                      <div class="avatar avatar-offline">
                        <span
                          class="avatar-title rounded-circle border border-white bg-secondary"
                          >P</span
                        >
                      </div>
                      <div class="flex-1 ms-3 pt-1">
                        <h6 class="text-uppercase fw-bold mb-1">
                          Prabowo Widodo
                          <span class="text-success ps-3">open</span>
                        </h6>
                        <span class="text-muted"
                          >I have some query regarding the license issue.</span
                        >
                      </div>
                      <div class="float-end pt-1">
                        <small class="text-muted">1 Day Ago</small>
                      </div>
                    </div>
                    <div class="separator-dashed"></div>
                    <div class="d-flex">
                      <div class="avatar avatar-away">
                        <span
                          class="avatar-title rounded-circle border border-white bg-danger"
                          >L</span
                        >
                      </div>
                      <div class="flex-1 ms-3 pt-1">
                        <h6 class="text-uppercase fw-bold mb-1">
                          Lee Chong Wei
                          <span class="text-muted ps-3">closed</span>
                        </h6>
                        <span class="text-muted"
                          >Is there any update plan for RTL version near
                          future?</span
                        >
                      </div>
                      <div class="float-end pt-1">
                        <small class="text-muted">2 Days Ago</small>
                      </div>
                    </div>
                    <div class="separator-dashed"></div>
                    <div class="d-flex">
                      <div class="avatar avatar-offline">
                        <span
                          class="avatar-title rounded-circle border border-white bg-secondary"
                          >P</span
                        >
                      </div>
                      <div class="flex-1 ms-3 pt-1">
                        <h6 class="text-uppercase fw-bold mb-1">
                          Peter Parker
                          <span class="text-success ps-3">open</span>
                        </h6>
                        <span class="text-muted"
                          >I have some query regarding the license issue.</span
                        >
                      </div>
                      <div class="float-end pt-1">
                        <small class="text-muted">2 Day Ago</small>
                      </div>
                    </div>
                    <div class="separator-dashed"></div>
                    <div class="d-flex">
                      <div class="avatar avatar-away">
                        <span
                          class="avatar-title rounded-circle border border-white bg-danger"
                          >L</span
                        >
                      </div>
                      <div class="flex-1 ms-3 pt-1">
                        <h6 class="text-uppercase fw-bold mb-1">
                          Logan Paul <span class="text-muted ps-3">closed</span>
                        </h6>
                        <span class="text-muted"
                          >Is there any update plan for RTL version near
                          future?</span
                        >
                      </div>
                      <div class="float-end pt-1">
                        <small class="text-muted">2 Days Ago</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <nav class="pull-left">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="http://www.themekita.com">
                    ThemeKita
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Help </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Licenses </a>
                </li>
              </ul>
            </nav>
            <div class="copyright">
              2024, made with <i class="fa fa-heart heart text-danger"></i> by
              <a href="http://www.themekita.com">ThemeKita</a>
            </div>
            <div>
              Distributed by
              <a target="_blank" href="https://themewagon.com/">ThemeWagon</a>.
            </div>
          </div>
        </footer>
      </div>

      <!-- Custom template | don't include it in your project! -->
      <div class="custom-template">
        <div class="title">Settings</div>
        <div class="custom-content">
          <div class="switcher">
            <div class="switch-block">
              <h4>Logo Header</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="selected changeLogoHeaderColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="blue"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="purple"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="light-blue"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="green"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="orange"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="red"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="white"
                ></button>
                <br />
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="dark2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="blue2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="purple2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="light-blue2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="green2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="orange2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="red2"
                ></button>
              </div>
            </div>
            <div class="switch-block">
              <h4>Navbar Header</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="blue"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="purple"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="light-blue"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="green"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="orange"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="red"
                ></button>
                <button
                  type="button"
                  class="selected changeTopBarColor"
                  data-color="white"
                ></button>
                <br />
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="dark2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="blue2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="purple2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="light-blue2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="green2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="orange2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="red2"
                ></button>
              </div>
            </div>
            <div class="switch-block">
              <h4>Sidebar</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="changeSideBarColor"
                  data-color="white"
                ></button>
                <button
                  type="button"
                  class="selected changeSideBarColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeSideBarColor"
                  data-color="dark2"
                ></button>
              </div>
            </div>
          </div>
        </div>
        <div class="custom-toggle">
          <i class="icon-settings"></i>
        </div>
      </div>
      <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo.js"></script>
    <script src="assets/js/demo.js"></script>
    <script>
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });
    </script>
  </body>
</html>
