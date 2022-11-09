<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spica Admin</title>
  <!-- base:css -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <script>
   
    
      $(document).ready(function() {
    $('#myTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );

  </script>
  <div class="container-scroller d-flex">
  <!-- nav bar -->
   <?php include('pages/include/nav.php') ?> 
    
    <!--end nav bar -->
     <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Table with contextual classes</h4>
                    <p class="card-description">
                      Add class <code>.table-{color}</code>
                    </p>
                    <div class="table-responsive pt-3">
                      <table class="table table-bordered" id="myTable">
                        <thead>
                          <tr>
                            <th>
                              #
                            </th>
                            <th>
                              First name
                            </th>
                            <th>
                              Product
                            </th>
                            <th>
                              Amount
                            </th>
                            <th>
                              Deadline
                            </th>
                            <th>
                              #
                            </th>
                            <th>
                              First name
                            </th>
                            <th>
                              Product
                            </th>
                            <th>
                              Amount
                            </th>
                            <th>
                              Deadline
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="table-info">
                            <td>
                              1
                            </td>
                            <td>
                              Herman Beck
                            </td>
                            <td>
                              Photoshop
                            </td>
                            <td>
                              $ 77.99
                            </td>
                            <td>
                              May 15, 2015
                            </td>
                            <td>
                              1
                            </td>
                            <td>
                              Herman Beck
                            </td>
                            <td>
                              Photoshop
                            </td>
                            <td>
                              $ 77.99
                            </td>
                            <td>
                              May 15, 2015
                            </td>
                          </tr>
                          <tr class="table-warning">
                            <td>
                              2
                            </td>
                            <td>
                              Messsy Adam
                            </td>
                            <td>
                              Flash
                            </td>
                            <td>
                              $245.30
                            </td>
                            <td>
                              July 1, 2015
                            </td>
                            <td>
                              1
                            </td>
                            <td>
                              Herman Beck
                            </td>
                            <td>
                              Photoshop
                            </td>
                            <td>
                              $ 77.99
                            </td>
                            <td>
                              May 15, 2015
                            </td>
                          </tr>
                          <tr class="table-danger">
                            <td>
                              3
                            </td>
                            <td>
                              John Richards
                            </td>
                            <td>
                              Premeire
                            </td>
                            <td>
                              $138.00
                            </td>
                            <td>
                              Apr 12, 2015
                            </td>
                            <td>
                              1
                            </td>
                            <td>
                              Herman Beck
                            </td>
                            <td>
                              Photoshop
                            </td>
                            <td>
                              $ 77.99
                            </td>
                            <td>
                              May 15, 2015
                            </td>
                          </tr>
                          <tr class="table-success">
                            <td>
                              4
                            </td>
                            <td>
                              Peter Meggik
                            </td>
                            <td>
                              After effects
                            </td>
                            <td>
                              $ 77.99
                            </td>
                            <td>
                              May 15, 2015
                            </td>
                            <td>
                              1
                            </td>
                            <td>
                              Herman Beck
                            </td>
                            <td>
                              Photoshop
                            </td>
                            <td>
                              $ 77.99
                            </td>
                            <td>
                              May 15, 2015
                            </td>
                          </tr>
                          <tr class="table-primary">
                            <td>
                              5
                            </td>
                            <td>
                              Edward
                            </td>
                            <td>
                              Illustrator
                            </td>
                            <td>
                              $ 160.25
                            </td>
                            <td>
                              May 03, 2015
                            </td>
                            <td>
                              1
                            </td>
                            <td>
                              Herman Beck
                            </td>
                            <td>
                              Photoshop	
                            </td>
                            <td>
                              $ 77.99
                            </td>
                            <td>
                              May 15, 2015
                            </td>
                          </tr>
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