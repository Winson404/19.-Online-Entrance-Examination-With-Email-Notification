

<!-- ****************************************************CREATE*********************************************************************** -->
<!-- Modal -->
<div class="modal fade" id="add_users" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-user-plus"></i> Create admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_save.php" method="POST" enctype="multipart/form-data">
        <div class="row">

          <!-- LOAD IMAGE PREVIEW -->
          <div class="col-lg-12">
              <div class="form-group" id="preview">
              </div>
          </div>

          <div class="col-lg-3 mb-2">
                <label>User Type</label>
                <select class="form-control form-control-sm" name="usertype" required>
                <option value="Admin" selected>Admin</option>
                <option value="Non-admin">Non-admin</option>
              </select>
          </div>
          <div class="col-lg-3"></div>
          <div class="col-lg-3"></div>
          <div class="col-lg-3"></div>

          <div class="col-lg-3">
              <div class="form-group">
                <label>First name</label>
                <input type="text" class="form-control form-control-sm"  placeholder="First name" name="firstname" required onkeyup="lettersOnly(this)">
              </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
                <label>Middle name</label>
                <input type="text" class="form-control form-control-sm"  placeholder="Middle name" name="middlename" required onkeyup="lettersOnly(this)">
            </div>
          </div>
          <div class="col-lg-3">
              <div class="form-group">
                <label>Last name</label>
                <input type="text" class="form-control form-control-sm"  placeholder="Last name" name="lastname" required onkeyup="lettersOnly(this)">
              </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label>Suffix name</label>
              <input type="text" class="form-control form-control-sm"  placeholder="Jr./Sr." name="suffix" onkeyup="lettersOnly(this)">
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label>Gender</label>
              <select class="form-control form-control-sm" name="gender" required>
                <option selected disabled>Select gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
          <div class="col-lg-4">
              <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" class="form-control form-control-sm" name="dob" placeholder="Date of birth" required id="txtbirthdate" onkeyup="getAgeVal(0)" onblur="getAgeVal(0);" onchange="getAgeVal(0);">
              </div>
          </div>
          <div class="col-lg-2">
              <div class="form-group">
                <label>Age</label>
                <input type="text" class="form-control form-control-sm"  placeholder="Age" required id="txtage" readonly name="age">
              </div>
          </div>
          <div class="col-auto form-group col-lg-3">
              <label for="contact">Contact number</label>
              <div class="input-group">
                <div class="input-group-text form-control-sm  ">+63</div>
                <input type="tel" class="form-control form-control-sm" pattern="[7-9]{1}[0-9]{9}" id="contact" name="contact" placeholder = "9123456789" required maxlength="10">
              </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                  <label>Email address</label>
                  <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder = "email@gmail.com" required onkeydown="validation()" onkeyup="validation()">
                  <small id="text" style="font-style: italic;"></small>
                </div>
            </div>

          <div class="col-lg-8">
              <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control form-control-sm"  placeholder="Address" name="address" required>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control form-control-sm"  placeholder="Password" name="password" required id="password" minlength="8">
              </div>
          </div>
          <div class="col-lg-4">
              <div class="form-group">
                <label>Confirm password</label>
                <input type="password" class="form-control form-control-sm" placeholder="Confirm password" name="cpassword" required id="cpassword" onkeyup="validate_password()" minlength="8">
                <small id="wrong_pass_alert" style="font-style: italic;"></small>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control-file form-control-sm" name="fileToUpload" onchange="getImagePreview(event)" required>
              </div>
          </div>
         
      </div>
      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn bg-gradient-primary" name="create_admin" id="create_admin"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

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

function getAgeVal(pid){
var birthdate = formatDate(document.getElementById("txtbirthdate").value);
var count = document.getElementById("txtbirthdate").value.length;
if (count=='10'){
var age = getAge(birthdate);
var str = age;
var res = str.substring(0, 1);
if (res =='-' || res =='0'){
document.getElementById("txtbirthdate").value = "";
document.getElementById("txtage").value = "";
document.getElementById("agestatus").value = "";
$('#txtbirthdate').focus();
return false;
}else{
document.getElementById("txtage").value = age;
document.getElementById("agestatus").value = age;
}
}else{
document.getElementById("txtage").value = "";
document.getElementById("agestatus").value = "";
return false;
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
   function getImagePreview(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="90";
    newimg.height="90";
    newimg.style['border-radius']="50%";
    newimg.style['display']="block";
    newimg.style['margin-left']="auto";
    newimg.style['margin-right']="auto";
    newimg.style['box-shadow']="rgba(100, 100, 111, 0.2) 0px 7px 29px 0px";
    imagediv.appendChild(newimg);
  }

    function validate_password() {

      var pass = document.getElementById('password').value;
      var confirm_pass = document.getElementById('cpassword').value;
      if (pass != confirm_pass) {
        document.getElementById('wrong_pass_alert').style.color = 'red';
        document.getElementById('wrong_pass_alert').innerHTML = 'X Password did not matched!';
        document.getElementById('create_admin').disabled = true;
        document.getElementById('create_admin').style.opacity = (0.4);
      } else {
        document.getElementById('wrong_pass_alert').style.color = 'green';
        document.getElementById('wrong_pass_alert').innerHTML = '✓ Password matched!';
        document.getElementById('create_admin').disabled = false;
        document.getElementById('create_admin').style.opacity = (1);
      }
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
        document.getElementById('create_admin').disabled = true;
        document.getElementById('create_admin').style.opacity = (0.4);
    } else {

        document.getElementById('age_text').style.color = 'green';
        document.getElementById('age_text').innerHTML = '';
        document.getElementById('create_admin').disabled = false;
        document.getElementById('create_admin').style.opacity = (1);
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
        document.getElementById('create_admin').disabled = false;
        document.getElementById('create_admin').style.opacity = (1);
    } 
    else {
        document.getElementById('text').style.color = 'red';
        document.getElementById('text').innerHTML = 'Domain must be @gmail.com';
        document.getElementById('create_admin').disabled = true;
        document.getElementById('create_admin').style.opacity = (0.4);
        
    }
  }

</script>
<!-- ****************************************************END CREATE*********************************************************************** -->


