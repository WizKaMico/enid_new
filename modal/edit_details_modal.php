<div class="modal fade" id="editInfoModal_<?php echo $schoolYearInformation[$key]['sid']; ?>" tabindex="-1" role="dialog" aria-labelledby="editInfoModalLabel" aria-hidden="true">
<form method="POST" action="home.php?view=school_year_detail&action=school_year_information">
   <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editInfoModalLabel">EDIT INFORMATION </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="border:none;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <input type="hidden" class="form-control" name="sid" value="<?php echo $schoolYearInformation[$key]['sid']; ?>">
                    <input type="hidden" class="form-control" name="sycode" value="<?php echo $schoolYearInformation[$key]['sycode']; ?>">
                    <div class="row form-group">
                        

                        <div class="col-sm-2">
                            <label class="control-label modal-label">SEC:</label>
                        </div>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="section_name" value="<?php echo $schoolYearInformation[$key]['section_name']; ?>" />
                        </div>
                                
                        <div class="col-sm-2">
                            <label class="control-label modal-label">MIN:</label>
                        </div>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="min" value="<?php echo $schoolYearInformation[$key]['min']; ?>" />
                        </div>
                                    
                        <div class="col-sm-2">
                            <label class="control-label modal-label">MAX:</label>
                        </div>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="max" value="<?php echo $schoolYearInformation[$key]['max']; ?>" />
                        </div>
                                    
                        <div class="col-sm-2">
                            <label class="control-label modal-label">CAP:</label>
                        </div>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="student_max" value="<?php echo $schoolYearInformation[$key]['student_max']; ?>" />
                        </div>
                    
                      
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="update" class="btn btn-primary" value="Save" />
                </div>
        </div>
    </div>
 </form>
</div>
