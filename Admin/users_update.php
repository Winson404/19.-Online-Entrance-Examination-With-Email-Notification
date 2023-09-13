<title>Online Entrance Examination | Examinee Info</title>
<?php 
    include 'navbar.php';
    if(isset($_GET['user_Id'])) {
      $user_Id = $_GET['user_Id'];
      $fetch = mysqli_query($conn, "SELECT * FROm users WHERE user_Id='$user_Id'");
      $row = mysqli_fetch_array($fetch);
      $a   = $row['Parent_status'];
      $b   = explode(",", $a);
?>


<style>
  /* Hide all steps by default: */
  .tab, .submit {
    display: none;
  }
  /* Make circles that indicate the steps of the form: */
  .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
  }
  /* Mark the active step: */
  .step.active {
    opacity: 1;
  }
  /* Mark the steps that are finished and valid: */
  .step.finish {
    background-color: #0275d8;
  }
</style>
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-image: url('images/IMG_20221122_225654-01.jpeg');background-position: cover; background-repeat: no-repeat;background-size: cover; height: 80vh;">
    
    <!-- Main content -->
    <div class="content" >
      <div class="container">
        <div class="row d-flex justify-content-center">

          <div class="col-lg-10 mt-2  " >
            <div class="card card-outline card-primary">
              <div class="card-header text-center mb-4">
                <a href="#" class="h1"><b>Examinee information</b></a>
              </div>
              <!-- <p class="login-box-msg">Register a new membership</p> -->
              <form action="process_update.php" method="post" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="user_Id" value="<?php echo $row['user_Id']; ?>">
              <div class="card-body">
                <?php 
                    include 'update_personalData.php'; 
                    include 'update_homebackground.php';
                    include 'update_siblings.php';
                    include 'update_parents.php';
                    include 'update_contactPerson.php';
                    include 'update_contactPerson2.php';
                    include 'update_contactPerson3.php';
                    include 'update_membershipOrg.php';
                    include 'update_uniqueFeatures.php';


                ?> 

                <div style="overflow:auto;">
                  <div style="float:right;">
                    <button  type="button" class="btn btn-secondary" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" class="btn btn-info" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    <button type="submit" class="btn btn-info submit" id="submit" onclick="nextPrev(1)" name="update_user">Submit</button>
                  </div>
                </div>

                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;">
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                </div>
              </div>
              
            </form>
          </div>

        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php include 'footer.php'; ?>

</body>
</html>

<script>
    $(document).ready(function() {
        // SIBLINGS TABLE - SIBLINGS.PHP
        var html = '<tr><td><input type="text" class="form-control" name="Name_Siblings[]"  placeholder="Enter name here..."></td><td><input type="text" class="form-control" name="School_Place_Work[]"  placeholder="Enter School/Place of Work here..."></td><td><input type="text" class="form-control" name="Siblings_Age[]"  placeholder="Age"></td><td><button class="btn btn-danger" id="remove"><i class="fa-solid fa-trash-can"></i></button></td></tr>';
        var x = 1;

        $("#add").click (function() {
            $("#table_field").append(html);
        });
        $("#table_field").on('click', '#remove', function(){
            $(this).closest('tr').remove();
        });

        // INSIDE SCHOOL MEMBERSHIP TABLE - MEMBERSHIPORG.PHP
        var htmlmember = '<tr><td><input type="text" class="form-control" name="School_Org[]"  placeholder="Enter Organization name..."></td><td><input type="text" class="form-control" name="School_Position[]"  placeholder="Enter Position/Title..."></td><td><button class="btn btn-danger" id="removemember"><i class="fa-solid fa-trash-can"></i></button></td></tr>';
        var x = 1;

        $("#addmember").click (function() {
            $("#membership_table_field").append(htmlmember);
        });
        $("#membership_table_field").on('click', '#removemember', function(){
            $(this).closest('tr').remove();
        });


        // OUTSIDE SCHOOL MEMBERSHIP TABLE - MEMBERSHIPORG.PHP
        var htmlmemberoutside = '<tr><td><input type="text" class="form-control" name="OutsideSchool_Org[]"  placeholder="Enter Organization name..."></td><td><input type="text" class="form-control" name="OutsideSchool_Position[]"  placeholder="Enter Position/Title..."></td><td><button class="btn btn-danger" id="outsideremovemember"><i class="fa-solid fa-trash-can"></i></button></td></tr>';
        var x = 1;

        $("#outsideaddmember").click (function() {
            $("#outsidemembership_table_field").append(htmlmemberoutside);
        });
        $("#outsidemembership_table_field").on('click', '#outsideremovemember', function(){
            $(this).closest('tr').remove();
        });
    });
</script>


<script>

    // ERROR MESSAGES TIMEOUT SETTINGS
    // setTimeout(function() { document.getElementById("firstnamemsg").innerHTML= ""; document.getElementById("firstname").reset(); } ,4000);

    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
      // This function will display the specified tab of the form ...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      // ... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("submit").style.display = "inline";
        document.getElementById("nextBtn").innerHTML = "Submit";
        document.getElementById("nextBtn").style.display = "none";

      } else {
        document.getElementById("nextBtn").style.display = "inline";
        document.getElementById("nextBtn").innerHTML = "Next";
        document.getElementById("submit").style.display = "none";
      }
      // ... and run a function that displays the correct step indicator:
      fixStepIndicator(n)
    }



    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form... :
      if (currentTab >= x.length) {
        //...the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }





    function validateForm() {

      // This function deals with validation of the form fields
      var x, y, i, fname, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");

      // school_year      = document.getElementById("school_year").value;
      // semester         = document.getElementById("semester").value;
      // enrollmentStatus = document.getElementById("enrollmentStatus").value;
      // fname            = document.getElementById("firstname").value;
      // mname            = document.getElementById("middlename").value;
      // lname            = document.getElementById("lastname").value;
      // gender           = document.getElementById("gender").value;

      // txtbirthdate     = document.getElementById("txtbirthdate").value;
      // txtage           = document.getElementById("txtage").value;
      // contact          = document.getElementById("contact").value;
      // address          = document.getElementById("address").value;
      // school           = document.getElementById("school").value;
      // email            = document.getElementById("email").value;

      // place_of_birth   = document.getElementById("place_of_birth").value;
      // birth_order      = document.getElementById("birth_order").value;
      // civilstatus      = document.getElementById("civilstatus").value;
      // language         = document.getElementById("language").value;
      // religion         = document.getElementById("religion").value;
      // nationality      = document.getElementById("nationality").value;

      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false:
          // valid = false;
           valid = true;
        }
      }
      
      // if(school_year == "") { document.getElementById("school_year").style['border'] = "1px solid red"; valid  = false; }
      // if(semester == "") { document.getElementById("semester").style['border'] = "1px solid red"; valid  = false; }
      // if(enrollmentStatus == "") { document.getElementById("enrollmentStatus").style['border'] = "1px solid red"; valid  = false; }
      // if(fname == "") { document.getElementById("firstname").style['border'] = "1px solid red";  valid  = false; }
      // if(mname == "") { document.getElementById("middlename").style['border'] = "1px solid red"; valid  = false; } 
      // if(lname == "") { document.getElementById("lastname").style['border'] = "1px solid red"; valid  = false; }
      // if(gender == "") { document.getElementById("gender").style['border'] = "1px solid red"; valid  = false; }
      // if(txtbirthdate == "") { document.getElementById("txtbirthdate").style['border'] = "1px solid red"; valid  = false; }
      // if(txtage == "") { document.getElementById("txtage").style['border'] = "1px solid red"; valid  = false; }
      // if(contact == "") { document.getElementById("contact").style['border'] = "1px solid red"; valid  = false; }
      // if(address == "") { document.getElementById("address").style['border'] = "1px solid red"; valid  = false; } 
      // if(school == "") { document.getElementById("school").style['border'] = "1px solid red"; valid  = false; }
      // if(email == "") { document.getElementById("email").style['border'] = "1px solid red"; valid  = false; } 
      // if(email != "") {
      //     var email = document.getElementById("email").value;
      //     var pattern =/.+@(gmail)\.com$/;
      //     if(email.match(pattern)) {
      //         document.getElementById('text').style.color = 'green';
      //         document.getElementById('text').innerHTML = '';
      //         valid  = true;
      //     } 
      //     else {
      //         document.getElementById('text').style.color = 'red';
      //         document.getElementById('text').innerHTML = 'Domain must be @gmail.com.';
      //         valid  = false;
      //     }
      // }
      
      
      // if(place_of_birth == "") { document.getElementById("place_of_birth").style['border'] = "1px solid red"; valid  = false; }
      // if(birth_order == "") { document.getElementById("birth_order").style['border'] = "1px solid red"; valid  = false; }
      // if(civilstatus == "") { document.getElementById("civilstatus").style['border'] = "1px solid red"; valid  = false; }
      // if(civilstatus == "Married") { 
      //   var spouse = document.getElementById("spouse").value;
      //   var numChild = document.getElementById("numChild").value;
      //   valid = true;
      //   if(spouse == "" || numChild == "") {
      //       valid = false;
            
      //   } else {
      //       valid = true;
      //   }

      // }
      // if(language == "") { document.getElementById("language").style['border'] = "1px solid red";  valid  = false; }
      // if(religion == "") { document.getElementById("religion").style['border'] = "1px solid red"; valid  = false; } 
      // if(nationality == "") { document.getElementById("nationality").style['border'] = "1px solid red"; valid  = false; }
      // if(spouse == "") { document.getElementById("spouse").style['border'] = "1px solid red"; valid  = false; } 
      // if(numChild == "") { document.getElementById("numChild").style['border'] = "1px solid red"; valid  = false; }
      
      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      return valid; // return the valid status
    }






  function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class to the current step:
      x[n].className += " active";
    }


  // GET AGE AUTOMATICALLY
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
    if (typeof dateString === 'undefined' || dateString === null || (String(dateString) === 'NaN')) {
      // variable is undefined or null value
      birthdate = new Date().getTime();
    }
    birthdate = new Date(dateString).getTime();
    var now = new Date().getTime();
    // now find the difference between now and the birthdate
    var n = (now - birthdate)/1000;
      if (n < 604800) { // less than a week
        var day_n = Math.floor(n/86400);
      if (typeof day_n === 'undefined' || day_n === null || (String(day_n) === 'NaN')) {
        // variable is undefined or null
        return '';
      } else {
        return day_n + ' day' + (day_n > 1 ? 's' : '') + ' old';
      }
    } else if (n < 2629743) { // less than a month
      var week_n = Math.floor(n/604800);
      if (typeof week_n === 'undefined' || week_n === null || (String(week_n) === 'NaN')) {
        return '';
      } else {
        return week_n + ' week' + (week_n > 1 ? 's' : '') + ' old';
      }
    } else if (n < 31562417){ // less than 24 months
    var month_n = Math.floor(n/2629743);
      if (typeof month_n === 'undefined' || month_n === null || (String(month_n) === 'NaN')) {
        return '';
      } else {
        return month_n + ' month' + (month_n > 1 ? 's' : '') + ' old';
      }
    } else {
    var year_n = Math.floor(n/31556926);
      if (typeof year_n === 'undefined' || year_n === null || (String(year_n) === 'NaN')) {
       return year_n = '';
      } else {
        return year_n + ' year' + (year_n > 1 ? 's' : '') + ' old';
      }
    }
  }

  function getAgeVal(pid){
    var birthdate = formatDate(document.getElementById("txtbirthdate").value);
    var count = document.getElementById("txtbirthdate").value.length;
    if (count=='10') {
      var age = getAge(birthdate);
      var str = age;
      var res = str.substring(0, 1);
      if (res =='-' || res =='0') {
        document.getElementById("txtbirthdate").value = "";
        document.getElementById("txtage").value = "";
        document.getElementById("agestatus").value = "";
        $('#txtbirthdate').focus();
        return false;
      } else {
        document.getElementById("txtage").value = age;
        document.getElementById("agestatus").value = age;
        document.getElementById("txtbirthdate").style['border'] = "1px solid lightblue";
        document.getElementById("txtage").style['border'] = "1px solid lightblue";
      }
    } else {
      document.getElementById("txtage").value = "";
      document.getElementById("agestatus").value = "";
      return false;
    }
  }




  // EMAIL GOOGLE FORMAT
  function validation() {
    document.getElementById("email").style['border'] = "1px solid lightblue";
    var email = document.getElementById("email").value;
    var pattern =/.+@(gmail)\.com$/;
    // var pattern =/.+@(gmail|yahoo)\.com$/;
    var form = document.getElementById("form");
    

    if(email.match(pattern)) {
        document.getElementById('text').style.color = 'green';
        document.getElementById('text').innerHTML = '';
        document.getElementById('usercreate').disabled = false;
        document.getElementById('usercreate').style.opacity = (1);
    } 
    else {
        document.getElementById('text').style.color = 'red';
        document.getElementById('text').innerHTML = 'Domain must be @gmail.com.';
        document.getElementById('usercreate').disabled = true;
        document.getElementById('usercreate').style.opacity = (0.4);
    }
  }



  // IMAGE PREVIEW
   function getImagePreview(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="60";
    newimg.height="60";
    newimg.style['border-radius']="50%";
    newimg.style['display']="block";
    newimg.style['margin-left']="auto";
    newimg.style['margin-right']="auto";
    newimg.style['box-shadow']="rgba(100, 100, 111, 0.2) 0px 7px 29px 0px";
    imagediv.appendChild(newimg);
  }


  // DON'T ACCEPT NUMERIC VALUES
  function lettersOnly(input) {
    var regex = /[^a-z ]/gi;
    input.value = input.value.replace(regex, "");
    document.getElementById("firstname").style['border'] = "1px solid lightblue";
    document.getElementById("middlename").style['border'] = "1px solid lightblue";
    document.getElementById("lastname").style['border'] = "1px solid lightblue";

  }


  // 1st TAB
  // function schoolYear()   { document.getElementById("school_year").style['border'] = "1px solid lightblue"; }
  // function Sesemester()   { document.getElementById("semester").style['border'] = "1px solid lightblue"; }
  // function enrollStatus() { document.getElementById("enrollmentStatus").style['border'] = "1px solid lightblue"; }
  // function mygender()     { document.getElementById("gender").style['border'] = "1px solid lightblue"; }
  // function myContact()    { document.getElementById("contact").style['border'] = "1px solid lightblue"; }
  // function myaddress()    { document.getElementById("address").style['border'] = "1px solid lightblue"; }
  // function myschool()     { document.getElementById("school").style['border'] = "1px solid lightblue"; }

  // 2nd TAB
  // function myplace_of_birth()   { document.getElementById("place_of_birth").style['border'] = "1px solid lightblue"; }
  // function mybirth_order()   { document.getElementById("birth_order").style['border'] = "1px solid lightblue"; }
  // function mylanguage() { document.getElementById("language").style['border'] = "1px solid lightblue"; }
  // function myreligion()     { document.getElementById("religion").style['border'] = "1px solid lightblue"; }
  // function mynationality()    { document.getElementById("nationality").style['border'] = "1px solid lightblue"; }
  // function myspouse()    { document.getElementById("spouse").style['border'] = "1px solid lightblue"; }
  // function mynumChild()     { document.getElementById("numChild").style['border'] = "1px solid lightblue"; }

</script>


<?php } else { include '404.php'; } ?>