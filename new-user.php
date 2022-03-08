<?php include 'header.php';?>
    <div class="page">
        <!-- Sidemenu -->
      <?php include 'sidebar.php';?> <!-- End Sidemenu -->
        <!-- Main Header-->
        <?php include 'main_header.php';?>
        <!-- Mobile-header -->
       
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
                                  <li class="breadcrumb-item"><a href="#">VT Users</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add User </li>
                                  </ol>
                           </div>
                        </div>
                    </div> <!-- End Page Header -->
                    <!--Row-->
                    <div class="row row-sm">
                       <div class="col-xl-8 col-lg-12">
                          <div class="card custom-card">
                             <div class="card-body">

                                   <div>
                                      <h6 class="main-content-label mb-1">Add User  <span class="text-info">(New User)</span></h6>
                                   </div>
                                   <hr>
                                  <form action="#" class="parsley-style-1" id="selectForm2" name="selectForm2" novalidate="">
                                       <div class="">
                                           <div class="form-group" data-select2-id="113">
                                               <div class="row row-sm">
                                                  <div class="col-sm-4">
                                                      <div class="parsley-input" id="fnWrapper"> <label>User Name <span class="tx-danger">*</span></label> <input class="form-control" data-parsley-class-handler="#fnWrapper" name="username" placeholder="Username" required="" type="text"> </div>
                                                  </div>
                                                  <div class="col-sm-4 mg-t-20 mg-sm-t-0">
                                                     <div class="parsley-input" id="fnWrapper"> <label>First Name <span class="tx-danger">*</span></label> <input class="form-control" data-parsley-class-handler="#fnWrapper" name="firstname" placeholder="First Name" required="" type="text"> </div>
                                                  </div>
                                                  <div class="col-sm-4 mg-t-20 mg-sm-t-0">
                                                    <div class="parsley-input" id="fnWrapper"> <label>Last Name <span class="tx-danger">*</span></label> <input class="form-control" data-parsley-class-handler="#fnWrapper" name="lastname" placeholder="Last Name" required="" type="text"> </div>
                                                  </div>
                                               </div>
                                            </div>
                                           <div class="form-group" data-select2-id="">
                                               <div class="row row-sm">
                                                  <div class="col-sm-4">
                                                      <div class="parsley-input" id="fnWrapper"> <label>Last Four Digits of SSN <span class="tx-danger">*</span></label> <input class="form-control" data-parsley-class-handler="#fnWrapper" name="digits" placeholder="Last Four Digits of SSN" required="" type="text"> </div>
                                                  </div>
                                                  <div class="col-sm-8 mg-t-20 mg-sm-t-0">
                                                     <div class="parsley-input" id="fnWrapper"> <label>Email <span class="tx-danger">*</span></label> <input class="form-control " name="email" placeholder="Enter email" required="" type="email">            </div>
                                                  </div>
                                               </div>
                                            </div>
                                            <div class="form-group" data-select2-id="">
                                               <div class="row row-sm">
                                                  <div class="col-sm-4" data-select2-id="61">
                                                      <div class="parsley-input" id="fnWrapper">
                                                       <label>User Type <span class="tx-danger">*</span></label>
                                                           <select class="form-control select2-with-search select2-hidden-accessible" data-select2-id="26" tabindex="-1" aria-hidden="true"><option label="Choose one" data-select2-id="28"> </option> <option value="Firefox"> Firefox </option> <option value="Chrome"> Chrome </option> <option value="Safari"> Safari </option> <option value="Opera"> Opera </option> <option value="Internet Explorer"> Internet Explorer </option> </select>
                                                           <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                           <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="27" style="width: 100%;"></span>
                                                           <span class="select2-selection__arrow" role="presentation" data-select2-id="8"><b role="presentation" data-select2-id="9"></b></span>
                                                        </div>
                                                       
                                                  </div>
                                                  <div class="col-sm-8 mg-t-20 mg-sm-t-0">
                                                     <div class="parsley-input" id="fnWrapper"> 
                                                     <div class="parsley-input" id="fnWrapper">
                                                       <label>Branch Name <span class="tx-danger">*</span></label>
                                                           <select class="form-control select2-with-search select2-hidden-accessible" data-select2-id="26" tabindex="-1" aria-hidden="true"><option label="Choose one" data-select2-id="28"> </option> <option value="Firefox"> Firefox </option> <option value="Chrome"> Chrome </option> <option value="Safari"> Safari </option> <option value="Opera"> Opera </option> <option value="Internet Explorer"> Internet Explorer </option> </select>
                                                           <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="27" style="width: 100%;"><span class="selection"><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                         </span>
                                                        </div>           </div>
                                                  </div>
                                               </div>
                                            </div>

                                           <div class="form-group" data-select2-id="">
                                               <div class="row row-sm">
                                                  <div class="col-sm-4" data-select2-id="61">
                                                      <div class="parsley-input" id="fnWrapper">
                                                       <label>User Primary Chat Role  <span class="tx-danger">*</span></label>
                                                           <select class="form-control select2-with-search select2-hidden-accessible" data-select2-id="26" tabindex="-1" aria-hidden="true"><option label="Choose one" data-select2-id="28"> </option> <option value="Firefox"> Firefox </option> <option value="Chrome"> Chrome </option> <option value="Safari"> Safari </option> <option value="Opera"> Opera </option> <option value="Internet Explorer"> Internet Explorer </option> </select>
                                                           <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="27" style="width: 100%;"><span class="selection">
                                                          </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        </div>
                                                       
                                                  </div>
                                                  <div class="col-sm-8 mg-t-20 mg-sm-t-0">
                                                    <p class="mg-b-10">Multiple Select with Pre-Filled Input</p><select class="form-control select2 select2-hidden-accessible" multiple="" data-select2-id="18" tabindex="-1" aria-hidden="true"><option selected="" value="Firefox" data-select2-id="20"> Firefox </option> <option value="Chrome"> Chrome </option> <option value="Safari"> Safari </option> <option value="Opera"> Opera </option> <option value="Internet Explorer"> Internet Explorer </option> </select>
                                                    <span class="select2 select2-container select2-container--default select2-container--focus" dir="ltr" data-select2-id="19" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title=" Firefox " data-select2-id="21"><span class="select2-selection__choice__remove" role="presentation">×</span> Firefox </li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>                                                  </div>
                                               </div>
                                            </div>


                                            <div class="form-group" data-select2-id="">
                                                    <div class="row row-sm">
                                                  <div class="col-sm-4">
                                                      <div class="parsley-input" id="fnWrapper"> <label>Password<span class="tx-danger">*</span></label> <input class="form-control" data-parsley-class-handler="#fnWrapper" name="digits" placeholder="password" required="" type="password"> </div>
                                                  </div>
                                                  <div class="col-sm-8 mg-t-20 mg-sm-t-0">
                                                    <div class="parsley-input" id="fnWrapper"> <label>Status</label> 
                                                   <div class="main-toggle main-toggle-secondary on"> <span></span> 
                                                      </div>
                                                   </div>
                                                  </div>
                                               </div>
                                            </div>
                                       </div>
                                     
                                      
                                       <div class="mg-t-30 text-right pull-right">
                                           <button class="btn btn-success" type="submit">Add New User</button>
                                           <button class="btn btn-dark" type="submit">Cancel</button>
                                        </div>
                                    </form>

                               </div>

                              </div>
                          </div>
                      
                       <div class="col-xl-4 col-lg-12 d-none d-xl-block custom-leftnav"> <div class="main-content-left-components"> <div class="card custom-card"> <div class="card-body component-item">

                                   <div>
                                      <h6 class="main-content-label mb-1">User Roles/Premissions</h6>
                                   </div>
                                   <hr>
                                   <div class="input-group mb-2"> <input type="text" class="form-control border-end-0 ps-3" value="" placeholder="Searching....."> <span class=""> <button class="btn ripple btn-info" type="button"><i class="fa fa-search"></i></button> </span> </div>

                                   <div class="example-cus">
                                       <div class="listgroup-example ">
                                          <ul class="list-group">
                                             <li class="d-flex align-items-center gap-1"> <div class="main-toggle main-toggle-success on "> <span></span> </div> <span>Dapibus ac facilisis in</span></li>
                                             <li class="d-flex align-items-center  gap-1"><div class="main-toggle main-toggle-success on"> <span></span> </div> <span>Morbi leo risus</span></li>
                                             <li class="d-flex align-items-center  gap-1"><div class="main-toggle main-toggle-success on"> <span></span> </div> <span>Cras justo odio </span></li>
                                             <li class="d-flex align-items-center  gap-1"><div class="main-toggle main-toggle-success on"> <span></span> </div> <span>Porta ac consectetur ac</span></li>
                                             <li class="d-flex align-items-center  gap-1"><div class="main-toggle main-toggle-success on"> <span></span> </div><span> Vestibulum at eros</span></li>
                                          </ul>
                                       </div>
                                    </div>
                            </div> </div> </div> </div>
                    <
                    <!-- Row end -->
                </div>
            </div>
        </div> <!-- End Main Content-->
        <!-- Main Footer-->
        
        <!--End Footer-->
        
    </div>
    <?php include 'footer.php';?>
