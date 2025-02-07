<div>

    <section class="top-space-margin half-section bg-gradient-very-light-gray">
        <div class="container">
            <div class="row align-items-center justify-content-center" data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <div class="text-center col-12 col-xl-8 col-lg-10 position-relative page-title-extra-large">
                    <h1 class="alt-font fw-600 text-dark-gray mb-10px">Daftar Akun</h1>
                </div>
                <div class="col-12 breadcrumb breadcrumb-style-01 d-flex justify-content-center">
                    <ul>
                        <li><a href="/home">Home</a></li>
                        <li>Daftar Akun</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- start section -->
    <section class="pt-0">
        <div class="container">
            <div class="row g-0 justify-content-center">
                <div class="p-4 col-lg-6 col-md-10 box-shadow-extra-large border-radius-6px" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":150, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <form action="email-templates/contact-form.php" method="post">
                        <label class="text-dark-gray mb-10px fw-500">Username<span class="text-red">*</span></label>
                        <input class="mb-20px bg-very-light-gray form-control required" name="name" type="text" placeholder="Enter your username" />
                        <label class="text-dark-gray mb-10px fw-500">Email address<span class="text-red">*</span></label>
                        <input class="mb-20px bg-very-light-gray form-control required" type="email" name="email" placeholder="Enter your email" />
                        <label class="text-dark-gray mb-10px fw-500">Password<span class="text-red">*</span></label>
                        <input class="mb-20px bg-very-light-gray form-control required" type="password" name="password" placeholder="Enter your password" />
                        <label class="text-dark-gray mb-10px fw-500">Konfirmasi Password<span class="text-red">*</span></label>
                        <input class="mb-20px bg-very-light-gray form-control required" type="password" name="password" placeholder="Enter your password" />
                        <span class="fs-13 lh-22 w-90 lg-w-100 md-w-90 sm-w-100 d-block mb-30px">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#" class="text-dark-gray text-decoration-line-bottom fw-500">privacy policy.</a></span>
                        <input type="hidden" name="redirect" value="">
                        <button class="btn btn-medium btn-round-edge btn-dark-gray btn-box-shadow submit w-100" type="submit">Register</button>
                        <a href="#" class="btn btn-large btn-white btn-box-shadow fw-600 d-table d-lg-inline-block lg-mb-15px md-mx-auto w-100 btn-round-edge" style="margin-top:10px">
                            <img src="/assets/images/google.png" alt="Google Logo" width="25px" height="25px">
                            Login dengan Google</a>
                        <div class="form-results mt-20px d-none"></div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
</div>
