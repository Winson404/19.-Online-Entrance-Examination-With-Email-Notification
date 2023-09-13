<!-- One "tab" for each step in the form: -->
                    <div class="tab">
                      <h4 class="bg-light text-center">Science category</h4>
                      <hr>
                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science'");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="six_one" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_six_one" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q61" class="form-control form-control-sm" name="ans_q61" value="NA">
                      <h5><b>61.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q61" value="<?php echo $row['choice_one']; ?>" id="s1" onclick="sixone();"> 
                      <label style="font-weight: normal;" for="s1"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q61" value="<?php echo $row['choice_two']; ?>" id="s2" onclick="sixone();"> 
                      <label style="font-weight: normal;" for="s2"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q61" value="<?php echo $row['choice_three']; ?>" id="s3" onclick="sixone();"> 
                      <label style="font-weight: normal;" for="s3"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q61" value="<?php echo $row['choice_four']; ?>" id="s4" onclick="sixone();"> 
                      <label style="font-weight: normal;" for="s4"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function sixone() {
                            var a = document.getElementById("s1").value;
                            var b = document.getElementById("s2").value;
                            var c = document.getElementById("s3").value;
                            var d = document.getElementById("s4").value;
                            var x = document.getElementById("ans_q61");

                                 if(document.getElementById('s1').checked) { x.value = a; }
                            else if(document.getElementById('s2').checked) { x.value = b; } 
                            else if(document.getElementById('s3').checked) { x.value = c; } 
                            else if(document.getElementById('s4').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                       <?php           
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 1, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="six_two" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_six_two" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q62" class="form-control form-control-sm" name="ans_q62" value="NA">
                      <h5><b>62.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q62" value="<?php echo $row['choice_one']; ?>" id="s5" onclick="sixtwo();"> 
                      <label style="font-weight: normal;" for="s5"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q62" value="<?php echo $row['choice_two']; ?>" id="s6" onclick="sixtwo();"> 
                      <label style="font-weight: normal;" for="s6"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q62" value="<?php echo $row['choice_three']; ?>" id="s7" onclick="sixtwo();"> 
                      <label style="font-weight: normal;" for="s7"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q62" value="<?php echo $row['choice_four']; ?>" id="s8" onclick="sixtwo();"> 
                      <label style="font-weight: normal;" for="s8"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function sixtwo() {
                            var a = document.getElementById("s5").value;
                            var b = document.getElementById("s6").value;
                            var c = document.getElementById("s7").value;
                            var d = document.getElementById("s8").value;
                            var x = document.getElementById("ans_q62");

                                 if(document.getElementById('s5').checked) { x.value = a; }
                            else if(document.getElementById('s6').checked) { x.value = b; } 
                            else if(document.getElementById('s7').checked) { x.value = c; } 
                            else if(document.getElementById('s8').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 2, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="six_three" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_six_three" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q63" class="form-control form-control-sm" name="ans_q63" value="NA">
                      <h5><b>63.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q63" value="<?php echo $row['choice_one']; ?>" id="s9" onclick="sixthree();"> 
                      <label style="font-weight: normal;" for="s9"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q63" value="<?php echo $row['choice_two']; ?>" id="s10" onclick="sixthree();"> 
                      <label style="font-weight: normal;" for="s10"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q63" value="<?php echo $row['choice_three']; ?>" id="s11" onclick="sixthree();"> 
                      <label style="font-weight: normal;" for="s11"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q63" value="<?php echo $row['choice_four']; ?>" id="s12" onclick="sixthree();"> 
                      <label style="font-weight: normal;" for="s12"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function sixthree() {
                            var a = document.getElementById("s9").value;
                            var b = document.getElementById("s10").value;
                            var c = document.getElementById("s11").value;
                            var d = document.getElementById("s12").value;
                            var x = document.getElementById("ans_q63");

                                 if(document.getElementById('s9').checked) { x.value = a; }
                            else if(document.getElementById('s10').checked) { x.value = b; } 
                            else if(document.getElementById('s11').checked) { x.value = c; } 
                            else if(document.getElementById('s12').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 3, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="six_four" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_six_four" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q64" class="form-control form-control-sm" name="ans_q64" value="NA">
                      <h5><b>64.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q64" value="<?php echo $row['choice_one']; ?>" id="s13" onclick="sixfour();"> 
                      <label style="font-weight: normal;" for="s13"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q64" value="<?php echo $row['choice_two']; ?>" id="s14" onclick="sixfour();"> 
                      <label style="font-weight: normal;" for="s14"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q64" value="<?php echo $row['choice_three']; ?>" id="s15" onclick="sixfour();"> 
                      <label style="font-weight: normal;" for="s15"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q64" value="<?php echo $row['choice_four']; ?>" id="s16" onclick="sixfour();"> 
                      <label style="font-weight: normal;" for="s16"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function sixfour() {
                            var a = document.getElementById("s13").value;
                            var b = document.getElementById("s14").value;
                            var c = document.getElementById("s15").value;
                            var d = document.getElementById("s16").value;
                            var x = document.getElementById("ans_q64");

                                 if(document.getElementById('s13').checked) { x.value = a; }
                            else if(document.getElementById('s14').checked) { x.value = b; } 
                            else if(document.getElementById('s15').checked) { x.value = c; } 
                            else if(document.getElementById('s16').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 4, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="six_five" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_six_five" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q65" class="form-control form-control-sm" name="ans_q65" value="NA">
                      <h5><b>65.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q65" value="<?php echo $row['choice_one']; ?>" id="s17" onclick="sixfive();"> 
                      <label style="font-weight: normal;" for="s17"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q65" value="<?php echo $row['choice_two']; ?>" id="s18" onclick="sixfive();"> 
                      <label style="font-weight: normal;" for="s18"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q65" value="<?php echo $row['choice_three']; ?>" id="s19" onclick="sixfive();"> 
                      <label style="font-weight: normal;" for="s19"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q65" value="<?php echo $row['choice_four']; ?>" id="s20" onclick="sixfive();"> 
                      <label style="font-weight: normal;" for="s20"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function sixfive() {
                            var a = document.getElementById("s17").value;
                            var b = document.getElementById("s18").value;
                            var c = document.getElementById("s19").value;
                            var d = document.getElementById("s20").value;
                            var x = document.getElementById("ans_q65");

                                 if(document.getElementById('s17').checked) { x.value = a; }
                            else if(document.getElementById('s18').checked) { x.value = b; } 
                            else if(document.getElementById('s19').checked) { x.value = c; } 
                            else if(document.getElementById('s20').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 5, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="six_six" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_six_six" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q66" class="form-control form-control-sm" name="ans_q66" value="NA">
                      <h5><b>66.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q66" value="<?php echo $row['choice_one']; ?>" id="s21" onclick="sixsix();"> 
                      <label style="font-weight: normal;" for="s21"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q66" value="<?php echo $row['choice_two']; ?>" id="s22" onclick="sixsix();"> 
                      <label style="font-weight: normal;" for="s22"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q66" value="<?php echo $row['choice_three']; ?>" id="s23" onclick="sixsix();"> 
                      <label style="font-weight: normal;" for="s23"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q66" value="<?php echo $row['choice_four']; ?>" id="s24" onclick="sixsix();"> 
                      <label style="font-weight: normal;" for="s24"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function sixsix() {
                            var a = document.getElementById("s21").value;
                            var b = document.getElementById("s22").value;
                            var c = document.getElementById("s23").value;
                            var d = document.getElementById("s24").value;
                            var x = document.getElementById("ans_q66");

                                 if(document.getElementById('s21').checked) { x.value = a; }
                            else if(document.getElementById('s22').checked) { x.value = b; } 
                            else if(document.getElementById('s23').checked) { x.value = c; } 
                            else if(document.getElementById('s24').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 6, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="six_seven" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_six_seven" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q67" class="form-control form-control-sm" name="ans_q67" value="NA">
                      <h5><b>67.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q67" value="<?php echo $row['choice_one']; ?>" id="s25" onclick="sixseven();"> 
                      <label style="font-weight: normal;" for="s25"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q67" value="<?php echo $row['choice_two']; ?>" id="s26" onclick="sixseven();"> 
                      <label style="font-weight: normal;" for="s26"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q67" value="<?php echo $row['choice_three']; ?>" id="s27" onclick="sixseven();"> 
                      <label style="font-weight: normal;" for="s27"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q67" value="<?php echo $row['choice_four']; ?>" id="s28" onclick="sixseven();"> 
                      <label style="font-weight: normal;" for="s28"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function sixseven() {
                            var a = document.getElementById("s25").value;
                            var b = document.getElementById("s26").value;
                            var c = document.getElementById("s27").value;
                            var d = document.getElementById("s28").value;
                            var x = document.getElementById("ans_q67");

                                 if(document.getElementById('s25').checked) { x.value = a; }
                            else if(document.getElementById('s26').checked) { x.value = b; } 
                            else if(document.getElementById('s27').checked) { x.value = c; } 
                            else if(document.getElementById('s28').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 7, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="six_eight" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_six_eight" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q68" class="form-control form-control-sm" name="ans_q68" value="NA">
                      <h5><b>68.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q68" value="<?php echo $row['choice_one']; ?>" id="s29" onclick="sixeight();"> 
                      <label style="font-weight: normal;" for="s29"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q68" value="<?php echo $row['choice_two']; ?>" id="s30" onclick="sixeight();"> 
                      <label style="font-weight: normal;" for="s30"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q68" value="<?php echo $row['choice_three']; ?>" id="s31" onclick="sixeight();"> 
                      <label style="font-weight: normal;" for="s31"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q68" value="<?php echo $row['choice_four']; ?>" id="s32" onclick="sixeight();"> 
                      <label style="font-weight: normal;" for="s32"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function sixeight() {
                            var a = document.getElementById("s29").value;
                            var b = document.getElementById("s30").value;
                            var c = document.getElementById("s31").value;
                            var d = document.getElementById("s32").value;
                            var x = document.getElementById("ans_q68");

                                 if(document.getElementById('s29').checked) { x.value = a; }
                            else if(document.getElementById('s30').checked) { x.value = b; } 
                            else if(document.getElementById('s31').checked) { x.value = c; } 
                            else if(document.getElementById('s32').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 8, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="six_nine" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_six_nine" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q69" class="form-control form-control-sm" name="ans_q69" value="NA">
                      <h5><b>69.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q69" value="<?php echo $row['choice_one']; ?>" id="s33" onclick="sixnine();"> 
                      <label style="font-weight: normal;" for="s33"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q69" value="<?php echo $row['choice_two']; ?>" id="s34" onclick="sixnine();"> 
                      <label style="font-weight: normal;" for="s34"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q69" value="<?php echo $row['choice_three']; ?>" id="s35" onclick="sixnine();"> 
                      <label style="font-weight: normal;" for="s35"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q69" value="<?php echo $row['choice_four']; ?>" id="s36" onclick="sixnine();"> 
                      <label style="font-weight: normal;" for="s36"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function sixnine() {
                            var a = document.getElementById("s33").value;
                            var b = document.getElementById("s34").value;
                            var c = document.getElementById("s35").value;
                            var d = document.getElementById("s36").value;
                            var x = document.getElementById("ans_q69");

                                 if(document.getElementById('s33').checked) { x.value = a; }
                            else if(document.getElementById('s34').checked) { x.value = b; } 
                            else if(document.getElementById('s35').checked) { x.value = c; } 
                            else if(document.getElementById('s36').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 9, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="seventy" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_seventy" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q70" class="form-control form-control-sm" name="ans_q70" value="NA">
                      <h5><b>70.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q70" value="<?php echo $row['choice_one']; ?>" id="s37" onclick="sevenzero();"> 
                      <label style="font-weight: normal;" for="s37"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q70" value="<?php echo $row['choice_two']; ?>" id="s38" onclick="sevenzero();"> 
                      <label style="font-weight: normal;" for="s38"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q70" value="<?php echo $row['choice_three']; ?>" id="s39" onclick="sevenzero();"> 
                      <label style="font-weight: normal;" for="s39"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q70" value="<?php echo $row['choice_four']; ?>" id="s40" onclick="sevenzero();"> 
                      <label style="font-weight: normal;" for="s40"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function sevenzero() {
                            var a = document.getElementById("s37").value;
                            var b = document.getElementById("s38").value;
                            var c = document.getElementById("s39").value;
                            var d = document.getElementById("s40").value;
                            var x = document.getElementById("ans_q70");

                                 if(document.getElementById('s37').checked) { x.value = a; }
                            else if(document.getElementById('s38').checked) { x.value = b; } 
                            else if(document.getElementById('s39').checked) { x.value = c; } 
                            else if(document.getElementById('s40').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 10, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="seven_one" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_seven_one" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q71" class="form-control form-control-sm" name="ans_q71" value="NA">
                      <h5><b>71.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q71" value="<?php echo $row['choice_one']; ?>" id="s41" onclick="sevenone();"> 
                      <label style="font-weight: normal;" for="s41"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q71" value="<?php echo $row['choice_two']; ?>" id="s42" onclick="sevenone();"> 
                      <label style="font-weight: normal;" for="s42"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q71" value="<?php echo $row['choice_three']; ?>" id="s43" onclick="sevenone();"> 
                      <label style="font-weight: normal;" for="s43"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q71" value="<?php echo $row['choice_four']; ?>" id="s44" onclick="sevenone();"> 
                      <label style="font-weight: normal;" for="s44"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function sevenone() {
                            var a = document.getElementById("s41").value;
                            var b = document.getElementById("s42").value;
                            var c = document.getElementById("s43").value;
                            var d = document.getElementById("s44").value;
                            var x = document.getElementById("ans_q71");

                                 if(document.getElementById('s41').checked) { x.value = a; }
                            else if(document.getElementById('s42').checked) { x.value = b; } 
                            else if(document.getElementById('s43').checked) { x.value = c; } 
                            else if(document.getElementById('s44').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 11, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="seven_two" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_seven_two" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q72" class="form-control form-control-sm" name="ans_q72" value="NA">
                      <h5><b>72.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q72" value="<?php echo $row['choice_one']; ?>" id="s45" onclick="seventwo();"> 
                      <label style="font-weight: normal;" for="s45"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q72" value="<?php echo $row['choice_two']; ?>" id="s46" onclick="seventwo();"> 
                      <label style="font-weight: normal;" for="s46"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q72" value="<?php echo $row['choice_three']; ?>" id="s47" onclick="seventwo();"> 
                      <label style="font-weight: normal;" for="s47"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q72" value="<?php echo $row['choice_four']; ?>" id="s48" onclick="seventwo();"> 
                      <label style="font-weight: normal;" for="s48"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function seventwo() {
                            var a = document.getElementById("s45").value;
                            var b = document.getElementById("s46").value;
                            var c = document.getElementById("s47").value;
                            var d = document.getElementById("s48").value;
                            var x = document.getElementById("ans_q72");

                                 if(document.getElementById('s45').checked) { x.value = a; }
                            else if(document.getElementById('s46').checked) { x.value = b; } 
                            else if(document.getElementById('s47').checked) { x.value = c; } 
                            else if(document.getElementById('s48').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 12, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="seven_three" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_seven_three" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q73" class="form-control form-control-sm" name="ans_q73" value="NA">
                      <h5><b>73.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q73" value="<?php echo $row['choice_one']; ?>" id="s49" onclick="seventhree();"> 
                      <label style="font-weight: normal;" for="s49"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q73" value="<?php echo $row['choice_two']; ?>" id="s50" onclick="seventhree();"> 
                      <label style="font-weight: normal;" for="s50"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q73" value="<?php echo $row['choice_three']; ?>" id="s51" onclick="seventhree();"> 
                      <label style="font-weight: normal;" for="s51"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q73" value="<?php echo $row['choice_four']; ?>" id="s52" onclick="seventhree();"> 
                      <label style="font-weight: normal;" for="s52"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function seventhree() {
                            var a = document.getElementById("s49").value;
                            var b = document.getElementById("s50").value;
                            var c = document.getElementById("s51").value;
                            var d = document.getElementById("s52").value;
                            var x = document.getElementById("ans_q73");

                                 if(document.getElementById('s49').checked) { x.value = a; }
                            else if(document.getElementById('s50').checked) { x.value = b; } 
                            else if(document.getElementById('s51').checked) { x.value = c; } 
                            else if(document.getElementById('s52').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 13, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="seven_four" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_seven_four" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q74" class="form-control form-control-sm" name="ans_q74" value="NA">
                      <h5><b>74.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q74" value="<?php echo $row['choice_one']; ?>" id="s53" onclick="sevenfour();"> 
                      <label style="font-weight: normal;" for="s53"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q74" value="<?php echo $row['choice_two']; ?>" id="s54" onclick="sevenfour();"> 
                      <label style="font-weight: normal;" for="s54"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q74" value="<?php echo $row['choice_three']; ?>" id="s55" onclick="sevenfour();"> 
                      <label style="font-weight: normal;" for="s55"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q74" value="<?php echo $row['choice_four']; ?>" id="s56" onclick="sevenfour();"> 
                      <label style="font-weight: normal;" for="s56"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function sevenfour() {
                            var a = document.getElementById("s53").value;
                            var b = document.getElementById("s54").value;
                            var c = document.getElementById("s55").value;
                            var d = document.getElementById("s56").value;
                            var x = document.getElementById("ans_q74");

                                 if(document.getElementById('s53').checked) { x.value = a; }
                            else if(document.getElementById('s54').checked) { x.value = b; } 
                            else if(document.getElementById('s55').checked) { x.value = c; } 
                            else if(document.getElementById('s56').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 14, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="seven_five" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_seven_five" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q75" class="form-control form-control-sm" name="ans_q75" value="NA">
                      <h5><b>75.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q75" value="<?php echo $row['choice_one']; ?>" id="s57" onclick="sevenfive();"> 
                      <label style="font-weight: normal;" for="s57"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q75" value="<?php echo $row['choice_two']; ?>" id="s58" onclick="sevenfive();"> 
                      <label style="font-weight: normal;" for="s58"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q75" value="<?php echo $row['choice_three']; ?>" id="s59" onclick="sevenfive();"> 
                      <label style="font-weight: normal;" for="s59"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q75" value="<?php echo $row['choice_four']; ?>" id="s60" onclick="sevenfive();"> 
                      <label style="font-weight: normal;" for="s60"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function sevenfive() {
                            var a = document.getElementById("s57").value;
                            var b = document.getElementById("s58").value;
                            var c = document.getElementById("s59").value;
                            var d = document.getElementById("s60").value;
                            var x = document.getElementById("ans_q75");

                                 if(document.getElementById('s57').checked) { x.value = a; }
                            else if(document.getElementById('s58').checked) { x.value = b; } 
                            else if(document.getElementById('s59').checked) { x.value = c; } 
                            else if(document.getElementById('s60').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 15, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="seven_six" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_seven_six" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q76" class="form-control form-control-sm" name="ans_q76" value="NA">
                      <h5><b>76.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q76" value="<?php echo $row['choice_one']; ?>" id="s61" onclick="sevensix();"> 
                      <label style="font-weight: normal;" for="s61"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q76" value="<?php echo $row['choice_two']; ?>" id="s62" onclick="sevensix();"> 
                      <label style="font-weight: normal;" for="s62"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q76" value="<?php echo $row['choice_three']; ?>" id="s63" onclick="sevensix();"> 
                      <label style="font-weight: normal;" for="s63"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q76" value="<?php echo $row['choice_four']; ?>" id="s64" onclick="sevensix();"> 
                      <label style="font-weight: normal;" for="s64"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function sevensix() {
                            var a = document.getElementById("s61").value;
                            var b = document.getElementById("s62").value;
                            var c = document.getElementById("s63").value;
                            var d = document.getElementById("s64").value;
                            var x = document.getElementById("ans_q76");

                                 if(document.getElementById('s61').checked) { x.value = a; }
                            else if(document.getElementById('s62').checked) { x.value = b; } 
                            else if(document.getElementById('s63').checked) { x.value = c; } 
                            else if(document.getElementById('s64').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 16, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="seven_seven" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_seven_seven" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q77" class="form-control form-control-sm" name="ans_q77" value="NA">
                      <h5><b>77.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q77" value="<?php echo $row['choice_one']; ?>" id="s65" onclick="sevenseven();"> 
                      <label style="font-weight: normal;" for="s65"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q77" value="<?php echo $row['choice_two']; ?>" id="s66" onclick="sevenseven();"> 
                      <label style="font-weight: normal;" for="s66"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q77" value="<?php echo $row['choice_three']; ?>" id="s67" onclick="sevenseven();"> 
                      <label style="font-weight: normal;" for="s67"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q77" value="<?php echo $row['choice_four']; ?>" id="s68" onclick="sevenseven();"> 
                      <label style="font-weight: normal;" for="s68"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function sevenseven() {
                            var a = document.getElementById("s65").value;
                            var b = document.getElementById("s66").value;
                            var c = document.getElementById("s67").value;
                            var d = document.getElementById("s68").value;
                            var x = document.getElementById("ans_q77");

                                 if(document.getElementById('s65').checked) { x.value = a; }
                            else if(document.getElementById('s66').checked) { x.value = b; } 
                            else if(document.getElementById('s67').checked) { x.value = c; } 
                            else if(document.getElementById('s68').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 17, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="seven_eight" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_seven_eight" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q78" class="form-control form-control-sm" name="ans_q78" value="NA">
                      <h5><b>78.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q78" value="<?php echo $row['choice_one']; ?>" id="s69" onclick="seveneight();"> 
                      <label style="font-weight: normal;" for="s69"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q78" value="<?php echo $row['choice_two']; ?>" id="s70" onclick="seveneight();"> 
                      <label style="font-weight: normal;" for="s70"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q78" value="<?php echo $row['choice_three']; ?>" id="s71" onclick="seveneight();"> 
                      <label style="font-weight: normal;" for="s71"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q78" value="<?php echo $row['choice_four']; ?>" id="s72" onclick="seveneight();"> 
                      <label style="font-weight: normal;" for="s72"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                        <script>
                        function seveneight() {
                            var a = document.getElementById("s69").value;
                            var b = document.getElementById("s70").value;
                            var c = document.getElementById("s71").value;
                            var d = document.getElementById("s72").value;
                            var x = document.getElementById("ans_q78");

                                 if(document.getElementById('s69').checked) { x.value = a; }
                            else if(document.getElementById('s70').checked) { x.value = b; } 
                            else if(document.getElementById('s71').checked) { x.value = c; } 
                            else if(document.getElementById('s72').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 18, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="seven_nine" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_seven_nine" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q79" class="form-control form-control-sm" name="ans_q79" value="NA">
                      <h5><b>79.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q79" value="<?php echo $row['choice_one']; ?>" id="s73" onclick="sevennine();"> 
                      <label style="font-weight: normal;" for="s73"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q79" value="<?php echo $row['choice_two']; ?>" id="s74" onclick="sevennine();"> 
                      <label style="font-weight: normal;" for="s74"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q79" value="<?php echo $row['choice_three']; ?>" id="s75" onclick="sevennine();"> 
                      <label style="font-weight: normal;" for="s75"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q79" value="<?php echo $row['choice_four']; ?>" id="s76" onclick="sevennine();"> 
                      <label style="font-weight: normal;" for="s76"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function sevennine() {
                            var a = document.getElementById("s73").value;
                            var b = document.getElementById("s74").value;
                            var c = document.getElementById("s75").value;
                            var d = document.getElementById("s76").value;
                            var x = document.getElementById("ans_q79");

                                 if(document.getElementById('s73').checked) { x.value = a; }
                            else if(document.getElementById('s74').checked) { x.value = b; } 
                            else if(document.getElementById('s75').checked) { x.value = c; } 
                            else if(document.getElementById('s76').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 19, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="eighty" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_eighty" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q80" class="form-control form-control-sm" name="ans_q80" value="NA">
                      <h5><b>80.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q80" value="<?php echo $row['choice_one']; ?>" id="s77" onclick="eightzero();"> 
                      <label style="font-weight: normal;" for="s77"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q80" value="<?php echo $row['choice_two']; ?>" id="s78" onclick="eightzero();"> 
                      <label style="font-weight: normal;" for="s78"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q80" value="<?php echo $row['choice_three']; ?>" id="s79" onclick="eightzero();"> 
                      <label style="font-weight: normal;" for="s79"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q80" value="<?php echo $row['choice_four']; ?>" id="s80" onclick="eightzero();"> 
                      <label style="font-weight: normal;" for="s80"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function eightzero() {
                            var a = document.getElementById("s77").value;
                            var b = document.getElementById("s78").value;
                            var c = document.getElementById("s79").value;
                            var d = document.getElementById("s80").value;
                            var x = document.getElementById("ans_q80");

                                 if(document.getElementById('s77').checked) { x.value = a; }
                            else if(document.getElementById('s78').checked) { x.value = b; } 
                            else if(document.getElementById('s79').checked) { x.value = c; } 
                            else if(document.getElementById('s80').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                    </div>

                  