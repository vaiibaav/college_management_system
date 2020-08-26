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
                        <h1 class="mt-4">Admission</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Under Graduate Courses</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">B.Sc.</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <?php if ($this->uri->segment(1) == "allstudent") { ?>
                                            <a class="small text-white stretched-link" href="<?=base_url(); ?>bscstudent">All Student</a>
                                       <?php } else { ?>

                                        <a class="small text-white stretched-link" href="<?=base_url(); ?>bscadmission">Add Student</a> <?php } ?>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">B.Com.</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <?php if ($this->uri->segment(1) == "allstudent") { ?>
                                            <a class="small text-white stretched-link" href="<?=base_url(); ?>bcomstudent">All Student</a>
                                       <?php } else { ?>

                                        <a class="small text-white stretched-link" href="<?=base_url(); ?>bcomadmission">Add Student</a> <?php } ?>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">B.A.</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <?php if ($this->uri->segment(1) == "allstudent") { ?>
                                            <a class="small text-white stretched-link" href="<?=base_url(); ?>bastudent">All Student</a>
                                       <?php } else { ?>

                                        <a class="small text-white stretched-link" href="<?=base_url(); ?>baadmission">Add Student</a> <?php } ?>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">B.A. Civil Services</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <?php if ($this->uri->segment(1) == "allstudent") { ?>
                                            <a class="small text-white stretched-link" href="<?=base_url(); ?>bscadmission">All Student</a>
                                       <?php } else { ?>

                                        <a class="small text-white stretched-link" href="<?=base_url(); ?>bscadmission">Add Student</a> <?php } ?>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Post Graduate Courses</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">M.Sc.</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <?php if ($this->uri->segment(1) == "allstudent") { ?>
                                            <a class="small text-white stretched-link" href="<?=base_url(); ?>bscadmission">All Student</a>
                                       <?php } else { ?>

                                        <a class="small text-white stretched-link" href="<?=base_url(); ?>bscadmission">Add Student</a> <?php } ?>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">M.A.</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <?php if ($this->uri->segment(1) == "allstudent") { ?>
                                            <a class="small text-white stretched-link" href="<?=base_url(); ?>bscadmission">All Student</a>
                                       <?php } else { ?>

                                        <a class="small text-white stretched-link" href="<?=base_url(); ?>bscadmission">Add Student</a> <?php } ?>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">M.A. (Public Administration)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <?php if ($this->uri->segment(1) == "allstudent") { ?>
                                            <a class="small text-white stretched-link" href="<?=base_url(); ?>bscadmission">All Student</a>
                                       <?php } else { ?>

                                        <a class="small text-white stretched-link" href="<?=base_url(); ?>bscadmission">Add Student</a> <?php } ?>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">P.G.D.C.A.</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <?php if ($this->uri->segment(1) == "allstudent") { ?>
                                            <a class="small text-white stretched-link" href="<?=base_url(); ?>bscadmission">All Student</a>
                                       <?php } else { ?>

                                        <a class="small text-white stretched-link" href="<?=base_url(); ?>bscadmission">Add Student</a> <?php } ?>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
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
