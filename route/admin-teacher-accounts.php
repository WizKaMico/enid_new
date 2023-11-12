           <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-8">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">TEACHER ACCOUNTS</h6>
                            <hr />
                                     <table id="myTeacherTable" class="table table-striped" style="text-align:center;">
                                                  <thead>
                                                      <tr>
                                                        <th scope="col">UID</th>
                                                        <th scope="col">EMAIL</th>
                                                        <th scope="col">FIRSTNAME</th>
                                                        <th scope="col">MIDDLENAME</th>
                                                        <th scope="col">LASTNAME</th>
                                                        <th scope="col">ADDRESS</th>
                                                      </tr>
                                                   </thead>
                                                 <tbody>
                                                <?php 
                                                $teacherInfo = $portCont->allAccountTeacher();
                                                if (!empty($teacherInfo)) {
                                                    foreach ($teacherInfo as $key => $value) { 
                                                ?>
                                                <tr>
                                                    <td><?php echo $teacherInfo[$key]['uid']; ?></td>
                                                    <td><?php echo $teacherInfo[$key]['email']; ?></td>
                                                    <td><?php echo $teacherInfo[$key]['fname']; ?></td>
                                                    <td><?php echo $teacherInfo[$key]['mname']; ?></td>
                                                    <td><?php echo $teacherInfo[$key]['lname']; ?></td>
                                                    <td><?php echo $teacherInfo[$key]['street']; ?> <?php echo $teacherInfo[$key]['region_text']; ?> <?php echo $teacherInfo[$key]['province_text']; ?> <?php echo $teacherInfo[$key]['city_text']; ?> <?php echo $teacherInfo[$key]['barangay_text']; ?></td>
                                                </tr>

                                            <?php } } ?>
                                         </tbody>
                                     </table>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-4">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">CREATE TEACHER ACCOUNTS</h6>
                            <form action="home.php?view=teacher-accounts&action=createAccountTeacher" method="POST"> 
                                        <div class="form-floating mb-3">
                                            <select class="form-control" name="sycode" id="floatingInput">
                                                    <?php 
                                                        $schoolYearActivated = $portCont->getYearActivated();
                                                        if (!empty($schoolYearActivated)) {
                                                            foreach ($schoolYearActivated as $key => $value) {     
                                                    ?>  
                                                     <option value="<?php echo $schoolYearActivated[$key]['sycode']; ?>"><?php echo $schoolYearActivated[$key]['year_from']; ?> - <?php echo $schoolYearActivated[$key]['year_to']; ?> (<?php echo $schoolYearActivated[$key]['sycode']; ?>)</option>       
                                                    <?php } } ?>
                                            </select>
                                            <label for="floatingInput">SYCODE</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="uid" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">EmployeeId</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="email" name="email" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="fname" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Firstname</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="mname" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Middlename</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="lname" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Lastname</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="street" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Street</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select name="region" class="form-control"  id="region"></select>
                                            <input type="hidden" class="form-control" name="region_text" id="region-text" required>
                                            <label for="floatingInput">Region</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select name="province" class="form-control"  id="province"></select>
                                            <input type="hidden" class="form-control" name="province_text" id="province-text" required>
                                            <label for="floatingInput">Province</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select name="city" class="form-control"  id="city"></select>
                                            <input type="hidden"  class="form-control" name="city_text" id="city-text" required>
                                            <label for="floatingInput">City</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select name="barangay" class="form-control"  id="barangay"></select>
                                            <input type="hidden"  class="form-control" name="barangay_text" id="barangay-text" required>
                                            <label for="floatingInput">Barangay</label>
                                        </div>
                                    

                                        <button type="submit" name="add" style="width:100%;" class="btn btn-primary">ENROLL</button>
                                   </form>        
                        </div>
                    </div>
                </div>
            </div>
