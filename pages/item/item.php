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
                        <h4 class="card-title">Basic form elements</h4>
                        <p class="card-description">
                          Basic form elements
                        </p>
                        <form class="forms-sample">
                          <div class="form-group">
                            <label for="items_particaluar">Name</label>
                            <input type="text" class="form-control" id="items_particaluar" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label for="items_amt">Name</label>
                            <input type="text" class="form-control" id="items_amt" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label for="items_cgst">Name</label>
                            <input type="text" class="form-control" id="items_cgst" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label for="items_igst">Name</label>
                            <input type="text" class="form-control" id="items_igst" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label for="items_sgst">Name</label>
                            <input type="text" class="form-control" id="items_sgst" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label for="items_cgsta">Name</label>
                            <input type="text" class="form-control" id="items_cgsta" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label for="items_igsta">Name</label>
                            <input type="text" class="form-control" id="items_igsta" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label for="items_sgsta">Name</label>
                            <input type="text" class="form-control" id="items_sgsta" placeholder="Name">
                          </div>
                          
                          <div class="form-group">
                            <label for="items_net_amt">Name</label>
                            <input type="text" class="form-control" id="items_net_amt" placeholder="Name">
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