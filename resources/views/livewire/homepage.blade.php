@section('meta')
<meta name="description" content="{{$description}}">
<meta name="keywords" content="{{$keywords}}">
<meta name="robots" content="index, follow">

 <!-- Open Graph Tags untuk Facebook dan WhatsApp -->
 <meta property="og:title" content="{{$title}}">
 <meta property="og:description" content="{{$description}}">
 <meta property="og:image" content="{{$image}}">
 <meta property="og:url" content="{{$url}}">
 <meta property="og:type" content="website">

 <!-- Twitter Card Tags -->
 <meta name="twitter:card" content="summary_large_image">
 <meta name="twitter:title" content="{{$title}}">
 <meta name="twitter:description" content="{{$description}}">
 <meta name="twitter:image" content="{{$image}}">
 <title>{{$title ?? 'Hokiindo Raya'}} - {{$description}}</title>

@endsection

<div class="home">
@livewire('section.banner')

    <section class="pb-8 md-pb-17 xs-pb-28">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="text-center col-xl-5 col-lg-6 col-md-9 md-mb-50px text-lg-start appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <span class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px" style="">Hokiindo Raya </span>
                    <h3 class="mx-auto alt-font text-dark-gray fw-600 ls-minus-1px mb-20px sm-w-85 xs-w-100" style="">Distributor Resmi dari Brand Ternama!</h3>
                    <p style="">Sebagai mitra resmi Siemens dan Shenzen Coming Technology, kami menjamin semua produk yang kami sediakan 100% asli dan sesuai standar internasional.
                        Semua produk yang kami sediakan telah melalui uji kualitas dan sesuai dengan standar internasional.</p>
                    <div class="flex-row d-flex justify-content-center justify-content-lg-start align-items-center mt-35px" style="">
                        <div class="flex-shrink-0 w-120px me-25px">
                            <span class="text-center pie-chart-style-01 d-flex align-items-center justify-content-center" data-line-width="7" data-percent="100" data-size="120" data-track-color="#ededed" data-start-color="#C4302D" data-end-color="#C4302D">
                                <span class="percent d-flex align-items-center justify-content-center alt-font fs-26 text-dark-gray fw-600 ls-minus-1px">100%</span>
                            <canvas height="120" width="120" style="margin-right: -125px;"></canvas></span>
                        </div>
                        <div class="text-start">
                            <span class="fs-20 lh-28 text-dark-gray alt-font fw-500 d-inline-block w-70 xs-w-100">Jaminan Produk <span class="text-decoration-line-bottom-medium fw-600 text-base-color"> Original dan Berstandar Internasional</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 offset-xl-1 position-relative">
                    <div class="text-end w-80 md-w-75 ms-auto shadow-in skrollable skrollable-between" data-animation-delay="500" data-shadow-animation="true" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)" style="transform: translateY(34.9853px);">
                        <img src="/assets/images/new/panel-700px.jpg" alt="" class="border-radius-5px" data-no-retina="">
                    </div>
                    <div class="overflow-hidden w-60 md-w-50 xs-w-55 position-absolute left-15px bottom-minus-50px shadow-in skrollable skrollable-between" data-shadow-animation="true" data-animation-delay="500" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" style="transform: translateY(-44.1573px);">
                        <img src="/assets/images/new/siemens-product.jpg" alt="" class="border-radius-5px box-shadow-quadruple-large" data-no-retina="">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="p-0 top-space-margin full-screen md-h-600px sm-h-500px section-dark bg-section-home" data-parallax-background-ratio="0.8" style="background-image: url('/assets/images/new/hokiindo-panel-cta.jpg'); background-position: 50% 112.8px; margin-top: 141px; height: 600px;">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="text-white col-xl-7 col-md-9 col-sm-9 position-relative appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateY&quot;: [30, 0], &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeInOutSine&quot; }">
                    <div class="fs-75 lh-75 sm-fs-65 fw-600 mb-20px text-shadow-large ls-minus-2px" >Wujudkan Proyek Anda</div>
                    <div style="">
                        <span class="fs-15 w-70 md-w-85 mb-25px fw-300 d-inline-block text-shadow-large" style="color:white;line-height:1.6"> Hokiindo Raya adalah distributor produk listrik profesional di Tangerang Selatan, berkomitmen menyediakan solusi kelistrikan berkualitas tinggi untuk kebutuhan industri, konstruksi, dan proyek besar. </span>
                    </div>
                    <div class="icon-with-text-style-08" style="">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div class="feature-box-icon feature-box-icon-rounded w-65px h-65px rounded-circle bg-red me-15px rounded-box">
                                <i class="feather icon-feather-arrow-right text-dark-gray icon-extra-medium " style="color:white"></i>
                            </div>
                            <div class="feature-box-content">
                                <a wire:navigate href="/project" class="text-white d-inline-block fs-19 text-shadow-double-large">Proyek dan Referensi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="mb-6 row justify-content-center md-mb-50px">
                <div class="col-lg-7 col-12 md-mb-35px last-paragraph-no-margin" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>

                    <h2 class="text-dark-gray fw-700 ls-minus-2px">Benefit Belanja Kebutuhan Listrik di Hokiindo Raya</h2>
                    <p class="w-85 lg-w-100">Hokiindo Raya adalah pilihan utama untuk produk listrik berkualitas tinggi dan layanan profesional. Berikut adalah alasan mengapa Anda harus berbelanja di sini:</p>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-1 col-12">
                    <div class="overflow-hidden border-radius-10px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="text-center p-30px bg-very-light-green">
                            <span class="fs-24 ls-minus-05px fw-600 text-dark-gray">Sejak 2020, kami menjadi distributor terpercaya.</span>
                        </div>
                        <div class="p-8 overflow-hidden feature-box feature-box-left-icon-middle bg-base-color last-paragraph-no-margin">
                            <div class="feature-box-icon me-15px">
                                <img src="/assets/images/new/logistik.png" alt="" width="100" height="100">
                            </div>
                            <div class="feature-box-content">
                                <span class="text-white d-inline-block fs-45 xl-fs-30 lg-fs-24 fw-700 ls-minus-2px">10.000+</span>
                                <p class="text-white fs-18">Produk terdistribusi dengan aman.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mb-6 row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center sm-mb-50px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div class="col custom-icon-with-text-style-02 border-end xs-border-end-0 md-mb-30px">
                    <div class="feature-box last-paragraph-no-margin">
                        <div class="feature-box-icon">
                            <img class="custom-image-icon mb-30px" src="/assets/images/icon-add/1.png" alt="" width="100px" height="100px"/>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block fs-20 fw-600 text-dark-gray mb-10px"> Distributor Produk Berkualitas</span>
                            <p class="mx-auto w-80 xl-w-100">Kami bekerja sama dengan produsen terkemuka untuk menyediakan produk listrik berkualitas tinggi yang telah teruji di pasar.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col custom-icon-with-text-style-02 border-end md-border-end-0 md-mb-30px">
                    <div class="feature-box last-paragraph-no-margin">
                        <div class="feature-box-icon">
                            <img class="custom-image-icon mb-30px" src="/assets/images/icon-add/2.png" alt="" width="100px" height="100px"/>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block fs-20 fw-600 text-dark-gray mb-10px">Melayani Retail & Skala Besar</span>
                            <p class="mx-auto w-80 xl-w-100">Kami melayani pembelian produk listrik untuk kebutuhan pribadi, proyek kecil, serta solusi skala besar untuk proyek komersial dan industri.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col custom-icon-with-text-style-02 border-end xs-border-end-0 xs-mb-30px">
                    <div class="feature-box last-paragraph-no-margin">
                        <div class="feature-box-icon">
                            <img class="custom-image-icon mb-30px" src="/assets/images/icon-add/3.png" alt="" width="100px" height="100px"/>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block fs-20 fw-600 text-dark-gray mb-10px">Melayani Custom Produk</span>
                            <p class="mx-auto w-80 xl-w-100">Kami merancang dan memproduksi produk listrik yang disesuaikan sesuai kebutuhan pelanggan, dengan berbagai pilihan desain, ukuran, dan material.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col custom-icon-with-text-style-02">
                    <div class="feature-box last-paragraph-no-margin">
                        <div class="feature-box-icon">
                            <img class="custom-image-icon mb-30px" src="/assets/images/icon-add/4.png" alt="" width="100px" height="100px"/>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block fs-20 fw-600 text-dark-gray mb-10px">Layanan Konsultasi Teknis</span>
                            <p class="mx-auto w-80 xl-w-100">Tim ahli kami siap memberikan konsultasi teknis untuk membantu pelanggan memilih produk yang paling sesuai dengan kebutuhan proyek mereka.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>
            <div class="row justify-content-center g-0" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-auto pt-15px pb-15px ps-40px pe-40px md-ps-25px md-pe-25px bg-very-light-green border-radius-100px">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon me-10px">
                            <img src="/assets/images/icon-add/rocket.png" width="32" height="32" alt="">
                        </div>
                        <div class="feature-box-content text-dark-gray fs-18">
                            Pesan cepat sesuai apa yang kamu butuhkan. <a href="https://wa.link/f22nwe"" class="text-dark-gray fw-600">Hubungi Kami Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="overflow-hidden bg-very-light-gray">
        <div class="container">
            <div class="mb-6 text-center row align-items-center justify-content-center text-lg-start">
                <div class="col-xl-5 col-lg-5 md-mb-20px appear anime-complete" data-anime="{ &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }" style="">
                    <h4 class="mb-0 text-dark-gray fw-700 ls-minus-1px">Jelajahi Product Kami</h4>

                </div>
                <div class="col-xl-5 col-lg-5 last-paragraph-no-margin md-mb-30px appear anime-complete" data-anime="{ &quot;translateX&quot;: [-50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }" style="">
                    <p class="w-90 xl-w-100 md-w-80 sm-w-100 md-mx-auto">Kami menyediakan berbagai kategori produk listrik unggulan yang dirancang untuk memenuhi kebutuhan beragam industri dan proyek, memastikan kualitas dan keandalan dalam setiap solusi yang kami tawarkan</p>
                </div>
                <div class="col-xl-2 col-lg-2 d-flex justify-content-center justify-content-lg-end appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <!-- start slider navigation -->
                    <div class="bg-white slider-one-slide-prev-1 icon-small text-dark-gray swiper-button-prev slider-navigation-style-04 box-shadow-large" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-791056622cf221b60" style=""><i class="fa-solid fa-arrow-left"></i></div>
                    <div class="bg-white slider-one-slide-next-1 icon-small text-dark-gray swiper-button-next slider-navigation-style-04 box-shadow-large" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-791056622cf221b60" style=""><i class="fa-solid fa-arrow-right"></i></div>
                    <!-- end slider navigation -->
                </div>
            </div>

            <div class="mb-6 row align-items-center">
                <div class="col-12">
                    <div class="outside-box-right-25 sm-outside-box-right-0">
                        <div class="swiper magic-cursor slider-one-slide" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 3 }, "320": { "slidesPerView": 2 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="overflow-hidden interactive-banner-style-09 border-radius-6px position-relative">
                                        <img src="/assets/images/new/Drive-Technology.jpg" alt="" />
                                        <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
                                        <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">
                                            <div class="mt-auto overflow-hidden d-flex align-items-start w-100 z-index-1 position-relative flex-column">
                                                <span class="text-white fw-600 fs-20">Drive Technology</span>
                                                <span class="text-white content-title fs-15 fw-500 text-uppercase ls-05px">Penggerak Efisien</span>
                                                <a href="#" class="text-white content-title-hover fs-15 lh-24 fw-500 ls-05px text-uppercase opacity-6 text-decoration-line-bottom">Lihat Kategori</a>
                                                <span class="text-center bg-white content-arrow lh-42px rounded-circle w-50px h-50px ms-20px"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                            </div>
                                            <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9">
                                            </div>
                                            <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                            <a href="d#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100 padding-tb"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="overflow-hidden interactive-banner-style-09 border-radius-6px position-relative">
                                        <img src="/assets/images/new/Automation-Technology.jpg" alt="" />
                                        <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
                                        <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">
                                            <div class="mt-auto overflow-hidden d-flex align-items-start w-100 z-index-1 position-relative flex-column">
                                                <span class="text-white fw-600 fs-20">Automation Technology</span>
                                                <span class="text-white content-title fs-15 fw-500 text-uppercase ls-05px">Otomatisasi Canggih</span>
                                                <a href="#" class="text-white content-title-hover fs-15 lh-24 fw-500 ls-05px text-uppercase opacity-6 text-decoration-line-bottom">Lihat Kategori</a>
                                                <span class="text-center bg-white content-arrow lh-42px rounded-circle w-50px h-50px ms-20px"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                            </div>
                                            <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9">
                                            </div>
                                            <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                            <a href="d#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100 padding-tb"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="overflow-hidden interactive-banner-style-09 border-radius-6px position-relative">
                                        <img src="/assets/images/new/Low-Voltage.jpg" alt="" />
                                        <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
                                        <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">
                                            <div class="mt-auto overflow-hidden d-flex align-items-start w-100 z-index-1 position-relative flex-column">
                                                <span class="text-white fw-600 fs-20">Low Voltage Control and Distribution</span>
                                                <span class="text-white content-title fs-15 fw-500 text-uppercase ls-05px">Distribusi Aman</span>
                                                <a href="#" class="text-white content-title-hover fs-15 lh-24 fw-500 ls-05px text-uppercase opacity-6 text-decoration-line-bottom">Lihat Kategori</a>
                                                <span class="text-center bg-white content-arrow lh-42px rounded-circle w-50px h-50px ms-20px"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                            </div>
                                            <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9">
                                            </div>
                                            <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                            <a href="d#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100 padding-tb"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="overflow-hidden interactive-banner-style-09 border-radius-6px position-relative">
                                        <img src="/assets/images/new/AutoGo-Series.jpg" alt="" />
                                        <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
                                        <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">
                                            <div class="mt-auto overflow-hidden d-flex align-items-start w-100 z-index-1 position-relative flex-column">
                                                <span class="text-white fw-600 fs-20">AutoGo Series</span>
                                                <span class="text-white content-title fs-15 fw-500 text-uppercase ls-05px">Seri Otomatis</span>
                                                <a href="#" class="text-white content-title-hover fs-15 lh-24 fw-500 ls-05px text-uppercase opacity-6 text-decoration-line-bottom">Lihat Kategori</a>
                                                <span class="text-center bg-white content-arrow lh-42px rounded-circle w-50px h-50px ms-20px"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                            </div>
                                            <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9">
                                            </div>
                                            <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                            <a href="d#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100 padding-tb"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="overflow-hidden interactive-banner-style-09 border-radius-6px position-relative">
                                        <img src="/assets/images/new/LiteGo-Series.jpg" alt="" />
                                        <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
                                        <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">
                                            <div class="mt-auto overflow-hidden d-flex align-items-start w-100 z-index-1 position-relative flex-column">
                                                <span class="text-white fw-600 fs-20">LiteGo Series</span>
                                                <span class="text-white content-title fs-15 fw-500 text-uppercase ls-05px">Penerangan Ringan</span>
                                                <a href="#" class="text-white content-title-hover fs-15 lh-24 fw-500 ls-05px text-uppercase opacity-6 text-decoration-line-bottom">Lihat Kategori</a>
                                                <span class="text-center bg-white content-arrow lh-42px rounded-circle w-50px h-50px ms-20px"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                            </div>
                                            <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9">
                                            </div>
                                            <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                            <a href="d#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100 padding-tb"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="overflow-hidden interactive-banner-style-09 border-radius-6px position-relative">
                                        <img src="/assets/images/new/MateGo-Series.jpg" alt="" />
                                        <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
                                        <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">
                                            <div class="mt-auto overflow-hidden d-flex align-items-start w-100 z-index-1 position-relative flex-column">
                                                <span class="text-white fw-600 fs-20">MateGo Series</span>
                                                <span class="text-white content-title fs-15 fw-500 text-uppercase ls-05px">Seri MateGo</span>
                                                <a href="#" class="text-white content-title-hover fs-15 lh-24 fw-500 ls-05px text-uppercase opacity-6 text-decoration-line-bottom">Lihat Kategori</a>
                                                <span class="text-center bg-white content-arrow lh-42px rounded-circle w-50px h-50px ms-20px"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                            </div>
                                            <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9">
                                            </div>
                                            <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                            <a href="d#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100 padding-tb"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="overflow-hidden interactive-banner-style-09 border-radius-6px position-relative">
                                        <img src="/assets/images/new/Industrial-Lighting.jpg" alt="" />
                                        <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
                                        <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">
                                            <div class="mt-auto overflow-hidden d-flex align-items-start w-100 z-index-1 position-relative flex-column">
                                                <span class="text-white fw-600 fs-20">Industrial Lighting</span>
                                                <span class="text-white content-title fs-15 fw-500 text-uppercase ls-05px">Penerangan Industri</span>
                                                <a href="#" class="text-white content-title-hover fs-15 lh-24 fw-500 ls-05px text-uppercase opacity-6 text-decoration-line-bottom">Lihat Kategori</a>
                                                <span class="text-center bg-white content-arrow lh-42px rounded-circle w-50px h-50px ms-20px"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                            </div>
                                            <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9">
                                            </div>
                                            <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                            <a href="d#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100 padding-tb"></a>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>

    <section style="padding: 20px 0">
        <div class="container">

            <div class="row position-relative clients-style-08 mt-25px" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 800, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="text-center col swiper feather-shadow" data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 3000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false, "pauseOnMouseEnter": false}, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 5 }, "768": { "slidesPerView": 3 }, "576": { "slidesPerView": 2 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="/assets/images/logo-client/1.png" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="/assets/images/logo-client/2.png" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="/assets/images/logo-client/3.png" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="/assets/images/logo-client/4.png" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="/assets/images/logo-client/5.png" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="/assets/images/logo-client/6.png" alt="" /></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>










</div>
