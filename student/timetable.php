<?php include 'head.php'; ?>
<?php 

$q = dbConnect()->prepare("SELECT * FROM student WHERE email=?");
$q->execute([$email]);
    if($q->rowcount() < 1){
        echo 'No record in the database';
    }else{
        $i = 0;
       while($prf = $q->fetch()){
           $i++;
           $excode = $prf['examcode'];
           $exdate = $prf['examdate'];
           $scode = $prf['studentcode'];
           $cen =$prf['center'];
        //    $brc = $user->branch;
       }
    }
    
    $q = dbConnect()->prepare("SELECT count(email) AS no, status, passport FROM student WHERE email=?");
            $q->execute([$email]);
            $rf = $q->fetch();
            $sts = $rf['status'];
            $no = $rf['no'];
             $pt = $rf['passport'];
            if($no == 1 && !isset($_GET['code'])){
        ?>

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Examination Timetable</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="student"><i class="zmdi zmdi-home"></i> Return Home</a></li>
                        
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12"> 
                    <a href="" class="btn btn-info" id="print" onclick="printContent('dvContents');"><i class="zmdi zmdi-print"></i></a>
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="dvContents">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <h5><strong><img src='assets/images/logo.png' alt='Tricol'> </strong> </h5>
                            <div class="row">                                
                                <div class="col-md-6 col-sm-6">
                                    <address>
                                        <strong>Trinity International College</strong><br>
                                        Ofada, Ogun State<br>
                                        <abbr title="Phone">P:</abbr>  +234 706 8666 097 <br>
                                        <abbr title="Phone">P:</abbr>  +234 706 8666 145
                                    </address>
                                </div>
                                <div class="col-md-6 col-sm-6 text-right">
                                    <div class="badge align-content-center">

                                                <?php 
                                                if($pt !=''){
                                                    echo " <img src='../upload/$pt' width='70' height='70'>";
                                                    }else{

                                                    }
                                                
                                                    ?>
                                            </div>
                                    <p class="mb-0"><strong>Name: </strong> <?php echo $name ?></p>
                                    <p class="mb-0"><strong>Phone: </strong> <span class=""><?php echo $phn ?></span></p>   
                                    <p class="mb-0"><strong>Exam Code: </strong> <span class=""><?php echo $scode ?></span></p> 
                                </div>
                            </div>
                        </div>                            
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-hover c_table theme-blue">
                                        <thead>
                                            <tr>
                                                <th width="60%">Examination Date</th>
                                                <th class="hidden-sm-down" bgcolor="cyan">Saturday, March 20th, 2021</th>
                                            </tr>
                                        </thead>
                                </table>
                                
                                <div class="table-responsive">
                                    <table class="table table-hover c_table theme-color">
                                        <thead>
                                            <tr>
                                                <th width="60%">Examination Center</th>
                                                <th class="hidden-sm-down">Phone Numbers</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $e = dbConnect()->prepare("SELECT * FROM center");
                                            $e->execute();
                                            while($row = $e->fetch()){
                                            ?>
                                            <tr>
                                                <td><?php echo $row['center'].' Center' ?></td>
                                                <td class="hidden-sm-down">
                                                        <?php echo $row['name'].'<br>'.$row['phone']; ?>
                                                </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Note</h5>
                                    <p>
                                       * Please come to the examination center with a valid means of identification.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-right"> 
            <a id="print" onclick="printContent('dvContents');" class="btn btn-info"><i class="zmdi zmdi-print text-white"></i></a>
        </div>
    </div>
</section>
<?php
            }else{
                if(!isset($_GET['code'])){
                ?>
                
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Examination Timetable</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="student"><i class="zmdi zmdi-home"></i> Return Home</a></li>
                        
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12"> 
                    <a href="" class="btn btn-info" id="print" onclick="printContent('dvContents');"><i class="zmdi zmdi-print"></i></a>
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
                <div class="table-responsive">
                                      <!-- <table class="table table-hover c_table theme-color dataTable js-exportable">-->
                                        <table class="table table-hover c_table theme-color ">
                                            <strong>Please select a student</strong>
                                            <thead>
                                                <tr>                                       
                                                    <th> </th>
                                                    <th width="55%">Name</th>
                                                    <th width="20%">Student Code</th> 
                                                    <th width="10%"> Time Table</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i=0;
                                                    $dbx = dbConnect()->prepare("SELECT * FROM student WHERE email='$email'");
                                                    $dbx->execute();
                                                    while($rn = $dbx->fetch()){
                                                        $sta = $rn['status'];
                                                        $i++;
                                                        
                                                   ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td>
                                                        <a class="text-primary" href="home?code=<?php echo $rn['studentcode']?>"><?php echo $rn['fname'].' '.$rn['lname']; ?></a>
                                                    </td>
                                                    <td><?php echo $rn['studentcode']?></td>
                                                    
                                                    <td>
                                                        <a class="text-primary" href="?code=<?php echo $rn['studentcode']?>">View</a>
                                                    </td>
                                                </tr>
                                                    <?php } ?>
                                            </tbody>
                                        </table>
                                  </div>
    </div>
</section>
<?php
    }
            }
    if(isset($_GET['code'])){
        $icode = $_GET['code'];
        $q = dbConnect()->prepare("SELECT * FROM student WHERE studentcode=?");
    $q->execute([$icode]);
    if($q->rowcount() < 1){
        echo 'No record in the database';
    }else{
        $i = 0;
        $data = $q->fetch();
        $name = $data['fname'].' '.$data['lname'];
        $phn = $data['phone'];
        $scode = $data['studentcode'];
       while($prf = $q->fetch()){
           $i++;
           $excode = $prf['examcode'];
           $exdate = $prf['examdate'];
           $scode = $prf['studentcode'];
           $cen =$prf['center'];
           $pt =$prf['passport'];
        //    $brc = $user->branch;
       }
    }
        ?>
        <section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Examination Timetable</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="student"><i class="zmdi zmdi-home"></i> Return Home</a></li>
                        
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12"> 
                    <a href="" class="btn btn-info" id="print" onclick="printContent('dvContents');"><i class="zmdi zmdi-print"></i></a>
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="dvContents">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <h5><strong><img src='assets/images/logo.png' alt='Tricol'> </strong> </h5>
                            <div class="row">                                
                                <div class="col-md-6 col-sm-6">
                                    <address>
                                        <strong>Trinity International College</strong><br>
                                        Ofada, Ogun State<br>
                                        <abbr title="Phone">P:</abbr>  +234 706 8660 097 <br>
                                        <abbr title="Phone">P:</abbr>  +234 706 8666 145
                                    </address>
                                </div>
                                <div class="col-md-6 col-sm-6 text-right">
                                    <div class="badge align-content-center">

                                                <?php 
                                                if($pt !=''){
                                                    echo " <img src='../upload/$pt' width='70' height='70'>";
                                                    }else{

                                                    }
                                                
                                                    ?>
                                            </div>
                                    <p class="mb-0"><strong>Name: </strong> <?php echo $name ?></p>
                                    <p class="mb-0"><strong>Phone: </strong> <span class=""><?php echo $phn ?></span></p>   
                                    <p class="mb-0"><strong>Exam Code: </strong> <span class=""><?php echo $scode ?></span></p> 
                                </div>
                            </div>
                        </div>                            
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-hover c_table theme-blue">
                                        <thead>
                                            <tr>
                                                <th width="60%">Examination Date</th>
                                                <th class="hidden-sm-down" bgcolor="cyan">Saturday, March 20th, 2021</th>
                                            </tr>
                                        </thead>
                                </table>
                                
                                <div class="table-responsive">
                                    <table class="table table-hover c_table theme-color">
                                        <thead>
                                            <tr>
                                                <th width="60%">Examination Center</th>
                                                <th class="hidden-sm-down">Phone Numbers</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $e = dbConnect()->prepare("SELECT * FROM center");
                                            $e->execute();
                                            while($row = $e->fetch()){
                                            ?>
                                            <tr>
                                                <td><?php echo $row['center'].' Center' ?></td>
                                                <td class="hidden-sm-down">
                                                        <?php echo $row['name'].'<br>'.$row['phone']; ?>
                                                </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Note</h5>
                                    <p>
                                       * Please come to the examination center with a valid means of identification.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-right"> 
            <a id="print" onclick="printContent('dvContents');" class="btn btn-info"><i class="zmdi zmdi-print text-white"></i></a>
        </div>
    </div>
</section>
   <?php }
?>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/bundles/c3.bundle.js"></script>

<!-- Jquery DataTable Plugin Js --> 
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>

<script src="assets/js/pages/tables/jquery-datatable.js"></script>

<script src="assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js --> 
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> 

<script src="assets/js/pages/forms/basic-form-elements.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/index.js"></script>
</body>
</html>
<script>
        function printContent(el){
        var restorepage = $('body').html();
        var printcontent = $('#' + el).clone();
        $('body').empty().html(printcontent);
        window.print();
        $('body').html(restorepage);
        }
        </script>

