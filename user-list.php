<?php include 'header.php';?>
<div class="page">
    <!-- Sidemenu -->
    <?php include 'sidebar.php';?>
    <!-- End Sidemenu -->
    <!-- Main Header-->
    <?php include 'main_header.php';?>
    <!-- Mobile-header -->
    
    <!-- Mobile-header closed -->
    <!-- Main Content-->
    <div class="main-content side-content pt-0">
        <div class="container-fluid">
            <div class="inner-body">
                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">User List</h2>
                    </div>
                    <div class="d-flex">
                        <div class="justify-content-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Users List</a></li>
                                <li class="breadcrumb-item active" aria-current="page">VT Users</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- End Page Header -->
                

                <!--Row-->
                <div class="row sidemenu-height">
                    <div class="col-lg-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="p-3 bg-light">
                                    <!-- <nav class="nav main-nav-line flex-column flex-md-row">
                                        <a class="nav-link active" data-bs-toggle="tab" href="tabCont1">VT Users</a>
                                        <a class="nav-link" data-bs-toggle="tab" href="tabCont2">Facility Users</a>
                                        <a class="nav-link" data-bs-toggle="tab" href="tabCont3">Pending Invitations</a>
                                        <a class="nav-link" data-bs-toggle="tab" href="tabCont4">Demo Facility Account Requests</a>
                                    </nav> -->
                                     <nav>
                                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"> <i class="fa-solid fa-user-group me-2"></i> VT Users</button>
                                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fa-solid fa-user me-2"></i> Facility Users</button>
                                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="fa-solid fa-address-book me-2"></i>  Pending Invitations</button>
                                        <button class="nav-link" id="nav-others-tab" data-bs-toggle="tab" data-bs-target="#nav-others" type="button" role="tab" aria-controls="nav-others" aria-selected="false"><i class="fa-solid fa-laptop me-2"></i> Demo Facility Account Requests</button>
                                      </div>
                                    </nav>
                                </div>

                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="table-responsive userlist-table">
                                            <div id="exportexample_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="exportexample" class="table table-bordered border-t0 key-buttons text-nowrap w-100 dataTable no-footer table-striped table-vcenter text-nowrap" role="grid" aria-describedby="exportexample_info">
                                                            <thead>
                                                                <tr role="row">
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >
                                                                        S.N
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >
                                                                        USER NAME
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" >
                                                                        EMAIL ADDRESS
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >
                                                                        BRANCH NAME
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending" >
                                                                        TYPE
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" >
                                                                        PERMISSIONS
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="STATUS : activate to sort column ascending" >
                                                                        STATUS
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="STATUS : activate to sort column ascending" >
                                                                        ACTION
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="odd">
                                                                    <td>
                                                                        <label class="ckbox"><input type="checkbox" value="1" /><span></span></label>
                                                                    </td>
                                                                    <td class="sorting_1">Airi Satou</td>
                                                                    <td>Accountant</td>
                                                                    <td>Tokyo</td>
                                                                    <td>Super Admin</td>
                                                                    <td>
                                                                        <!-- <a class="text-info text-decoration-underline" data-bs-placement="right" data-bs-toggle="tooltip-danger" title="test test test">View</a> -->
                                                                        <a class="text-info text-decoration-underline ripple " data-bs-container="body" data-bs-content="Vivamus sagittis <p> hello </p> lacus vel" data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="" type="button" data-bs-original-title="Filter" aria-describedby="popover608129">View</a>
                                                                    </td>
                                                                    <td>
                                                                        <span class="label text-success d-flex"><span class="dot-label bg-success me-1"></span>Active</span>
                                                                    </td>
                                                                    <td >
                                                                        <div class="d-flex align-items-center gap-1">
                                                                        <a href="#" class="btn btn-sm btn-info"> <i class="fa-solid fa-eye"></i> </a>
                                                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa-solid fa-pen-to-square"></i></a>
                                                                        <a href="#" class="btn btn-sm btn-warning"> <i class="fa-solid fa-user"></i> </a>
                                                                        <a href="#" class="btn btn-sm btn-danger swal-warning" > <i class="fa-solid fa-trash"></i> </a>
                                                                        <div class="main-toggle main-toggle-success on d-inline-block"><span></span></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td>
                                                                        <label class="ckbox"><input type="checkbox" value="1" /><span></span></label>
                                                                    </td>
                                                                    <td class="sorting_1">Angelica Ramos</td>
                                                                    <td>Chief Executive Officer (CEO)</td>
                                                                    <td>London</td>
                                                                    <td>Admin</td>
                                                                    <td>
                                                                        <!-- <a class="text-info text-decoration-underline" data-bs-placement="right" data-bs-toggle="tooltip-danger" title="test test test">View</a> -->
                                                                        <a class="text-info text-decoration-underline ripple " data-bs-container="body" data-bs-content="Vivamus sagittis <p> hello </p> lacus vel" data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="" type="button" data-bs-original-title="Filter" aria-describedby="popover608129">View</a>
                                                                    </td>
                                                                    <td>
                                                                        <span class="label text-success d-flex"><span class="dot-label bg-success me-1"></span>Active</span>
                                                                    </td>
                                                                    <td >
                                                                        <div class="d-flex align-items-center gap-1">
                                                                        <a href="#" class="btn btn-sm btn-info"> <i class="fa-solid fa-eye"></i> </a>
                                                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa-solid fa-pen-to-square"></i></a>
                                                                        <a href="#" class="btn btn-sm btn-warning"> <i class="fa-solid fa-user"></i> </a>
                                                                        <a href="#" class="btn btn-sm btn-danger swal-warning" > <i class="fa-solid fa-trash"></i> </a>
                                                                        <div class="main-toggle main-toggle-success on d-inline-block"><span></span></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td>
                                                                        <label class="ckbox"><input type="checkbox" value="1" /><span></span></label>
                                                                    </td>
                                                                    <td class="sorting_1">Ashton Cox</td>
                                                                    <td>Junior Technical Author</td>
                                                                    <td>San Francisco</td>
                                                                    <td>Admin</td>
                                                                    <td>
                                                                        <!-- <a class="text-info text-decoration-underline" data-bs-placement="right" data-bs-toggle="tooltip-danger" title="test test test">View</a> -->
                                                                        <a class="text-info text-decoration-underline ripple " data-bs-container="body" data-bs-content="Vivamus sagittis <p> hello </p> lacus vel" data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="" type="button" data-bs-original-title="Filter" aria-describedby="popover608129">View</a>
                                                                    </td>
                                                                    <td>
                                                                        <span class="label text-danger d-flex"><span class="dot-label bg-danger me-1"></span>Inactive</span>
                                                                    </td>
                                                                    <td >
                                                                        <div class="d-flex align-items-center gap-1">
                                                                        <a href="#" class="btn btn-sm btn-info"> <i class="fa-solid fa-eye"></i> </a>
                                                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa-solid fa-pen-to-square"></i></a>
                                                                        <a href="#" class="btn btn-sm btn-warning"> <i class="fa-solid fa-user"></i> </a>
                                                                        <a href="#" class="btn btn-sm btn-danger swal-warning" > <i class="fa-solid fa-trash"></i> </a>
                                                                        <div class="main-toggle main-toggle-success on d-inline-block"><span></span></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td>
                                                                        <label class="ckbox"><input type="checkbox" value="1" /><span></span></label>
                                                                    </td>
                                                                    <td class="sorting_1">Bradley Greer</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>London</td>
                                                                    <td>Super Admin</td>
                                                                    <td>
                                                                        <!-- <a class="text-info text-decoration-underline" data-bs-placement="right" data-bs-toggle="tooltip-danger" title="test test test">View</a> -->
                                                                        <a class="text-info text-decoration-underline ripple " data-bs-container="body" data-bs-content="Vivamus sagittis <p> hello </p> lacus vel" data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="" type="button" data-bs-original-title="Filter" aria-describedby="popover608129">View</a>
                                                                    </td>
                                                                    <td>
                                                                        <span class="label text-success d-flex"><span class="dot-label bg-success me-1"></span>Active</span>
                                                                    </td>
                                                                    <td >
                                                                        <div class="d-flex align-items-center gap-1">
                                                                        <a href="#" class="btn btn-sm btn-info"> <i class="fa-solid fa-eye"></i> </a>
                                                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa-solid fa-pen-to-square"></i></a>
                                                                        <a href="#" class="btn btn-sm btn-warning"> <i class="fa-solid fa-user"></i> </a>
                                                                        <a href="#" class="btn btn-sm btn-danger swal-warning" > <i class="fa-solid fa-trash"></i> </a>
                                                                        <div class="main-toggle main-toggle-success on d-inline-block"><span></span></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td>
                                                                        <label class="ckbox"><input type="checkbox" value="1" /><span></span></label>
                                                                    </td>
                                                                    <td class="sorting_1">Brenden Wagner</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>San Francisco</td>
                                                                    <td>Admin</td>
                                                                    <td>
                                                                        <!-- <a class="text-info text-decoration-underline" data-bs-placement="right" data-bs-toggle="tooltip-danger" title="test test test">View</a> -->
                                                                        <a class="text-info text-decoration-underline ripple " data-bs-container="body" data-bs-content="Vivamus sagittis <p> hello </p> lacus vel" data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="" type="button" data-bs-original-title="Filter" aria-describedby="popover608129">View</a>
                                                                    </td>
                                                                    <td>
                                                                        <span class="label text-danger d-flex"><span class="dot-label bg-danger me-1"></span>Inactive</span>
                                                                    </td>
                                                                    <td >
                                                                        <div class="d-flex align-items-center gap-1">
                                                                        <a href="#" class="btn btn-sm btn-info"> <i class="fa-solid fa-eye"></i> </a>
                                                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa-solid fa-pen-to-square"></i></a>
                                                                        <a href="#" class="btn btn-sm btn-warning"> <i class="fa-solid fa-user"></i> </a>
                                                                        <a href="#" class="btn btn-sm btn-danger swal-warning" > <i class="fa-solid fa-trash"></i> </a>
                                                                        <div class="main-toggle main-toggle-success on d-inline-block"><span></span></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-list">
                                            <button class="btn ripple btn-danger">Delete Multiple Users</button>
                                            <button class="btn ripple btn-info">View Audit</button>
                                            <!-- <button class="btn ripple btn-success modal-effect" data-bs-target="#modaldemo3" data-bs-toggle="modal" href="">Add New User</button> -->
                                            <a  class="btn ripple btn-success" href="new-user.php"><i class="fa fa-plus" aria-hidden="true"></i> Add New user</a>
                                            <!-- <a class="btn ripple btn-info" >View Demo</a> -->
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                      <div class="table-responsive userlist-table">
                                            <div id="exportexample_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="exportexample" class="table table-bordered border-t0 key-buttons text-nowrap w-100 dataTable no-footer table-striped table-vcenter text-nowrap" role="grid" aria-describedby="exportexample_info">
                                                            <thead>
                                                                <tr role="row">
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >
                                                                        S.N
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >
                                                                        USER NAME
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" >
                                                                        EMAIL ADDRESS
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >
                                                                        BRANCH NAME
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending" >
                                                                        TYPE
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" >
                                                                        PERMISSIONS
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="STATUS : activate to sort column ascending" >
                                                                        STATUS
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="STATUS : activate to sort column ascending" >
                                                                        ACTION
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="odd">
                                                                    <td>
                                                                        <label class="ckbox"><input type="checkbox" value="1" /><span></span></label>
                                                                    </td>
                                                                    <td class="sorting_1">Airi Satou</td>
                                                                    <td>Accountant</td>
                                                                    <td>Tokyo</td>
                                                                    <td>Super Admin</td>
                                                                    <td>
                                                                        <!-- <a class="text-info text-decoration-underline" data-bs-placement="right" data-bs-toggle="tooltip-danger" title="test test test">View</a> -->
                                                                        <a class="text-info text-decoration-underline ripple " data-bs-container="body" data-bs-content="Vivamus sagittis <p> hello </p> lacus vel" data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="" type="button" data-bs-original-title="Filter" aria-describedby="popover608129">View</a>
                                                                    </td>
                                                                    <td>
                                                                        <span class="label text-success d-flex"><span class="dot-label bg-success me-1"></span>Active</span>
                                                                    </td>
                                                                    <td >
                                                                        <div class="d-flex align-items-center gap-1">
                                                                        <a href="#" class="btn btn-sm btn-info"> <i class="fa-solid fa-eye"></i> </a>
                                                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa-solid fa-pen-to-square"></i></a>
                                                                        <a href="#" class="btn btn-sm btn-warning"> <i class="fa-solid fa-user"></i> </a>
                                                                        <a href="#" class="btn btn-sm btn-danger swal-warning" > <i class="fa-solid fa-trash"></i> </a>
                                                                        <div class="main-toggle main-toggle-success on d-inline-block"><span></span></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td>
                                                                        <label class="ckbox"><input type="checkbox" value="1" /><span></span></label>
                                                                    </td>
                                                                    <td class="sorting_1">Angelica Ramos</td>
                                                                    <td>Chief Executive Officer (CEO)</td>
                                                                    <td>London</td>
                                                                    <td>Admin</td>
                                                                    <td>
                                                                        <!-- <a class="text-info text-decoration-underline" data-bs-placement="right" data-bs-toggle="tooltip-danger" title="test test test">View</a> -->
                                                                        <a class="text-info text-decoration-underline ripple " data-bs-container="body" data-bs-content="Vivamus sagittis <p> hello </p> lacus vel" data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="" type="button" data-bs-original-title="Filter" aria-describedby="popover608129">View</a>
                                                                    </td>
                                                                    <td>
                                                                        <span class="label text-success d-flex"><span class="dot-label bg-success me-1"></span>Active</span>
                                                                    </td>
                                                                    <td >
                                                                        <div class="d-flex align-items-center gap-1">
                                                                        <a href="#" class="btn btn-sm btn-info"> <i class="fa-solid fa-eye"></i> </a>
                                                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa-solid fa-pen-to-square"></i></a>
                                                                        <a href="#" class="btn btn-sm btn-warning"> <i class="fa-solid fa-user"></i> </a>
                                                                        <a href="#" class="btn btn-sm btn-danger swal-warning" > <i class="fa-solid fa-trash"></i> </a>
                                                                        <div class="main-toggle main-toggle-success on d-inline-block"><span></span></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td>
                                                                        <label class="ckbox"><input type="checkbox" value="1" /><span></span></label>
                                                                    </td>
                                                                    <td class="sorting_1">Ashton Cox</td>
                                                                    <td>Junior Technical Author</td>
                                                                    <td>San Francisco</td>
                                                                    <td>Admin</td>
                                                                    <td>
                                                                        <!-- <a class="text-info text-decoration-underline" data-bs-placement="right" data-bs-toggle="tooltip-danger" title="test test test">View</a> -->
                                                                        <a class="text-info text-decoration-underline ripple " data-bs-container="body" data-bs-content="Vivamus sagittis <p> hello </p> lacus vel" data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="" type="button" data-bs-original-title="Filter" aria-describedby="popover608129">View</a>
                                                                    </td>
                                                                    <td>
                                                                        <span class="label text-danger d-flex"><span class="dot-label bg-danger me-1"></span>Inactive</span>
                                                                    </td>
                                                                    <td >
                                                                        <div class="d-flex align-items-center gap-1">
                                                                        <a href="#" class="btn btn-sm btn-info"> <i class="fa-solid fa-eye"></i> </a>
                                                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa-solid fa-pen-to-square"></i></a>
                                                                        <a href="#" class="btn btn-sm btn-warning"> <i class="fa-solid fa-user"></i> </a>
                                                                        <a href="#" class="btn btn-sm btn-danger swal-warning" > <i class="fa-solid fa-trash"></i> </a>
                                                                        <div class="main-toggle main-toggle-success on d-inline-block"><span></span></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td>
                                                                        <label class="ckbox"><input type="checkbox" value="1" /><span></span></label>
                                                                    </td>
                                                                    <td class="sorting_1">Bradley Greer</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>London</td>
                                                                    <td>Super Admin</td>
                                                                    <td>
                                                                        <!-- <a class="text-info text-decoration-underline" data-bs-placement="right" data-bs-toggle="tooltip-danger" title="test test test">View</a> -->
                                                                        <a class="text-info text-decoration-underline ripple " data-bs-container="body" data-bs-content="Vivamus sagittis <p> hello </p> lacus vel" data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="" type="button" data-bs-original-title="Filter" aria-describedby="popover608129">View</a>
                                                                    </td>
                                                                    <td>
                                                                        <span class="label text-success d-flex"><span class="dot-label bg-success me-1"></span>Active</span>
                                                                    </td>
                                                                    <td >
                                                                        <div class="d-flex align-items-center gap-1">
                                                                        <a href="#" class="btn btn-sm btn-info"> <i class="fa-solid fa-eye"></i> </a>
                                                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa-solid fa-pen-to-square"></i></a>
                                                                        <a href="#" class="btn btn-sm btn-warning"> <i class="fa-solid fa-user"></i> </a>
                                                                        <a href="#" class="btn btn-sm btn-danger swal-warning" > <i class="fa-solid fa-trash"></i> </a>
                                                                        <div class="main-toggle main-toggle-success on d-inline-block"><span></span></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td>
                                                                        <label class="ckbox"><input type="checkbox" value="1" /><span></span></label>
                                                                    </td>
                                                                    <td class="sorting_1">Brenden Wagner</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>San Francisco</td>
                                                                    <td>Admin</td>
                                                                    <td>
                                                                        <!-- <a class="text-info text-decoration-underline" data-bs-placement="right" data-bs-toggle="tooltip-danger" title="test test test">View</a> -->
                                                                        <a class="text-info text-decoration-underline ripple " data-bs-container="body" data-bs-content="Vivamus sagittis <p> hello </p> lacus vel" data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="" type="button" data-bs-original-title="Filter" aria-describedby="popover608129">View</a>
                                                                    </td>
                                                                    <td>
                                                                        <span class="label text-danger d-flex"><span class="dot-label bg-danger me-1"></span>Inactive</span>
                                                                    </td>
                                                                    <td >
                                                                        <div class="d-flex align-items-center gap-1">
                                                                        <a href="#" class="btn btn-sm btn-info"> <i class="fa-solid fa-eye"></i> </a>
                                                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa-solid fa-pen-to-square"></i></a>
                                                                        <a href="#" class="btn btn-sm btn-warning"> <i class="fa-solid fa-user"></i> </a>
                                                                        <a href="#" class="btn btn-sm btn-danger swal-warning" > <i class="fa-solid fa-trash"></i> </a>
                                                                        <div class="main-toggle main-toggle-success on d-inline-block"><span></span></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-list">
                                            <button class="btn ripple btn-secondary">Delete Facility Users</button>
                                            <button class="btn ripple btn-info">View Audit</button>
                                            <!-- <button class="btn ripple btn-success modal-effect" data-bs-target="#modaldemo3" data-bs-toggle="modal" href="">Add New User</button> -->
                                            <a  class="btn ripple btn-success" href="new-facility.php"> <i class="fa fa-plus" aria-hidden="true"></i> Add Facility user</a>
                                            <!-- <a class="btn ripple btn-info" >View Demo</a> -->
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"><div class="table-responsive userlist-table">
                                            <div id="exportexample_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="exportexample" class="table table-bordered border-t0 key-buttons text-nowrap w-100 dataTable no-footer table-striped table-vcenter text-nowrap" role="grid" aria-describedby="exportexample_info">
                                                            <thead>
                                                                <tr role="row">
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >
                                                                        S.N
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >
                                                                        USER NAME
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" >
                                                                        EMAIL ADDRESS
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >
                                                                        BRANCH NAME
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending" >
                                                                        TYPE
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" >
                                                                        PERMISSIONS
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="STATUS : activate to sort column ascending" >
                                                                        STATUS
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="STATUS : activate to sort column ascending" >
                                                                        ACTION
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="odd">
                                                                    <td>
                                                                        <label class="ckbox"><input type="checkbox" value="1" /><span></span></label>
                                                                    </td>
                                                                    <td class="sorting_1">Airi Satou</td>
                                                                    <td>Accountant</td>
                                                                    <td>Tokyo</td>
                                                                    <td>Super Admin</td>
                                                                    <td>
                                                                        <!-- <a class="text-info text-decoration-underline" data-bs-placement="right" data-bs-toggle="tooltip-danger" title="test test test">View</a> -->
                                                                        <a class="text-info text-decoration-underline ripple " data-bs-container="body" data-bs-content="Vivamus sagittis <p> hello </p> lacus vel" data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="" type="button" data-bs-original-title="Filter" aria-describedby="popover608129">View</a>
                                                                    </td>
                                                                    <td>
                                                                        <span class="label text-warning d-flex"><span class="dot-label bg-waring me-1"></span>Invited</span>
                                                                    </td>
                                                                    <td >
                                                                        <div class="d-flex align-items-center gap-1">
                                                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa fa-share-square"></i> Resend Invite </a>
                                                                         </a>
                                                                        <a href="#" class="btn btn-sm btn-danger swal-warning" > <i class="fa fa-trash"></i> </a>
                                                                        
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td>
                                                                        <label class="ckbox"><input type="checkbox" value="1" /><span></span></label>
                                                                    </td>
                                                                    <td class="sorting_1">Angelica Ramos</td>
                                                                    <td>Chief Executive Officer (CEO)</td>
                                                                    <td>London</td>
                                                                    <td>Admin</td>
                                                                    <td>
                                                                        <!-- <a class="text-info text-decoration-underline" data-bs-placement="right" data-bs-toggle="tooltip-danger" title="test test test">View</a> -->
                                                                        <a class="text-info text-decoration-underline ripple " data-bs-container="body" data-bs-content="Vivamus sagittis <p> hello </p> lacus vel" data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="" type="button" data-bs-original-title="Filter" aria-describedby="popover608129">View</a>
                                                                    </td>
                                                                         <td>
                                                                        <span class="label text-warning d-flex"><span class="dot-label bg-waring me-1"></span>Invited</span>
                                                                    </td>
                                                                    <td >
                                                                        <div class="d-flex align-items-center gap-1">
                                                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa fa-share-square"></i> Resend Invite </a>
                                                                         </a>
                                                                        <a href="#" class="btn btn-sm btn-danger swal-warning" > <i class="fa-solid fa-trash"></i> </a>
                                                                        
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td>
                                                                        <label class="ckbox"><input type="checkbox" value="1" /><span></span></label>
                                                                    </td>
                                                                    <td class="sorting_1">Ashton Cox</td>
                                                                    <td>Junior Technical Author</td>
                                                                    <td>San Francisco</td>
                                                                    <td>Admin</td>
                                                                    <td>
                                                                        <!-- <a class="text-info text-decoration-underline" data-bs-placement="right" data-bs-toggle="tooltip-danger" title="test test test">View</a> -->
                                                                        <a class="text-info text-decoration-underline ripple " data-bs-container="body" data-bs-content="Vivamus sagittis <p> hello </p> lacus vel" data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="" type="button" data-bs-original-title="Filter" aria-describedby="popover608129">View</a>
                                                                    </td>
                                                                        <td>
                                                                        <span class="label text-warning d-flex"><span class="dot-label bg-waring me-1"></span>Invited</span>
                                                                    </td>
                                                                    <td >
                                                                        <div class="d-flex align-items-center gap-1">
                                                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa fa-share-square"></i> Resend Invite </a>
                                                                         </a>
                                                                        <a href="#" class="btn btn-sm btn-danger swal-warning" > <i class="fa-solid fa-trash"></i> </a>
                                                                        
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td>
                                                                        <label class="ckbox"><input type="checkbox" value="1" /><span></span></label>
                                                                    </td>
                                                                    <td class="sorting_1">Bradley Greer</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>London</td>
                                                                    <td>Super Admin</td>
                                                                    <td>
                                                                        <!-- <a class="text-info text-decoration-underline" data-bs-placement="right" data-bs-toggle="tooltip-danger" title="test test test">View</a> -->
                                                                        <a class="text-info text-decoration-underline ripple " data-bs-container="body" data-bs-content="Vivamus sagittis <p> hello </p> lacus vel" data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="" type="button" data-bs-original-title="Filter" aria-describedby="popover608129">View</a>
                                                                    </td>
                                                                         <td>
                                                                        <span class="label text-warning d-flex"><span class="dot-label bg-waring me-1"></span>Invited</span>
                                                                    </td>
                                                                    <td >
                                                                        <div class="d-flex align-items-center gap-1">
                                                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa fa-share-square"></i> Resend Invite </a>
                                                                         </a>
                                                                        <a href="#" class="btn btn-sm btn-danger swal-warning" > <i class="fa-solid fa-trash"></i> </a>
                                                                        
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td>
                                                                        <label class="ckbox"><input type="checkbox" value="1" /><span></span></label>
                                                                    </td>
                                                                    <td class="sorting_1">Brenden Wagner</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>San Francisco</td>
                                                                    <td>Admin</td>
                                                                    <td>
                                                                        <!-- <a class="text-info text-decoration-underline" data-bs-placement="right" data-bs-toggle="tooltip-danger" title="test test test">View</a> -->
                                                                        <a class="text-info text-decoration-underline ripple " data-bs-container="body" data-bs-content="Vivamus sagittis <p> hello </p> lacus vel" data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="" type="button" data-bs-original-title="Filter" aria-describedby="popover608129">View</a>
                                                                    </td>
                                                                    <td>
                                                                        <span class="label text-warning d-flex"><span class="dot-label bg-waring me-1"></span>Invited</span>
                                                                    </td>
                                                                    <td >
                                                                        <div class="d-flex align-items-center gap-1">
                                                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa fa-share-square"></i> Resend Invite </a>
                                                                         </a>
                                                                        <a href="#" class="btn btn-sm btn-danger swal-warning" > <i class="fa-solid fa-trash"></i> </a>
                                                                        
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                    <div class="tab-pane" id="nav-others" role="tabpanel" aria-labelledby="nav-others-tab"><div class="table-responsive userlist-table">
                                            <div id="exportexample_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="exportexample" class="table table-bordered border-t0 key-buttons text-nowrap w-100 dataTable no-footer table-striped table-vcenter text-nowrap" role="grid" aria-describedby="exportexample_info">
                                                            <thead>
                                                                <tr role="row">
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >
                                                                        S.N
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >
                                                                        USER NAME
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" >
                                                                        EMAIL ADDRESS
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >
                                                                        BRANCH NAME
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending" >
                                                                        TYPE
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" >
                                                                        PERMISSIONS
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="STATUS : activate to sort column ascending" >
                                                                        STATUS
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="exportexample" rowspan="1" colspan="1" aria-label="STATUS : activate to sort column ascending" >
                                                                        ACTION
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="odd">
                                                                    <td>
                                                                        <label class="ckbox"><input type="checkbox" value="1" /><span></span></label>
                                                                    </td>
                                                                    <td class="sorting_1">Airi Satou</td>
                                                                    <td>Accountant</td>
                                                                    <td>Tokyo</td>
                                                                    <td>Super Admin</td>
                                                                    <td>
                                                                        <!-- <a class="text-info text-decoration-underline" data-bs-placement="right" data-bs-toggle="tooltip-danger" title="test test test">View</a> -->
                                                                        <a class="text-info text-decoration-underline ripple " data-bs-container="body" data-bs-content="Vivamus sagittis <p> hello </p> lacus vel" data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="" type="button" data-bs-original-title="Filter" aria-describedby="popover608129">View</a>
                                                                    </td>
                                                                    <td>
                                                                        <span class="label text-warning d-flex"><span class="dot-label bg-warning me-1"></span>Pending Action</span>
                                                                    </td>
                                                                    <td >
                                                                        <div class="d-flex align-items-center gap-1">
                                                                         <a href="#" class="btn btn-sm btn-success"> <i class="fa-solid fa-check"></i> Accept</a>
                                                                      
                                                                        <a href="#" class="btn btn-sm btn-danger"> <i class="fa-solid fa-times"></i> Reject </a>

                                                                        <a href="#" class="btn btn-sm btn-danger swal-warning" > <i class="fa-solid fa-trash"></i> </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td>
                                                                        <label class="ckbox"><input type="checkbox" value="1" /><span></span></label>
                                                                    </td>
                                                                    <td class="sorting_1">Angelica Ramos</td>
                                                                    <td>Chief Executive Officer (CEO)</td>
                                                                    <td>London</td>
                                                                    <td>Admin</td>
                                                                    <td>
                                                                        <!-- <a class="text-info text-decoration-underline" data-bs-placement="right" data-bs-toggle="tooltip-danger" title="test test test">View</a> -->
                                                                        <a class="text-info text-decoration-underline ripple " data-bs-container="body" data-bs-content="Vivamus sagittis <p> hello </p> lacus vel" data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="" type="button" data-bs-original-title="Filter" aria-describedby="popover608129">View</a>
                                                                    </td>
                                                                    <td>
                                                                        <span class="label text-warning d-flex"><span class="dot-label bg-warning me-1"></span>Pending Action</span>
                                                                    </td>
                                                                    <td >
                                                                        <div class="d-flex align-items-center gap-1">
                                                                             <a href="#" class="btn btn-sm btn-success"> <i class="fa-solid fa-check"></i> Accept</a>
                                                                              
                                                                                <a href="#" class="btn btn-sm btn-danger"> <i class="fa-solid fa-times"></i> Reject </a>

                                                                                <a href="#" class="btn btn-sm btn-danger swal-warning" > <i class="fa-solid fa-trash"></i> </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td>
                                                                        <label class="ckbox"><input type="checkbox" value="1" /><span></span></label>
                                                                    </td>
                                                                    <td class="sorting_1">Ashton Cox</td>
                                                                    <td>Junior Technical Author</td>
                                                                    <td>San Francisco</td>
                                                                    <td>Admin</td>
                                                                    <td>
                                                                        <!-- <a class="text-info text-decoration-underline" data-bs-placement="right" data-bs-toggle="tooltip-danger" title="test test test">View</a> -->
                                                                        <a class="text-info text-decoration-underline ripple " data-bs-container="body" data-bs-content="Vivamus sagittis <p> hello </p> lacus vel" data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="" type="button" data-bs-original-title="Filter" aria-describedby="popover608129">View</a>
                                                                    </td>
                                                                    <td>
                                                                       <span class="label text-warning d-flex"><span class="dot-label bg-warning me-1"></span>Pending Action</span>
                                                                    </td>
                                                                    <td >
                                                                        <div class="d-flex align-items-center gap-1">
                                                                        <a href="#" class="btn btn-sm btn-success"> <i class="fa-solid fa-check"></i> Accept</a>
                                                                      
                                                                        <a href="#" class="btn btn-sm btn-danger"> <i class="fa-solid fa-times"></i> Reject </a>

                                                                        <a href="#" class="btn btn-sm btn-danger swal-warning" > <i class="fa-solid fa-trash"></i> </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td>
                                                                        <label class="ckbox"><input type="checkbox" value="1" /><span></span></label>
                                                                    </td>
                                                                    <td class="sorting_1">Bradley Greer</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>London</td>
                                                                    <td>Super Admin</td>
                                                                    <td>
                                                                        <!-- <a class="text-info text-decoration-underline" data-bs-placement="right" data-bs-toggle="tooltip-danger" title="test test test">View</a> -->
                                                                        <a class="text-info text-decoration-underline ripple " data-bs-container="body" data-bs-content="Vivamus sagittis <p> hello </p> lacus vel" data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="" type="button" data-bs-original-title="Filter" aria-describedby="popover608129">View</a>
                                                                    </td>
                                                                    <td>
                                                                        <span class="label text-warning d-flex"><span class="dot-label bg-warning me-1"></span>Pending Action</span>
                                                                    </td>
                                                                    <td >
                                                                        <div class="d-flex align-items-center gap-1">
                                                                        <a href="#" class="btn btn-sm btn-success"> <i class="fa-solid fa-check"></i> Accept</a>
                                                                      
                                                                        <a href="#" class="btn btn-sm btn-danger"> <i class="fa-solid fa-times"></i> Reject </a>

                                                                        <a href="#" class="btn btn-sm btn-danger swal-warning" > <i class="fa-solid fa-trash"></i> </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td>
                                                                        <label class="ckbox"><input type="checkbox" value="1" /><span></span></label>
                                                                    </td>
                                                                    <td class="sorting_1">Brenden Wagner</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>San Francisco</td>
                                                                    <td>Admin</td>
                                                                    <td>
                                                                        <!-- <a class="text-info text-decoration-underline" data-bs-placement="right" data-bs-toggle="tooltip-danger" title="test test test">View</a> -->
                                                                        <a class="text-info text-decoration-underline ripple " data-bs-container="body" data-bs-content="Vivamus sagittis <p> hello </p> lacus vel" data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="" type="button" data-bs-original-title="Filter" aria-describedby="popover608129">View</a>
                                                                    </td>
                                                                    <td>
                                                                        <span class="label text-warning d-flex"><span class="dot-label bg-warning me-1"></span>Pending Action</span>
                                                                      
                                                                    </td>
                                                                    <td >
                                                                        <div class="d-flex align-items-center gap-1">
                                                                       
                                                                        <a href="#" class="btn btn-sm btn-success"> <i class="fa-solid fa-check"></i> Accept</a>
                                                                      
                                                                        <a href="#" class="btn btn-sm btn-danger"> <i class="fa-solid fa-times"></i> Reject </a>

                                                                        <a href="#" class="btn btn-sm btn-danger swal-warning" > <i class="fa-solid fa-trash"></i> </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row end -->
            </div>
        </div>
    </div>
    <!-- End Main Content-->
    
</div>
<?php include 'footer.php';?>
