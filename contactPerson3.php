 <div class="tab">
   <div class="row">
    <div class="col-lg-6 mb-1">
        <label style="margin-bottom: 0px;">Easiest subject/s</label>
        <input type="text" class="form-control form-control-sm" name="easySubject" placeholder="Enter Easiest subject/s" >
    </div>
    <div class="col-lg-6 mb-1">
        <label style="margin-bottom: 0px;">Most Difficult Subject/s</label>
        <div class="input-group">
          <input type="text" class="form-control form-control-sm" name="difficultSubject" placeholder="Most Difficult Subject/s" >
        </div>
    </div>
    <div class="col-lg-6 mb-1">
        <label style="margin-bottom: 0px;">Subject with the Lowest Grade / What Grades</label>
        <div class="input-group">
          <input type="text" class="form-control form-control-sm" name="Sub_lowestGrade" placeholder="Subject with the Lowest Grade / What Grades" >
        </div>
    </div>
    <div class="col-lg-6 mb-1">
        <label style="margin-bottom: 0px;">Subject with the Highest Grade / What Grades</label>
        <div class="input-group">
          <input type="text" class="form-control form-control-sm" name="Sub_HighestGrade" placeholder="Subject with the Highest Grade / What Grades" >
        </div>
    </div>
    <div class="col-lg-6 mb-1">
        <label style="margin-bottom: 0px;">Awards/ Honors Received</label>
          <input type="text" class="form-control form-control-sm" name="Awards" placeholder="Awards/ Honors Received">
    </div>
    <div class="col-lg-2 mb-1">
        <label style="margin-bottom: 0px;">GWA</label>
        <div class="input-group">
          <input type="text" class="form-control form-control-sm" name="GWA" placeholder="GWA" >
        </div>
    </div>
    <div class="col-lg-4 mb-1">
      <label style="margin-bottom: 0px;">Nature of Schooling</label>
      <select class="custom-select custom-select-sm" name="NatureSchooling" id="natureSchools"  onchange="natureSchool()">
          <option selected disabled>Select order</option>
          <option value="Continuous">Continuous</option>
          <option value="Interrupted">Interrupted</option>
       </select> 
    </div>
    <div class="col-lg-4 mb-1 d-none" id="forInterrupted">
        <label style="margin-bottom: 0px;">If interrupted, how long?</label>
        <div class="input-group">
          <input type="text" class="form-control form-control-sm" name="InterruptedforHowLong" id="forInterruptedVal" placeholder="If interrupted, how long?">
        </div>
    </div> 
    <div class="col-lg-8 mb-2 d-none" id="rInterrupted">
        <label style="margin-bottom: 0px;">Reason</label>
        <div class="input-group">
            <textarea name="Reason" id="reasonVal" cols="30" rows="1" class="form-control form-control-sm" placeholder="Reason for being interrupted" ></textarea>
        </div>
    </div> 
  </div>
 </div>

<script>
    function natureSchool() {
        var a = document.getElementById("natureSchools").value;
        var forInterrupted = $("#forInterrupted");
        var fI = $("#forInterruptedVal");
        var ri = $("#rInterrupted");
        var riValue = $("#reasonVal");

        console.log(ri);

        if(a == "Interrupted") {
            forInterrupted.removeClass('d-none');
            // fI.setAttribute('required', '');
            ri.removeClass('d-none');
            // riValue.setAttribute('required', '');
        } else {
            forInterrupted.addClass('d-none');
            // fI.removeAttribute('required');
            ri.addClass('d-none');
            // riValue.removeAttribute('required');
        }
    }
</script> 
  