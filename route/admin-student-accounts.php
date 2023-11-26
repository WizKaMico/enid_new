           <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">STUDENT ACCOUNT</h6>
                           
                                <form action="home.php?view=student-accounts&action=UniqueGradeSectionSearch" method="POST" >
                                    <div class="form-floating mb-3"> 
                                        <select class="form-control" name="gid" id="floatingInput">
                                            <?php if(empty($_GET['gid'])) { ?>
                                            <?php 
                                                $schoolYearOptionGradeS = $portCont->getSchoolYearDetailsGradeSpecificEdit();
                                                if (!empty($schoolYearOptionGradeS)) {
                                                    foreach ($schoolYearOptionGradeS as $key => $value) {     
                                            ?>  
                                            <option value="<?php echo $schoolYearOptionGradeS[$key]['gid']; ?>"><?php echo $schoolYearOptionGradeS[$key]['grade']; ?></option>       
                                            <?php } } ?>
                                            <?php }else{ ?>
                                            <?php 
                                                $gid = $_GET['gid'];
                                                $schoolYearOptionGradeS1 = $portCont->getSchoolYearDetailsGradeSpecificEditWithGid($gid);
                                                if (!empty($schoolYearOptionGradeS1)) {
                                                    foreach ($schoolYearOptionGradeS1 as $key => $value) {     
                                            ?>  
                                            <option value="<?php echo $schoolYearOptionGradeS1[$key]['gid']; ?>"><?php echo $schoolYearOptionGradeS1[$key]['grade']; ?></option>       
                                            <?php } } ?>
                                            <?php } ?>
                                        </select>
                                        <label for="floatingInput">GRADE</label>
                                    </div>
                                    <button type="submit" name="generate" style="width:100%;" class="btn btn-primary">APPLY</button>
                                    <hr />
                                 </form>
                                 <form action="home.php?view=student-accounts&action=GradeSectionSearch" method="POST">
                                   <?php if(!empty($_GET['gid'])){ ?>
                                   <div class="form-floating mb-3">
                                               <input type="hidden" name="gid" value="<?php echo $_GET['gid']; ?>" />
                                                <select class="form-control" name="sid" id="floatingInput">
                                                    <?php 
                                                            $selectedGrade = $_GET['gid'];
                                                            $schoolYearOptionSection = $portCont->getSchoolYearDetailsSectionDistincForSearchNew($selectedGrade);
                                                            if (!empty($schoolYearOptionSection)) {
                                                                foreach ($schoolYearOptionSection as $key => $value) {     
                                                        ?>  
                                                        <option value="<?php echo $schoolYearOptionSection[$key]['sid']; ?>"><?php echo $schoolYearOptionSection[$key]['section_name']; ?> - <?php echo $schoolYearOptionSection[$key]['grade']; ?></option>       
                                                    <?php } }  ?>
                                                </select>
                                                <label for="floatingInput">SECTION</label>
                                    </div>
                                    <?php } ?>
                                    <button type="submit" name="search" style="width:100%;" class="btn btn-primary">SEARCH</button>
                                    <hr />
                                    <button type="submit" name="clear" style="width:100%;" class="btn btn-primary">CLEAR</button>
                            </form>
                            <hr />
                                <?php if(!empty($_GET['gid']) && !empty($_GET['sid'])){ ?>
                                    <table id="myStudentTable" class="table table-striped" style="text-align:center;">
                                                  <thead>
                                                      <tr>
                                                        <th scope="col">QR CODE</th>
                                                        <th scope="col">UID</th>
                                                        <th scope="col">EMAIL</th>
                                                        <th scope="col">FULLNAME</th>
                                                        <th scope="col">ADDRESS</th>
                                                        <th scope="col">SECTION</th>
                                                        <th scope="col">GRADE</th>
                                                      </tr>
                                                   </thead>
                                                 <tbody>
                                                <?php 
                                                $gid = $_GET['gid']; 
                                                $sid = $_GET['sid'];
                                                $studentInfo = $portCont->allAccountStudentFilteredSearch($gid, $sid);
                                                if (!empty($studentInfo)) {
                                                    foreach ($studentInfo as $key => $value) {
                                                        $uid = $studentInfo[$key]['uid'];
                                                        $qrtobegenerated = 'https://chart.googleapis.com/chart?chs=50x50&cht=qr&chl=' . urlencode($uid); 
                                                ?>
                                                <tr>
                                                    <td><img src='<?php echo $qrtobegenerated; ?>' alt='QR Code'></td>
                                                    <td><?php echo $studentInfo[$key]['uid']; ?></td>
                                                    <td><?php echo $studentInfo[$key]['email']; ?></td>
                                                    <td><?php echo $studentInfo[$key]['fname']; ?></td>
                                                    <td><?php echo $studentInfo[$key]['address']; ?></td>
                                                    <td><?php echo $studentInfo[$key]['section_name']; ?></td>
                                                    <td><?php echo $studentInfo[$key]['grade']; ?></td>
                                                </tr>

                                            <?php } } ?>
                                         </tbody>
                                     </table>

                                <?php } else { ?>
                                     <table id="myStudentTable" class="table table-striped" style="text-align:center;">
                                                  <thead>
                                                      <tr>
                                                        <th scope="col">QR CODE</th>
                                                        <th scope="col">UID</th>
                                                        <th scope="col">EMAIL</th>
                                                        <th scope="col">FULLNAME</th>
                                                        <th scope="col">ADDRESS</th>
                                                        <th scope="col">SECTION</th>
                                                        <th scope="col">GRADE</th>
                                                      </tr>
                                                   </thead>
                                                 <tbody>
                                                <?php 
                                                $studentInfo = $portCont->allAccountStudent();
                                                if (!empty($studentInfo)) {
                                                    foreach ($studentInfo as $key => $value) {
                                                        $uid = $studentInfo[$key]['uid'];
                                                        $qrtobegenerated = 'https://chart.googleapis.com/chart?chs=50x50&cht=qr&chl=' . urlencode($uid); 
                                                ?>
                                                <tr>
                                                    <td><img src='<?php echo $qrtobegenerated; ?>' alt='QR Code'></td>
                                                    <td><?php echo $studentInfo[$key]['uid']; ?></td>
                                                    <td><?php echo $studentInfo[$key]['email']; ?></td>
                                                    <td><?php echo $studentInfo[$key]['fname']; ?></td>
                                                    <td><?php echo $studentInfo[$key]['address']; ?></td>
                                                    <td><?php echo $studentInfo[$key]['section_name']; ?></td>
                                                    <td><?php echo $studentInfo[$key]['grade']; ?></td>
                                                </tr>

                                            <?php } } ?>
                                         </tbody>
                                     </table>
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
