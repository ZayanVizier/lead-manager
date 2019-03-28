<!-- Header -->
<?php require ('includes/header.php'); ?>

<!-- Navbar -->
<?php require ('includes/navbar.php'); ?>
  
<section class="row p-0 m-0 min-vh-100">
  
<!-- Menu -->              
<?php $nav_active = "completed"; require ('includes/menus.php'); ?>                      
                  
  <div class="col-md-10 nunito bg-light">
    <div class="mt-3 w-100 p-3">

      <div class="card">
        <div class="card-header">
          <h3 class="pt-2 text-dark">Completed Leads</h3>
        </div>
        <table class="table card-body">
          <thead>
            <tr>
              <th scope="col">Date</th>
              <th scope="col">Name</th>
              <th scope="col">City</th>
              <th scope="col">Product</th>
              <th scope="col">Category</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>20-02-2019</td>
              <td>Bertus Fick</td>
              <td>Boralesgamuwa</td>
              <td>Premium 19L</td>
              <td><span class="badge badge-light">Household</span></td>
              
            </tr>
            <tr>
              <td>20-02-2019</td>
              <td>Jacob</td>
              <td>Colombo</td>
              <td>5L</td>
              <td><span class="badge badge-light">SME</span></td>
             
            </tr>
            <tr>
              <td>23-02-2019</td>
              <td>Siddharth Goyal</td>
              <td>Hikkaduwa</td>
              <td>Dispenser</td>
              <td><span class="badge badge-light">Corporate</span></td>
             
            </tr>
          </tbody>
        </table>
        <div class="card-footer">
          <nav aria-label="Page navigation example">
            <ul class="pagination pt-3">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
  </div>

</section>

<!-- Footer -->
<?php require ('includes/footer.php'); ?>