<!-- One "tab" for each step in the form: -->
                    <div class="tab">
                      <h4 class="bg-light text-center">Filipino category</h4>
                      <hr>
                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Filipino'");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="four_one" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_four_one" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q41" class="form-control form-control-sm" name="ans_q41" value="NA">
                      <h5><b>41.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q41" value="<?php echo $row['choice_one']; ?>" id="f1" onclick="fourone();"> 
                      <label style="font-weight: normal;" for="f1"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q41" value="<?php echo $row['choice_two']; ?>" id="f2" onclick="fourone();"> 
                      <label style="font-weight: normal;" for="f2"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q41" value="<?php echo $row['choice_three']; ?>" id="f3" onclick="fourone();"> 
                      <label style="font-weight: normal;" for="f3"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q41" value="<?php echo $row['choice_four']; ?>" id="f4" onclick="fourone();"> 
                      <label style="font-weight: normal;" for="f4"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function fourone() {
                            var a = document.getElementById("f1").value;
                            var b = document.getElementById("f2").value;
                            var c = document.getElementById("f3").value;
                            var d = document.getElementById("f4").value;
                            var x = document.getElementById("ans_q41");

                                 if(document.getElementById('f1').checked) { x.value = a; }
                            else if(document.getElementById('f2').checked) { x.value = b; } 
                            else if(document.getElementById('f3').checked) { x.value = c; } 
                            else if(document.getElementById('f4').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                       <?php           
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Filipino' LIMIT 1, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="four_two" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_four_two" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q42" class="form-control form-control-sm" name="ans_q42" value="NA">
                      <h5><b>42.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q42" value="<?php echo $row['choice_one']; ?>" id="f5" onclick="fourtwo();"> 
                      <label style="font-weight: normal;" for="f5"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q42" value="<?php echo $row['choice_two']; ?>" id="f6" onclick="fourtwo();"> 
                      <label style="font-weight: normal;" for="f6"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q42" value="<?php echo $row['choice_three']; ?>" id="f7" onclick="fourtwo();"> 
                      <label style="font-weight: normal;" for="f7"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q42" value="<?php echo $row['choice_four']; ?>" id="f8" onclick="fourtwo();"> 
                      <label style="font-weight: normal;" for="f8"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function fourtwo() {
                            var a = document.getElementById("f5").value;
                            var b = document.getElementById("f6").value;
                            var c = document.getElementById("f7").value;
                            var d = document.getElementById("f8").value;
                            var x = document.getElementById("ans_q42");

                                 if(document.getElementById('f5').checked) { x.value = a; }
                            else if(document.getElementById('f6').checked) { x.value = b; } 
                            else if(document.getElementById('f7').checked) { x.value = c; } 
                            else if(document.getElementById('f8').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Filipino' LIMIT 2, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="four_three" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_four_three" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q43" class="form-control form-control-sm" name="ans_q43" value="NA">
                      <h5><b>43.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q43" value="<?php echo $row['choice_one']; ?>" id="f9" onclick="fourthree();"> 
                      <label style="font-weight: normal;" for="f9"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q43" value="<?php echo $row['choice_two']; ?>" id="f10" onclick="fourthree();"> 
                      <label style="font-weight: normal;" for="f10"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q43" value="<?php echo $row['choice_three']; ?>" id="f11" onclick="fourthree();"> 
                      <label style="font-weight: normal;" for="f11"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q43" value="<?php echo $row['choice_four']; ?>" id="f12" onclick="fourthree();"> 
                      <label style="font-weight: normal;" for="f12"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function fourthree() {
                            var a = document.getElementById("f9").value;
                            var b = document.getElementById("f10").value;
                            var c = document.getElementById("f11").value;
                            var d = document.getElementById("f12").value;
                            var x = document.getElementById("ans_q43");

                                 if(document.getElementById('f9').checked) { x.value = a; }
                            else if(document.getElementById('f10').checked) { x.value = b; } 
                            else if(document.getElementById('f11').checked) { x.value = c; } 
                            else if(document.getElementById('f12').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Filipino' LIMIT 3, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="four_four" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_four_four" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q44" class="form-control form-control-sm" name="ans_q44" value="NA">
                      <h5><b>44.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q44" value="<?php echo $row['choice_one']; ?>" id="f13" onclick="fourfour();"> 
                      <label style="font-weight: normal;" for="f13"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q44" value="<?php echo $row['choice_two']; ?>" id="f14" onclick="fourfour();"> 
                      <label style="font-weight: normal;" for="f14"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q44" value="<?php echo $row['choice_three']; ?>" id="f15" onclick="fourfour();"> 
                      <label style="font-weight: normal;" for="f15"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q44" value="<?php echo $row['choice_four']; ?>" id="f16" onclick="fourfour();"> 
                      <label style="font-weight: normal;" for="f16"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function fourfour() {
                            var a = document.getElementById("f13").value;
                            var b = document.getElementById("f14").value;
                            var c = document.getElementById("f15").value;
                            var d = document.getElementById("f16").value;
                            var x = document.getElementById("ans_q44");

                                 if(document.getElementById('f13').checked) { x.value = a; }
                            else if(document.getElementById('f14').checked) { x.value = b; } 
                            else if(document.getElementById('f15').checked) { x.value = c; } 
                            else if(document.getElementById('f16').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Filipino' LIMIT 4, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="four_five" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_four_five" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q45" class="form-control form-control-sm" name="ans_q45" value="NA">
                      <h5><b>45.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q45" value="<?php echo $row['choice_one']; ?>" id="f17" onclick="fourfive();"> 
                      <label style="font-weight: normal;" for="f17"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q45" value="<?php echo $row['choice_two']; ?>" id="f18" onclick="fourfive();"> 
                      <label style="font-weight: normal;" for="f18"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q45" value="<?php echo $row['choice_three']; ?>" id="f19" onclick="fourfive();"> 
                      <label style="font-weight: normal;" for="f19"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q45" value="<?php echo $row['choice_four']; ?>" id="f20" onclick="fourfive();"> 
                      <label style="font-weight: normal;" for="f20"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function fourfive() {
                            var a = document.getElementById("f17").value;
                            var b = document.getElementById("f18").value;
                            var c = document.getElementById("f19").value;
                            var d = document.getElementById("f20").value;
                            var x = document.getElementById("ans_q45");

                                 if(document.getElementById('f17').checked) { x.value = a; }
                            else if(document.getElementById('f18').checked) { x.value = b; } 
                            else if(document.getElementById('f19').checked) { x.value = c; } 
                            else if(document.getElementById('f20').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Filipino' LIMIT 5, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="four_six" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_four_six" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q46" class="form-control form-control-sm" name="ans_q46" value="NA">
                      <h5><b>46.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q46" value="<?php echo $row['choice_one']; ?>" id="f21" onclick="foursix();"> 
                      <label style="font-weight: normal;" for="f21"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q46" value="<?php echo $row['choice_two']; ?>" id="f22" onclick="foursix();"> 
                      <label style="font-weight: normal;" for="f22"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q46" value="<?php echo $row['choice_three']; ?>" id="f23" onclick="foursix();"> 
                      <label style="font-weight: normal;" for="f23"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q46" value="<?php echo $row['choice_four']; ?>" id="f24" onclick="foursix();"> 
                      <label style="font-weight: normal;" for="f24"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function foursix() {
                            var a = document.getElementById("f21").value;
                            var b = document.getElementById("f22").value;
                            var c = document.getElementById("f23").value;
                            var d = document.getElementById("f24").value;
                            var x = document.getElementById("ans_q46");

                                 if(document.getElementById('f21').checked) { x.value = a; }
                            else if(document.getElementById('f22').checked) { x.value = b; } 
                            else if(document.getElementById('f23').checked) { x.value = c; } 
                            else if(document.getElementById('f24').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Filipino' LIMIT 6, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="four_seven" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_four_seven" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q47" class="form-control form-control-sm" name="ans_q47" value="NA">
                      <h5><b>47.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q47" value="<?php echo $row['choice_one']; ?>" id="f25" onclick="fourseven();"> 
                      <label style="font-weight: normal;" for="f25"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q47" value="<?php echo $row['choice_two']; ?>" id="f26" onclick="fourseven();"> 
                      <label style="font-weight: normal;" for="f26"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q47" value="<?php echo $row['choice_three']; ?>" id="f27" onclick="fourseven();"> 
                      <label style="font-weight: normal;" for="f27"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q47" value="<?php echo $row['choice_four']; ?>" id="f28" onclick="fourseven();"> 
                      <label style="font-weight: normal;" for="f28"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function fourseven() {
                            var a = document.getElementById("f25").value;
                            var b = document.getElementById("f26").value;
                            var c = document.getElementById("f27").value;
                            var d = document.getElementById("f28").value;
                            var x = document.getElementById("ans_q47");

                                 if(document.getElementById('f25').checked) { x.value = a; }
                            else if(document.getElementById('f26').checked) { x.value = b; } 
                            else if(document.getElementById('f27').checked) { x.value = c; } 
                            else if(document.getElementById('f28').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Filipino' LIMIT 7, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="four_eight" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_four_eight" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q48" class="form-control form-control-sm" name="ans_q48" value="NA">
                      <h5><b>48.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q48" value="<?php echo $row['choice_one']; ?>" id="f29" onclick="foureight();"> 
                      <label style="font-weight: normal;" for="f29"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q48" value="<?php echo $row['choice_two']; ?>" id="f30" onclick="foureight();"> 
                      <label style="font-weight: normal;" for="f30"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q48" value="<?php echo $row['choice_three']; ?>" id="f31" onclick="foureight();"> 
                      <label style="font-weight: normal;" for="f31"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q48" value="<?php echo $row['choice_four']; ?>" id="f32" onclick="foureight();"> 
                      <label style="font-weight: normal;" for="f32"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function foureight() {
                            var a = document.getElementById("f29").value;
                            var b = document.getElementById("f30").value;
                            var c = document.getElementById("f31").value;
                            var d = document.getElementById("f32").value;
                            var x = document.getElementById("ans_q48");

                                 if(document.getElementById('f29').checked) { x.value = a; }
                            else if(document.getElementById('f30').checked) { x.value = b; } 
                            else if(document.getElementById('f31').checked) { x.value = c; } 
                            else if(document.getElementById('f32').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Filipino' LIMIT 8, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="four_nine" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_four_nine" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q49" class="form-control form-control-sm" name="ans_q49" value="NA">
                      <h5><b>49.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q49" value="<?php echo $row['choice_one']; ?>" id="f33" onclick="fournine();"> 
                      <label style="font-weight: normal;" for="f33"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q49" value="<?php echo $row['choice_two']; ?>" id="f34" onclick="fournine();"> 
                      <label style="font-weight: normal;" for="f34"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q49" value="<?php echo $row['choice_three']; ?>" id="f35" onclick="fournine();"> 
                      <label style="font-weight: normal;" for="f35"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q49" value="<?php echo $row['choice_four']; ?>" id="f36" onclick="fournine();"> 
                      <label style="font-weight: normal;" for="f36"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function fournine() {
                            var a = document.getElementById("f33").value;
                            var b = document.getElementById("f34").value;
                            var c = document.getElementById("f35").value;
                            var d = document.getElementById("f36").value;
                            var x = document.getElementById("ans_q49");

                                 if(document.getElementById('f33').checked) { x.value = a; }
                            else if(document.getElementById('f34').checked) { x.value = b; } 
                            else if(document.getElementById('f35').checked) { x.value = c; } 
                            else if(document.getElementById('f36').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Filipino' LIMIT 9, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="fifty" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_fifty" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q50" class="form-control form-control-sm" name="ans_q50" value="NA">
                      <h5><b>50.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q50" value="<?php echo $row['choice_one']; ?>" id="f37" onclick="fivezero();"> 
                      <label style="font-weight: normal;" for="f37"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q50" value="<?php echo $row['choice_two']; ?>" id="f38" onclick="fivezero();"> 
                      <label style="font-weight: normal;" for="f38"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q50" value="<?php echo $row['choice_three']; ?>" id="f39" onclick="fivezero();"> 
                      <label style="font-weight: normal;" for="f39"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q50" value="<?php echo $row['choice_four']; ?>" id="f40" onclick="fivezero();"> 
                      <label style="font-weight: normal;" for="f40"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function fivezero() {
                            var a = document.getElementById("f37").value;
                            var b = document.getElementById("f38").value;
                            var c = document.getElementById("f39").value;
                            var d = document.getElementById("f40").value;
                            var x = document.getElementById("ans_q50");

                                 if(document.getElementById('f37').checked) { x.value = a; }
                            else if(document.getElementById('f38').checked) { x.value = b; } 
                            else if(document.getElementById('f39').checked) { x.value = c; } 
                            else if(document.getElementById('f40').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Filipino' LIMIT 10, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="five_one" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_five_one" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q51" class="form-control form-control-sm" name="ans_q51" value="NA">
                      <h5><b>51.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q51" value="<?php echo $row['choice_one']; ?>" id="f41" onclick="fiveone();"> 
                      <label style="font-weight: normal;" for="f41"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q51" value="<?php echo $row['choice_two']; ?>" id="f42" onclick="fiveone();"> 
                      <label style="font-weight: normal;" for="f42"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q51" value="<?php echo $row['choice_three']; ?>" id="f43" onclick="fiveone();"> 
                      <label style="font-weight: normal;" for="f43"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q51" value="<?php echo $row['choice_four']; ?>" id="f44" onclick="fiveone();"> 
                      <label style="font-weight: normal;" for="f44"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function fiveone() {
                            var a = document.getElementById("f41").value;
                            var b = document.getElementById("f42").value;
                            var c = document.getElementById("f43").value;
                            var d = document.getElementById("f44").value;
                            var x = document.getElementById("ans_q51");

                                 if(document.getElementById('f41').checked) { x.value = a; }
                            else if(document.getElementById('f42').checked) { x.value = b; } 
                            else if(document.getElementById('f43').checked) { x.value = c; } 
                            else if(document.getElementById('f44').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Filipino' LIMIT 11, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="five_two" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_five_two" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q52" class="form-control form-control-sm" name="ans_q52" value="NA">
                      <h5><b>52.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q52" value="<?php echo $row['choice_one']; ?>" id="f45" onclick="fivetwo();"> 
                      <label style="font-weight: normal;" for="f45"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q52" value="<?php echo $row['choice_two']; ?>" id="f46" onclick="fivetwo();"> 
                      <label style="font-weight: normal;" for="f46"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q52" value="<?php echo $row['choice_three']; ?>" id="f47" onclick="fivetwo();"> 
                      <label style="font-weight: normal;" for="f47"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q52" value="<?php echo $row['choice_four']; ?>" id="f48" onclick="fivetwo();"> 
                      <label style="font-weight: normal;" for="f48"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function fivetwo() {
                            var a = document.getElementById("f45").value;
                            var b = document.getElementById("f46").value;
                            var c = document.getElementById("f47").value;
                            var d = document.getElementById("f48").value;
                            var x = document.getElementById("ans_q52");

                                 if(document.getElementById('f45').checked) { x.value = a; }
                            else if(document.getElementById('f46').checked) { x.value = b; } 
                            else if(document.getElementById('f47').checked) { x.value = c; } 
                            else if(document.getElementById('f48').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Filipino' LIMIT 12, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="five_three" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_five_three" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q53" class="form-control form-control-sm" name="ans_q53" value="NA">
                      <h5><b>53.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q53" value="<?php echo $row['choice_one']; ?>" id="f49" onclick="fivethree();"> 
                      <label style="font-weight: normal;" for="f49"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q53" value="<?php echo $row['choice_two']; ?>" id="f50" onclick="fivethree();"> 
                      <label style="font-weight: normal;" for="f50"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q53" value="<?php echo $row['choice_three']; ?>" id="f51" onclick="fivethree();"> 
                      <label style="font-weight: normal;" for="f51"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q53" value="<?php echo $row['choice_four']; ?>" id="f52" onclick="fivethree();"> 
                      <label style="font-weight: normal;" for="f52"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function fivethree() {
                            var a = document.getElementById("f49").value;
                            var b = document.getElementById("f50").value;
                            var c = document.getElementById("f51").value;
                            var d = document.getElementById("f52").value;
                            var x = document.getElementById("ans_q53");

                                 if(document.getElementById('f49').checked) { x.value = a; }
                            else if(document.getElementById('f50').checked) { x.value = b; } 
                            else if(document.getElementById('f51').checked) { x.value = c; } 
                            else if(document.getElementById('f52').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Filipino' LIMIT 13, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="five_four" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_five_four" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q54" class="form-control form-control-sm" name="ans_q54" value="NA">
                      <h5><b>54.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q54" value="<?php echo $row['choice_one']; ?>" id="f53" onclick="fivefour();"> 
                      <label style="font-weight: normal;" for="f53"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q54" value="<?php echo $row['choice_two']; ?>" id="f54" onclick="fivefour();"> 
                      <label style="font-weight: normal;" for="f54"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q54" value="<?php echo $row['choice_three']; ?>" id="f55" onclick="fivefour();"> 
                      <label style="font-weight: normal;" for="f55"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q54" value="<?php echo $row['choice_four']; ?>" id="f56" onclick="fivefour();"> 
                      <label style="font-weight: normal;" for="f56"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function fivefour() {
                            var a = document.getElementById("f53").value;
                            var b = document.getElementById("f54").value;
                            var c = document.getElementById("f55").value;
                            var d = document.getElementById("f56").value;
                            var x = document.getElementById("ans_q54");

                                 if(document.getElementById('f53').checked) { x.value = a; }
                            else if(document.getElementById('f54').checked) { x.value = b; } 
                            else if(document.getElementById('f55').checked) { x.value = c; } 
                            else if(document.getElementById('f56').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Filipino' LIMIT 14, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="five_five" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_five_five" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q55" class="form-control form-control-sm" name="ans_q55" value="NA">
                      <h5><b>55.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q55" value="<?php echo $row['choice_one']; ?>" id="f57" onclick="fivefive();"> 
                      <label style="font-weight: normal;" for="f57"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q55" value="<?php echo $row['choice_two']; ?>" id="f58" onclick="fivefive();"> 
                      <label style="font-weight: normal;" for="f58"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q55" value="<?php echo $row['choice_three']; ?>" id="f59" onclick="fivefive();"> 
                      <label style="font-weight: normal;" for="f59"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q55" value="<?php echo $row['choice_four']; ?>" id="f60" onclick="fivefive();"> 
                      <label style="font-weight: normal;" for="f60"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function fivefive() {
                            var a = document.getElementById("f57").value;
                            var b = document.getElementById("f58").value;
                            var c = document.getElementById("f59").value;
                            var d = document.getElementById("f60").value;
                            var x = document.getElementById("ans_q55");

                                 if(document.getElementById('f57').checked) { x.value = a; }
                            else if(document.getElementById('f58').checked) { x.value = b; } 
                            else if(document.getElementById('f59').checked) { x.value = c; } 
                            else if(document.getElementById('f60').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Filipino' LIMIT 15, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="five_six" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_five_six" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q56" class="form-control form-control-sm" name="ans_q56" value="NA">
                      <h5><b>56.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q56" value="<?php echo $row['choice_one']; ?>" id="f61" onclick="fivesix();"> 
                      <label style="font-weight: normal;" for="f61"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q56" value="<?php echo $row['choice_two']; ?>" id="f62" onclick="fivesix();"> 
                      <label style="font-weight: normal;" for="f62"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q56" value="<?php echo $row['choice_three']; ?>" id="f63" onclick="fivesix();"> 
                      <label style="font-weight: normal;" for="f63"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q56" value="<?php echo $row['choice_four']; ?>" id="f64" onclick="fivesix();"> 
                      <label style="font-weight: normal;" for="f64"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function fivesix() {
                            var a = document.getElementById("f61").value;
                            var b = document.getElementById("f62").value;
                            var c = document.getElementById("f63").value;
                            var d = document.getElementById("f64").value;
                            var x = document.getElementById("ans_q56");

                                 if(document.getElementById('f61').checked) { x.value = a; }
                            else if(document.getElementById('f62').checked) { x.value = b; } 
                            else if(document.getElementById('f63').checked) { x.value = c; } 
                            else if(document.getElementById('f64').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Filipino' LIMIT 16, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="five_seven" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_five_seven" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q57" class="form-control form-control-sm" name="ans_q57" value="NA">
                      <h5><b>57.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q57" value="<?php echo $row['choice_one']; ?>" id="f65" onclick="fiveseven();"> 
                      <label style="font-weight: normal;" for="f65"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q57" value="<?php echo $row['choice_two']; ?>" id="f66" onclick="fiveseven();"> 
                      <label style="font-weight: normal;" for="f66"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q57" value="<?php echo $row['choice_three']; ?>" id="f67" onclick="fiveseven();"> 
                      <label style="font-weight: normal;" for="f67"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q57" value="<?php echo $row['choice_four']; ?>" id="f68" onclick="fiveseven();"> 
                      <label style="font-weight: normal;" for="f68"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function fiveseven() {
                            var a = document.getElementById("f65").value;
                            var b = document.getElementById("f66").value;
                            var c = document.getElementById("f67").value;
                            var d = document.getElementById("f68").value;
                            var x = document.getElementById("ans_q57");

                                 if(document.getElementById('f65').checked) { x.value = a; }
                            else if(document.getElementById('f66').checked) { x.value = b; } 
                            else if(document.getElementById('f67').checked) { x.value = c; } 
                            else if(document.getElementById('f68').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Filipino' LIMIT 17, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="five_eight" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_five_eight" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q58" class="form-control form-control-sm" name="ans_q58" value="NA">
                      <h5><b>58.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q58" value="<?php echo $row['choice_one']; ?>" id="f69" onclick="fiveeight();"> 
                      <label style="font-weight: normal;" for="f69"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q58" value="<?php echo $row['choice_two']; ?>" id="f70" onclick="fiveeight();"> 
                      <label style="font-weight: normal;" for="f70"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q58" value="<?php echo $row['choice_three']; ?>" id="f71" onclick="fiveeight();"> 
                      <label style="font-weight: normal;" for="f71"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q58" value="<?php echo $row['choice_four']; ?>" id="f72" onclick="fiveeight();"> 
                      <label style="font-weight: normal;" for="f72"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function fiveeight() {
                            var a = document.getElementById("f69").value;
                            var b = document.getElementById("f70").value;
                            var c = document.getElementById("f71").value;
                            var d = document.getElementById("f72").value;
                            var x = document.getElementById("ans_q58");

                                 if(document.getElementById('f69').checked) { x.value = a; }
                            else if(document.getElementById('f70').checked) { x.value = b; } 
                            else if(document.getElementById('f71').checked) { x.value = c; } 
                            else if(document.getElementById('f72').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Filipino' LIMIT 18, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="five_nine" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_five_nine" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q59" class="form-control form-control-sm" name="ans_q59" value="NA">
                      <h5><b>59.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q59" value="<?php echo $row['choice_one']; ?>" id="f73" onclick="fivenine();"> 
                      <label style="font-weight: normal;" for="f73"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q59" value="<?php echo $row['choice_two']; ?>" id="f74" onclick="fivenine();"> 
                      <label style="font-weight: normal;" for="f74"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q59" value="<?php echo $row['choice_three']; ?>" id="f75" onclick="fivenine();"> 
                      <label style="font-weight: normal;" for="f75"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q59" value="<?php echo $row['choice_four']; ?>" id="f76" onclick="fivenine();"> 
                      <label style="font-weight: normal;" for="f76"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function fivenine() {
                            var a = document.getElementById("f73").value;
                            var b = document.getElementById("f74").value;
                            var c = document.getElementById("f75").value;
                            var d = document.getElementById("f76").value;
                            var x = document.getElementById("ans_q59");

                                 if(document.getElementById('f73').checked) { x.value = a; }
                            else if(document.getElementById('f74').checked) { x.value = b; } 
                            else if(document.getElementById('f75').checked) { x.value = c; } 
                            else if(document.getElementById('f76').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Filipino' LIMIT 19, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="sixty" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_sixty" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q60" class="form-control form-control-sm" name="ans_q60" value="NA">
                      <h5><b>60.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q60" value="<?php echo $row['choice_one']; ?>" id="f77" onclick="sixzero();"> 
                      <label style="font-weight: normal;" for="f77"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q60" value="<?php echo $row['choice_two']; ?>" id="f78" onclick="sixzero();"> 
                      <label style="font-weight: normal;" for="f78"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q60" value="<?php echo $row['choice_three']; ?>" id="f79" onclick="sixzero();"> 
                      <label style="font-weight: normal;" for="f79"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q60" value="<?php echo $row['choice_four']; ?>" id="f80" onclick="sixzero();"> 
                      <label style="font-weight: normal;" for="f80"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function sixzero() {
                            var a = document.getElementById("f77").value;
                            var b = document.getElementById("f78").value;
                            var c = document.getElementById("f79").value;
                            var d = document.getElementById("f80").value;
                            var x = document.getElementById("ans_q60");

                                 if(document.getElementById('f77').checked) { x.value = a; }
                            else if(document.getElementById('f78').checked) { x.value = b; } 
                            else if(document.getElementById('f79').checked) { x.value = c; } 
                            else if(document.getElementById('f80').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                    </div>

                  