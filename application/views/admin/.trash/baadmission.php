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
        <script type="text/javascript">
            function chkcontrol(j) {
                var total=0;
                for(var i=0; i < document.form1.bacourse.length; i++){
                if(document.form1.bacourse[i].checked){
				total =total +1;}
				if(total > 3){
				alert("Please Select only three") 
				document.form1.bacourse[j].checked = false ;
				return false;
				}
			}
		}
</script>
    </head>
    <body class="sb-nav-fixed">
        <?php include 'navbar.php'; ?>
        <div id="layoutSidenav">
            <?php include 'sidebar.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Admission to B.A.</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Session : </li>
                        </ol>
                        <form name="form1" method="post" action="" autocomplete="on">
                        <div class="card">
                            <div class="card-header">
                                Course Selection
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Admission Form No.</label>
                                        <input type="text" name="formno" value="<?=set_value('formno'); ?>" class="form-control">
                                    </div>
                                    <div class="col-md-3">
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
                                        	<option value="B.A." id="ba">B.A. (Bachelor Of Arts) </option>
                                            <!-- <option value="B.Sc." id="bsc">B.Sc. (Bachelor Of Science) </option>
                                            <option value="B.Com." id="bcom">B.Com. (Bachelor Of Commerce) </option> -->
                                        </select>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-hover table-bordered" align="center">
          <tr>
            <td colspan="2"><h6 class="text-danger"><i>Select Subject carefully. once saved can not be undone</i></h6>
          </tr>
          <tr>
            <th>
              Compulsory Subject
            </th>
            <td>
              
                  Marathi, English
              
            </td>
          </tr>
          <tr>
            <th> Select The Group Subject</th>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="English Lit" name="bacourse" onclick="chkcontrol(0)">
                <label class="form-check-label" for="defaultCheck1">
                  English Lit.
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Geography" name="bacourse" onclick="chkcontrol(1)">
                <label class="form-check-label" for="defaultCheck2">
                  Geography
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="History" name="bacourse" onclick="chkcontrol(2)">
                <label class="form-check-label" for="defaultCheck2">
                  History
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Sociology" name="bacourse" onclick="chkcontrol(3)">
                <label class="form-check-label" for="defaultCheck2">
                  Sociology
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Home Economics" name="bacourse" onclick="chkcontrol(4)">
                <label class="form-check-label" for="defaultCheck2">
                  Home Economics
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Political Science" name="bacourse" onclick="chkcontrol(5)">
                <label class="form-check-label" for="defaultCheck2">
                  Political Science
                </label>
              </div>
            </td>
          </tr>
        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <?php $this->load->view('admin/admissionform'); ?>
                         <input type="submit" name="personal_info" value="Save" class="btn btn-lg btn-success" style="float: right;">
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
