

<div class="modal fade" id="editInfoRoomModal_<?php echo $schoolYearInformation[$key]['sid']; ?>" tabindex="-1" role="dialog" aria-labelledby="editInfoModalLabel" aria-hidden="true">
<form method="POST" action="home.php?view=school_year_detail&action=school_year_information">
   <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editInfoModalLabel">EDIT INFORMATION ROOM</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="border:none;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    
                
                                                                
                      
                 
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="update" class="btn btn-primary" value="Save" />
                </div>
        </div>
    </div>
 </form>
</div>