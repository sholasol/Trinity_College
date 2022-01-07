<?php include 'head.php'; ?>

<!-- Main Content -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Project list</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item">Survey</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <a href="newSurvey" class="btn btn-success btn-icon float-right" ><i class="zmdi zmdi-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="card project_list">
                        <div class="table-responsive">
                            <table class="table table-hover c_table theme-color">
                                <thead>
                                    <tr>                                       
                                        <th style="width:50px;"></th>
                                        <th>Survey</th>
                                        <th>Views</th>                                        
                                        <th class="hidden-md-down">Responses</th>
                                        <th class="hidden-md-down" width="150px">Completeness</th>
                                        <th>Created</th>
                                        <th>Last Response</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img class="rounded avatar" src="assets/images/xs/avatar1.jpg" alt="">
                                        </td>
                                        <td>
                                            <a class="single-user-name" href="javascript:void(0);">Jonathan Deo</a><br>
                                            <small>Project Lead</small>
                                        </td>
                                        <td>
                                            <strong>eCommerce Website</strong><br>
                                            <small>Cost: $215</small>
                                        </td>                                        
                                        <td class="hidden-md-down">
                                            <ul class="list-unstyled team-info margin-0">                                               
                                                <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                                <li><img src="assets/images/xs/avatar6.jpg" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td class="hidden-md-down">
                                            <div class="progress">
                                                <div class="progress-bar l-blue" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-info">Medium</span></td>
                                        <td>25 Dec 2019</td>
                                        <td><i class="zmdi zmdi-edit"></i></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="rounded avatar" src="assets/images/xs/avatar4.jpg" alt="">
                                        </td>
                                        <td>
                                            <a class="single-user-name" href="javascript:void(0);">John Deo</a><br>
                                            <small>UI UX Lead</small>
                                        </td>
                                        <td>
                                            <strong>Digital Marketing</strong><br>
                                            <small>Cost: $350</small>
                                        </td>                                        
                                        <td class="hidden-md-down">
                                            <ul class="list-unstyled team-info margin-0">                                               
                                                <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>                                                
                                                <li><img src="assets/images/xs/avatar6.jpg" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td class="hidden-md-down">
                                            <div class="progress">
                                                <div class="progress-bar l-amber" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%;"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning">Panding</span></td>
                                        <td>12 Jan 2019</td>
                                        <td><i class="zmdi zmdi-edit"></i></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="rounded avatar" src="assets/images/xs/avatar5.jpg" alt="">
                                        </td>
                                        <td>
                                            <a class="single-user-name" href="javascript:void(0);">Emma Welson</a><br>
                                            <small>Angular Developer</small>
                                        </td>
                                        <td>
                                            <strong>Hospital Admin</strong><br>
                                            <small>Hire: $45 Per Hour</small>
                                        </td>                                        
                                        <td class="hidden-md-down">
                                            <ul class="list-unstyled team-info  margin-0">                                               
                                                <li><img src="assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                                                <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                                <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td class="hidden-md-down">
                                            <div class="progress">
                                                <div class="progress-bar l-coral" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-primary">Low</span></td>
                                        <td>20 Jan 2019</td>
                                        <td><i class="zmdi zmdi-edit"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'foot.php'; ?>