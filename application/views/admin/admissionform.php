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
      <div class="col-md-2">
        <label>Guardian Relation :- </label>
        <select class="custom-select" name="guardian_relation" required>
          <option value="">Choose...</option>
          <option value="father">Father</option>
          <option value="husband">Husband</option>
        </select>
      </div>
      <div class="col-md-3">
        <label>Guardian Name :- </label>
        <input type="text" name="guardianname" class="form-control" value="<?=set_value('guardianname'); ?>" required="">
      </div>
      <div class="col-md-4">
        <label>Mother Name :- </label>
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