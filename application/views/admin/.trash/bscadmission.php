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
                        <h1 class="mt-4">Admission to B.Sc.</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Session : </li>
                        </ol>
                        <form method="post" action="<?=base_url();?>bscadmission/bscformvalidation" autocomplete="on">
                        <div class="card">
                            <div class="card-header">
                                Course Selection
                            </div>
                            <div class="card-body">
                                <div class="row">
                                  <div class="col-md-2">
                                        <label>Select Session</label>
                                        <select class="custom-select" name="bsccompulsorysub" required>
                                          <option value="">Choose...</option>
                                          
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Admission Form No.</label>
                                        <input type="text" name="formno" value="<?=set_value('formno'); ?>" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label>Admission Date</label>
                                        <input type="date" name="admdate" value="<?=set_value('admdate'); ?>" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Select Year</label>
                                        <select class="form-control" name="courseyear">
                                          <option value="1 Year" selected="">First Year (SEM - I)</option>
                                          <option value="2 Year">First Year (SEM - III)</option>
                                          <option value="3 Year">First Year (SEM - V)</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Select Course</label>
                                        <select id="seeAnotherField" class="form-control" name="course">
                                          <option value="B.Sc." id="bsc">B.Sc. (Bachelor Of Science) </option>
                                            <!-- <option value="B.A." id="ba">B.A. (Bachelor Of Arts) </option>
                                            <option value="B.Com." id="bcom">B.Com. (Bachelor Of Commerce) </option> -->
                                        </select>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-hover table-bordered" align="center">
                                          <tr>
                                            <td colspan="2"><h6 class="text-danger"><i>Select Subject carefully. once saved can not be undone</i></h6></td>
                                          </tr>
                                          <tr>
                                            <th>
                                              Compulsory Subject 1
                                            </th>
                                            <td>
                                              English
                                              <input hidden="" name="compulsorysub" value="English">
                                            </td>
                                          </tr>
                                          <tr>
                                            <th>Compulsory Subject 2 </th>
                                            <td>
                                              <select class="custom-select" name="bsccompulsorysub" required>
                                                 <option value="">Choose...</option>
                                                 <option value="SE">Supplementary English</option>
                                                 <option value="MA">Marathi</option>
                                              </select>
                                            </td>
                                          </tr>
                                          <tr>
                                            <th> Select The Group Subject</th>
                                            <td>
                                              <select class="custom-select" name="bscgroupsub" required>
                                                 <option value="">Choose...</option>
                                                 <option value="PCM">P.C.M. (Physics, Chemistry, Mathematics)</option>
                                                 <option value="CBZ">C.B.Z (Chemistry, Botany, Zoology)</option>
                                                 <option value="CBMB">C.B.M/B (Chemistry, Botany, Microbiology)</option>
                                                 <option value="CZMB">C.Z.M/B (Chemistry, Zoology, Microbiology)</option>
                                                 <option value="PMCs"> P.M.Cs (Physics, Mathematics, Computer Science)</option>
                                              </select>
                                            </td>
                                          </tr>
                                      </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <?php $this->load->view('admin/admissionform'); ?>
                         <input type="submit" name="bscadmission" value="Save" class="btn btn-lg btn-success" style="float: right;">
                        </form>                   
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
