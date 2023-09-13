<?php include 'navbar.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Examinee profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Examinee profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- Main content -->
            <div class="invoice p-3 mb-3" id="printElement" style="border: none;">

             <div class="row invoice-info" style="line-height: 18px;">
                <div class="col-sm-2 invoice-col justify-content-center">
                  <img src="../images/FB_IMG_1669123021632.jpg" alt="" class="d-block m-auto" width="130">
                </div>
                <div class="col-sm-8 invoice-col text-center">
                  <address>
                    Republic of the Philippines<br>
                    <strong>ISABELA STATE UNIVERSITY</strong><br>
                    Jones Campus<br>
                    Jones Isabela <br>
                    <strong>GUIDANCE AND COUNSELING CENTER</strong><br>
                    <strong>STUDENT CUMULATIVE RECORD</strong><br>
                  </address>
                </div>
                <div class="col-sm-2 invoice-col justify-content-center">
                  <img src="../images-users/<?php echo $row['image']; ?>" alt="" class="d-block m-auto border" width="110" height="110">
                </div>
                <div class="col-sm-12">
                  <div class="dropdown-divider"></div>
                </div>
              </div>

                <div class="row p-0">
                  <div class="col-12" style="line-height: 14px;">

                    <!-- BACKGROUND LOGO -->
                      <img src="../images/logo.png" alt="" width="80%" class="position-absolute" style="opacity: .15; top: 100px; left: 72px;">
                      <div class="row">
                        <div class="col-sm-4 invoice-col text-start">
                          <small>Date of Entry:<?php echo date("F d, Y", strtotime($row['school_year'])); ?></small>
                        </div>
                        <div class="col-sm-4 invoice-col text-right">
                          <small>Semester:<?php echo $row['semester']; ?></small>
                        </div>
                        <div class="col-sm-6 ">
                          <small>Status of Enrollment:<?php echo $row['enrollmentStatus']; ?></small>
                        </div>
                      </div>

                      <p class="text-sm mt-3 text-bold" style="text-decoration: underline;margin-bottom: 7px;">PERSONAL DATA</p>
                      <div class="row">
                        <div class="col-sm-4">
                          <small>Name:&nbsp;&nbsp;<?php echo ' '.$row['firstname'].' '.$row['middlename'].' '.$row['lastname'].' '.$row['suffix'].' '; ?></small>
                        </div>
                        <div class="col-sm-4">
                          <small>Age:&nbsp;&nbsp;<?php echo $row['age']; ?></small>
                        </div>
                        <div class="col-sm-4 ">
                          <small>Date of Birth:&nbsp;&nbsp;<?php echo $row['dob']; ?></small>
                        </div>
                        <div class="col-sm-4 ">
                          <small>Sex:&nbsp;&nbsp;<?php echo $row['gender']; ?></small>
                        </div>
                        <div class="col-sm-4">
                          <small>Place of Birth:&nbsp;&nbsp;<?php echo $row['place_of_birth']; ?></small>
                        </div>
                        <div class="col-sm-4">
                          <small>Birth of Order Among sibling:&nbsp;&nbsp;<?php echo $row['birth_order']; ?></small>
                        </div>
                        <div class="col-sm-4 ">
                          <small>Civil Status:&nbsp;&nbsp;<?php echo $row['civilstatus']; ?></small>
                        </div>
                        
                        <div class="col-sm-4">
                          <small>Landline:&nbsp;&nbsp;<?php echo $row['landline']; ?></small>
                        </div>
                        <div class="col-sm-6 ">
                          <small>Permanent Address:&nbsp;&nbsp;<?php echo $row['address']; ?></small>
                        </div>

                        <div class="col-sm-6">
                          <small>Boarding House Address:&nbsp;&nbsp;<?php echo $row['bh_Address']; ?></small>
                        </div>
                        <div class="col-sm-4 ">
                          <small>Cell Phone:&nbsp;&nbsp;<?php echo $row['contact']; ?></small>
                        </div>
                        <div class="col-sm-4 ">
                          <small>Email:&nbsp;&nbsp;<?php echo $row['email']; ?></small>
                        </div>

                        <div class="col-sm-4">
                          <small>Languages/Dialects Spoken:&nbsp;&nbsp;<?php echo $row['language']; ?></small>
                        </div>
                        <div class="col-sm-4">
                          <small>Religion:&nbsp;&nbsp;<?php echo $row['religion']; ?></small>
                        </div>
                        <div class="col-sm-4">
                          <small>Nationality:&nbsp;&nbsp;<?php echo $row['nationality']; ?></small>
                        </div>
                        <div class="col-sm-4 ">
                          <small>If Married, name of Spouse:&nbsp;&nbsp;<?php echo $row['spouseName']; ?></small>
                        </div>
                        <div class="col-sm-4 ">
                          <small>No. of Children:&nbsp;&nbsp;<?php echo $row['no_of_Children']; ?></small>
                        </div>
                      </div>


                      <p class="text-sm mt-3 text-bold" style="text-decoration: underline;margin-bottom: 7px;">HOME AND FAMILY BACKGROUND</p>
                      <div class="row">
                        <div class="col-sm-6">
                          <small class="text-bold">FATHER</small><br>
                            <div class="row">
                              <div class="col-sm-5"><small>Name:&nbsp;&nbsp; <?php echo $row['F_Name']; ?></small></div>
                              <div class="col-sm-7"><small>Current Address:&nbsp;&nbsp; <?php echo $row['F_Address']; ?></small></div>
                              <div class="col-sm-6"><small>Landline:&nbsp;&nbsp; <?php echo $row['F_Landline']; ?></small></div>
                              <div class="col-sm-6"><small>Cellphone No:&nbsp;&nbsp; <?php echo $row['F_Contact']; ?></small></div>
                              <div class="col-sm-7"><small>Educational Attainment:&nbsp;&nbsp; <?php echo $row['F_Education']; ?></small></div>
                              <div class="col-sm-5"><small>Occupation:&nbsp;&nbsp; <?php echo $row['F_Occupation']; ?></small></div>
                              <div class="col-sm-6"><small>Annual Income:&nbsp;&nbsp; <?php echo $row['F_Annual_Income']; ?></small></div>
                              <div class="col-sm-6"><small>Annual Income:&nbsp;&nbsp; <?php echo $row['F_Religion']; ?></small></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                          <small class="text-bold">MOTHER</small><br>
                            <div class="row">
                              <div class="col-sm-5"><small>Name:&nbsp;&nbsp; <?php echo $row['M_Religion']; ?></small></div>
                              <div class="col-sm-7"><small>Current Address:&nbsp;&nbsp; <?php echo $row['M_Religion']; ?></small></div>
                              <div class="col-sm-6"><small>Landline:&nbsp;&nbsp; <?php echo $row['M_Religion']; ?></small></div>
                              <div class="col-sm-6"><small>Cellphone No:&nbsp;&nbsp; <?php echo $row['M_Religion']; ?></small></div>
                              <div class="col-sm-7"><small>Educational Attainment:&nbsp;&nbsp; <?php echo $row['M_Religion']; ?></small></div>
                              <div class="col-sm-5"><small>Occupation:&nbsp;&nbsp; <?php echo $row['M_Religion']; ?></small></div>
                              <div class="col-sm-6"><small>Annual Income:&nbsp;&nbsp; <?php echo $row['M_Religion']; ?></small></div>
                              <div class="col-sm-6"><small>Annual Income:&nbsp;&nbsp; <?php echo $row['M_Religion']; ?></small></div>
                            </div>
                        </div>
                      </div>

                      <p class="text-sm mt-3 text-bold" style="text-decoration: underline;margin-bottom: 7px;">Name of Siblings including the Examinee's information</p>
                      <div class="row">
                        <div class="col-12">
                          <table class="table-bordered text-sm" id="table_field" style="width: 100%;">
                              <thead>
                                  <th>Name of Sibling</th>
                                  <th>School/Place of Work</th>
                                  <th>Age</th>
                              </thead>
                              <tbody>
                                  <?php 
                                      $id = $row['user_Id'];
                                      $fe = mysqli_query($conn, "SELECT * FROM siblingsrecord WHERE user_Id='$id'");
                                      while ($r = mysqli_fetch_array($fe)) {
                                  ?>
                                  <tr>
                                      <td><small><?php echo $r['Name_Siblings']; ?></small></td>
                                      <td><small><?php echo $r['School_Place_Work']; ?></small></td>
                                      <td><small><?php echo $r['Siblings_Age']; ?></small></td>
                                  </tr>
                                  <?php } ?>
                              </tbody>
                          </table>
                        </div>
                      </div>
                         
                      <p class="text-sm mt-3 text-bold" style="text-decoration: underline;margin-bottom: 7px;">PARENTS</p>
                      <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                              <div class="col-sm-12">
                                <?php if(in_array('Living together', $b)) { echo "✓"; } ?><small>&nbsp;&nbsp;Living together</small>
                              </div>
                              <div class="col-sm-12">
                                <?php if(in_array('Permanently Separated', $b)) { echo "✓"; } ?><small>&nbsp;&nbsp; Permanently Separated</small>
                              </div>
                              <div class="col-sm-12">
                                <?php if(in_array('Married Annulled/Legally Separated', $b)) { echo "✓"; } ?>&nbsp;&nbsp;<small>Married Annulled/Legally Separated</small>
                              </div>
                              <div class="col-sm-12">
                                <?php if(in_array('Father With another Partner', $b)) { echo "✓"; } ?><small>&nbsp;&nbsp;Father With another Partner</small>
                              </div>
                              
                            </div>
                        </div>
                        <div class="col-sm-6 mb-2">
                            <div class="row">
                              <div class="col-sm-12">
                                <?php if(in_array('Temporarily Separated', $b)) { echo "✓"; } ?><small>&nbsp;&nbsp;Temporarily Separated</small>
                              </div>
                              <div class="col-sm-12">
                                <?php if(in_array('Father OFW', $b)) { echo "✓"; } ?><small>&nbsp;&nbsp;Father OFW</small>
                              </div>
                              <div class="col-sm-12">
                                <?php if(in_array('Mother OFW', $b)) { echo "✓"; } ?><small>&nbsp;&nbsp;Mother OFW</small>
                              </div>
                              <div class="col-sm-12">
                                <?php if(in_array('Mother With Another Partner', $b)) { echo "✓"; } ?><small>&nbsp;&nbsp;Mother With Another Partner</small>
                              </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                          <small>Name of Guardian (If not living w/ parents):&nbsp;&nbsp;<?php echo $row['G_Name']; ?></small>
                        </div>
                        <div class="col-sm-12">
                          <small>Address:&nbsp;&nbsp;<?php echo $row['G_Address']; ?></small>
                        </div>
                        <div class="col-sm-6 ">
                          <small>Landline:&nbsp;&nbsp;<?php echo $row['G_Landline']; ?></small>
                        </div>
                        <div class="col-sm-6 ">
                          <small>Cellphone:&nbsp;&nbsp;<?php echo $row['G_Contact']; ?></small>
                        </div>
                        <div class="col-sm-12">
                          <small>Relationship with Guardian:&nbsp;&nbsp;<?php echo $row['G_Relation']; ?></small>
                        </div>
                      </div>


                      <p class="text-sm mt-3 text-bold" style="text-decoration: underline;margin-bottom: 7px;">PERSON TO CONTACT IN CASE OF EMERGENCY</p>
                      <div class="row">
                        <div class="col-sm-6">
                          <small>Name:&nbsp;&nbsp;<?php echo $row['Emerge_Name']; ?></small>
                        </div>
                        <div class="col-sm-6">
                          <small>Contact:&nbsp;&nbsp;<?php echo $row['Emerge_Address']; ?></small>
                        </div>
                        <div class="col-sm-12">
                          <small>Address:&nbsp;&nbsp;<?php echo $row['Emerge_Contact']; ?></small>
                        </div>
                      </div>


                      <p class="text-sm mt-3 text-bold" style="text-decoration: underline;margin-bottom: 7px;">EDUCATIONAL/SCHOOL INFORMATION</p>
                      <div class="row">
                        <div class="col-12">
                          <table class="table-bordered text-sm" id="table_field" style="width: 100%;">
                              <thead>
                                  <th>LEVEL</th>
                                  <th>NAME OF SCHOOL</th>
                                  <th>PLACE</th>
                                  <th>DATE ATTENDED</th>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td><small>Elementary</small></td>
                                      <td><small><?php echo $row['Elem_School']; ?></small></td>
                                      <td><small><?php echo $row['Elem_Place']; ?></small></td>
                                      <td><small><?php echo $row['Elem_DateAttended']; ?></small></td>
                                  </tr>
                                  <tr>
                                      <td><small>High School</small></td>
                                      <td><small><?php echo $row['HS_School']; ?></small></td>
                                      <td><small><?php echo $row['HS_Place']; ?></small></td>
                                      <td><small><?php echo $row['HS_DateAttended']; ?></small></td>
                                  </tr>
                                  <tr>
                                      <td><small>College</small></td>
                                      <td><small><?php echo $row['College_School']; ?></small></td>
                                      <td><small><?php echo $row['College_Place']; ?></small></td>
                                      <td><small><?php echo $row['College_DateAttended']; ?></small></td>
                                  </tr>
                                  <tr>
                                      <td><small>Vocational</small></td>
                                      <td><small><?php echo $row['Voc_School']; ?></small></td>
                                      <td><small><?php echo $row['Voc_Place']; ?></small></td>
                                      <td><small><?php echo $row['Voc_DateAttended']; ?></small></td>
                                  </tr>
                              </tbody>
                          </table>
                        </div>
                        <div class="col-sm-12 mt-2">
                          <small>Easiest Subject/s:&nbsp;&nbsp;<?php echo $row['easySubject']; ?></small>
                        </div>
                        <div class="col-sm-12">
                          <small>Most Difficult Subject/s:&nbsp;&nbsp;<?php echo $row['difficultSubject']; ?></small>
                        </div>
                        <div class="col-sm-12">
                          <small>Subjects With The Lowest Grades / What Grades:&nbsp;&nbsp;<?php echo $row['Sub_lowestGrade']; ?></small>
                        </div>
                        <div class="col-sm-12">
                          <small>Subject With The Highest Grades / What Grades:&nbsp;&nbsp;<?php echo $row['Sub_HighestGrade']; ?></small>
                        </div>
                        <div class="col-sm-6">
                          <small>Awards/Honors Received:&nbsp;&nbsp;<?php echo $row['Awards']; ?></small>
                        </div>
                        <div class="col-sm-6">
                          <small>GWA:&nbsp;&nbsp;<?php echo $row['GWA']; ?></small>
                        </div>
                        <div class="col-sm-6">
                          <small>Nature of Schooling:&nbsp;&nbsp;<?php echo $row['NatureSchooling']; ?></small>
                        </div>
                        <div class="col-sm-6">
                          <small>If Interrupted how long?:&nbsp;&nbsp;<?php echo $row['InterruptedforHowLong']; ?></small>
                        </div>
                        <div class="col-sm-12">
                          <small>Reason:&nbsp;&nbsp;<?php echo $row['Reason']; ?></small>
                        </div>
                      </div>
                     
                      
                      <p class="text-sm mt-3 text-bold" style="text-decoration: underline;margin-bottom: 7px;">MEMBERSHIP IN ORGANIZATIONS</p>
                      <div class="row">
                        <div class="col-12">
                          <small class="text-bold">In School: (From the Last School Attended)</small><br>
                          <table class="table-bordered text-sm" id="table_field" style="width: 100%;">
                              <thead>
                                  <th>Name of Organizations</th>
                                  <th>Position/Title</th>
                              </thead>
                              <tbody>
                                  <?php 
                                      $id = $row['user_Id'];
                                      $fe = mysqli_query($conn, "SELECT * FROM insideschool_org WHERE user_Id='$id'");
                                      while ($r = mysqli_fetch_array($fe)) {
                                  ?>
                                  <tr>
                                      <td><small><?php echo $r['School_Org']; ?></small></td>
                                      <td><small><?php echo $r['School_Position']; ?></small></td>
                                  </tr>
                                  <?php } ?>
                              </tbody>
                          </table>
                          <br>
                          <small class="text-bold">Outsie School:</small><br>
                          <table class="table-bordered text-sm" id="table_field" style="width: 100%;">
                              <thead>
                                  <th>Name of Organizations</th>
                                  <th>Position/Title</th>
                              </thead>
                              <tbody>
                                  <?php 
                                      $id = $row['user_Id'];
                                      $fe = mysqli_query($conn, "SELECT * FROM outsideschool_org WHERE user_Id='$id'");
                                      while ($r = mysqli_fetch_array($fe)) {
                                  ?>
                                  <tr>
                                      <td><small><?php echo $r['OutsideSchool_Org']; ?></small></td>
                                      <td><small><?php echo $r['OutsideSchool_Position']; ?></small></td>
                                  </tr>
                                  <?php } ?>
                              </tbody>
                          </table>
                        </div>
                      </div>


                      <p class="text-sm mt-3 text-bold" style="text-decoration: underline;margin-bottom: 7px;">UNIQUE FEATURES</p>
                      <div class="row">
                        <div class="col-sm-12">
                          <small>Special Interests:&nbsp;&nbsp;<?php echo $row['Interests']; ?></small>
                        </div>
                        <div class="col-sm-12">
                          <small>Special Skills/Talents:&nbsp;&nbsp;<?php echo $row['Skills']; ?></small>
                        </div>
                        <div class="col-sm-12 ">
                          <small>Hobbies/Recreational Activities:&nbsp;&nbsp;<?php echo $row['Hobbies']; ?></small>
                        </div>
                        <div class="col-sm-12 ">
                          <small>Characteristics that Describe you Best:&nbsp;&nbsp;<?php echo $row['Characteristics']; ?></small>
                        </div>
                        <div class="col-sm-12">
                          <small>Present Concerns/Problems:&nbsp;&nbsp;<?php echo $row['presentProblems']; ?></small>
                        </div>
                        <div class="col-sm-12">
                          <small>Present Fears:&nbsp;&nbsp;<?php echo $row['presentFears']; ?></small>
                        </div>
                      </div>

                      <p class="text-sm mt-3 text-bold" style="text-decoration: underline;margin-bottom: 7px;">HEALTH</p>
                      <div class="row">
                        <div class="col-sm-12">
                          <small>Disabilities/Impairments:&nbsp;&nbsp;<?php echo $row['Disabilities']; ?></small>
                        </div>
                        <div class="col-sm-12">
                          <small>Chronic Illness:&nbsp;&nbsp;<?php echo $row['ChronicIllness']; ?></small>
                        </div>
                        <div class="col-sm-12 ">
                          <small>Medicines Regularly Taken:&nbsp;&nbsp;<?php echo $row['Med_Reg_taken']; ?></small>
                        </div>
                        <div class="col-sm-12 ">
                          <small>Accidents Experienced/Effects:&nbsp;&nbsp;<?php echo $row['Accidents_exp']; ?></small>
                        </div>
                        <div class="col-sm-12">
                          <small>Operations Experienced/Effects:&nbsp;&nbsp;<?php echo $row['Operation_exp']; ?></small>
                        </div>
                      </div>

                  </div>
                </div>

                

            </div>


              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <?php  
                    $aa = mysqli_query($conn, "SELECT * FROM exam WHERE user_Id ='$id'");
                    if(mysqli_num_rows($aa) > 0){
                      echo '<a href="exam_result.php" class="btn-block btn btn-primary">View result</a>';
                    } else {
                      echo '<a href="exam_getCode.php" type="button" class="btn-block btn btn-primary">Take exam</a>';
                    }
                  ?>
                  
                  <!-- <button id="printButton"type="button" class="btn btn-primary" style="margin-right: 5px;"><i class="fas fa-print"></i> Print</button> -->
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
   
  </div>
 

<script src="print.js"> </script>
<?php include 'footer.php'; ?>
 