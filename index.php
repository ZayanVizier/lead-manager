<!-- Header -->
<?php require ('includes/header.php'); ?>

<!-- Navbar -->
<?php require ('includes/navbar.php'); ?>
  
<section class="row p-0 m-0 min-vh-100">
  
<!-- Menu -->              
<?php $nav_active = "dashboard"; require ('includes/menus.php'); ?>
                  
  <div class="col-md-10 nunito bg-light">
    <div class="mt-3 w-100 p-3">

      <div class="card pt-2 pl-3 pb-1">
       
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-current-tab" data-toggle="pill" href="#pills-current" role="tab" aria-controls="pills-current" aria-selected="true"><?php echo date('F'); ?></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-previous" role="tab" aria-controls="pills-previous" aria-selected="false"><?php echo date('F', strtotime('-1 month')); ?></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-earlier" role="tab" aria-controls="pills-earlier" aria-selected="false"><?php echo date('F', strtotime('-2 month')); ?></a>
  </li>
</ul>

      </div>

    <div class="card p-3">

      <div class="tab-content" id="pills-tabContent">

          <div class="tab-pane fade show active" id="pills-current" role="tabpanel" aria-labelledby="pills-current-tab">

            <div class="row">

              <div id="chart" class="col-md-6 animated zoomInUp"></div>

              <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

              <script src="includes/dashboard_script.js"></script>

              <link rel="stylesheet" href="assets/css/animate.css">

              <div class="col-md-6 row">
                <div class="col-md-6 text-center cursor-default animated fadeInUp"><h1 class="pt-4">100K</h1>Initial Revenue</div>
                <div class="col-md-6 text-center cursor-default animated fadeInUp delay-1s"><h1 class="pt-4">100</h1> Total Leads/ Inquiries</div>
                <div class="col-md-6 text-center cursor-default animated fadeInUp delay-2s"><h1 class="pt-4 text-danger">20</h1> Pending Leads</div>
                <div class="col-md-6 text-center cursor-default animated fadeInUp delay-3s"><h1 class="pt-4">50</h1> Confirmed Leads</div>
                <div class="col-md-6 text-center cursor-default animated fadeInUp delay-4s"><h1 class="pt-4">10</h1> Completed Leads</div>
                <div class="col-md-6 text-center cursor-default animated fadeInUp delay-5s"><h1 class="pt-4 text-danger">20</h1> Cancelled Leads</div>
              </div>

            </div>            
                
          </div>

          <div class="tab-pane fade" id="pills-previous" role="tabpanel" aria-labelledby="pills-previous-tab">
            
          <div class="row">

            <div id="chart2" class="col-md-6 animated zoomInUp"></div>

            <script src="includes/dashboard_script_two.js"></script>

            <div class="col-md-6 row">
                <div class="col-md-6 text-center cursor-default animated fadeInUp"><h1 class="pt-4">100K</h1>Initial Revenue</div>
                <div class="col-md-6 text-center cursor-default animated fadeInUp delay-1s"><h1 class="pt-4">100</h1> Total Leads/ Inquiries</div>
                <div class="col-md-6 text-center cursor-default animated fadeInUp delay-2s"><h1 class="pt-4 text-danger">20</h1> Pending Leads</div>
                <div class="col-md-6 text-center cursor-default animated fadeInUp delay-3s"><h1 class="pt-4">50</h1> Confirmed Leads</div>
                <div class="col-md-6 text-center cursor-default animated fadeInUp delay-4s"><h1 class="pt-4">10</h1> Completed Leads</div>
                <div class="col-md-6 text-center cursor-default animated fadeInUp delay-5s"><h1 class="pt-4 text-danger">20</h1> Cancelled Leads</div>
            </div>

          </div>

          </div>

          <div class="tab-pane fade" id="pills-earlier" role="tabpanel" aria-labelledby="pills-earlier-tab">
            
          <div class="row">

            <div id="chart3" class="col-md-6 animated zoomInUp"></div>

            <script src="includes/dashboard_script_three.js"></script>

            <div class="col-md-6 row">
                <div class="col-md-6 text-center cursor-default animated fadeInUp"><h1 class="pt-4">100K</h1>Initial Revenue</div>
                <div class="col-md-6 text-center cursor-default animated fadeInUp delay-1s"><h1 class="pt-4">100</h1> Total Leads/ Inquiries</div>
                <div class="col-md-6 text-center cursor-default animated fadeInUp delay-2s"><h1 class="pt-4 text-danger">20</h1> Pending Leads</div>
                <div class="col-md-6 text-center cursor-default animated fadeInUp delay-3s"><h1 class="pt-4">50</h1> Confirmed Leads</div>
                <div class="col-md-6 text-center cursor-default animated fadeInUp delay-4s"><h1 class="pt-4">10</h1> Completed Leads</div>
                <div class="col-md-6 text-center cursor-default animated fadeInUp delay-5s"><h1 class="pt-4 text-danger">20</h1> Cancelled Leads</div>
            </div>

          </div>

          </div>
  
      </div>
    </div>

    </div>
  </div>

</section>

<!-- Footer -->
<?php require ('includes/footer.php'); ?>             

   