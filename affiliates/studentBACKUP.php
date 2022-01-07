        <div class="row clearfix">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="card project_list">
                        <div class="table-responsive">
                            <table class="table table-hover c_table theme-color dataTable js-exportable">
                                <thead>
                                    <tr>                                       
                                        <th style="width:50px;"> </th>
                                        <th>Name</th>
                                        <th>Email</th>                                        
                                        <th class="hidden-md-down">Mobile</th>
<!--                                        <th class="hidden-md-down" width="150px">Department</th>
                                        <th>M/Status</th>
                                        <th>Dob</th>-->
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 

                                    $user = DB::getInstance()->query("SELECT * FROM student");
                                    if($user ->error()){
                                        echo 'No record in the database';
                                    }else{
                                        $i = 0;
                                       foreach($user->results() as $std){
                                           $i++;
                                           $name = $std->fname ." ". $std->lname;
                                        //    $brc = $user->branch;
                                        ?>
                                    <tr>
                                        <td>
                                            <?php echo $i; ?>
                                            <!--<img class="rounded avatar" src="affliates/assets/images/xs/avatar1.jpg" alt="">-->
                                        </td>
                                        <td> <?php echo $name; ?> </td>
                                        <td> <?php echo $std->email; ?> </td>      
                                        <td class="hidden-md-down">
                                            <?php echo $std->phone; ?>
                                        </td>
<!--                                        <td> <?php echo '--'; ?> </td> 
                                        <td class="hidden-md-down">
                                            <?php echo ' -- '; ?>
                                        </td>
                                        <td><span class="badge badge-info">
                                            <?php echo ' -- '; ?></span></td>-->
                                        <td><?php echo $std->created; ?></td>
                                        <td>
                                            <select onChange="window.location.href=this.value" class="form-control show-tick" >
                                                <option value="">-- Select --</option>
                                                <option value="?approve=<?php echo $afl['id']; ?>"> Approve</option>
                                                <option value="?decline=<?php echo $afl['id']; ?>"> Decline</option>
                                                <!--<option value="?delete=<?php echo $afl['id']; ?>"> Delete</option>-->
                                            </select>
                                        </td>
                                    </tr>
                                <?php }}?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>