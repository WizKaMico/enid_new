           <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">STUDENT ACCOUNT</h6>
                            <hr />
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
                        </div>
                    </div>
                </div>
            </div>
