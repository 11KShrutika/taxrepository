<!DOCTYPE html>
<html lang="en">

<head>
<?php include('headertag.php') ?>
</head>
<body>
  <div class="container-scroller d-flex">
  <!-- nav bar -->
  <?php include('nav.php') ?>
    </nav>
    <!--end nav bar -->
     <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
            <div class="col-12 col-xl-6 grid-margin stretch-card">
                <div class="row w-100 flex-grow">
                  <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <p class="card-title">Website Audience Metrics</p>
                        <p class="text-muted">25% more traffic than previous week</p>
                        <div class="row mb-3">
                          <div class="col-md-7">
                            <div class="d-flex justify-content-between traffic-status">
                              <div class="item">
                                <p class="mb-">Users</p>
                                <h5 class="font-weight-bold mb-0">93,956</h5>
                                <div class="color-border"></div>
                              </div>
                              <div class="item">
                                <p class="mb-">Bounce Rate</p>
                                <h5 class="font-weight-bold mb-0">58,605</h5>
                                <div class="color-border"></div>
                              </div>
                              <div class="item">
                                <p class="mb-">Page Views</p>
                                <h5 class="font-weight-bold mb-0">78,254</h5>
                                <div class="color-border"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5">
                            <ul class="nav nav-pills nav-pills-custom justify-content-md-end" id="pills-tab-custom"
                              role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab-custom" data-toggle="pill"
                                  href="#pills-health" role="tab" aria-controls="pills-home" aria-selected="true">
                                  Day
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab-custom" data-toggle="pill" href="#pills-career"
                                  role="tab" aria-controls="pills-profile" aria-selected="false">
                                  Week
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab-custom" data-toggle="pill" href="#pills-music"
                                  role="tab" aria-controls="pills-contact" aria-selected="false">
                                  Month
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <canvas id="audience-chart"></canvas>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                          <p class="card-title">Weekly Balance</p>
                          <p class="text-success font-weight-medium">20.15 %</p>
                        </div>
                        <div class="d-flex align-items-center flex-wrap mb-3">
                          <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 me-3">$22.736</h5>
                          <p class="text-muted mb-0">Avg Sessions</p>
                        </div>
                        <canvas id="balance-chart" height="130"></canvas>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                          <p class="card-title">Today Task</p>
                          <p class="text-success font-weight-medium">45.39 %</p>
                        </div>
                        <div class="d-flex align-items-center flex-wrap mb-3">
                          <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 me-3">17.247</h5>
                          <p class="text-muted mb-0">Avg Sessions</p>
                        </div>
                        <canvas id="task-chart" height="130"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>
</div>
  </div>    
</body>
</html>