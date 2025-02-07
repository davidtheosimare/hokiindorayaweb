<div>
    <section class="top-space-margin half-section bg-gradient-very-light-gray">
        <div class="container">
            <div class="row align-items-center justify-content-center" data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <div class="text-center col-12 col-xl-8 col-lg-10 position-relative page-title-extra-large">
                    <h1 class="alt-font fw-600 text-dark-gray mb-10px">My account</h1>
                </div>
                <div class="col-12 breadcrumb breadcrumb-style-01 d-flex justify-content-center">
                    <ul>
                        <li><a href="/home">Home</a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
   <!-- start section -->
    <section class="pt-0">
        <div class="container">
            <div class="row g-0 justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-12 contact-form-style-04 md-mb-50px box-shadow-extra-large border-radius-6px " style="padding:15px 20px"  data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="fs-26 xs-fs-24 alt-font fw-600 text-dark-gray mb-20px d-block">Member login</span>
                    <form action="email-templates/contact-form.php" method="post">
                        <label class="text-dark-gray mb-10px fw-500">Username or email address<span class="text-red">*</span></label>
                        <input class="mb-20px bg-very-light-gray form-control required" type="email" name="name" placeholder="Enter your username" />
                        <label class="text-dark-gray mb-10px fw-500">Password<span class="text-red">*</span></label>
                        <input class="mb-20px bg-very-light-gray form-control required" type="password" name="password" placeholder="Enter your password" />
                        <div class="position-relative terms-condition-box text-start d-flex align-items-center mb-20px">
                            <label>
                                <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="align-middle terms-condition check-box required">
                                <span class="box fs-14">Remember me</span>
                            </label>
                            <a href="#" class="fs-14 text-dark-gray fw-500 text-decoration-line-bottom ms-auto">Forget your password?</a>
                        </div>
                        <input type="hidden" name="redirect" value="">
                        <button class="btn btn-medium btn-round-edge btn-dark-gray btn-box-shadow submit w-100" type="submit">Login</button>
                        <a href="#" class="btn btn-large btn-white btn-round-edge btn-box-shadow fw-600 d-table d-lg-inline-block lg-mb-15px md-mx-auto w-100" style="margin-top:10px">
                            <img src="/assets/images/google.png" alt="Google Logo" width="25px" height="25px">
                            Login dengan Google</a>
                        <div class="form-results mt-20px d-none"></div>
                        <div class="text-center text-dark-gray mb-10px fw-500" style="margin:20px 0">Belum punya akun?<a wire:navigate href="/register" class="text-red"> Daftar Sekarang</a></div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- end section -->
</div>
