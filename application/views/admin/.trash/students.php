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
                        <h1 class="mt-4">Add Students</h1><hr>
                        <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol> -->
                    <form name="form1" method="post" action="<?=base_url();?>adminc/validatestudent">
                        <div class="card mt-3">
  <div class="card-header">
    <h5>Course Information</h5>
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col-md-4">
            <label>Admission Date</label>
            <input type="date" name="admdate" value="<?=set_value('admdate'); ?>" class="form-control">
        </div>
      <div class="col-md-4">
        <label>Select Year</label>
        <select class="form-control" name="courseyear">
          <option value="1" selected="">First Year (SEM - I)</option>
          <!-- <option value="2" selected="">First Year (SEM - I)</option>
          <option value="3" selected="">First Year (SEM - I)</option> -->
        </select>
      </div>
      <div class="col-md-4">
        <label>Select Course</label>
        <select id="seeAnotherField" class="form-control" name="course">
          <option value="B.Sc." id="bsc">B.Sc. (Bachelor Of Science) </option>
            <option value="B.A." id="ba">B.A. (Bachelor Of Arts) </option>
            <option value="B.Com." id="bcom">B.Com. (Bachelor Of Commerce) </option>
        </select>
      </div>
    </div><br>
    <div class="row bsc box">
        <table class="table table-hover table-bordered" align="center">
          <tr>
            <td colspan="2"><h6 class="text-danger"><i>Select Subject carefully. once saved can not be undone</i></h6>
          </tr>
          <tr>
            <th>
              Compulsory Subject 1
            </th>
            <td>
              English
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
    <div class="row ba box">
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
    <div class="row bcom box">
        <table class="table table-hover table-bordered" align="center">
          <tr>
            <td colspan="2"><h6 class="text-danger"><i>Select Subject carefully. once saved can not be undone</i></h6>
          </tr>
          <tr>
            <th>
              Compulsory Subject 1
            </th>
            <td>
              English
            </td>
          </tr>
          <tr>
            <th> Select The Group Subject</th>
            <td>
              <select class="custom-select" name="groupsub" required>
                 <option value="">Choose...</option>
                 <option value="Information Technology">Information Technology</option>
                 <option value="Marketing">Marketing</option>
              </select>
            </td>
          </tr>
        </table>
    </div>
  </div>
</div><br>
                        <div class="card">
                          <div class="card-header">
                            <h5>Personal Information</h5>
                          </div>
                          <div class="card-body">
                            <div class="row">
      <div class="col-md-3">
        <label>Name of the student</label><br>
      </div>
      <div class="col-md-3">
        <label>First Name :- </label>
        <input type="text" name="firstname" class="form-control" value="<?=set_value('firstname'); ?>" required="">
      </div>
      <div class="col-md-3">
        <label>Middle Name :- </label>
        <input type="text" name="middlename" class="form-control" value="<?=set_value('middlename'); ?>" required="">
      </div>
      <div class="col-md-3">
        <label>Last Name :- </label>
        <input type="text" name="lastname" class="form-control" value="<?=set_value('lastname'); ?>" required="">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3">
        <label>Father's / Guardian's / Husband Name</label>
      </div>
      <div class="col-md-3">
        <label>Guardian Relation :- </label>
        <select class="custom-select" name="guardian_relation" required>
          <option value="">Choose...</option>
          <option value="father">Father</option>
          <option value="husband">Husband</option>
        </select>
      </div>
      <div class="col-md-6">
        <label>Guardian Name :- </label>
        <input type="text" name="guardianname" class="form-control" value="<?=set_value('guardianname'); ?>" required="">
      </div>
      
    </div><br>
    <div class="row">
      <div class="col-md-3">
        <label>Mother's Name</label>
      </div>
      <div class="col-md-6">
        <label>Name :- </label>
        <input type="text" name="mothername" class="form-control" value="<?=set_value('mothername'); ?>" required="">
      </div>
    </div><br>
    <div class="row">
      <div class="col-md-3">
        <label>Gender</label><br>
        <select class="custom-select" name="gender" required>
      <option value="">Choose...</option>
          <option value="Male"> Male </option>
          <option value="Female"> Female </option>
          <option value="Other"> Other </option>
        </select>
      </div>
      <div class="col-md-3">
        <label>Maratial Status</label>
        <select class="custom-select" name="maratial_status" required>
      <option value="">Choose...</option>
          <option value="Unmarried">Unmarried</option>
          <option value="Married">Married</option>
        </select>
      </div>
      <div class="col-md-3">
        <label>Date OF Birth</label>
        <input type="date" name="dob" class="form-control" value="<?=set_value('dob'); ?>" required="">
      </div>
      <div class="col-md-3">
        <label>Place Of Birth</label>
        <input type="text" name="pob" class="form-control" value="<?=set_value('pob'); ?>" required="">
      </div>
    </div><br>
    <div class="row">
      <div class="col-md-3">
        <label>Religion</label>
       <input type="text" name="religion" class="form-control" value="<?=set_value('religion'); ?>" required="">
      </div>
      <div class="col-md-2">
        <label>Category</label>
       <select class="custom-select" name="category" required>
      <option value="">Choose...</option>
         <option value="SC">SC</option>
         <option value="ST">ST</option>
         <option value="OBC">OBC</option>
         <option value="DT(A)">DT (A)</option>
         <option value="NT (B)">NT (B)</option>
         <option value="NT (C)">NT (C)</option>
         <option value="NT (D)">NT (D)</option>
         <option value="SBC">SBC</option>
         <option value="OPEN">OPEN / GENERAL</option>
       </select>
      </div>
      <div class="col-md-2">
        <label>Caste</label>
       <input type="text" name="caste" class="form-control" value="<?=set_value('caste'); ?>" required=""> 
      </div>
      <div class="col-md-2">
        <label>Sub-Caste</label>
        <input type="text" name="subcaste" class="form-control" value="<?=set_value('subcaste'); ?>">
      </div>
      <div class="col-md-3">
        <label>Physically Challenged</label>
        <select class="custom-select" name="physically_challenged" required>
      <option value="">Choose...</option>
          <option value="No">No</option>
          <option value="Visually Impaired">Visually Impaired</option>
          <option value="Speech Impaired">Speech Impaired</option>
          <option value="Hearing Impaired">Hearing Impaired</option>
          <option value="Orthopedic Disorder">Orthopedic Disorder</option>
          <option value="Mentally Retarded">Mentally Retarded</option>
        </select>
      </div>
    </div>
  </div>
</div><br>
<div class="card">
  <div class="card-header">
    <h5> Contact Information</h5>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <label>Address for Correspondence</label>
        <textarea class="form-control" name="fulladdress" required=""><?=set_value("fulladdress"); ?></textarea>
      </div>
    </div><br>
    <div class="row">
      <div class="col-md-3">
        <label>State</label>
        <input type="text" name="state" class="form-control" value="<?=set_value('state'); ?>" required="">
      </div>
      <div class="col-md-3">
        <label>District</label>
        <input type="text" name="district" class="form-control" value="<?=set_value('district'); ?>" required="">
      </div>
      <div class="col-md-2">
        <label>Tehsil</label>
        <input type="text" name="tehsil" class="form-control" value="<?=set_value('tehsil'); ?>" required="">
      </div>
      <div class="col-md-2">
        <label>City / Town / Village</label>
        <input type="text" name="village" class="form-control" value="<?=set_value('village'); ?>" required="">
      </div>
      <div class="col-md-2">
        <label>Pin Code</label>
        <input type="text" name="pincode" class="form-control" value="<?=set_value('pincode'); ?>" required="" maxlength="6">
      </div>
    </div><br>
    <div class="row">
      <div class="col-md-4">
        <label>1. Mobile No.</label>
        <input type="text" name="mobile1" class="form-control" value="<?=set_value('mobile1'); ?>" required="">
      </div>

      <div class="col-md-4">
        <label>2. Mobile No.</label>
        <input type="text" name="mobile2" class="form-control" value="<?=set_value('mobile2'); ?>">
      </div>

      <div class="col-md-4">
        <label>Email-Id</label>
        <input type="email" name="emailid" class="form-control" value="<?=set_value('emailid'); ?>">
      </div>
    </div>
  </div>
</div>
<div class="card mt-3">
  <div class="card-header">
    <h5>Past Qualification</h5>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
      <table class="table table-bordered table-hover table-responsive">
        <tr>
          <th>Name of Examination</th>
          <th>Name of Board/University</th>
          <th>Name of School/College</th>
          <th>Date of Passing (DD-MM-YYYY)</th>
          <th>Examination Seat No. (Last)</th>
          <th>Percentage</th>
        </tr>
        <tr>
          <th>Std. 10<sup>th</sup></th>
          <td>
            <input type="text" name="sscuni" value="<?=set_value('sscuni'); ?>" class="form-control" required="">
          </td>
          <td><input type="text" name="sscsch" value="<?=set_value('sscsch'); ?>" class="form-control" required="" ></td>
          <td><input type="text" name="sscpass" value="<?=set_value('sscpass'); ?>" class="form-control" required=""></td>
          <td><input type="text" name="sscroll" value="<?=set_value('sscroll'); ?>" class="form-control" required=""></td>
          <td><input type="text" name="sscper" value="<?=set_value('sscper'); ?>" class="form-control" required="" ></td>
        </tr>
        <tr>
          <th>Std. 12<sup>th</sup></th>
          <td><input type="text" name="hscuni" value="<?=set_value('hscuni'); ?>" class="form-control" required="" ></td>
          <td><input type="text" name="hscsch" value="<?=set_value('hscsch'); ?>" class="form-control" required="" ></td>
          <td><input type="text" name="hscpass" value="<?=set_value('hscpass'); ?>" class="form-control" required=""></td>
          <td><input type="text" name="hscroll" value="<?=set_value('hscroll'); ?>" class="form-control" required=""></td>
          <td><input type="text" name="hscper" value="<?=set_value('hscper'); ?>" class="form-control" required="" ></td>
        </tr>
      </table>
      </div>
    </div>
  </div>
</div>

<br>
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
        <script>
$(document).ready(function(){
    $("#seeAnotherField").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("id");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>
</body>
</html>