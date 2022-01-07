<?php 
include 'head.php'; 
if(isset($_GET['success'])){
    $ref= $_GET['success'];
}

$code   = $_SESSION['code'];
$amount = $_SESSION['amt'];
$term   =  $_SESSION['term'];
$fname  = $_SESSION['fname'] ;
$lname  = $_SESSION['lname'];
$mname  =$_SESSION['mname'] ;
$phone  = $_SESSION['phone'];
$eml    = $_SESSION['email'];
$dob    = $_SESSION['dob'];
$gender = $_SESSION['gender'];
$origin = $_SESSION['origin'];
$natl   = $_SESSION['natl'];
$lga    = $_SESSION['lga'];
$sch    = $_SESSION['sch'];
$preclass = $_SESSION['preclass'];
$enrolclass = $_SESSION['enrolclass'];
$mode = $_SESSION['payment'];
$center = $_SESSION['center'];


//Father
$ffname    = $_SESSION['ffname'];
$faddress  = $_SESSION['faddress'];
$fphone    = $_SESSION['fphone'];
$femail    = $_SESSION['femail'];
$foadd     = $_SESSION['foaddress'];
$foccu     = $_SESSION['foccu'];

//Mother
$mfname    = $_SESSION['mfname'];
$maddress  = $_SESSION['maddress'];
$mphone    = $_SESSION['mphone'];
$memail    = $_SESSION['memail'];
$moadd     = $_SESSION['moaddress'];
$moccu     = $_SESSION['moccu'];

//Guardian
$gfname    = $_SESSION['gfname'];
$gaddress  = $_SESSION['gaddress'];
$gphone    = $_SESSION['gphone'];
$gemail    = $_SESSION['gemail'];
$goadd     = $_SESSION['goaddress'];
$goccu     = $_SESSION['goccu'];

$sts = "Paid";
$dt =date('Y-m-d');
$payfor = "Entrance Examination Fee";

//Referal Code
    function random_num($size) {
        $length = $size;
        $key = '';
        $keys = range(0, 5);

            for ($i = 0; $i < $length; $i++) {
                    $key .= $keys[array_rand($keys)];
            }
            return  $key;
    }
    $code= random_num(5);
    
    //Student Code
    $length = 7;    
    $std = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);


$upd = dbConnect()->prepare("UPDATE student SET studentCode=:std, mname=:mn, gender=:gnd, status=:sts, ffname=:ffn, femail=:feml,
 fphone=:fph, foaddr=:foadr, faddr=:faddr, foccu=:focc, mfname=:mfn, memail=:meml, mphone=:mph, 
 moaddr=:moaddr, maddr=:maddr, moccu=:mocc, gfname=:gfn, gphone=:gph, gemail=:geml, goaddr=:goaddr,
 gaddr=:gaddr, goccu=:gocc, preclass=:precls, classenrol=:cenrol, lga=:lga, 
nationality=:natl, preschool=:presch, dob=:dob, state=:state, examcode=:excode, studentcode=:scode, center=:cen  WHERE email=:eml
        ");
$upd->bindParam(':std', $std);
$upd->bindParam(':mn', $mname);
$upd->bindParam(':gnd', $gender);
$upd->bindParam(':sts', $sts);
$upd->bindParam(':ffn', $ffname);
$upd->bindParam(':feml', $femail);
$upd->bindParam(':fph', $fphone);
$upd->bindParam(':foadr', $foadd);
$upd->bindParam(':faddr', $faddress);
$upd->bindParam(':focc', $foccu);
$upd->bindParam(':mfn', $mfname);
$upd->bindParam(':meml', $memail);
$upd->bindParam(':mph', $mphone);
$upd->bindParam(':moaddr', $moadd);
$upd->bindParam(':maddr', $maddress);
$upd->bindParam(':mocc', $moccu);
$upd->bindParam(':gfn', $gfname);
$upd->bindParam(':gph', $gphone);
$upd->bindParam(':geml', $gemail);
$upd->bindParam(':goaddr', $goadd);
$upd->bindParam(':gaddr', $gaddress);
$upd->bindParam(':gocc', $goccu);
$upd->bindParam(':scode', $code);


$upd->bindParam(':precls', $preclass);
$upd->bindParam(':cenrol', $enrolclass);
$upd->bindParam(':lga', $lga);
$upd->bindParam(':natl', $natl);
$upd->bindParam(':presch', $sch);
$upd->bindParam(':dob', $dob);
$upd->bindParam(':state', $origin);
$upd->bindParam(':excode', $code);
$upd->bindParam(':cen', $center);
$upd->bindParam(':eml', $eml);
if($upd->execute()){
    $pym =  dbConnect()->prepare("INSERT INTO payment SET student=:std, 
        amount=:amt, mode=:mode, refrence=:ref, payfor=:pay, date=:dt
     ");
    $pym->bindParam(':std', $uid);
    $pym->bindParam(':amt', $amount);
    $pym->bindParam(':mode', $mode);
    $pym->bindParam(':ref', $ref);
    $pym->bindParam(':pay', $payfor);
    $pym->bindParam(':dt', $dt);
    if($pym->execute()){
        
        $e="Congratulations! Download the examination timetable here."; 
         echo  " <script>alert('$e'); window.location='profile'</script>";
    }
}

?>

<!-- Main Content -->

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Payment Successful</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home"><i class="zmdi zmdi-home"></i> Return Home</a></li>
                </ul>
                <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <?php // include 'top-section.php'; ?>
        
        
        <div class="row clearfix">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="card project_list">
                        <div class="table-responsive">
                            <a href=""><label class="label-info">Timetable</label></a>
                            <img src='assets/images/success.png' alt='Tricol'>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>

<?php include 'foot.php' ;?>