<!-- <div class="modal fade" id="#editCategory<?php echo $up->id;?>" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Update Category</h4>
            </div>
            #editCategory<?php echo $up->id;?>
            <div class="modal-body"> 
                <div class="card">
                                <form method="post" id="uploadFormCaption" enctype="multipart/form-data">
                                                <div class="row clearfix">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <input type="text" name="caption" class="form-control" placeholder="Enter image caption">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row clearfix">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <textarea rows="4" class="form-control no-resize" placeholder="Please type in your description ..." name="description"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>  
                                                        <div class="form-group">                  
                                                            <div class="card">
                                                                <div class="body">
                                                                    <p>upload image file (jpg, jpeg only)</p>
                                                                    <input type="file" class="dropify" data-allowed-file-extensions="jpg jpeg" name="imgDesc" id="imgDesc">
                                                                </div>
                                                            </div>
                                                        </div>
                                                            
                                                        <div class="form-group">  
                                                            <button type="submit" name="updateWithFull" class="btn btn-primary"> Update </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form> 
                </div>
            </div>
        </div>
    </div>
</div> -->


<div id="edit-category<?php echo $up->id;?>" class="modal fade"  tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Edit Category</h4>
            </div>
            <div class="modal-body"> 
    <form method="post" id="uploadFormCaption" enctype="multipart/form-data">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                        	<input type="hidden" name="updateCat_id" value="<?php echo $up->id;?>"/>
                        	<?php if($up->s_category ==2){?>
                            <div class="form-group">
                                <input type="text" name="imageTitle" class="form-control" value="<?php echo $up->title;?>">
                            </div>
                            <div class="form-group">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="4" class="form-control no-resize" placeholder="Please type in your description ..." name="description"><?php echo $up->description;?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                            <div class="form-group">                  
                                <div class="card">
                                    <div class="body">
                                        <p>upload image file (jpg, jpeg only)</p>
                                        <input type="file" class="dropify" data-allowed-file-extensions="jpg jpeg" name="imgDesc" id="imgDesc">
                                        <input type="hidden" value="<?php echo $up->image;?>" name="oldImg">
                                    </div>
                                </div>
                            </div>
                        	<?php }elseif($up->s_category ==1){?>
                            <div class="form-group">
                                <input type="text" name="caption" class="form-control" value="<?php echo $up->title;?>">
                            </div> 
                            <div class="form-group">                  
                                <div class="card">
                                    <div class="body">
                                        <p>upload image file (jpg, jpeg only)</p>
                                        <input type="file" class="dropify" data-allowed-file-extensions="jpg jpeg" name="imgDesc" id="imgDesc" value="<?php echo $up->image;?>">
                                        <input type="hidden" value="<?php echo $up->image;?>" name="oldImgCap">
                                    </div>
                                </div>
                            </div> 
                        <?php }else{?>
                            <div class="form-group">                  
                                <div class="card">
                                    <div class="body">
                                        <p>upload image file (jpg, jpeg only)</p>
                                        <input type="txt" name="catTyp" value="<?php echo $up->image?>">
                                        <input type="file" class="dropify" data-allowed-file-extensions="jpg jpeg" name="imgDesc" id="imgDesc" >
                                        <!-- <input type="txt" value="<?php echo $up->image;?>" name="oldImgOn"> -->
                                    </div>
                                </div>
                            </div>
                              <?php }?> 
                            <div class="form-group">  
                                <button type="submit" name="updateWithFull" class="btn btn-primary"> Update </button>
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