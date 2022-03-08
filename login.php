<?php include 'header.php';?>
<section class="login ">
    <div class="row align-items-center g-0 ">
        <div class="col-lg-6 bg_dullblue">
            <img src="images/login_left.png" alt="login_left" class="w-100 vh100">
        </div>
        <div class="col-lg-6 bg-white">
            <div class="w-lg-600px p-10 p-lg-15 mx-auto">
                <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework login_form" novalidate="novalidate"
                    id="kt_sign_in_form" action="#">
                    <!--begin::Heading-->
                    <div class="text-left mb-10">
                        <!--begin::Title-->
                        <img src="images/via_time_logo.png" alt="via_time_logo" class="mb-5">
                        <h1 class="text-dark mb-3"><span class="blue">Login In to</span> <span
                                class="lightblue">ViaTime</span></h1>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <div class="text-gray-400  fs-4">
                            <h2 class="f_light mb-10">Sign in to continue</h2>
                            <!-- <a href="../../demo1/dist/authentication/flows/basic/sign-up.html" class="link-primary fw-bolder">Create an Account</a></div> -->
                            <!--end::Link-->
                        </div>
                        <!--begin::Heading-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10 fv-plugins-icon-container">
                            <!--begin::Label-->

                            <!--end::Label-->
                            <!--begin::Input-->
                            <div class="p-rel">
                                <input class="form-control form-control-lg form-control-solid" type="text" name="email"
                                    placeholder="Username/ Email Address" autocomplete="off">
                                <div class="p-abs">
                                    <!-- <img src="http://localhost/viatime/admin/images/usericon.png" alt="usericon"> -->
                                    <i class="fa-solid fa-user-large"></i>
                                </div>
                            </div>
                            <!--end::Input-->
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10 fv-plugins-icon-container">
                            <!--begin::Wrapper-->

                            <!--end::Wrapper-->
                            <!--begin::Input-->
                            <div class="p-rel"><input class="form-control form-control-lg form-control-solid"
                                    placeholder="Password" type="password" name="password" autocomplete="off">
                                <div class="p-abs">
                                    <!-- <img src="http://localhost/viatime/admin/images/usericon.png" alt="usericon"> -->
                                    <i class="fa-solid fa-lock"></i>
                                </div>
                            </div>
                            <!--end::Input-->
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
						
							<label class="form-check form-check-custom form-check-solid form-switch mb-5">
							<span class="form-check-label fw-bold  fs-5 me-3">Keep me Logged In</span>
																<input class="form-check-input" type="checkbox" name="layout-builder[layout][header][fixed][desktop]" value="true" checked="checked">
																
															</label>
                        <!--begin::Actions-->
                        <div class="text-left">
                            <!--begin::Submit button-->
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Login</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Submit button-->



                        </div>
						
                        <div class="text-center">
                            <p class="text-dark fs-5 my-4"><i class="fa-solid fa-user-lock text-dark fs-4"></i> Forgot
                                Password?</p>
                        </div>
                        <!--end::Actions-->
                        <div></div>
                </form>
				
            </div>
        </div>
		<p class="small text-center copyrightset"><i>Copyright © 2022 ViaTime. All Rights Reserved.</i></p>
    </div>
</section>
<?php include 'footer.php';?>