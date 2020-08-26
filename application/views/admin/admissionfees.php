<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Library Management System</title>
        <link href="<?=base_url(); ?>assets/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include 'navbar.php'; ?>
        <div id="layoutSidenav">
            <?php include 'sidebar.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Admission Fees</h1>
                        <hr>
                        <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol> -->
                            <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Fees Details
                                 <a href="" class="btn btn-success" style="float: right;" data-toggle="modal" data-target="#exampleModal">Pay Fees</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Form No.</th>
                                                <th>Student Name</th>
                                                <th>Admission Date</th>
                                                <th>Course</th>
                                                <th>Year</th>
                                                <th>Admission Fees</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Form No.</th>
                                                <th>Student Name</th>
                                                <th>Admission Date</th>
                                                <th>Course</th>
                                                <th>Year</th>
                                                <th>Admission Fees</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php $i=1; foreach ($fees as $row) { ?>
                                            
                                            <tr>
                                                <td><?=$i++; ?></td>
                                                <td><?=$row->formno; ?></td>
                                                <td><?=$row->studname; ?></td>
                                                <td><?php $date = $row->admdate; echo date("d-m-Y", strtotime($date));?></td>
                                                <td><?=$row->course; ?></td>
                                                <td><?=$row->courseyear; ?></td>
                                                <td><?=$row->admfee; ?></td>
                                                <td><a href="<?=base_url();?>admissionfeesc/printpdf/<?=$row->id;?>" target="_blank" class="btn btn-info"><i class="fas fa-print"></i> PRINT</a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </main>
<!-- Fees Modal -->
<form method="post" action="<?=base_url(); ?>admissionfeesc/payfees">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pay Fees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <label>Form No.</label>
            <input type="text" name="admformno" class="form-control" placeholder="Form Number" required="">
            <label>Student Name</label>
            <input type="text" name="studname" class="form-control" placeholder="Student Name" required="">
            <label>Admission Date</label>
            <input type="date" name="admdate" class="form-control" required="">
                            
            <label>Select Course</label>
            <select class="custom-select" name="course" required>
                <option value="">Choose...</option>
                <option value="B.Sc.">B.Sc.</option>
                <option value="B.Com.">B.Com.</option>
                <option value="B.A.">B.A</option>
            </select>
            <label>Select Year</label>
            <select class="custom-select" name="courseyear" required>
                <option value="">Choose...</option>
                <option value="First Year">First Year</option>
                <option value="Second Year">Second Year</option>
                <option value="Third Year">Third Year</option>
            </select>
            <label>Admission Fee</label>
            <input type="text" name="studfees" class="form-control" value="100">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="addcategory" value="Pay Fees" class="btn btn-info">
      </div>
    </div>
  </div>
</div>
</form>
<!-- Modal End -->
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url(); ?>assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url(); ?>assets/datatables-demo.js"></script>
    </body>
</html>
