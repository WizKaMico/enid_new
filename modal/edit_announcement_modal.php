
<div class="modal fade" id="editInfoAnnouncementModal_<?php echo $schoolAnnouncement[$key]['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editInfoModalLabel" aria-hidden="true">
<form method="POST" action="home.php?view=announcement&action=updateAnnouncement" enctype="multipart/form-data">
   <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editInfoModalLabel">EDIT ANNOUNCEMENT INFORMATION </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="border:none;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">

                                        <div class="form-floating mb-3">
                                            <input type="hidden" name="id" class="form-control" id="floatingPassword" value="<?php echo $schoolAnnouncement[$key]['id']; ?>">
                                            <input type="text" name="title" value="<?php echo $schoolAnnouncement[$key]['title']; ?>" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Title</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="description" class="form-control" value="<?php echo $schoolAnnouncement[$key]['description']; ?>" id="floatingPassword">
                                            <label for="floatingPassword">Description</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="date" name="start" class="form-control" id="floatingPassword" required="">
                                            <label for="floatingPassword">Start</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="date" name="end" class="form-control" id="floatingPassword" required="">
                                            <label for="floatingPassword">End</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="file" name="photo" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Image</label>
                                        </div>
                                        <button type="submit" name="update" style="width:100%;" class="btn btn-primary">SAVE</button>


                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
        </div>
    </div>
 </form>
</div>
