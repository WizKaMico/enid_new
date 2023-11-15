
<div class="modal fade" id="editGradeModal_<?php echo $schoolYearGrade[$key]['gid']; ?>" tabindex="-1" role="dialog" aria-labelledby="editInfoModalLabel" aria-hidden="true">
<form method="POST" action="home.php?view=school_year_detail&action=updateGrade" enctype="multipart/form-data">
   <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editInfoModalLabel">EDIT GRADE INFORMATION </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="border:none;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">

                                       <div class="form-floating mb-3">
                                            <input type="hidden" name="sycode" value="<?php echo $_GET['sycode']; ?>" class="form-control">
                                            <input type="hidden" name="gid" value="<?php echo $schoolYearGrade[$key]['gid']; ?>" class="form-control">
                                            <input type="text" name="grade" class="form-control" value="<?php echo $schoolYearGrade[$key]['grade']; ?>" id="floatingInput">
                                            <label for="floatingInput">GRADE</label>
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
