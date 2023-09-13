<!-- One "tab" for each step in the form: -->
                    <div class="tab">
                      <h4 class="bg-light text-center">Mathematics category</h4>
                      <hr>
                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics'");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="twenty_one" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_twenty_one" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q21" class="form-control form-control-sm" name="ans_q21" value="NA">
                      <h5><b>21.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q21" value="<?php echo $row['choice_one']; ?>" id="q81" onclick="twoone();"> 
                      <label style="font-weight: normal;" for="q81"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q21" value="<?php echo $row['choice_two']; ?>" id="q82" onclick="twoone();"> 
                      <label style="font-weight: normal;" for="q82"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q21" value="<?php echo $row['choice_three']; ?>" id="q83" onclick="twoone();"> 
                      <label style="font-weight: normal;" for="q83"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q21" value="<?php echo $row['choice_four']; ?>" id="q84" onclick="twoone();"> 
                      <label style="font-weight: normal;" for="q84"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function twoone() {
                            var a = document.getElementById("q81").value;
                            var b = document.getElementById("q82").value;
                            var c = document.getElementById("q83").value;
                            var d = document.getElementById("q84").value;
                            var x = document.getElementById("ans_q21");

                                 if(document.getElementById('q81').checked) { x.value = a; }
                            else if(document.getElementById('q82').checked) { x.value = b; } 
                            else if(document.getElementById('q83').checked) { x.value = c; } 
                            else if(document.getElementById('q84').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                       <?php           
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 1, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="twenty_two" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_twenty_two" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q22" class="form-control form-control-sm" name="ans_q22" value="NA">
                      <h5><b>22.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q22" value="<?php echo $row['choice_one']; ?>" id="q85" onclick="twotwo();"> 
                      <label style="font-weight: normal;" for="q85"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q22" value="<?php echo $row['choice_two']; ?>" id="q86" onclick="twotwo();"> 
                      <label style="font-weight: normal;" for="q86"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q22" value="<?php echo $row['choice_three']; ?>" id="q87" onclick="twotwo();"> 
                      <label style="font-weight: normal;" for="q87"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q22" value="<?php echo $row['choice_four']; ?>" id="q88" onclick="twotwo();"> 
                      <label style="font-weight: normal;" for="q88"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function twotwo() {
                            var a = document.getElementById("q85").value;
                            var b = document.getElementById("q86").value;
                            var c = document.getElementById("q87").value;
                            var d = document.getElementById("q88").value;
                            var x = document.getElementById("ans_q22");

                                 if(document.getElementById('q85').checked) { x.value = a; }
                            else if(document.getElementById('q86').checked) { x.value = b; } 
                            else if(document.getElementById('q87').checked) { x.value = c; } 
                            else if(document.getElementById('q88').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 2, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="twenty_three" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_twenty_three" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q23" class="form-control form-control-sm" name="ans_q23" value="NA">
                      <h5><b>23.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q23" value="<?php echo $row['choice_one']; ?>" id="q89" onclick="twothree();"> 
                      <label style="font-weight: normal;" for="q89"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q23" value="<?php echo $row['choice_two']; ?>" id="q90" onclick="twothree();"> 
                      <label style="font-weight: normal;" for="q90"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q23" value="<?php echo $row['choice_three']; ?>" id="q91" onclick="twothree();"> 
                      <label style="font-weight: normal;" for="q91"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q23" value="<?php echo $row['choice_four']; ?>" id="q92" onclick="twothree();"> 
                      <label style="font-weight: normal;" for="q92"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function twothree() {
                            var a = document.getElementById("q89").value;
                            var b = document.getElementById("q90").value;
                            var c = document.getElementById("q91").value;
                            var d = document.getElementById("q92").value;
                            var x = document.getElementById("ans_q23");

                                 if(document.getElementById('q89').checked) { x.value = a; }
                            else if(document.getElementById('q90').checked) { x.value = b; } 
                            else if(document.getElementById('q91').checked) { x.value = c; } 
                            else if(document.getElementById('q92').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 3, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="twenty_four" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_twenty_four" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q24" class="form-control form-control-sm" name="ans_q24" value="NA">
                      <h5><b>24.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q24" value="<?php echo $row['choice_one']; ?>" id="q93" onclick="twofour();"> 
                      <label style="font-weight: normal;" for="q93"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q24" value="<?php echo $row['choice_two']; ?>" id="q94" onclick="twofour();"> 
                      <label style="font-weight: normal;" for="q94"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q24" value="<?php echo $row['choice_three']; ?>" id="q95" onclick="twofour();"> 
                      <label style="font-weight: normal;" for="q95"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q24" value="<?php echo $row['choice_four']; ?>" id="q96" onclick="twofour();"> 
                      <label style="font-weight: normal;" for="q96"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function twofour() {
                            var a = document.getElementById("q93").value;
                            var b = document.getElementById("q94").value;
                            var c = document.getElementById("q95").value;
                            var d = document.getElementById("q96").value;
                            var x = document.getElementById("ans_q24");

                                 if(document.getElementById('q93').checked) { x.value = a; }
                            else if(document.getElementById('q94').checked) { x.value = b; } 
                            else if(document.getElementById('q95').checked) { x.value = c; } 
                            else if(document.getElementById('q96').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 4, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="twenty_five" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_twenty_five" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q25" class="form-control form-control-sm" name="ans_q25" value="NA">
                      <h5><b>25.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q25" value="<?php echo $row['choice_one']; ?>" id="q97" onclick="twofive();"> 
                      <label style="font-weight: normal;" for="q97"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q25" value="<?php echo $row['choice_two']; ?>" id="q98" onclick="twofive();"> 
                      <label style="font-weight: normal;" for="q98"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q25" value="<?php echo $row['choice_three']; ?>" id="q99" onclick="twofive();"> 
                      <label style="font-weight: normal;" for="q99"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q25" value="<?php echo $row['choice_four']; ?>" id="q100" onclick="twofive();"> 
                      <label style="font-weight: normal;" for="q100"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function twofive() {
                            var a = document.getElementById("q97").value;
                            var b = document.getElementById("q98").value;
                            var c = document.getElementById("q99").value;
                            var d = document.getElementById("q100").value;
                            var x = document.getElementById("ans_q25");

                                 if(document.getElementById('q97').checked) { x.value = a; }
                            else if(document.getElementById('q98').checked) { x.value = b; } 
                            else if(document.getElementById('q99').checked) { x.value = c; } 
                            else if(document.getElementById('q100').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 5, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="twenty_six" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_twenty_six" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q26" class="form-control form-control-sm" name="ans_q26" value="NA">
                      <h5><b>26.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q26" value="<?php echo $row['choice_one']; ?>" id="q101" onclick="twosix();"> 
                      <label style="font-weight: normal;" for="q101"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q26" value="<?php echo $row['choice_two']; ?>" id="q102" onclick="twosix();"> 
                      <label style="font-weight: normal;" for="q102"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q26" value="<?php echo $row['choice_three']; ?>" id="q103" onclick="twosix();"> 
                      <label style="font-weight: normal;" for="q103"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q26" value="<?php echo $row['choice_four']; ?>" id="q104" onclick="twosix();"> 
                      <label style="font-weight: normal;" for="q104"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function twosix() {
                            var a = document.getElementById("q101").value;
                            var b = document.getElementById("q102").value;
                            var c = document.getElementById("q103").value;
                            var d = document.getElementById("q104").value;
                            var x = document.getElementById("ans_q26");

                                 if(document.getElementById('q101').checked) { x.value = a; }
                            else if(document.getElementById('q102').checked) { x.value = b; } 
                            else if(document.getElementById('q103').checked) { x.value = c; } 
                            else if(document.getElementById('q104').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 6, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="twenty_seven" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_twenty_seven" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q27" class="form-control form-control-sm" name="ans_q27" value="NA">
                      <h5><b>27.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q27" value="<?php echo $row['choice_one']; ?>" id="q105" onclick="twoseven();"> 
                      <label style="font-weight: normal;" for="q105"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q27" value="<?php echo $row['choice_two']; ?>" id="q106" onclick="twoseven();"> 
                      <label style="font-weight: normal;" for="q106"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q27" value="<?php echo $row['choice_three']; ?>" id="q107" onclick="twoseven();"> 
                      <label style="font-weight: normal;" for="q107"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q27" value="<?php echo $row['choice_four']; ?>" id="q108" onclick="twoseven();"> 
                      <label style="font-weight: normal;" for="q108"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function twoseven() {
                            var a = document.getElementById("q105").value;
                            var b = document.getElementById("q106").value;
                            var c = document.getElementById("q107").value;
                            var d = document.getElementById("q108").value;
                            var x = document.getElementById("ans_q27");

                                 if(document.getElementById('q105').checked) { x.value = a; }
                            else if(document.getElementById('q106').checked) { x.value = b; } 
                            else if(document.getElementById('q107').checked) { x.value = c; } 
                            else if(document.getElementById('q108').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 7, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="twenty_eight" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_twenty_eight" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q28" class="form-control form-control-sm" name="ans_q28" value="NA">
                      <h5><b>28.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q28" value="<?php echo $row['choice_one']; ?>" id="q109" onclick="twoeight();"> 
                      <label style="font-weight: normal;" for="q109"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q28" value="<?php echo $row['choice_two']; ?>" id="q110" onclick="twoeight();"> 
                      <label style="font-weight: normal;" for="q110"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q28" value="<?php echo $row['choice_three']; ?>" id="q111" onclick="twoeight();"> 
                      <label style="font-weight: normal;" for="q111"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q28" value="<?php echo $row['choice_four']; ?>" id="q112" onclick="twoeight();"> 
                      <label style="font-weight: normal;" for="q112"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function twoeight() {
                            var a = document.getElementById("q109").value;
                            var b = document.getElementById("q110").value;
                            var c = document.getElementById("q111").value;
                            var d = document.getElementById("q112").value;
                            var x = document.getElementById("ans_q28");

                                 if(document.getElementById('q109').checked) { x.value = a; }
                            else if(document.getElementById('q110').checked) { x.value = b; } 
                            else if(document.getElementById('q111').checked) { x.value = c; } 
                            else if(document.getElementById('q112').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 8, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="twenty_nine" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_twenty_nine" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q29" class="form-control form-control-sm" name="ans_q29" value="NA">
                      <h5><b>29.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q29" value="<?php echo $row['choice_one']; ?>" id="q113" onclick="twonine();"> 
                      <label style="font-weight: normal;" for="q113"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q29" value="<?php echo $row['choice_two']; ?>" id="q114" onclick="twonine();"> 
                      <label style="font-weight: normal;" for="q114"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q29" value="<?php echo $row['choice_three']; ?>" id="q115" onclick="twonine();"> 
                      <label style="font-weight: normal;" for="q115"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q29" value="<?php echo $row['choice_four']; ?>" id="q116" onclick="twonine();"> 
                      <label style="font-weight: normal;" for="q116"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function twonine() {
                            var a = document.getElementById("q113").value;
                            var b = document.getElementById("q114").value;
                            var c = document.getElementById("q115").value;
                            var d = document.getElementById("q116").value;
                            var x = document.getElementById("ans_q29");

                                 if(document.getElementById('q113').checked) { x.value = a; }
                            else if(document.getElementById('q114').checked) { x.value = b; } 
                            else if(document.getElementById('q115').checked) { x.value = c; } 
                            else if(document.getElementById('q116').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 9, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="thirty" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_thirty" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q30" class="form-control form-control-sm" name="ans_q30" value="NA">
                      <h5><b>30.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q30" value="<?php echo $row['choice_one']; ?>" id="q117" onclick="threezero();"> 
                      <label style="font-weight: normal;" for="q117"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q30" value="<?php echo $row['choice_two']; ?>" id="q118" onclick="threezero();"> 
                      <label style="font-weight: normal;" for="q118"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q30" value="<?php echo $row['choice_three']; ?>" id="q119" onclick="threezero();"> 
                      <label style="font-weight: normal;" for="q119"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q30" value="<?php echo $row['choice_four']; ?>" id="q120" onclick="threezero();"> 
                      <label style="font-weight: normal;" for="q120"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function threezero() {
                            var a = document.getElementById("q117").value;
                            var b = document.getElementById("q118").value;
                            var c = document.getElementById("q119").value;
                            var d = document.getElementById("q120").value;
                            var x = document.getElementById("ans_q30");

                                 if(document.getElementById('q117').checked) { x.value = a; }
                            else if(document.getElementById('q118').checked) { x.value = b; } 
                            else if(document.getElementById('q119').checked) { x.value = c; } 
                            else if(document.getElementById('q120').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 10, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="three_one" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_three_one" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q31" class="form-control form-control-sm" name="ans_q31" value="NA">
                      <h5><b>31.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q31" value="<?php echo $row['choice_one']; ?>" id="q121" onclick="threeone();"> 
                      <label style="font-weight: normal;" for="q121"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q31" value="<?php echo $row['choice_two']; ?>" id="q122" onclick="threeone();"> 
                      <label style="font-weight: normal;" for="q122"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q31" value="<?php echo $row['choice_three']; ?>" id="q123" onclick="threeone();"> 
                      <label style="font-weight: normal;" for="q123"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q31" value="<?php echo $row['choice_four']; ?>" id="q124" onclick="threeone();"> 
                      <label style="font-weight: normal;" for="q124"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function threeone() {
                            var a = document.getElementById("q121").value;
                            var b = document.getElementById("q122").value;
                            var c = document.getElementById("q123").value;
                            var d = document.getElementById("q124").value;
                            var x = document.getElementById("ans_q31");

                                 if(document.getElementById('q121').checked) { x.value = a; }
                            else if(document.getElementById('q122').checked) { x.value = b; } 
                            else if(document.getElementById('q123').checked) { x.value = c; } 
                            else if(document.getElementById('q124').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 11, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="three_two" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_three_two" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q32" class="form-control form-control-sm" name="ans_q32" value="NA">
                      <h5><b>32.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q32" value="<?php echo $row['choice_one']; ?>" id="q125" onclick="threetwo();"> 
                      <label style="font-weight: normal;" for="q125"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q32" value="<?php echo $row['choice_two']; ?>" id="q126" onclick="threetwo();"> 
                      <label style="font-weight: normal;" for="q126"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q32" value="<?php echo $row['choice_three']; ?>" id="q127" onclick="threetwo();"> 
                      <label style="font-weight: normal;" for="q127"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q32" value="<?php echo $row['choice_four']; ?>" id="q128" onclick="threetwo();"> 
                      <label style="font-weight: normal;" for="q128"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function threetwo() {
                            var a = document.getElementById("q125").value;
                            var b = document.getElementById("q126").value;
                            var c = document.getElementById("q127").value;
                            var d = document.getElementById("q128").value;
                            var x = document.getElementById("ans_q32");

                                 if(document.getElementById('q125').checked) { x.value = a; }
                            else if(document.getElementById('q126').checked) { x.value = b; } 
                            else if(document.getElementById('q127').checked) { x.value = c; } 
                            else if(document.getElementById('q128').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 12, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="three_three" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_three_three" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q33" class="form-control form-control-sm" name="ans_q33" value="NA">
                      <h5><b>33.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q33" value="<?php echo $row['choice_one']; ?>" id="q129" onclick="threethree();"> 
                      <label style="font-weight: normal;" for="q129"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q33" value="<?php echo $row['choice_two']; ?>" id="q130" onclick="threethree();"> 
                      <label style="font-weight: normal;" for="q130"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q33" value="<?php echo $row['choice_three']; ?>" id="q131" onclick="threethree();"> 
                      <label style="font-weight: normal;" for="q131"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q33" value="<?php echo $row['choice_four']; ?>" id="q132" onclick="threethree();"> 
                      <label style="font-weight: normal;" for="q132"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function threethree() {
                            var a = document.getElementById("q129").value;
                            var b = document.getElementById("q130").value;
                            var c = document.getElementById("q131").value;
                            var d = document.getElementById("q132").value;
                            var x = document.getElementById("ans_q33");

                                 if(document.getElementById('q129').checked) { x.value = a; }
                            else if(document.getElementById('q130').checked) { x.value = b; } 
                            else if(document.getElementById('q131').checked) { x.value = c; } 
                            else if(document.getElementById('q132').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 13, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="three_four" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_three_four" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q34" class="form-control form-control-sm" name="ans_q34" value="NA">
                      <h5><b>34.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q34" value="<?php echo $row['choice_one']; ?>" id="q133" onclick="threefour();"> 
                      <label style="font-weight: normal;" for="q133"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q34" value="<?php echo $row['choice_two']; ?>" id="q134" onclick="threefour();"> 
                      <label style="font-weight: normal;" for="q134"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q34" value="<?php echo $row['choice_three']; ?>" id="q135" onclick="threefour();"> 
                      <label style="font-weight: normal;" for="q135"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q34" value="<?php echo $row['choice_four']; ?>" id="q136" onclick="threefour();"> 
                      <label style="font-weight: normal;" for="q136"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function threefour() {
                            var a = document.getElementById("q133").value;
                            var b = document.getElementById("q134").value;
                            var c = document.getElementById("q135").value;
                            var d = document.getElementById("q136").value;
                            var x = document.getElementById("ans_q34");

                                 if(document.getElementById('q133').checked) { x.value = a; }
                            else if(document.getElementById('q134').checked) { x.value = b; } 
                            else if(document.getElementById('q135').checked) { x.value = c; } 
                            else if(document.getElementById('q136').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 14, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="three_five" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_three_five" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q35" class="form-control form-control-sm" name="ans_q35" value="NA">
                      <h5><b>35.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q35" value="<?php echo $row['choice_one']; ?>" id="q137" onclick="threefive();"> 
                      <label style="font-weight: normal;" for="q137"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q35" value="<?php echo $row['choice_two']; ?>" id="q138" onclick="threefive();"> 
                      <label style="font-weight: normal;" for="q138"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q35" value="<?php echo $row['choice_three']; ?>" id="q139" onclick="threefive();"> 
                      <label style="font-weight: normal;" for="q139"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q35" value="<?php echo $row['choice_four']; ?>" id="q140" onclick="threefive();"> 
                      <label style="font-weight: normal;" for="q140"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function threefive() {
                            var a = document.getElementById("q137").value;
                            var b = document.getElementById("q138").value;
                            var c = document.getElementById("q139").value;
                            var d = document.getElementById("q140").value;
                            var x = document.getElementById("ans_q35");

                                 if(document.getElementById('q137').checked) { x.value = a; }
                            else if(document.getElementById('q138').checked) { x.value = b; } 
                            else if(document.getElementById('q139').checked) { x.value = c; } 
                            else if(document.getElementById('q140').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 15, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="three_six" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_three_six" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q36" class="form-control form-control-sm" name="ans_q36" value="NA">
                      <h5><b>36.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q36" value="<?php echo $row['choice_one']; ?>" id="q141" onclick="threesix();"> 
                      <label style="font-weight: normal;" for="q141"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q36" value="<?php echo $row['choice_two']; ?>" id="q142" onclick="threesix();"> 
                      <label style="font-weight: normal;" for="q142"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q36" value="<?php echo $row['choice_three']; ?>" id="q143" onclick="threesix();"> 
                      <label style="font-weight: normal;" for="q143"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q36" value="<?php echo $row['choice_four']; ?>" id="q144" onclick="threesix();"> 
                      <label style="font-weight: normal;" for="q144"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function threesix() {
                            var a = document.getElementById("q141").value;
                            var b = document.getElementById("q142").value;
                            var c = document.getElementById("q143").value;
                            var d = document.getElementById("q144").value;
                            var x = document.getElementById("ans_q36");

                                 if(document.getElementById('q141').checked) { x.value = a; }
                            else if(document.getElementById('q142').checked) { x.value = b; } 
                            else if(document.getElementById('q143').checked) { x.value = c; } 
                            else if(document.getElementById('q144').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 16, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="three_seven" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_three_seven" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q37" class="form-control form-control-sm" name="ans_q37" value="NA">
                      <h5><b>37.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q37" value="<?php echo $row['choice_one']; ?>" id="q145" onclick="threeseven();"> 
                      <label style="font-weight: normal;" for="q145"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q37" value="<?php echo $row['choice_two']; ?>" id="q146" onclick="threeseven();"> 
                      <label style="font-weight: normal;" for="q146"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q37" value="<?php echo $row['choice_three']; ?>" id="q147" onclick="threeseven();"> 
                      <label style="font-weight: normal;" for="q147"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q37" value="<?php echo $row['choice_four']; ?>" id="q148" onclick="threeseven();"> 
                      <label style="font-weight: normal;" for="q148"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function threeseven() {
                            var a = document.getElementById("q145").value;
                            var b = document.getElementById("q146").value;
                            var c = document.getElementById("q147").value;
                            var d = document.getElementById("q148").value;
                            var x = document.getElementById("ans_q37");

                                 if(document.getElementById('q145').checked) { x.value = a; }
                            else if(document.getElementById('q146').checked) { x.value = b; } 
                            else if(document.getElementById('q147').checked) { x.value = c; } 
                            else if(document.getElementById('q148').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 17, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="three_eight" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_three_eight" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q38" class="form-control form-control-sm" name="ans_q38" value="NA">
                      <h5><b>38.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q38" value="<?php echo $row['choice_one']; ?>" id="q149" onclick="threeeight();"> 
                      <label style="font-weight: normal;" for="q149"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q38" value="<?php echo $row['choice_two']; ?>" id="q150" onclick="threeeight();"> 
                      <label style="font-weight: normal;" for="q150"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q38" value="<?php echo $row['choice_three']; ?>" id="q151" onclick="threeeight();"> 
                      <label style="font-weight: normal;" for="q151"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q38" value="<?php echo $row['choice_four']; ?>" id="q152" onclick="threeeight();"> 
                      <label style="font-weight: normal;" for="q152"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function threeeight() {
                            var a = document.getElementById("q149").value;
                            var b = document.getElementById("q150").value;
                            var c = document.getElementById("q151").value;
                            var d = document.getElementById("q152").value;
                            var x = document.getElementById("ans_q38");

                                 if(document.getElementById('q149').checked) { x.value = a; }
                            else if(document.getElementById('q150').checked) { x.value = b; } 
                            else if(document.getElementById('q151').checked) { x.value = c; } 
                            else if(document.getElementById('q152').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 18, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="three_nine" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_three_nine" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q39" class="form-control form-control-sm" name="ans_q39" value="NA">
                      <h5><b>39.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q39" value="<?php echo $row['choice_one']; ?>" id="q153" onclick="threenine();"> 
                      <label style="font-weight: normal;" for="q153"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q39" value="<?php echo $row['choice_two']; ?>" id="q154" onclick="threenine();"> 
                      <label style="font-weight: normal;" for="q154"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q39" value="<?php echo $row['choice_three']; ?>" id="q155" onclick="threenine();"> 
                      <label style="font-weight: normal;" for="q155"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q39" value="<?php echo $row['choice_four']; ?>" id="q156" onclick="threenine();"> 
                      <label style="font-weight: normal;" for="q156"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function threenine() {
                            var a = document.getElementById("q153").value;
                            var b = document.getElementById("q154").value;
                            var c = document.getElementById("q155").value;
                            var d = document.getElementById("q156").value;
                            var x = document.getElementById("ans_q39");

                                 if(document.getElementById('q153').checked) { x.value = a; }
                            else if(document.getElementById('q154').checked) { x.value = b; } 
                            else if(document.getElementById('q155').checked) { x.value = c; } 
                            else if(document.getElementById('q156').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 19, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="fourty" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_fourty" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q40" class="form-control form-control-sm" name="ans_q40" value="NA">
                      <h5><b>40.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q40" value="<?php echo $row['choice_one']; ?>" id="q157" onclick="fourzero();"> 
                      <label style="font-weight: normal;" for="q157"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q40" value="<?php echo $row['choice_two']; ?>" id="q158" onclick="fourzero();"> 
                      <label style="font-weight: normal;" for="q158"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q40" value="<?php echo $row['choice_three']; ?>" id="q159" onclick="fourzero();"> 
                      <label style="font-weight: normal;" for="q159"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q40" value="<?php echo $row['choice_four']; ?>" id="q160" onclick="fourzero();"> 
                      <label style="font-weight: normal;" for="q160"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function fourzero() {
                            var a = document.getElementById("q157").value;
                            var b = document.getElementById("q158").value;
                            var c = document.getElementById("q159").value;
                            var d = document.getElementById("q160").value;
                            var x = document.getElementById("ans_q40");

                                 if(document.getElementById('q157').checked) { x.value = a; }
                            else if(document.getElementById('q158').checked) { x.value = b; } 
                            else if(document.getElementById('q159').checked) { x.value = c; } 
                            else if(document.getElementById('q160').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                    </div>

                  