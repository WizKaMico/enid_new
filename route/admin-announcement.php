            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">ANNOUNCEMENT</h6>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-announcement-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-announcement" type="button" role="tab" aria-controls="pills-announcement"
                                        aria-selected="true">ANNOUNCEMENT</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-archive-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-archive" type="button" role="tab"
                                        aria-controls="pills-archive" aria-selected="false">ARCHIVE</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-announcement" role="tabpanel" aria-labelledby="pills-announcement-tab">
                                    NOTE : This are all of the announcement
                                    <hr />
                                    <div class="row">
                                        <table id="myAnnouncementTable" class="table table-striped" style="text-align:center;">
                                            <thead>
                                                 <tr>
                                                    <th scope="col">TITLE</th>
                                                    <th scope="col">DETAILS</th>
                                                    <th scope="col">START DATE</th>
                                                    <th scope="col">END DATE</th>
                                                    <th scope="col">IMAGE</th>
                                                    <th scope="col">ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $schoolAnnouncement = $portCont->allAnnoucement();
                                                        if (!empty($schoolAnnouncement)) {
                                                            foreach ($schoolAnnouncement as $key => $value) {   
                                                            ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $schoolAnnouncement[$key]['title']; ?></th>
                                                                <td><?php echo $schoolAnnouncement[$key]['description']; ?></td>
                                                                <td><?php echo $schoolAnnouncement[$key]['start']; ?></td>
                                                                <td><?php echo $schoolAnnouncement[$key]['end']; ?></td>
                                                                <td><img src="<?php echo $schoolAnnouncement[$key]['image_path']; ?>" style="width:20%;"></td>
                                                                <td>
                                                                <a href='#editInfoAnnouncementModal_<?php echo $schoolAnnouncement[$key]['id']; ?>' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#editInfoAnnouncementModal_<?php echo  $schoolAnnouncement[$key]['id']; ?>'>Edit</a>
                                                                </td>

                                                            </tr>
                                                            <?php include('modal/edit_announcement_modal.php'); ?>  
                                                            <?php } } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                </div>
                                <div class="tab-pane fade" id="pills-archive" role="tabpanel" aria-labelledby="pills-archive-tab">
                                    NOTE : This are all of the archive announcement
                                    <hr />
                                    <div class="row">
                                        <table id="myInactiveAnnouncementTable" class="table table-striped" style="text-align:center;">
                                            <thead>
                                                 <tr>
                                                    <th scope="col">TITLE</th>
                                                    <th scope="col">DETAILS</th>
                                                    <th scope="col">START DATE</th>
                                                    <th scope="col">END DATE</th>
                                                    <th scope="col">IMAGE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $schoolAnnouncement = $portCont->allInActiveAnnoucement();
                                                        if (!empty($schoolAnnouncement)) {
                                                            foreach ($schoolAnnouncement as $key => $value) {   
                                                            ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $schoolAnnouncement[$key]['title']; ?></th>
                                                                <td><?php echo $schoolAnnouncement[$key]['description']; ?></td>
                                                                <td><?php echo $schoolAnnouncement[$key]['start']; ?></td>
                                                                <td><?php echo $schoolAnnouncement[$key]['end']; ?></td>
                                                                <td><img src="<?php echo $schoolAnnouncement[$key]['image_path']; ?>" style="width:20%;"></td>
                                                               

                                                            </tr>
                                                            <?php } } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">ANNOUNCEMENT</h6>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-createannouncement-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-createannouncement" type="button" role="tab" aria-controls="pills-createannouncement"
                                        aria-selected="true">CREATE ANNOUNCEMENT</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-calendar-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-calendar" type="button" role="tab"
                                        aria-controls="pills-calendar" aria-selected="false">ANNOUNCEMENT CALENDAR</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-createannouncementview-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-createannouncementview" type="button" role="tab"
                                        aria-controls="pills-createannouncementview" aria-selected="false">ANNOUNCEMENT VIEW</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-createannouncement" role="tabpanel" aria-labelledby="pills-createannouncement-tab">
                                    NOTE : Create Announcement
                                    <form action="home.php?view=announcement&action=addannouncement" enctype="multipart/form-data" method="POST">
                                       <div class="form-floating mb-3">
                                            <input type="text" name="title" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Title</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="description" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Description</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="date" name="start" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Start</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="date" name="end" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">End</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="file" name="photo" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Image</label>
                                        </div>
                                        <button type="submit" name="add" style="width:100%;" class="btn btn-primary">SAVE</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-calendar" role="tabpanel" aria-labelledby="pills-calendar-tab">
                                    NOTE : Calendar View
                                    <hr />
                                    <iframe src="frame/" style="width:100%; height:400px;" scrolling="no"></iframe>
                                </div>
                                <div class="tab-pane fade" id="pills-createannouncementview" role="tabpanel" aria-labelledby="pills-createannouncementview-tab">
                                    NOTE : Announcement View
                                    <hr />
                                    <div class="owl-carousel testimonial-carousel">
                                         <?php 
                                            $allAnnouncement = $portCont->allAnnoucement();
                                                if (!empty($allAnnouncement)) {
                                                    foreach ($allAnnouncement as $key => $value) {     
                                         ?>  
                                        <div class="testimonial-item text-center">
                                            <img class="img-fluid mx-auto mb-4" src="<?php echo $allAnnouncement[$key]['image_path']; ?>" style="width: 100%; height: 500px;">
                                            <h5 class="mb-1"><?php echo $allAnnouncement[$key]['title']; ?></h5>
                                            <p><?php echo $allAnnouncement[$key]['description']; ?></p>
                                        </div>
                                        <?php } } ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
