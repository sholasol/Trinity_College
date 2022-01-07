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
           //$imgUser =$prf['image'];
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
                                        <abbr title="Phone">P:</abbr>  +234 706 8660 097 
                                    </address>
                                </div>
                                <div class="col-md-6 col-sm-6 text-right">
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
                        <div class="body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Note</h5>
                                    <p>
                                       * Please come to the examination center with a valid mean of identification.
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

