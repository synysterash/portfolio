@extends('layouts.master')

@section('head')
@endsection

@section('section')
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>Ashman Rahman</h1>
            <p>I'm a <span class="typed" data-typed-items="Developer, Freelancer, Thinker, Problem solver"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                    <p>Everyone has an interesting background; so does myself. A brief introduction about me, to you.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src={{ asset('assets/img/about_dp.png') }} class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>Web Developer</h3>
                        <p class="fst-italic">
                            A forward-thinking, challenge-driven person that loves to solve problems. By solving problems, I
                            train myself to think critically and
                            logically.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>30 June
                                            2001</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <a
                                            href="https://edrisashman.site">edrisashman.site</a></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+6019 494
                                            4096</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Johor Bahru,
                                            Johor</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>22</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Qualification:</strong>
                                        <span>Diploma</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <a
                                            href="mailto:edrisashman@gmail.com">edrisashman@gmail.com </a></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                        <span>Available</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p class="text-center">
                            I was a wanderer, moving from Melaka - Shah Alam - Kuala Lumpur - Perlis and now in Johor Bahru.
                            The journey familiarised myself with different cultures
                            in different states. Enriched with knowledge and majestic facilities, Universiti Teknologi
                            Malaysia in Johor Bahru became my current destination for me to undertake
                            a bachelor's degree in Management of Technology.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section hidden id="facts" class="facts">
            <div class="container">

                <div class="section-title">
                    <h2>Facts</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Happy Clients</strong> consequuntur quae</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Projects</strong> adipisci atque cum quia aut</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills</h2>
                    <p></p>
                </div>

                <div class="row skills-content">

                    <div class="col-lg-6" data-aos="fade-up">

                        <div class="progress">
                            <span class="skill">HTML <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">CSS <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">JavaScript <i class="val">65%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        <div class="progress">
                            <span class="skill">PHP <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Premiere Pro <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">SQL <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Resume</h2>
                    <p>A wanderer &amp; explorer have multiple experiences and a colourful background; My experiences are
                        not far within the cusp of a wanderer &amp; and explorer.
                        I strive and thrive to expand my skillset and knowledge bank to undertake challenges on challenges
                        so that I can become a better version of myself.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Summary</h3>
                        <div class="resume-item pb-0">
                            <h4> Ashman Rahman</h4>
                            <p><em> A forward-thinking, challenge-driven person that loves to solve problems. By solving
                                    problems, I train myself to think critically and logically.</em></p>
                            <ul>
                                <li>Johor Bahru, Malaysia</li>
                                <li> <a href="http://wa.me/60194944096" target=".blank"> +6019 494 4096 </a></li>
                                <li><a href="mailto:edrisashman@gmail.com"> edrisashman@gmail.com </a></li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Bachelor of Management (Technology) with Honours</h4>
                            <h5>2022 - 2025</h5>
                            <p><em>Universiti Teknologi Malaysia, Johor</em></p>
                            <p>I am currently undertaking this bachelor degree since 2022.</p>
                        </div>
                        <div class="resume-item">
                            <h4>Diploma in Technology Management</h4>
                            <h5>2019 - 2022</h5>
                            <p><em>Universiti Teknologi Malaysia, Kuala Lumpur</em></p>
                            <p>I graduated with a CGPA of 3.91 and received the Dean's Award for my achievements.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>Backend Engineer</h4>
                            <h5>2023 - Present</h5>
                            <p><em>Kestrl LTD </em></p>
                            <ul>
                                <li>API Development:
                                    Designing, developing, and implementing the backend API architecture that powers the
                                    company's app. This involves creating robust and scalable APIs that efficiently handle
                                    data retrieval, processing, and storage.</li>
                                <li>Database Management: Collaborating with the database team to design and optimize the
                                    database schema and queries used by the API. Ensuring data integrity, performance, and
                                    security are maintained.</li>
                                <li>API Documentation: Creating and maintaining API documentation for internal and external
                                    use.</li>
                                <li>API Testing: Writing unit tests and integration tests to ensure the API is working as
                                    expected.</li>
                                <li>Server-Side Programming: Writing clean, efficient, and maintainable code using
                                    server-side programming languages such as PHP with Laravel framework. Implementing
                                    business logic, handling data validation, and integrating external services or APIs.
                                </li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Freelance Developer</h4>
                            <h5>2022 - 2022</h5>
                            <p><em>Zettanett Sdn Bhd </em></p>
                            <ul>
                                <li>Pitch, create &amp; develop solutions for client.</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>IT Technician</h4>
                            <h5>2022</h5>
                            <p><em>Taiace Engineering, Nilai, Malaysia</em></p>
                            <ul>
                                <li>Developed a website (Portal IkanFresh).</li>
                                <li>Developed an aquaculture management system (AquaDash) for fish culture.</li>
                                <li>Maintained the company's network and consulted with Telekom Malaysia for the best
                                    network solution.</li>
                                <li>Attended to multiple IT tickets to resolve staff's issue.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p class="text-center">A quick glance over my recent projects.</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="d-flex portfolio-container align-items-stretch" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-6 col-md-6 portfolio-item filter-web ">
                        <div class="portfolio-wrap ">
                            <img src={{ asset('assets/img/ikan-fresh-dark.svg') }} class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="https://portal.ikan-fresh.com/" target=".blank" title="Website"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src={{ asset('assets/img/aquadash_text_bold_outline.svg') }}
                                style="background-color: grey" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="https://aquadash.ikan-fresh.com/" target=".blank" title="Website"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Services</h2>
                    <p class="text-center">I am a highly skilled and versatile individual, offering a unique combination of
                        talents and expertise that can help you to achieve your goals.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                        <div class="icon"><i class="bi bi-water"></i></div>
                        <h4 class="title"><a href="">Website development</a></h4>
                        <p class="description">Planning, strategizing and coding the website to make it functional and
                            user-friendly.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bi bi-ui-checks-grid"></i></div>
                        <h4 class="title"><a href="">Front-end development</a></h4>
                        <p class="description">Utilise HTML, CSS and JavaScript to develop front-end website.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-server"></i></div>
                        <h4 class="title"><a href="">Back-end development</a></h4>
                        <p class="description">Utilise languages such as PHP with Laravel framework.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bi bi-segmented-nav"></i></div>
                        <h4 class="title"><a href="">Responsive design</a></h4>
                        <p class="description">To ensure compatibility with mobile devices.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bi bi-window"></i></div>
                        <h4 class="title"><a href="">Accessibility and usability testing</a></h4>
                        <p class="description">Ensure that a website is user-friendly and accessible to all users.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon"><i class="bi bi-wrench"></i></div>
                        <h4 class="title"><a href="">Maintenance and support</a></h4>
                        <p class="description">Keep a website up-to-date and running smoothly.</p>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section hidden id="testimonials" class="testimonials section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Testimonials</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                    duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                    minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                    labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p class="text-center">Do not hesitate to enquire me regarding the services that I offer.</p>
                </div>

                <div class="row text-center" data-aos="fade-in">
                    <div class="col-md-12 d-flex justify-content-center ">
                        <div class="info">
                            <div class="address">
                                <div class="col-md-12 d-flex justify-content-center pb-2">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="col-md-12 d-flex justify-content-center">
                                    <h4 class="p-0">Location:</h4>
                                </div>
                                <p>Iskandar Puteri, Johor</p>
                            </div>

                            <div class="email">
                                <div class="col-md-12 d-flex justify-content-center pb-2">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="col-md-12 d-flex justify-content-center">
                                    <h4 class="p-0">Email:</h4>
                                </div>
                                <p>edrisashman@gmail.com</p>
                            </div>

                            <div class="phone">
                                <div class="col-md-12 d-flex justify-content-center pb-2">
                                    <i class="bi bi-phone"></i>
                                </div>
                                <div class="col-md-12 d-flex justify-content-center">
                                    <h4 class="p-0">Call:</h4>
                                </div>
                                <p>6019 494 4096</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7977.196974680504!2d103.62677442412647!3d1.4168449458666927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da0bf05f936b79%3A0x837376d3e87edf0!2sMedini%206!5e0!3m2!1sen!2smy!4v1688202560972!5m2!1sen!2smy"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
@endsection

@section('js')
@endsection
