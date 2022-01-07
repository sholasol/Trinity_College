    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card widget_2 big_icon traffic">
                    <div class="body">
                        <h6>My Referral Link</h6>
                        <h2 style="line-height:0.9">
                            <small class="info text-black"><?php echo $ref;?> </small>
                            <!--<button class="btn btn-sm btn-default"> copy </button>--></h2>
                        <small>Referral student and get 5% of their first payment</small>

                        <div class="progress">
                            <div class="progress-bar l-amber" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card widget_2 big_icon sales">
                    <div class="body">
                        <h6>Student</h6>
                        <h2><?php echo $rstd;?> <small class="info">of <?php // echo $rst->tstd; ?></small></h2>
                        <small>Total Refferered Student</small>
                        <div class="progress">
                            <?php  //$perc = $rstd/$rst->tstd * 100; ?>
                            <div class="progress-bar l-blue" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $perc.'%';?>;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card widget_2 big_icon email">
                    <div class="body">
                        <h6>Affiliate</h6>
                        <h2><?php echo $af; ?> <small class="info">of <?php echo $aff; ?></small></h2>
                        <small>Total Active Affiliates </small>
                        <div class="progress">
                            <?php $Aperc = $af/$aff * 100; ?>
                            <div class="progress-bar l-purple" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $Aperc.'%';?>;"></div>
                        </div>
                    </div>
                </div>
            </div>
<!--             <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card widget_2 big_icon domains">
                    <div class="body">
                        <h6>Courses</h6>
                        <h2>8 <small class="info">of 10</small></h2>
                        <small>Total Registered Courses</small>
                        <div class="progress">
                            <div class="progress-bar l-green" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>