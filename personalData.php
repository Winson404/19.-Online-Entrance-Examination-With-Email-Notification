 <div class="tab">
   <div class="row">
    <div class="col-lg-12 mb-1" style="margin-top: -33px;">
        <a class="h5 text-primary" href="">Personal Data</a>
        <div class="dropdown-divider"></div>
    </div> 
    <div class="col-lg-4 mb-1" style="margin-top: -5px;">
        <label style="margin-bottom: 0px;">School Year</label>
        <input type="text" class="form-control form-control-sm" name="school_year" id="school_year" placeholder="Enter School Year" onkeyup="schoolYear(this)">
    </div>
    <div class="col-lg-4 mb-1" style="margin-top: -5px;">
        <label style="margin-bottom: 0px;">Semester</label>
        <select class="custom-select custom-select-sm" name="semester" id="semester" onchange="Sesemester(this)">
          <option selected disabled value="">Select semester</option>
          <option value="1st Semester">1st Semester</option>
          <option value="2nd Semester">2nd Semester</option>
          <option value="Summer">Summer</option>
       </select> 
    </div>
    <div class="col-lg-4 mb-1" style="margin-top: -5px;">
        <label style="margin-bottom: 0px;">Enrollment Status</label>
        <select class="custom-select custom-select-sm" name="enrollmentStatus" id="enrollmentStatus" onchange="enrollStatus(this)">
          <option selected disabled value="">Select status</option>
          <option value="Freshmen">Freshmen</option>
          <option value="Transferee">Transferee</option>
          <option value="Returnee">Returnee</option>
          <option value="Special Student">Special Student</option>
       </select> 
    </div>
    <div class="col-lg-3 mb-1">
        <label style="margin-bottom: 0px;">First name</label>
        <div class="input-group">
          <input type="text" id="firstname" class="form-control form-control-sm" name="firstname" placeholder="First name" onkeyup="lettersOnly(this)">
        </div>
    </div>
    <div class="col-lg-3 mb-1">
        <label style="margin-bottom: 0px;">Middle name</label>
        <div class="input-group">
          <input type="text" id="middlename" class="form-control form-control-sm" name="middlename" placeholder="Middle name" onkeyup="lettersOnly(this)">
        </div>
    </div>
    <div class="col-lg-3 mb-1">
        <label style="margin-bottom: 0px;">Last name</label>
        <div class="input-group">
          <input type="text" id="lastname" class="form-control form-control-sm" name="lastname" placeholder="Last name" onkeyup="lettersOnly(this)">
        </div>
    </div>
    <div class="col-lg-3 mb-1">
        <label style="margin-bottom: 0px;">Suffix</label>
          <input type="text" class="form-control form-control-sm" name="suffix" placeholder="Suffix">
    </div>
    <div class="col-lg-3 mb-1">
        <label style="margin-bottom: 0px;">Gender</label>
        <select class="custom-select custom-select-sm" name="gender" id="gender" onchange="mygender(this)">
          <option selected disabled value="">Select gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
       </select> 
    </div>
    <div class="col-lg-3 mb-1">
        <label style="margin-bottom: 0px;">Date of Birth</label>
        <input type="date" class="form-control form-control-sm" name="dob" placeholder="Date of birth"  id="txtbirthdate" onkeyup="getAgeVal(0)" onblur="getAgeVal(0);" onchange="getAgeVal(0);">
    </div>
    <div class="col-lg-2 mb-1">
        <label style="margin-bottom: 0px;">Age</label>
          <input type="text" class="form-control form-control-sm"  placeholder="Age"  id="txtage" readonly>
          <input type="hidden" class="form-control form-control-sm"  placeholder="Age"  id="agestatus" name="age">
    </div>
    <div class="col-lg-4">
        <label style="margin-bottom: 0px;">Contact number</label>
        <div class="input-group">
          <div class="input-group-text bg-white form-control-sm">+63</div>
          <input type="tel" class="form-control form-control-sm" name="contact" id="contact" placeholder="9123456789" maxlength="10" onkeyup="myContact(this)">
        </div>
    </div>
    <div class="col-lg-6 mb-1">
        <label style="margin-bottom: 0px;">Address</label>
        <div class="input-group">
          <input type="text" class="form-control form-control-sm" name="address" id="address" placeholder="Address" onkeyup="myaddress()">
        </div>
    </div>
    <div class="col-lg-6 mb-1">
        <label style="margin-bottom: 0px;">School address</label>
        <div class="input-group">
          <input type="text" class="form-control form-control-sm" name="school" id="school" placeholder="School Address" onkeyup="myschool()">
        </div>
    </div>
    <div class="col-lg-3">
        <label style="margin-bottom: 0px;">Email address</label>
        <div class="input-group">
          <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="email@gmail.com" onkeydown="validation()" onkeyup="validation()">
        </div>
        <small id="text"></small>
    </div>
    <div class="col-lg-3">
        <label style="margin-bottom: 0px;">Username</label>
        <div class="input-group">
          <input type="text" class="form-control form-control-sm" id="username" name="username" placeholder="Username">
        </div>
        <small id="text"></small>
    </div>
    <div class="col-lg-3">
        <label style="margin-bottom: 0px;">Upload image (Optional)</label>
        <div class="input-group mb-3">
          <input type="file" class="form-control form-control-sm" name="fileToUpload" onchange="getImagePreview(event)">
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group" id="preview">
        </div>
    </div>
  </div>
 </div>





  <div class="tab">
   <div class="row"> 
    <div class="col-lg-6 mb-3">
        <label style="margin-bottom: 0px;">Place of Birth</label>
        <div class="input-group">
          <input type="text" class="form-control form-control-sm" name="place_of_birth" id="place_of_birth" placeholder="Place of Birth" onkeyup="myplace_of_birth()">
        </div>
    </div>
    <div class="col-lg-3 mb-3">
        <label style="margin-bottom: 0px;">Birth of Order Among Siblings</label>
          <select class="custom-select custom-select-sm" name="birth_order" id="birth_order" onchange="mybirth_order()">
              <option selected disabled value="">Select order</option>
              <option value="1st">1st</option>
              <option value="2nd">2nd</option>
              <option value="3rd">3rd</option>
              <option value="4th">4th</option>
              <option value="Others">Others</option>
           </select> 
    </div>
    <div class="col-lg-3 mb-3">
        <label style="margin-bottom: 0px;">Civil Status</label>
          <select class="custom-select custom-select-sm" name="civilstatus" id="civilstatus" onchange="civilStat()">
              <option selected disabled value="">Select status</option>
              <option value="Single">Single</option>
              <option value="Married">Married</option>
           </select> 
    </div>
    <div class="col-lg-6 mb-3">
        <label style="margin-bottom: 0px;">Boarding House Address</label>
          <input type="text" class="form-control form-control-sm" name="bh_Address" placeholder="Boarding House Address">
    </div>
    <div class="col-lg-3 mb-3">
        <label style="margin-bottom: 0px;">Landline</label>
          <input type="text" class="form-control form-control-sm" name="landline" placeholder="Landline">
    </div>
    <div class="col-lg-3 mb-3">
        <label style="margin-bottom: 0px;">Languages/Dialects Spoken</label>
          <input type="text" class="form-control form-control-sm" name="language" id="language" placeholder="Languages/Dialects Spoken" onkeyup="mylanguage()">
    </div>
    <div class="col-lg-3 mb-3">
        <label style="margin-bottom: 0px;">Religion</label>
          <input type="text" class="form-control form-control-sm" name="religion" id="religion" placeholder="Religion" onkeyup="myreligion()">
    </div>
    <div class="col-lg-3 mb-3">
        <label style="margin-bottom: 0px;">Nationality</label>
          <input type="text" class="form-control form-control-sm" name="nationality" id="nationality" placeholder="Nationality" onkeyup="mynationality()">
    </div>
    <div class="col-lg-3 mb-3 d-none" id="ifmarried">
        <label style="margin-bottom: 0px;">If Married, name of spouse</label>
          <input type="text" class="form-control form-control-sm" name="spouseName" id="spouse" placeholder="If Married, name of spouse" onkeyup="myspouse()">
    </div>
    <div class="col-lg-3 mb-5 d-none" id="noChildren">
        <label style="margin-bottom: 0px;">No. of Children</label>
        <input type="text" class="form-control form-control-sm" name="no_of_Children" id="numChild" placeholder="No. of Children" onkeyup="mynumChild()">
    </div>
    
  </div>
 </div>
<script>
    function civilStat() {
        var a = document.getElementById("civilstatus").value;
        var ifmarried = $("#ifmarried");
        var noChildren = $("#noChildren");
        var spouse = document.getElementById("spouse");
        var numChild = document.getElementById("numChild");
        document.getElementById("civilstatus").style['border'] = "1px solid lightblue"; 
        if(a == "Married") {
            ifmarried.removeClass('d-none');
            noChildren.removeClass('d-none');
            // spouse.setAttribute('required', '');
            // numChild.setAttribute('required', '');
            // document.getElementById("spouse").style['border'] = "1px solid red";
            // document.getElementById("numChild").style['border'] = "1px solid red";
            document.getElementById("spouse").value = "";
            document.getElementById("numChild").value = "";
           
        } else {
            ifmarried.addClass('d-none');
            noChildren.addClass('d-none');
            spouse.removeAttribute('required');
            numChild.removeAttribute('required');
            document.getElementById("spouse").value = "NA";
            document.getElementById("numChild").value = "NA";
        }
    }
</script> 
  