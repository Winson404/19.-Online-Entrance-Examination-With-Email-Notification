<!-- One "tab" for each step in the form: -->
                    <div class="tab">
                      <h4 class="bg-light text-center">History category</h4>
                      <hr>
                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='History'");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="eight_one" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_eight_one" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q81" class="form-control form-control-sm" name="ans_q81" value="NA">
                      <h5><b>81.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q81" value="<?php echo $row['choice_one']; ?>" id="h1" onclick="eightone();"> 
                      <label style="font-weight: normal;" for="h1"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q81" value="<?php echo $row['choice_two']; ?>" id="h2" onclick="eightone();"> 
                      <label style="font-weight: normal;" for="h2"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q81" value="<?php echo $row['choice_three']; ?>" id="h3" onclick="eightone();"> 
                      <label style="font-weight: normal;" for="h3"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q81" value="<?php echo $row['choice_four']; ?>" id="h4" onclick="eightone();"> 
                      <label style="font-weight: normal;" for="h4"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function eightone() {
                            var a = document.getElementById("h1").value;
                            var b = document.getElementById("h2").value;
                            var c = document.getElementById("h3").value;
                            var d = document.getElementById("h4").value;
                            var x = document.getElementById("ans_q81");

                                 if(document.getElementById('h1').checked) { x.value = a; }
                            else if(document.getElementById('h2').checked) { x.value = b; } 
                            else if(document.getElementById('h3').checked) { x.value = c; } 
                            else if(document.getElementById('h4').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                       <?php           
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='History' LIMIT 1, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="eight_two" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_eight_two" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q82" class="form-control form-control-sm" name="ans_q82" value="NA">
                      <h5><b>82.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q82" value="<?php echo $row['choice_one']; ?>" id="h5" onclick="eighttwo();"> 
                      <label style="font-weight: normal;" for="h5"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q82" value="<?php echo $row['choice_two']; ?>" id="h6" onclick="eighttwo();"> 
                      <label style="font-weight: normal;" for="h6"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q82" value="<?php echo $row['choice_three']; ?>" id="h7" onclick="eighttwo();"> 
                      <label style="font-weight: normal;" for="h7"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q82" value="<?php echo $row['choice_four']; ?>" id="h8" onclick="eighttwo();"> 
                      <label style="font-weight: normal;" for="h8"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function eighttwo() {
                            var a = document.getElementById("h5").value;
                            var b = document.getElementById("h6").value;
                            var c = document.getElementById("h7").value;
                            var d = document.getElementById("h8").value;
                            var x = document.getElementById("ans_q82");

                                 if(document.getElementById('h5').checked) { x.value = a; }
                            else if(document.getElementById('h6').checked) { x.value = b; } 
                            else if(document.getElementById('h7').checked) { x.value = c; } 
                            else if(document.getElementById('h8').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='History' LIMIT 2, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="eight_three" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_eight_three" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q83" class="form-control form-control-sm" name="ans_q83" value="NA">
                      <h5><b>83.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q83" value="<?php echo $row['choice_one']; ?>" id="h9" onclick="eightthree();"> 
                      <label style="font-weight: normal;" for="h9"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q83" value="<?php echo $row['choice_two']; ?>" id="h10" onclick="eightthree();"> 
                      <label style="font-weight: normal;" for="h10"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q83" value="<?php echo $row['choice_three']; ?>" id="h11" onclick="eightthree();"> 
                      <label style="font-weight: normal;" for="h11"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q83" value="<?php echo $row['choice_four']; ?>" id="h12" onclick="eightthree();"> 
                      <label style="font-weight: normal;" for="h12"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function eightthree() {
                            var a = document.getElementById("h9").value;
                            var b = document.getElementById("h10").value;
                            var c = document.getElementById("h11").value;
                            var d = document.getElementById("h12").value;
                            var x = document.getElementById("ans_q83");

                                 if(document.getElementById('h9').checked) { x.value = a; }
                            else if(document.getElementById('h10').checked) { x.value = b; } 
                            else if(document.getElementById('h11').checked) { x.value = c; } 
                            else if(document.getElementById('h12').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='History' LIMIT 3, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="eight_four" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_eight_four" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q84" class="form-control form-control-sm" name="ans_q84" value="NA">
                      <h5><b>84.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q84" value="<?php echo $row['choice_one']; ?>" id="h13" onclick="eightfour();"> 
                      <label style="font-weight: normal;" for="h13"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q84" value="<?php echo $row['choice_two']; ?>" id="h14" onclick="eightfour();"> 
                      <label style="font-weight: normal;" for="h14"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q84" value="<?php echo $row['choice_three']; ?>" id="h15" onclick="eightfour();"> 
                      <label style="font-weight: normal;" for="h15"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q84" value="<?php echo $row['choice_four']; ?>" id="h16" onclick="eightfour();"> 
                      <label style="font-weight: normal;" for="h16"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function eightfour() {
                            var a = document.getElementById("h13").value;
                            var b = document.getElementById("h14").value;
                            var c = document.getElementById("h15").value;
                            var d = document.getElementById("h16").value;
                            var x = document.getElementById("ans_q84");

                                 if(document.getElementById('h13').checked) { x.value = a; }
                            else if(document.getElementById('h14').checked) { x.value = b; } 
                            else if(document.getElementById('h15').checked) { x.value = c; } 
                            else if(document.getElementById('h16').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='History' LIMIT 4, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="eight_five" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_eight_five" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q85" class="form-control form-control-sm" name="ans_q85" value="NA">
                      <h5><b>85.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q85" value="<?php echo $row['choice_one']; ?>" id="h17" onclick="eightfive();"> 
                      <label style="font-weight: normal;" for="h17"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q85" value="<?php echo $row['choice_two']; ?>" id="h18" onclick="eightfive();"> 
                      <label style="font-weight: normal;" for="h18"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q85" value="<?php echo $row['choice_three']; ?>" id="h19" onclick="eightfive();"> 
                      <label style="font-weight: normal;" for="h19"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q85" value="<?php echo $row['choice_four']; ?>" id="h20" onclick="eightfive();"> 
                      <label style="font-weight: normal;" for="h20"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function eightfive() {
                            var a = document.getElementById("h17").value;
                            var b = document.getElementById("h18").value;
                            var c = document.getElementById("h19").value;
                            var d = document.getElementById("h20").value;
                            var x = document.getElementById("ans_q85");

                                 if(document.getElementById('h17').checked) { x.value = a; }
                            else if(document.getElementById('h18').checked) { x.value = b; } 
                            else if(document.getElementById('h19').checked) { x.value = c; } 
                            else if(document.getElementById('h20').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='History' LIMIT 5, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="eight_six" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_eight_six" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q86" class="form-control form-control-sm" name="ans_q86" value="NA">
                      <h5><b>86.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q86" value="<?php echo $row['choice_one']; ?>" id="h21" onclick="eightsix();"> 
                      <label style="font-weight: normal;" for="h21"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q86" value="<?php echo $row['choice_two']; ?>" id="h22" onclick="eightsix();"> 
                      <label style="font-weight: normal;" for="h22"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q86" value="<?php echo $row['choice_three']; ?>" id="h23" onclick="eightsix();"> 
                      <label style="font-weight: normal;" for="h23"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q86" value="<?php echo $row['choice_four']; ?>" id="h24" onclick="eightsix();"> 
                      <label style="font-weight: normal;" for="h24"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function eightsix() {
                            var a = document.getElementById("h21").value;
                            var b = document.getElementById("h22").value;
                            var c = document.getElementById("h23").value;
                            var d = document.getElementById("h24").value;
                            var x = document.getElementById("ans_q86");

                                 if(document.getElementById('h21').checked) { x.value = a; }
                            else if(document.getElementById('h22').checked) { x.value = b; } 
                            else if(document.getElementById('h23').checked) { x.value = c; } 
                            else if(document.getElementById('h24').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='History' LIMIT 6, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="eight_seven" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_eight_seven" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q87" class="form-control form-control-sm" name="ans_q87" value="NA">
                      <h5><b>87.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q87" value="<?php echo $row['choice_one']; ?>" id="h25" onclick="eightseven();"> 
                      <label style="font-weight: normal;" for="h25"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q87" value="<?php echo $row['choice_two']; ?>" id="h26" onclick="eightseven();"> 
                      <label style="font-weight: normal;" for="h26"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q87" value="<?php echo $row['choice_three']; ?>" id="h27" onclick="eightseven();"> 
                      <label style="font-weight: normal;" for="h27"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q87" value="<?php echo $row['choice_four']; ?>" id="h28" onclick="eightseven();"> 
                      <label style="font-weight: normal;" for="h28"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function eightseven() {
                            var a = document.getElementById("h25").value;
                            var b = document.getElementById("h26").value;
                            var c = document.getElementById("h27").value;
                            var d = document.getElementById("h28").value;
                            var x = document.getElementById("ans_q87");

                                 if(document.getElementById('h25').checked) { x.value = a; }
                            else if(document.getElementById('h26').checked) { x.value = b; } 
                            else if(document.getElementById('h27').checked) { x.value = c; } 
                            else if(document.getElementById('h28').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='History' LIMIT 7, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="eight_eight" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_eight_eight" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q88" class="form-control form-control-sm" name="ans_q88" value="NA">
                      <h5><b>88.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q88" value="<?php echo $row['choice_one']; ?>" id="h29" onclick="eighteight();"> 
                      <label style="font-weight: normal;" for="h29"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q88" value="<?php echo $row['choice_two']; ?>" id="h30" onclick="eighteight();"> 
                      <label style="font-weight: normal;" for="h30"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q88" value="<?php echo $row['choice_three']; ?>" id="h31" onclick="eighteight();"> 
                      <label style="font-weight: normal;" for="h31"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q88" value="<?php echo $row['choice_four']; ?>" id="h32" onclick="eighteight();"> 
                      <label style="font-weight: normal;" for="h32"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function eighteight() {
                            var a = document.getElementById("h29").value;
                            var b = document.getElementById("h30").value;
                            var c = document.getElementById("h31").value;
                            var d = document.getElementById("h32").value;
                            var x = document.getElementById("ans_q88");

                                 if(document.getElementById('h29').checked) { x.value = a; }
                            else if(document.getElementById('h30').checked) { x.value = b; } 
                            else if(document.getElementById('h31').checked) { x.value = c; } 
                            else if(document.getElementById('h32').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='History' LIMIT 8, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="eight_nine" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_eight_nine" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q89" class="form-control form-control-sm" name="ans_q89" value="NA">
                      <h5><b>89.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q89" value="<?php echo $row['choice_one']; ?>" id="h33" onclick="eightnine();"> 
                      <label style="font-weight: normal;" for="h33"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q89" value="<?php echo $row['choice_two']; ?>" id="h34" onclick="eightnine();"> 
                      <label style="font-weight: normal;" for="h34"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q89" value="<?php echo $row['choice_three']; ?>" id="h35" onclick="eightnine();"> 
                      <label style="font-weight: normal;" for="h35"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q89" value="<?php echo $row['choice_four']; ?>" id="h36" onclick="eightnine();"> 
                      <label style="font-weight: normal;" for="h36"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function eightnine() {
                            var a = document.getElementById("h33").value;
                            var b = document.getElementById("h34").value;
                            var c = document.getElementById("h35").value;
                            var d = document.getElementById("h36").value;
                            var x = document.getElementById("ans_q89");

                                 if(document.getElementById('h33').checked) { x.value = a; }
                            else if(document.getElementById('h34').checked) { x.value = b; } 
                            else if(document.getElementById('h35').checked) { x.value = c; } 
                            else if(document.getElementById('h36').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='History' LIMIT 9, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="ninety" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_ninety" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q90" class="form-control form-control-sm" name="ans_q90" value="NA">
                      <h5><b>90.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q90" value="<?php echo $row['choice_one']; ?>" id="h37" onclick="ninezero();"> 
                      <label style="font-weight: normal;" for="h37"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q90" value="<?php echo $row['choice_two']; ?>" id="h38" onclick="ninezero();"> 
                      <label style="font-weight: normal;" for="h38"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q90" value="<?php echo $row['choice_three']; ?>" id="h39" onclick="ninezero();"> 
                      <label style="font-weight: normal;" for="h39"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q90" value="<?php echo $row['choice_four']; ?>" id="h40" onclick="ninezero();"> 
                      <label style="font-weight: normal;" for="h40"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function ninezero() {
                            var a = document.getElementById("h37").value;
                            var b = document.getElementById("h38").value;
                            var c = document.getElementById("h39").value;
                            var d = document.getElementById("h40").value;
                            var x = document.getElementById("ans_q90");

                                 if(document.getElementById('h37').checked) { x.value = a; }
                            else if(document.getElementById('h38').checked) { x.value = b; } 
                            else if(document.getElementById('h39').checked) { x.value = c; } 
                            else if(document.getElementById('h40').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='History' LIMIT 10, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="nine_one" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_nine_one" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q91" class="form-control form-control-sm" name="ans_q91" value="NA">
                      <h5><b>91.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q91" value="<?php echo $row['choice_one']; ?>" id="h41" onclick="nineone();"> 
                      <label style="font-weight: normal;" for="h41"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q91" value="<?php echo $row['choice_two']; ?>" id="h42" onclick="nineone();"> 
                      <label style="font-weight: normal;" for="h42"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q91" value="<?php echo $row['choice_three']; ?>" id="h43" onclick="nineone();"> 
                      <label style="font-weight: normal;" for="h43"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q91" value="<?php echo $row['choice_four']; ?>" id="h44" onclick="nineone();"> 
                      <label style="font-weight: normal;" for="h44"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function nineone() {
                            var a = document.getElementById("h41").value;
                            var b = document.getElementById("h42").value;
                            var c = document.getElementById("h43").value;
                            var d = document.getElementById("h44").value;
                            var x = document.getElementById("ans_q91");

                                 if(document.getElementById('h41').checked) { x.value = a; }
                            else if(document.getElementById('h42').checked) { x.value = b; } 
                            else if(document.getElementById('h43').checked) { x.value = c; } 
                            else if(document.getElementById('h44').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='History' LIMIT 11, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="nine_two" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_nine_two" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q92" class="form-control form-control-sm" name="ans_q92" value="NA">
                      <h5><b>92.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q92" value="<?php echo $row['choice_one']; ?>" id="h45" onclick="ninetwo();"> 
                      <label style="font-weight: normal;" for="h45"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q92" value="<?php echo $row['choice_two']; ?>" id="h46" onclick="ninetwo();"> 
                      <label style="font-weight: normal;" for="h46"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q92" value="<?php echo $row['choice_three']; ?>" id="h47" onclick="ninetwo();"> 
                      <label style="font-weight: normal;" for="h47"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q92" value="<?php echo $row['choice_four']; ?>" id="h48" onclick="ninetwo();"> 
                      <label style="font-weight: normal;" for="h48"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function ninetwo() {
                            var a = document.getElementById("h45").value;
                            var b = document.getElementById("h46").value;
                            var c = document.getElementById("h47").value;
                            var d = document.getElementById("h48").value;
                            var x = document.getElementById("ans_q92");

                                 if(document.getElementById('h45').checked) { x.value = a; }
                            else if(document.getElementById('h46').checked) { x.value = b; } 
                            else if(document.getElementById('h47').checked) { x.value = c; } 
                            else if(document.getElementById('h48').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='History' LIMIT 12, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="nine_three" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_nine_three" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q93" class="form-control form-control-sm" name="ans_q93" value="NA">
                      <h5><b>93.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q93" value="<?php echo $row['choice_one']; ?>" id="h49" onclick="ninethree();"> 
                      <label style="font-weight: normal;" for="h49"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q93" value="<?php echo $row['choice_two']; ?>" id="h50" onclick="ninethree();"> 
                      <label style="font-weight: normal;" for="h50"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q93" value="<?php echo $row['choice_three']; ?>" id="h51" onclick="ninethree();"> 
                      <label style="font-weight: normal;" for="h51"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q93" value="<?php echo $row['choice_four']; ?>" id="h52" onclick="ninethree();"> 
                      <label style="font-weight: normal;" for="h52"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function ninethree() {
                            var a = document.getElementById("h49").value;
                            var b = document.getElementById("h50").value;
                            var c = document.getElementById("h51").value;
                            var d = document.getElementById("h52").value;
                            var x = document.getElementById("ans_q93");

                                 if(document.getElementById('h49').checked) { x.value = a; }
                            else if(document.getElementById('h50').checked) { x.value = b; } 
                            else if(document.getElementById('h51').checked) { x.value = c; } 
                            else if(document.getElementById('h52').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='History' LIMIT 13, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="nine_four" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_nine_four" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q94" class="form-control form-control-sm" name="ans_q94" value="NA">
                      <h5><b>94.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q94" value="<?php echo $row['choice_one']; ?>" id="h53" onclick="ninefour();"> 
                      <label style="font-weight: normal;" for="h53"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q94" value="<?php echo $row['choice_two']; ?>" id="h54" onclick="ninefour();"> 
                      <label style="font-weight: normal;" for="h54"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q94" value="<?php echo $row['choice_three']; ?>" id="h55" onclick="ninefour();"> 
                      <label style="font-weight: normal;" for="h55"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q94" value="<?php echo $row['choice_four']; ?>" id="h56" onclick="ninefour();"> 
                      <label style="font-weight: normal;" for="h56"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function ninefour() {
                            var a = document.getElementById("h53").value;
                            var b = document.getElementById("h54").value;
                            var c = document.getElementById("h55").value;
                            var d = document.getElementById("h56").value;
                            var x = document.getElementById("ans_q94");

                                 if(document.getElementById('h53').checked) { x.value = a; }
                            else if(document.getElementById('h54').checked) { x.value = b; } 
                            else if(document.getElementById('h55').checked) { x.value = c; } 
                            else if(document.getElementById('h56').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='History' LIMIT 14, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="nine_five" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_nine_five" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q95" class="form-control form-control-sm" name="ans_q95" value="NA">
                      <h5><b>95.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q95" value="<?php echo $row['choice_one']; ?>" id="h57" onclick="ninefive();"> 
                      <label style="font-weight: normal;" for="h57"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q95" value="<?php echo $row['choice_two']; ?>" id="h58" onclick="ninefive();"> 
                      <label style="font-weight: normal;" for="h58"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q95" value="<?php echo $row['choice_three']; ?>" id="h59" onclick="ninefive();"> 
                      <label style="font-weight: normal;" for="h59"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q95" value="<?php echo $row['choice_four']; ?>" id="h60" onclick="ninefive();"> 
                      <label style="font-weight: normal;" for="h60"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function ninefive() {
                            var a = document.getElementById("h57").value;
                            var b = document.getElementById("h58").value;
                            var c = document.getElementById("h59").value;
                            var d = document.getElementById("h60").value;
                            var x = document.getElementById("ans_q95");

                                 if(document.getElementById('h57').checked) { x.value = a; }
                            else if(document.getElementById('h58').checked) { x.value = b; } 
                            else if(document.getElementById('h59').checked) { x.value = c; } 
                            else if(document.getElementById('h60').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='History' LIMIT 15, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="nine_six" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_nine_six" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q96" class="form-control form-control-sm" name="ans_q96" value="NA">
                      <h5><b>96.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q96" value="<?php echo $row['choice_one']; ?>" id="h61" onclick="ninesix();"> 
                      <label style="font-weight: normal;" for="h61"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q96" value="<?php echo $row['choice_two']; ?>" id="h62" onclick="ninesix();"> 
                      <label style="font-weight: normal;" for="h62"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q96" value="<?php echo $row['choice_three']; ?>" id="h63" onclick="ninesix();"> 
                      <label style="font-weight: normal;" for="h63"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q96" value="<?php echo $row['choice_four']; ?>" id="h64" onclick="ninesix();"> 
                      <label style="font-weight: normal;" for="h64"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function ninesix() {
                            var a = document.getElementById("h61").value;
                            var b = document.getElementById("h62").value;
                            var c = document.getElementById("h63").value;
                            var d = document.getElementById("h64").value;
                            var x = document.getElementById("ans_q96");

                                 if(document.getElementById('h61').checked) { x.value = a; }
                            else if(document.getElementById('h62').checked) { x.value = b; } 
                            else if(document.getElementById('h63').checked) { x.value = c; } 
                            else if(document.getElementById('h64').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='History' LIMIT 16, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="nine_seven" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_nine_seven" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q97" class="form-control form-control-sm" name="ans_q97" value="NA">
                      <h5><b>97.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q97" value="<?php echo $row['choice_one']; ?>" id="h65" onclick="nineseven();"> 
                      <label style="font-weight: normal;" for="h65"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q97" value="<?php echo $row['choice_two']; ?>" id="h66" onclick="nineseven();"> 
                      <label style="font-weight: normal;" for="h66"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q97" value="<?php echo $row['choice_three']; ?>" id="h67" onclick="nineseven();"> 
                      <label style="font-weight: normal;" for="h67"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q97" value="<?php echo $row['choice_four']; ?>" id="h68" onclick="nineseven();"> 
                      <label style="font-weight: normal;" for="h68"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function nineseven() {
                            var a = document.getElementById("h65").value;
                            var b = document.getElementById("h66").value;
                            var c = document.getElementById("h67").value;
                            var d = document.getElementById("h68").value;
                            var x = document.getElementById("ans_q97");

                                 if(document.getElementById('h65').checked) { x.value = a; }
                            else if(document.getElementById('h66').checked) { x.value = b; } 
                            else if(document.getElementById('h67').checked) { x.value = c; } 
                            else if(document.getElementById('h68').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='History' LIMIT 17, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="nine_eight" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_nine_eight" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q98" class="form-control form-control-sm" name="ans_q98" value="NA">
                      <h5><b>98.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q98" value="<?php echo $row['choice_one']; ?>" id="h69" onclick="nineeight();"> 
                      <label style="font-weight: normal;" for="h69"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q98" value="<?php echo $row['choice_two']; ?>" id="h70" onclick="nineeight();"> 
                      <label style="font-weight: normal;" for="h70"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q98" value="<?php echo $row['choice_three']; ?>" id="h71" onclick="nineeight();"> 
                      <label style="font-weight: normal;" for="h71"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q98" value="<?php echo $row['choice_four']; ?>" id="h72" onclick="nineeight();"> 
                      <label style="font-weight: normal;" for="h72"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function nineeight() {
                            var a = document.getElementById("h69").value;
                            var b = document.getElementById("h70").value;
                            var c = document.getElementById("h71").value;
                            var d = document.getElementById("h72").value;
                            var x = document.getElementById("ans_q98");

                                 if(document.getElementById('h69').checked) { x.value = a; }
                            else if(document.getElementById('h70').checked) { x.value = b; } 
                            else if(document.getElementById('h71').checked) { x.value = c; } 
                            else if(document.getElementById('h72').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='History' LIMIT 18, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="nine_nine" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_nine_nine" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q99" class="form-control form-control-sm" name="ans_q99" value="NA">
                      <h5><b>99.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q99" value="<?php echo $row['choice_one']; ?>" id="h73" onclick="ninenine();"> 
                      <label style="font-weight: normal;" for="h73"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q99" value="<?php echo $row['choice_two']; ?>" id="h74" onclick="ninenine();"> 
                      <label style="font-weight: normal;" for="h74"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q99" value="<?php echo $row['choice_three']; ?>" id="h75" onclick="ninenine();"> 
                      <label style="font-weight: normal;" for="h75"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q99" value="<?php echo $row['choice_four']; ?>" id="h76" onclick="ninenine();"> 
                      <label style="font-weight: normal;" for="h76"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function ninenine() {
                            var a = document.getElementById("h73").value;
                            var b = document.getElementById("h74").value;
                            var c = document.getElementById("h75").value;
                            var d = document.getElementById("h76").value;
                            var x = document.getElementById("ans_q99");

                                 if(document.getElementById('h73').checked) { x.value = a; }
                            else if(document.getElementById('h74').checked) { x.value = b; } 
                            else if(document.getElementById('h75').checked) { x.value = c; } 
                            else if(document.getElementById('h76').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='History' LIMIT 19, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q100" class="form-control form-control-sm" name="ans_q100" value="NA">
                      <h5><b>100.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q100" value="<?php echo $row['choice_one']; ?>" id="h77" onclick="onehundred();"> 
                      <label style="font-weight: normal;" for="h77"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q100" value="<?php echo $row['choice_two']; ?>" id="h78" onclick="onehundred();"> 
                      <label style="font-weight: normal;" for="h78"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q100" value="<?php echo $row['choice_three']; ?>" id="h79" onclick="onehundred();"> 
                      <label style="font-weight: normal;" for="h79"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q100" value="<?php echo $row['choice_four']; ?>" id="h80" onclick="onehundred();"> 
                      <label style="font-weight: normal;" for="h80"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function onehundred() {
                            var a = document.getElementById("h77").value;
                            var b = document.getElementById("h78").value;
                            var c = document.getElementById("h79").value;
                            var d = document.getElementById("h80").value;
                            var x = document.getElementById("ans_q100");

                                 if(document.getElementById('h77').checked) { x.value = a; }
                            else if(document.getElementById('h78').checked) { x.value = b; } 
                            else if(document.getElementById('h79').checked) { x.value = c; } 
                            else if(document.getElementById('h80').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                    </div>

                  