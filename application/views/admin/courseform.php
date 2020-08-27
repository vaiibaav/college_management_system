<?php
if ($this->uri->segment(1) == "bscadmission") { ?>

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
                                          <?php foreach ($data as $row) { ?>
                                            <option value="<?=$row->id; ?>"><?=$row->clgsession; ?></option>
                                          <?php } ?>
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
<?php } elseif ($this->uri->segment(1) == "bcomadmission") { ?>
<form method="post" action="" autocomplete="on">
                        <div class="card">
                            <div class="card-header">
                                Course Selection
                            </div>
                            <div class="card-body">
                                <div class="row">
                                  <div class="col-md-2">
                                        <label>Select Session</label>
                                        <select class="custom-select" name="bsccompulsorysub" required>
                                          <?php foreach ($data as $row) { ?>
                                            <option value="<?=$row->id; ?>"><?=$row->clgsession; ?></option>
                                          <?php } ?>
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
                                          <option value="B.Com." id="bcom">B.Com. (Bachelor Of Commerce) </option>
                                            <!-- <option value="B.A." id="ba">B.A. (Bachelor Of Arts) </option>
                                             <option value="B.Sc." id="bsc">B.Sc. (Bachelor Of Science) </option> -->
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
                            </div>
                        </div>
<?php } else { ?>
<form name="form1" method="post" action="admission/baformvalidation" autocomplete="on">
                        <div class="card">
                            <div class="card-header">
                                Course Selection
                            </div>
                            <div class="card-body">
                                <div class="row">
                                  <div class="col-md-2">
                                        <label>Select Session</label>
                                        <select class="custom-select" name="bsccompulsorysub" required>
                                          <?php foreach ($data as $row) { ?>
                                            <option value="<?=$row->id; ?>"><?=$row->clgsession; ?></option>
                                          <?php } ?>
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
                <input class="form-check-input" type="checkbox" value="English Lit" name="bacourse[]" onclick="chkcontrol(0)">
                <label class="form-check-label" for="defaultCheck1">
                  English Lit.
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Geography" name="bacourse[]" onclick="chkcontrol(1)">
                <label class="form-check-label" for="defaultCheck2">
                  Geography
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="History" name="bacourse[]" onclick="chkcontrol(2)">
                <label class="form-check-label" for="defaultCheck2">
                  History
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Sociology" name="bacourse[]" onclick="chkcontrol(3)">
                <label class="form-check-label" for="defaultCheck2">
                  Sociology
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Home Economics" name="bacourse[]" onclick="chkcontrol(4)">
                <label class="form-check-label" for="defaultCheck2">
                  Home Economics
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Political Science" name="bacourse[]" onclick="chkcontrol(5)">
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
<?php } ?>