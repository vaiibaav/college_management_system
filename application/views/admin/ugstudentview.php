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
                        <h1 class="mt-4">Search Student</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">All Student</li>
                        </ol>
                        <ol class="breadcrumb mb-4">
                            <a href="bscstudent" class="btn btn-info mr-2">B.Sc.</a>
                            <a href="bcomstudent" class="btn btn-info mr-2">B.Com.</a>
                            <a href="bastudent" class="btn btn-info mr-2">B.A.</a>
                            <a href="" class="btn btn-info mr-2">B.A. (Civil Services)</a>
                            <a href="" class="btn btn-info mr-2">M.Sc.</a>
                            <a href="" class="btn btn-info mr-2">B.A. (Civil Services)</a>
                            <a href="" class="btn btn-info mr-2">P.G.D.C.A.</a>
                        </ol>
                        <div class="card">
                            <div class="card-header">
                                Search Students
                            </div>
                            <div class="card-body">
                        <?php 
                            if ($this->uri->segment(1) == "bscstudent" || $this->uri->segment(3) == "bscdisplay") { ?>
                                <form method="post" action="<?=base_url();?>admission/searchstudent/bscdisplay">
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Select Session</label>
                                    <select class="form-control" name="collegesession">
                                        <option value="1">2020-2021</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label>Select Year</label>
                                    <select class="form-control" name="courseyear">
                                        <option value="1 Year" selected="">First Year (SEM - I)</option>
                                        <option value="2 Year">Second Year (SEM - III)</option>
                                        <option value="3 Year">Third Year (SEM - V)</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label>Select Course</label>
                                    <select class="custom-select" name="bscgroupsub" required>
                                        <option value="PCM">P.C.M. (Physics, Chemistry, Mathematics)</option>
                                        <option value="CBZ">C.B.Z (Chemistry, Botany, Zoology)</option>
                                        <option value="CBMB">C.B.M/B (Chemistry, Botany, Microbiology)</option>
                                        <option value="CZMB">C.Z.M/B (Chemistry, Zoology, Microbiology)</option>
                                        <option value="PMCs"> P.M.Cs (Physics, Mathematics, Computer Science)</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="submit" name="searchstudent" value="Search" class="btn btn-info" style="margin-top: 32px;">
                                </div>
                            </div>
                        </form>
                          <?php  } elseif ($this->uri->segment(1) == "bcomstudent" || $this->uri->segment(3) == "bcomdisplay") { ?>
                              <form method="post" action="<?=base_url();?>admission/searchstudent/bcomdisplay">
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Select Session</label>
                                    <select class="form-control" name="collegesession">
                                        <option value="1">2020-2021</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label>Select Year</label>
                                    <select class="form-control" name="courseyear">
                                        <option value="1 Year" selected="">First Year (SEM - I)</option>
                                        <option value="2 Year">Second Year (SEM - III)</option>
                                        <option value="3 Year">Third Year (SEM - V)</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label>Select Course</label>
                                    <select class="custom-select" name="bscgroupsub" required>
                                        <option value="IT">Information Technology</option>
                                        <option value="Marketing">Marketing</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="submit" name="searchstudent" value="Search" class="btn btn-info" style="margin-top: 32px;">
                                </div>
                            </div>
                        </form>
                        <?php  } else { ?> 
                            <form method="post" action="<?=base_url();?>admission/searchstudentba/badisplay">
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Select Session</label>
                                    <select class="form-control" name="collegesession">
                                        <option value="1">2020-2021</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label>Select Year</label>
                                    <select class="form-control" name="courseyear">
                                        <option value="1 Year" selected="">First Year (SEM - I)</option>
                                        <option value="2 Year">Second Year (SEM - III)</option>
                                        <option value="3 Year">Third Year (SEM - V)</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-3">
                                    <input type="submit" name="searchstudent" value="Search" class="btn btn-info" style="margin-top: 32px;">
                                </div>
                            </div>
                        </form>
                         <?php }?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mt-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Students Data
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Admission Date</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <?php 
                                            if ($this->uri->segment(3) == "bscdisplay") { //echo $this->db->last_query(); ?>

                                           <tbody>
                                            <?php foreach($students as $row) { ?>
                                                <tr>
                                            <td><?php echo $row->firstname." ".$row->middlename. " " .$row->lastname;?></td>
                                            <td>Position</td>
                                            <td>Office</td>
                                            <td>Age</td>
                                            <td>Start date</td>
                                            <td>Salary</td>
                                        </tr>
                                            <?php } ?>
                                        </tbody>
                                           <?php } elseif ($this->uri->segment(3) == "badisplay") { ?>
                                               <tbody>
                                            <?php foreach($bastudents as $row) { ?>
                                                <tr>
                                            <td><?php echo $row->firstname." ".$row->middlename. " " .$row->lastname;?></td>
                                            <td>Position</td>
                                            <td>Office</td>
                                            <td>Age</td>
                                            <td>Start date</td>
                                            <td>Salary</td>
                                        </tr>
                                            <?php } ?>
                                        </tbody>
                                          <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </main>
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
