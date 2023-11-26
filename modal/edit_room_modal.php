


<div class="modal fade" id="editRoomModal_<?php echo $schoolYearRoomDetails[$key]['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editInfoModalLabel" aria-hidden="true">
<form method="POST" action="home.php?view=direction&action=updateDirectionForRoom">
   <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editInfoModalLabel">EDIT INFORMATION ROOM : <?php echo $schoolYearRoomDetails[$key]['room']; ?> | <?php echo $schoolYearRoomDetails[$key]['building']; ?></h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="border:none;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                                      <div class="form-floating mb-3">
                                            <select name="mid" class="form-control"  id="statusSelect">
                                                <option value="1">BUILDING 1</option>
                                                <option value="2">BUILDING 2</option>
                                                <option value="3">BUILDING 3</option>
                                                <option value="4">BUILDING 4</option>
                                                <option value="5">BUILDING 5</option>
                                                <option value="6">BUILDING 6</option>
                                                <option value="7">BUILDING 7</option>
                                                <option value="8">BUILDING 8</option>
                                                <option value="9">BUILDING 9</option>
                                            </select>
                                            <label for="floatingPassword">MID</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                           <input type="hidden" class="form-control" name="id" value="<?php echo $schoolYearRoomDetails[$key]['id']; ?>" readonly=""/>
                                             <input type="text" class="form-control" name="building" value="<?php echo $schoolYearRoomDetails[$key]['building']; ?>" />
                                            <label for="floatingPassword">BUILDING</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                             <input type="text" class="form-control" name="room"  value="<?php echo $schoolYearRoomDetails[$key]['room']; ?>"/>
                                            <label for="floatingPassword">ROOM</label>
                                        </div>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="update" class="btn btn-primary" value="Update" />
            </div>
        </div>
    </div>
</form>
</div>