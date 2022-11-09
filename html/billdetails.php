<!DOCTYPE html>
<html lang="en">
<head><?php include('headertag.php') ?></head>
<body>
  <div class="container-scroller d-flex">
  <!-- nav bar -->
  <?php include('nav.php') ?>
     <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Add Bill Details</h4>
                        <p class="card-description">
                        Details
                        </p>
                        <form class="forms-sample">
                          <div class="form-group">
                            <label for="billdetails_date">Date</label>
                            <input type="date" class="form-control" id="billdetails_date" placeholder="Date">
                          </div>
                          <div class="form-group">
                            <label for="billdetails_net_amt">Net Amount</label>
                            <input type="text" class="form-control" id="billdetails_net_amt" placeholder="Net Amount">
                          </div>
                          <div class="form-group">
                            <label for="billdetails_paid_amt">Paid Amount</label>
                            <input type="password" class="form-control" id="billdetails_paid_amt" placeholder="Paid Amount">
                          </div>
                          
                         
                          <div class="form-group">
                            <label for="billdetails_rem_amt">Remain Amount</label>
                            <input type="text" class="form-control" id="billdetails_rem_amt" placeholder="Remain Amount">
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