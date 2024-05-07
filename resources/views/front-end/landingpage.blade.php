@extends('front-end.layouts.main')
@section('content')
    {{-- Banner section --}}
    <section id="home" class="banner_wrapper"
        style="background:url('{{ asset('front-end/bootslander/img/hero_bg.png') }}') center top no-repeat; background-size: cover;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 header-img-section">
                    <img src="{{ asset('front-end/bootslander/img/hero.png') }}" class="img-fluid" alt="Banner">
                </div>
                <div
                    class="col-md-6 my-5 my-md-0 text-center text-md-start d-flex align-items-center justify-content-center flex-column    ">
                    <p class="banner-subtitle">Social Media Marketing</p>
                    <h1 class="banner-title">Start <span>connecting</span> with your online customers</h1>
                    <p class="banner-title-text">Hashtag is a bright and results driven social media marketing drive
                        customers, grow your audience and expand your reach.</p>
                    <div class="learn-more-btn-section">
                        <a class="nav-link learn-more-btn btn-header" href="#about">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Banner section exit --}}

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
        </g>
    </svg>

    <section id="about" class="about"
        style="background:url('{{ asset('front-end/bootslander/img/hero_bg.png') }}') center top no-repeat; background-size: cover;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-lg-6 justify-content-center align-items-stretch" data-aos="zoom-out"
                    data-aos-delay="300">
                    <img src="{{ asset('front-end/bootslander/img/video.png') }}" class="img-fluid animated" alt="">
                    <a href="#" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                </div>
                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                    data-aos="fade-left">
                    <h3>Lorem, ipsum. ?</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut adipisci doloremque quod. Eveniet
                        voluptate ut dicta totam iusto, quis id libero mollitia? Officiis est fuga quibusdam neque aperiam
                        dolore obcaecati voluptatibus perspiciatis.</p>
                    <div class="icon-box aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-check-double"></i></div>
                        {{-- <h4 class="title"><a href="">Lorem Ipsum</a></h4> --}}
                        <p class="description">Kami merupakan Developer software yang melayani pembuatan software untuk
                            Sistim Informasi Managemen anda.</p>
                    </div>
                    <div class="icon-box aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-check-double"></i></div>
                        {{-- <h4 class="title"><a href="">Lorem Ipsum</a></h4> --}}
                        <p class="description">Motto kami adalah Mitra yang Amanah, kami selalu mengupayakan mengembangkan
                            dan mengubah proses kerja fisik menjadi proses kerja elektronik/digital yang modern dengan
                            efisiensi dan efektivitas yang lebih tinggi sehingga dengan menggunakan produk kami, customer
                            akan semakin terbantu, semakin mudah dan semakin rapi dalam pembukuannya sehinga performa kerja
                            dapat ditingkatkan.</p>
                    </div>
                    <div class="icon-box aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-check-double"></i></div>
                        {{-- <h4 class="title"><a href="">Lorem Ipsum</a></h4> --}}
                        <p class="description">Selain membuat software, kami juga memberikan konsultasi berupa Teknologi
                            Informasi yang kemudian dituangkan kedalam program yang akan digunakan oleh pengguna.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->

    <section id="about" class="about_wrapper wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-lg-5 text-center text-lg-start">
                    <p class="about_number">1</p>
                    <h2 class="about_title">Showcase your brand beautifully with our services</h2>
                    <p class="about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis felis nulla,
                        porttitor et ex a, porttitor rhoncus ex. Sed tellus turpis, finibus in elit rhoncus, varius cursus
                        enim. Sed tempus sapien in nisi auctor lacinia. Donec metus felis, ultricies nec pharetra.</p>
                    <div class="my-5">
                        <a class="learn-more-btn" href="#innovate">Find out more</a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-7 text-center text-md-start" data-aos="fade-right'">
                    <img src="{{ asset('front-end/bootslander/img/loading.gif') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-12 col-lg-5 text-center text-lg-start">
                    <p class="about_number">2</p>
                    <h2 class="about_title">The best digital marketing company we understand</h2>
                    <p class="about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis felis nulla,
                        porttitor et ex a, porttitor rhoncus ex. Sed tellus turpis, finibus in elit rhoncus, varius cursus
                        enim. Sed tempus sapien in nisi auctor lacinia. Donec metus felis, ultricies nec pharetra.</p>
                    <div class="my-5">
                        <a class="learn-more-btn" href="#innovate">Find out more</a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-7 text-center text-md-start" data-aos="fade-left'">
                    <img src="{{ asset('front-end/bootslander/img/service2.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div><br><br>

        <div class="projects"
            style="background:url('{{ asset('front-end/bootslander/img/hero_bg.png') }}') center top no-repeat; background-size: cover; ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 text-center">
                        <h2>232</h2>
                        <p>Happy Clients</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center">
                        <h2>501</h2>
                        <p>Projects</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center">
                        <h2>1463</h2>
                        <p>Hours Of Support</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center">
                        <h2>10</h2>
                        <p>Hard Workers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="features_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <p class="features_subtitle">So much to offer</p>
                    <h2 class="features_title">Our automated features</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="ft-1">
                        <i class="ri-code-s-slash-fill icon" style="color: #ffbb2c;"></i>
                        <h3>Web Develpment</h3>
                        <p class="features_text">Jasa pembuatan dan pengembangan website company profile, online shop,
                            personal website, e-commerce, </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="ft-1">
                        <i class="ri-tools-fill icon" style="color: #ffbb2c;"></i>
                        <h3>Web Maintenance</h3>
                        <p class="features_text">Bagi Anda yang tidak sempat lagi mengurus website, Kami siap melakukan
                            maintenance website </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="ft-1">
                        <i class="ri-volume-up-line icon" style="color: #ffbb2c;"></i>
                        <h3>Web Promotion</h3>
                        <p class="features_text">Bagi anda yang memiliki Usaha tetapi belum mempunyai web, Kami siap
                            melakukan promosi usahana Anda.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="ft-1">
                        <i class="ri-google-line icon" style="color: #ffbb2c;"></i>
                        <h3>Social Media</h3>
                        <p class="features_text">Layanan social media management mulai dari setup account hingga regular
                            maintenance</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="ft-1">
                        <i class="ri-global-line icon" style="color: #ffbb2c;"></i>
                        <h3>Undang Web</h3>
                        <p class="features_text">Sebar Undangan Hanya dalam Genggaman</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="ft-1">
                        <i class="ri-file-word-2-line icon" style="color: #ffbb2c;"></i>
                        <h3>CV + Surat Lamaran</h3>
                        <p class="features_text">Layanan Jasa Pembuatan cv dan surat lamaran dengan Harga Bersahabat</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="price_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <p class="pricing_subtitle">A plan for everyone</p>
                    <h2 class="pricing_title">Choose your pricing plan</h2>
                </div>
            </div>
            <div class="row align-items-center px-3 px-lg-0">
                <div class="col-sm-6 col-lg-4">
                    <div class="pricing_card pricing_one">
                        <p class="pricing_period">Personal</p>
                        <img src="{{ asset('front-end/bootslander/img/price1.png') }}" class="img-fluid" alt="">
                        <p class="pricing_rate"><sup>Rp. 100,000</sup></p>
                        <div class="pricing_all_plan">
                            <ul>
                                <li>monthly

                                    Unlimited Accounts
                                    System Management
                                    Database Statistics
                                    Exportable Data</li>
                            </ul>
                        </div>
                        <a class="learn-more-btn m-0"
                            href="https://web.whatsapp.com/send?phone+{{ env('WHATSAPP') }}&amp;text=Halo Admin saya mau Konsultasi Personal"
                            target="_blank">Get Started</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="pricing_card pricing_one">
                        <p class="pricing_period">Growth</p>
                        <img src="{{ asset('front-end/bootslander/img/price2.png') }}" class="img-fluid" alt="">
                        <p class="pricing_rate"><sup>Rp. 500,000</sup></p>
                        <div class="pricing_all_plan">
                            <ul>
                                <li>monthly

                                    Unlimited Accounts
                                    System Management
                                    Database Statistics
                                    Exportable Data</li>
                            </ul>
                        </div>
                        <a class="learn-more-btn m-0"
                            href="https://web.whatsapp.com/send?phone=+{{ env('WHATSAPP') }}&amp;text=Halo Admin saya mau Konsultasi Growth"
                            target="_blank">Get Started</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="pricing_card pricing_one">
                        <p class="pricing_period">Professional</p>
                        <img src="{{ asset('front-end/bootslander/img/price3.png') }}" class="img-fluid" alt="">
                        <p class="pricing_rate"><sup>Rp. 1,000,000</sup></p>
                        <div class="pricing_all_plan">
                            <ul>
                                <li>monthly

                                    Unlimited Accounts
                                    System Management
                                    Database Statistics
                                    Exportable Data</li>
                            </ul>
                        </div>
                        <a class="learn-more-btn m-0"
                            href="https://web.whatsapp.com/send?phone={{ env('WHATSAPP') }}&amp;text=Halo Admin saya mau Konsultasi Professional"
                            target="_blank">Get Started</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Free Trial -->
        <div class="free_trial"
            style="background:url('{{ asset('front-end/bootslander/img/hero_bg.png') }}') center top no-repeat; background-size: cover;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-lg-6 text-center text-lg-start">
                        <h2 class="free_title">Ready to get started now with our multipurpose landing page?</h2>
                    </div>
                    <div class="col-sm-12 col-lg-6 text-center text-lg-end mt-4 mt-lg-0">
                        <a class="learn-more-btn" href="#contact"><i class="fa fa-rocket" aria-hidden="true"></i>Get
                            Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="testimonial_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="testimonials_subtitle">Clients love us</p>
                    <h2 class="testimonials_title">Testimonials</h2>
                </div>
            </div>
            <div class="row align-items-center mb-5">
                <div class="col-sm-12 col-lg-4 mb-5 mb-lg-0">
                    <img src="{{ asset('front-end/bootslander/img/testi1.png') }}" class="img-fluid">
                </div>
                <div class="col-sm-12 col-lg-7 offset-lg-1 mb-5 mb-lg-0">
                    <div class="testimonials_card">
                        <h3>James Bond</h3>
                        <p class="testimonials_role">Chief executive officer</p>
                        <p class="testimonials_text">Duis felis nulla, porttitor et ex a, porttitor rhoncus ex. Sed tellus
                            turpis, finibus in elit rhoncus, varius cursus enim. Sed tempus sapien in..</p>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 mb-5 mb-lg-0">
                    <img src="{{ asset('front-end/bootslander/img/testi2.png') }}" class="img-fluid">
                </div>
                <div class="col-sm-12 col-lg-7 offset-lg-1 mb-5 mb-lg-0">
                    <div class="testimonials_card">
                        <h3>Johny Roy</h3>
                        <p class="testimonials_role">Marketing director</p>
                        <p class="testimonials_text">Duis felis nulla, porttitor et ex a, porttitor rhoncus ex. Sed tellus
                            turpis, finibus in elit rhoncus, varius cursus enim. Sed tempus sapien in..</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="brands" class="brand_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <p class="brand_subtitle">Who we work with</p>
                    <h2 class="brand_title">Client showcase</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-2 col1 showcase_card align-self-center">
                    <a href="https://source.unsplash.com/random?sosial-media" class="venobox vbox-item"
                        data-gall="gallery-item"><img src="https://source.unsplash.com/random?sosial-media"
                            alt="" class="mb-4 img-fluid"></a>
                </div>
                <div class="col-sm-2 col1 showcase_card align-self-center">
                    <a href="https://source.unsplash.com/random?sosial-media" class="venobox vbox-item"
                        data-gall="gallery-item"><img src="https://source.unsplash.com/random?sosial-media"
                            alt="" class="mb-4 img-fluid"></a>
                </div>
                <div class="col-sm-2 col1 showcase_card align-self-center">
                    <a href="https://source.unsplash.com/random?sosial-media" class="venobox vbox-item"
                        data-gall="gallery-item"><img src="https://source.unsplash.com/random?sosial-media"
                            alt="" class="mb-4 img-fluid"></a>
                </div>
                <div class="col-sm-2 col1 showcase_card align-self-center">
                    <a href="https://source.unsplash.com/random?sosial-media" class="venobox vbox-item"
                        data-gall="gallery-item"><img src="https://source.unsplash.com/random?sosial-media"
                            alt="" class="mb-4 img-fluid"></a>
                </div>
                <div class="col-sm-2 col1 showcase_card align-self-center">
                    <a href="https://source.unsplash.com/random?sosial-media" class="venobox vbox-item"
                        data-gall="gallery-item"><img src="https://source.unsplash.com/random?sosial-media"
                            alt="" class="mb-4 img-fluid"></a>
                </div>
                <div class="col-sm-2 col1 showcase_card align-self-center">
                    <a href="https://source.unsplash.com/random?sosial-media" class="venobox vbox-item"
                        data-gall="gallery-item"><img src="https://source.unsplash.com/random?sosial-media"
                            alt="" class="mb-4 img-fluid"></a>
                </div>
                <div class="col-sm-2 col1 showcase_card align-self-center">
                    <a href="https://source.unsplash.com/random?sosial-media" class="venobox vbox-item"
                        data-gall="gallery-item"><img src="https://source.unsplash.com/random?sosial-media"
                            alt="" class="mb-4 img-fluid"></a>
                </div>
                <div class="col-sm-2 col1 showcase_card align-self-center">
                    <a href="https://source.unsplash.com/random?sosial-media" class="venobox vbox-item"
                        data-gall="gallery-item"><img src="https://source.unsplash.com/random?sosial-media"
                            alt="" class="mb-4 img-fluid"></a>
                </div>
            </div>
        </div>
    </section>

    <section id="faqs" class="faq_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <p class="faq_subtitle">We're here to help</p>
                    <h2 class="faq_title">Frequently asked questions</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-12 col-lg-8 mb-5 mb-lg-0">
                    <div class="accordion accordion-flush" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">Non
                                    consectetur a erat nam at lectus urna duis? </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                    curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                                    non. </div>
                            </div>
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Non
                                    consectetur a erat nam at lectus urna duis? </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                    curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                                    non. </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <img src="{{ asset('front-end/bootslander/img/faq.png') }}" class="img-fluid">
                </div>
            </div>
        </div>

        <!-- Send message -->
        <div class="free_trial">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-lg-6 text-center text-lg-start">
                        <h2 class="free_title">Questions not listed above? Send us a message and we'll get back to you</h2>
                    </div>
                    <div class="col-sm-12 col-lg-6 text-center text-lg-end mt-4 mt-lg-0">
                        <a class="learn-more-btn" href="#contact"><i class="fa fa-rocket" aria-hidden="true"></i> Free
                            Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title aos-init aos-animate" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div>
            <div class="row">
                <div class="col-lg-4 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>Jl. Jendral Sudirman,Nagri Kaler, Kec. Purwakarta (MPP Bale Madukara lt. 1, samping konter
                                imigrasi)
                        </div>
                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p><a href="mailto:maulana.yusup8989@gmail.com">pojokwirausaha@nuparis.id</a></p>
                        </div>
                        <div class="phone">
                            <i class="icofont-linkedin"></i>
                            <h4>No Phone :</h4>
                            <p><a href="tel:6281993390000" target="_blank" rel="noopener noreferrer">62819-9339-0000</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mt-5 mt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-delay="200">
                    <div class="loading"></div>
                    <form method="post" role="form" class="php-email-form" id="message-form">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" data-rule="minlen:4"
                                    data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" data-rule="minlen:4"
                                data-msg="Please enter at least 8 chars of subject">
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="footer_wrapper"
        style="background:url('{{ asset('front-end/bootslander/img/hero_bg.png') }}') center top no-repeat; background-size: cover; background-color: var(--bg-black); color: var(--text-white);">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-5 footer_logo mb-4 mb-lg-0">
                    <a href="/"><img src="{{ asset('front-end/bootslander/img/logo.png') }}" class="logo"
                            alt="" width="150px"></a>
                    <p class="footer_text">Hashtag is a bright and results driven social media marketing drive customers,
                        grow your audience and expand your reach.</p>
                </div>

                <div class="col-lg-3 mb-4 mb-lg-0">
                    <h3 class="footer_title">Social Media</h3>
                    <p>
                        <a href="https://www.instagram.com/maulana_yusup701/" target="_blank"
                            class="footer_social_media_icon"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/futaba701" target="_blank" class="footer_social_media_icon"><i
                                class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/maulanayusup701/" target="_blank"
                            class="footer_social_media_icon"><i class="fab fa-linkedin"></i></a>
                    </p>
                </div>
                <div class="col-12 footer_credits text-center">
                    <span>© Copyright <strong><span>Hashtag Landing Page</span></strong>. All Rights Reserved</span>
                </div>
            </div>
        </div>
    </section>
@endsection
