<!DOCTYPE html>
<html lang="en">
<head><?php include('headertag.php') ?>
<script src="..\js\user.js"> </script>
</head>
<body>

  <div class="container-scroller d-flex">
  <?php include('nav.php');?>
  <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Add User Details</h4>
                        <p class="card-description">
                        Details
                        </p>
                        <form class="forms-sample">
                          <div class="form-group">
                            <label for="user_fname">First Name</label>
                            <input type="text" class="form-control" id="user_fname" placeholder="First Name">
                          </div>
                          <div class="form-group">
                            <label for="user_mname">Middle Name</label>
                            <input type="text" class="form-control" id="user_mname" placeholder="Middle Name">
                          </div>
                          <div class="form-group">
                            <label for="user_lname">Last Name</label>
                            <input type="text" class="form-control" id="userlname" placeholder="Last Name">
                          </div>
                          <div class="form-group">
                            <label for="email_id">Email</label>
                            <input type="text" class="form-control" id="email_id" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <label for="user_mob_no">Mobile No</label>
                            <input type="password" class="form-control" id="user_mob_no" placeholder="Paid Amount">
                          </div>
            
                         
                         

                          
                          
                          <button type="submit" class="btn btn-primary me-2" id="btn_save_user">Submit</button>
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