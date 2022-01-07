<div class="modal fade" id="edit-gallery<?php echo $gal->id;?>" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Create New category</h4>
            </div>
            <div class="modal-body"> 
                <form method="post">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">                                    
                                <input type="text" class="form-control" name="title" placeholder="Enter gallery title" value="<?php echo $gal->title; ?>" />
                                <input type="hidden" name="edit_id" value="<?php echo $gal->id;?>"/>
                            </div>
                            <div class="form-group">                              
                                <button type="submit" name="update-gallery" class="btn btn-primary"> Submit </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default btn-round waves-effect">SAVE CHANGES</button> -->
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
<!-- ?edt=<?php //echo $gal->id; ?> -->
<!-- value="#edit-gallery<?php //echo $gal->id;?>" -->