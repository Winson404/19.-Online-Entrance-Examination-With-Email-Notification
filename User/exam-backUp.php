<title>Online Entrance Examination | Examinations</title>
<?php include 'navbar.php'; include '../sweetalert_messages.php';  ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
<style>

  /* Mark input boxes that gets an error on validation: */
  input {
    margin: 10px 0 10px 0;
  }

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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Examinations</h1>
          </div>
          <div class="col-sm-6">
            <div class="bg-dark card p-2 float-right d-none" id="countdowntimer" style="position: fixed; right: 10px; z-index: 1;">
      <h5 style="font-family: 'Russo One', sans-serif; color: #00ff00;">Time: <span id="countdown"></span></h5>
    </div>
          </div>
        </div>
      </div>
    </section>

    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-header">
                <h5><span id="timer">General instructions</span> <span id="countdown"></span></h5>
              </div>
               <div class="p-5" id="instructions">
                 <h5>Instructions:</h5>
                 <p>There are one hundred(100) questions in this examination with 5 categories composing twenty(20) questions each. Please read the question and answer it religously.</p>
                 <p style="margin-top: -10px;">Good luck to your exam!</p>
                 <p><b>Note: </b>You only have 1 hour to answer all the questions.</p>
                 <hr>
                 <br>
                 <button type="button" id="start" class="btn bg-gradient-primary" onclick="start()" style="display: block;margin-left: auto;margin-right: auto;">Start examination</button>
               </div>
                <form class="p-3  d-none" action="process_save.php" method="POST" id="Theform" onsubmit="myFuncstion()">
                    <input type="hidden" class="form-control form-control-sm" name="user_Id" value="<?php echo $id; ?>">
                       
                    <?php 
                        include 'category_english.php'; 
                        include 'category_math.php'; 
                        include 'category_filipino.php'; 
                        include 'category_science.php';
                        include 'category_history.php';
                    ?>
                    <div style="overflow:auto;">
                      <div style="float:right;">
                        <button  type="button" class="btn btn-secondary" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" class="btn btn-info" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        <button type="submit" class="btn btn-info submit" id="submit" onclick="nextPrev(1)" name="exam">Submit</button>
                      </div>
                    </div>

                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:30px;">
                      <span class="step"></span>
                      <span class="step"></span>
                      <span class="step"></span>
                      <span class="step"></span>
                      <span class="step"></span>
                    </div>
                </form>
            </div>
         </div>
        </div>
      </div>
    </section><br>
    <br>
    <br>
    <br>
    <br>
</div>

<script>
function start() {

  function myFuncstion() {
    document.getElementById("submit").click();
  }
  var form = document.getElementById('Theform');
  form.classList.remove("d-none");

  var start = document.getElementById('start');
  start.classList.add("d-none");

  var instructions = document.getElementById('instructions');
  instructions.classList.add("d-none");

  var countdowntimer = document.getElementById('countdowntimer');
  countdowntimer.classList.remove("d-none");

  document.getElementById('timer').innerHTML = "Questions";

   const startingMinutes = 60;
   let time  = startingMinutes * 60;

   const countdownEl = document.getElementById('countdown');

   setInterval(updateCountdown, 1000);

   function updateCountdown(){
    const minutes = Math.floor(time / 60);
    let seconds = time % 60;
    seconds = seconds < 10 ? '0' + seconds : seconds;
    countdownEl.innerHTML = `${minutes}:${seconds}`;
    time--;
    if(time < 0) {
        myFuncstion();
    }
   }

}
   
  </script>
<script>
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
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false:
          valid = false;
          // valid = true;
        }
      }
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
</script>

<?php include 'footer.php'; ?>
 

