<!DOCTYPE html>
<html lang="en">
<head><?php include('../include/headertag.php') ?></head>
<body>
  <div class="container-scroller d-flex">
  <!-- nav bar -->
  <?php include('../include/nav.php') ?>
   
    <!--end nav bar -->
     <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Add Company</h4>
                        <p class="card-description">
                        Company
                        </p>
                        <form class="forms-sample">
                          <div class="form-group">
                            <label for="company_regi_id">Register Number</label>
                            <input type="text" class="form-control" id="company_regi_id" placeholder="Register Number">
                          </div>
                          <div class="form-group">
                            <label for="company_company">Company name</label>
                            <input type="text" class="form-control" id="company_company" placeholder="Register Number">
                          </div>
                          <div class="form-group">
                            <label for="company_email">Company email</label>
                            <input type="text" class="form-control" id="company_email" placeholder="Register Number">
                          </div>
                          <div class="form-group">
                            <label for="company_mobile">Company Mobile</label>
                            <input type="text" class="form-control" id="company_mobile" placeholder="Register Number">
                          </div>
                          <div class="form-group">
                            <label for="company_address">Company Address</label>
                            <input type="text" class="form-control" id="company_address" placeholder="Register Number">
                          </div>
                          <div class="form-group">
                            <label for="company_gstno">Company GST NO</label>
                            <input type="text" class="form-control" id="company_gstno" placeholder="Register Number">
                          </div>
                          <button type="submit" class="btn btn-primary me-2">Submit</button>
                          <button class="btn btn-light">Cancel</button>
                        </form>
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