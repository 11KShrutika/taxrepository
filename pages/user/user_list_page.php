<!DOCTYPE html>
<html lang="en">

<head>
<?php include('../include/headertag.php') ?>
<script src="..\js\user.js"> </script>
</head>
<body>
  <div class="container-scroller d-flex">
  <!-- nav bar -->
  <?php include('../include/nav.php') ?>
    <!--end nav bar -->
     <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic Table</h4>
                    <p class="card-description">
                      Add class <code>.table</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table" id="myTable">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Delete</th>
                            <th>Update</th>
                          </tr>
                        </thead>
                        <tbody>
                      
                        </tbody>
                      </table>
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