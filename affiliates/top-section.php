        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12"> 
                <!-- big_icon traffic -->
                <div class="card widget_2">
                    <div class="body">
                        <h6>Affiliate</h6>
                        <h2><?php echo $aff;?><small class="info">of <?php echo $aff;?></small></h2>
                        <small> Registered Affiliates</small>
                        <div class="progress">
                            <div class="progress-bar l-amber" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $perc.'%';?>;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
             <!-- big_icon sales -->
                <div class="card widget_2">
                    <div class="body">
                        <h6>Student</h6>
                        <h2><?php echo $totA;?> <small class="info">of <?php echo $stdn;?></small></h2>
                        <small>Total Registered Student</small>
                        <div class="progress">
                            <div class="progress-bar l-blue" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $Sperc.'%';?>;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <!-- big_icon email -->
                <div class="card widget_2 ">
                    <div class="body">
                        <h6>Admin</h6>
                        <h2><?php echo $adm;?> <small class="info"> of <?php echo $adm;?></small></h2>
                        <small>Total Registered Admin</small>
                        <div class="progress">
                            <div class="progress-bar l-purple" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $Tradm.'%';?>;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <!-- big_icon domains -->
                <div class="card widget_2 ">
                    <div class="body">
                        <h6>Affiliate Students</h6>
                        <h2><?php echo $aff_std; ?> <small class="info">of <?php echo $aff_std; ?></small></h2>
                        <small>Total Affiliate Students</small>
                        <div class="progress">
                            <div class="progress-bar l-green" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $aff_std.'%';?>;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>