<title>Online Entrance Examination | Admin profile</title>
<?php include 'navbar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../images-users/<?php echo $row['image']; ?>"
                       alt="User profile picture"  style="height: 90px; width: 90px; border-radius: 50%;">
                </div>
                <h3 class="profile-username text-center"><?php echo ' '.$row['firstname'].' '.$row['lastname'].' '; ?></h3>
                <p class="text-muted text-center"><?php echo $row['user_type']; ?></p>
                <a class="btn bg-gradient-primary btn-block">Profile</a>
              </div>
            </div>

            <div class="card card-primary">
              <div class="card-header bg-gradient-primary">
                <h3 class="card-title">About Me</h3>
              </div>
              <div class="card-body">
                <!-- <strong><i class="fas fa-book mr-1"></i> Education</strong>
                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>
                <hr> -->
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                <p class="text-muted"><?php echo $row['address']; ?></p>
                <hr>
               <!--  <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>
                <hr>
                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p> -->
              </div>
            </div>

          </div>


          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#viewprofile" data-toggle="tab">Profile info</a></li>
                  <li class="nav-item"><a class="nav-link" href="#updateprofile" data-toggle="tab">Update info</a></li>
                  <li class="nav-item"><a class="nav-link" href="#profileupdate" data-toggle="tab">Profile update</a></li>
                  <li class="nav-item"><a class="nav-link" href="#accountsecurity" data-toggle="tab">Account security</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">

                  <div class="active tab-pane" id="viewprofile">
                     <div class="form-group row">
                        <label for="First name" class="col-sm-2 col-form-label">Full name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="First name" placeholder="First name" value="<?php echo ' '.$row['firstname'].' '.$row['middlename'].' '.$row['lastname'].' '.$row['suffix'].' '; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Gender" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                            <select class="custom-select" name="gender" required disabled>
                                 <?php if($row['gender'] == 'Male'): ?>
                                      <option value="<?php echo $row['gender']; ?>" selected><?php echo $row['gender']; ?></option>
                                      <option value="Female">Female</option>
                                 <?php else: ?>
                                      <option value="<?php echo $row['gender']; ?>" selected><?php echo $row['gender']; ?></option>
                                      <option value="Male">Male</option>
                                <?php endif; ?>
                             </select> 
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Date of birth" class="col-sm-2 col-form-label">Date of birth</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="Date of birth" placeholder="Date of birth" value="<?php echo $row['dob']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Age" class="col-sm-2 col-form-label">Age</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" id="Age" placeholder="Age" value="<?php echo $row['age']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Address" placeholder="Address" value="<?php echo $row['address']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Email" placeholder="Email" value="<?php echo $row['email']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Contact number" class="col-sm-2 col-form-label">Contact number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Contact number" placeholder="Contact number" value="<?php echo $row['contact']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Date registered" class="col-sm-2 col-form-label">Date registered</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="Date registered" placeholder="Date registered" value="<?php echo $row['date_registered']; ?>" readonly>
                        </div>
                      </div>
                      <!-- <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div> -->
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <a type="button" class="btn bg-gradient-primary" href="#updateprofile" data-toggle="tab">Update info</a>
                        </div>
                      </div>
                  </div>


                  <div class="tab-pane" id="updateprofile">
                      <form action="process_update.php" method="POST">
                      <div class="form-group row">
                        <input type="hidden" class="form-control" id="Date of birth" placeholder="User Id" value="<?php echo $row['user_Id']; ?>" name="user_Id">
                        <label for="First name" class="col-sm-2 col-form-label">First name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="First name" placeholder="First name" value="<?php echo $row['firstname']; ?>" onkeyup="lettersOnly(this)" name="firstname">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Middle name" class="col-sm-2 col-form-label">Middle name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Middle name" placeholder="Middle name" value="<?php echo $row['middlename']; ?>"  onkeyup="lettersOnly(this)"name="middlename">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Last name" class="col-sm-2 col-form-label">Last name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Last name" placeholder="Last name" value="<?php echo $row['lastname']; ?>" onkeyup="lettersOnly(this)" name="lastname">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Suffix" class="col-sm-2 col-form-label">Suffix</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Suffix" placeholder="Suffix" value="<?php echo $row['suffix']; ?>" onkeyup="lettersOnly(this)" name="suffix">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Gender" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                            <select class="custom-select" name="gender" required id="Gender">
                                <option value="Male"   <?php if($row['gender'] == 'Male')  { echo 'selected'; } ?>>Male</option>
                                <option value="Female" <?php if($row['gender'] == 'Female'){ echo 'selected'; } ?>>Female</option>
                             </select> 
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Date of birth" class="col-sm-2 col-form-label">Date of birth</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" name="dob" placeholder="Date of birth" required id="updatetxtbirthdate" onkeyup="updategetAgeVal(0)" onblur="updategetAgeVal(0);" onchange="updategetAgeVal(0);" value="<?php echo $row['dob']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="age" class="col-sm-2 col-form-label">Age</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  placeholder="Age" required id="updatetxtage" value="<?php echo $row['age']; ?>">
                            <input type="hidden" class="form-control" name="age" placeholder="Age" required id="updateagestatus">
                        </div>
                        
                      </div>
                      <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder = "email@gmail.com" required onkeydown="validation()" onkeyup="validation()"  value="<?php echo $row['email']; ?>">
                          <small id="text" style="font-style: italic;"></small>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Contact number" class="col-sm-2 col-form-label">Contact number</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-text bg-white">+63</div>
                            <input type="tel" class="form-control" pattern="[7-9]{1}[0-9]{9}" id="Contact number" name="contact" placeholder = "9123456789" required maxlength="10" value="<?php echo $row['contact']; ?>">
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Address" placeholder="Address" value="<?php echo $row['address']; ?>" name="address">
                        </div>
                      </div>
                     
                      <!-- <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div> -->
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn bg-gradient-primary" id="update_admin" name="update_profile">Submit</button>
                        </div>
                      </div>
                      </form>
                  </div>


                  <div class="tab-pane" id="accountsecurity">
                    <form action="process_update.php" method="POST" enctype="multipart/form-data">
                      <input type="hidden" class="form-control" value="<?php echo $row['user_Id']; ?>" name="user_Id">
                      <div class="form-group row">
                        <label for="Old password" class="col-sm-2 col-form-label">Old password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="Old password" placeholder="Old password" name="OldPassword" required minlength="8">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="new_password" class="col-sm-2 col-form-label">New password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" placeholder="Password" name="password" required id="new_password" minlength="8">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="cpassword" class="col-sm-2 col-form-label">Confirm password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" placeholder="Confirm password" name="cpassword" required id="new_cpassword" onkeyup="new_validate_password()" minlength="8">
                          <small id="new_wrong_pass_alert" style="font-style: italic;"></small>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn bg-gradient-primary" name="update_password_admin" id="update_password_admin">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>



                  <div class="tab-pane" id="profileupdate">
                    <form action="process_update.php" method="POST" enctype="multipart/form-data">
                      <input type="hidden" class="form-control" value="<?php echo $row['user_Id']; ?>" name="user_Id">
                      <!-- LOAD IMAGE PREVIEW -->
                      <div class="col-lg-12 mb-2">
                          <div class="form-group" id="user_preview">
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="Upload image" class="col-sm-2 col-form-label">Upload image</label>
                        <div class="col-sm-10">
                          <input type="file" class="col-sm-12 form-control-file" name="fileToUpload" id="Upload image" onchange="newgetImagePreview(event)">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn bg-gradient-primary" name="update_profile_admin">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>


                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


<?php include 'footer.php'; ?>


<script type="text/javascript">
function formatDate(date){
var d = new Date(date),
month = '' + (d.getMonth() + 1),
day = '' + d.getDate(),
year = d.getFullYear();

if (month.length < 2) month = '0' + month;
if (day.length < 2) day = '0' + day;

return [year, month, day].join('-');

}

function getAge(dateString){
var birthdate = new Date().getTime();
if (typeof dateString === 'undefined' || dateString === null || (String(dateString) === 'NaN')){
// variable is undefined or null value
birthdate = new Date().getTime();
}
birthdate = new Date(dateString).getTime();
var now = new Date().getTime();
// now find the difference between now and the birthdate
var n = (now - birthdate)/1000;
if (n < 604800){ // less than a week
var day_n = Math.floor(n/86400);
if (typeof day_n === 'undefined' || day_n === null || (String(day_n) === 'NaN')){
// variable is undefined or null
return '';
}else{
return day_n + ' day' + (day_n > 1 ? 's' : '') + ' old';
}
} else if (n < 2629743){ // less than a month
var week_n = Math.floor(n/604800);
if (typeof week_n === 'undefined' || week_n === null || (String(week_n) === 'NaN')){
return '';
}else{
return week_n + ' week' + (week_n > 1 ? 's' : '') + ' old';
}
} else if (n < 31562417){ // less than 24 months
var month_n = Math.floor(n/2629743);
if (typeof month_n === 'undefined' || month_n === null || (String(month_n) === 'NaN')){
return '';
}else{
return month_n + ' month' + (month_n > 1 ? 's' : '') + ' old';
}
}else{
var year_n = Math.floor(n/31556926);
if (typeof year_n === 'undefined' || year_n === null || (String(year_n) === 'NaN')){
return year_n = '';
}else{
return year_n + ' year' + (year_n > 1 ? 's' : '') + ' old';
}
}
}




function updategetAgeVal(pid){
var birthdate = formatDate(document.getElementById("updatetxtbirthdate").value);
var count = document.getElementById("updatetxtbirthdate").value.length;
if (count=='10'){
var age = getAge(birthdate);
var str = age;
var res = str.substring(0, 1);
if (res =='-' || res =='0'){
document.getElementById("updatetxtbirthdate").value = "";
document.getElementById("updatetxtage").value = "";
document.getElementById("updateagestatus").value = "";
$('#updatetxtbirthdate').focus();
return false;
}else{
document.getElementById("updatetxtage").value = age;
document.getElementById("updateagestatus").value = age;
}
}else{
document.getElementById("updatetxtage").value = "";
document.getElementById("updateagestatus").value = "";
return false;
}
}
</script>

<script>
  
  function new_validate_password() {

      var pass = document.getElementById('new_password').value;
      var confirm_pass = document.getElementById('new_cpassword').value;
      if (pass != confirm_pass) {
        document.getElementById('new_wrong_pass_alert').style.color = 'red';
        document.getElementById('new_wrong_pass_alert').innerHTML = 'X Password did not matched!';
        document.getElementById('update_password_admin').disabled = true;
        document.getElementById('update_password_admin').style.opacity = (0.4);
      } else {
        document.getElementById('new_wrong_pass_alert').style.color = 'green';
        document.getElementById('new_wrong_pass_alert').innerHTML = '✓ Password matched!';
        document.getElementById('update_password_admin').disabled = false;
        document.getElementById('update_password_admin').style.opacity = (1);
      }
    }


 function newgetImagePreview(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('user_preview');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="350";
    // newimg.height="90";
    // newimg.style['border-radius']="50%";
    newimg.style['display']="block";
    newimg.style['margin-left']="auto";
    newimg.style['margin-right']="auto";
    newimg.style['box-shadow']="rgba(100, 100, 111, 0.2) 0px 7px 29px 0px";
    imagediv.appendChild(newimg);
  }

  function lettersOnly(input) {
      var regex = /[^a-z ]/gi;
      input.value = input.value.replace(regex, "");
    }


   function agevalidation() {
    var age = document.getElementById("age").value;

    if(age < 12) {
        document.getElementById('age_text').style.color = 'red';
        document.getElementById('age_text').innerHTML = 'Must be 12yrs old and above.';
        document.getElementById('update_admin').disabled = true;
        document.getElementById('update_admin').style.opacity = (0.4);
    } else {

        document.getElementById('age_text').style.color = 'green';
        document.getElementById('age_text').innerHTML = '';
        document.getElementById('update_admin').disabled = false;
        document.getElementById('update_admin').style.opacity = (1);

    }
  }

  function validation() {
    var email = document.getElementById("email").value;
    var pattern =/.+@(gmail)\.com$/;
    // var pattern =/.+@(gmail|yahoo)\.com$/;
    var form = document.getElementById("form");

    if(email.match(pattern)) {
        document.getElementById('text').style.color = 'green';
        document.getElementById('text').innerHTML = '';
        document.getElementById('update_admin').disabled = false;
        document.getElementById('update_admin').style.opacity = (1);
    } 
    else {
        document.getElementById('text').style.color = 'red';
        document.getElementById('text').innerHTML = 'Domain must be @gmail.com';
        document.getElementById('update_admin').disabled = true;
        document.getElementById('update_admin').style.opacity = (0.4);
        
    }
  }

</script>