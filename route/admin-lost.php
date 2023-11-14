<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">LOST & FOUND</h6>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-lost-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-lost" type="button" role="tab" aria-controls="pills-lost"
                                        aria-selected="true">LOST ITEM</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-archive-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-archive" type="button" role="tab"
                                        aria-controls="pills-archive" aria-selected="false">ARCHIVE</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-lost" role="tabpanel" aria-labelledby="pills-lost-tab">
                                    NOTE : This are all of the lost item
                                    <hr />
                                    
                                       <div class="row">
                                        <table id="myLost" class="table table-striped" style="text-align:center;">
                                            <thead>
                                                 <tr>
                                                    <th scope="col">ITEM</th>
                                                    <th scope="col">FOUND BY</th>
                                                    <th scope="col">FOUND IN</th>
                                                    <th scope="col">OTHER</th>
                                                    <th scope="col">DATE</th>
                                                    <th scope="col">IMAGE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $lostItem = $portCont->allLost();
                                                        if (!empty($lostItem)) {
                                                            foreach ($lostItem as $key => $value) {   
                                                            ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $lostItem[$key]['item']; ?></th>
                                                                <td><?php echo $lostItem[$key]['fname']; ?></td>
                                                                <td><?php echo $lostItem[$key]['room']; ?> - <?php echo $lostItem[$key]['building']; ?></td>
                                                                <td><?php echo $lostItem[$key]['another']; ?></td>
                                                                <td><?php echo $lostItem[$key]['date']; ?></td>
                                                                <td><img src="<?php echo $lostItem[$key]['image_path']; ?>" style="width:20%;"></td>
                                                               

                                                            </tr>
                                                            <?php } } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                </div>
                                <div class="tab-pane fade" id="pills-archive" role="tabpanel" aria-labelledby="pills-archive-tab">
                                    NOTE : This are all of the archive announcement
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">LOST & FOUND</h6>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-lostcreation-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-lostcreation" type="button" role="tab" aria-controls="pills-lostcreation"
                                        aria-selected="true">CREATE LOST & FOUND</button>
                                </li>
                                
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-lostcreation" role="tabpanel" aria-labelledby="pills-lostcreation-tab">
                                    NOTE : Create LOST & FOUND
                                    <form action="home.php?view=lost&action=addlost" enctype="multipart/form-data" method="POST">
                                       <div class="form-floating mb-3">
                                            <input type="text" name="item" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Item</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="form-control" name="uid" id="floatingInput">
                                                    <?php 
                                                        $allActiveStud = $portCont->getStudentEnrollForCurrentSchoolYear();
                                                        if (!empty($allActiveStud)) {
                                                            foreach ($allActiveStud as $key => $value) {     
                                                    ?>  
                                                     <option value="<?php echo $allActiveStud[$key]['uid']; ?>">(<?php echo $allActiveStud[$key]['uid']; ?>) - <?php echo $allActiveStud[$key]['fname']; ?></option>       
                                                    <?php } } ?>
                                            </select>
                                            <label for="floatingInput">Foundby</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                                <select class="form-control" name="rid" id="floatingInput">
                                                    <?php 
                                                            $schoolYearOptionRoom = $portCont->getSchoolYearDetailsRoom();
                                                            if (!empty($schoolYearOptionRoom)) {
                                                                foreach ($schoolYearOptionRoom as $key => $value) {     
                                                        ?>  
                                                        <option value="<?php echo $schoolYearOptionRoom[$key]['id']; ?>"><?php echo $schoolYearOptionRoom[$key]['building']; ?> | <?php echo $schoolYearOptionRoom[$key]['room']; ?></option>       
                                                    <?php } } ?>
                                                </select>
                                                <label for="floatingInput">Foundin</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="file" name="photo" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Image</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" name="another" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">note</label>
                                        </div>
                                        <button type="submit" name="add" style="width:100%;" class="btn btn-primary">SAVE</button>
                                    </form>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
