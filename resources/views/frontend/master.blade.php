<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>St. Martin CSA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


   <!-- Navbar Start -->
    <div class=" container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>P.O. Box 2098-20300. Nyahururu, Kenya </small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i> info@saintmartin-kenya.org</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-white-50 ms-3" href="https://www.facebook.com/SaintMartinCSA" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="text-white-50 ms-3" href="https://www.youtube.com/channel/UCGz-9Kfu501Jzn0SbbPDofg" target="_blank"><i class="fab fa-youtube"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-white-50 ms-3" href="https://www.instagram.com/saintmartincsa/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">St.Martin<span class="text-white"> CSA</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/about" class="nav-item nav-link active">About Us</a>
                    <a href="/programme" class="nav-item nav-link active">Our Programmes</a>
                    <a href="/partners" class="nav-item nav-link active">Our Partners</a>
                    <a href="/contact" class="nav-item nav-link active">Contact Us</a>
                   
                    
                </div>
                {{-- <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-outline-primary py-2 px-3" href="">
                        Donate Now
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div> --}}
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Only Through Community</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">The solution to problems lies in the community</p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="/news">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Empower The Communities</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Information enables solidarity</p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="/news">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    
    <!-- Carousel End -->


<!-- Causes Start -->
    <div class="container-xxl bg-light my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">2024</div>
                <h1 class="display-6 mb-5">News</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>SELF HELP GROUPS</small>
                            </div>
                            <h5 class="mb-3">THE POWER OF SELF HELP GROUPS IN IMPROVING LIVELIHOODS IN LAIKIPIA COUNTY</h5>
                            <p>In 2021, over 2 million people in Laikipia faced severe food insecurity due to drought, hitting the ultra-poor and marginalized hardest. In 2023, St. Martin introduced Self-Help Groups (SHGs) to support these vulnerable individuals with training and financial aid. The initiative benefitted 238 people across 21 SHGs, helping them build resilient livelihoods and adapt to harsh climate conditions.</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/self.jpg" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="/news">
                                    Read More
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>AMANI CLUBS</small>
                            </div>
                            <h5 class="mb-3">AMANI CLUBS</h5>
                          <p>The paragraph contains 124 words. Here's a summary in 62 words:

                            Established in 2014 by the National Cohesion and Integration Commission and the Ministry of Education, Amani Clubs promote peace in Kenyan schools and communities. These student-led groups foster harmony, tackle issues of ethnicity and diversity, and equip students with skills for peaceful conflict resolution. The clubs demonstrate the power of education in transforming societies and nurturing responsible, peace-promoting citizens.</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/amani.jpg" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="/news">
                                    Read More
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>YOUTH PROJECTS</small>
                            </div>
                            <h5 class="mb-3">YOUTH PROJECT LAUNCH AND EXPO</h5>
                            <p>Technical and Vocational Training (TVET) enhances employability and social inclusion. Kenya prioritizes TVET to combat youth unemployment by providing essential skills. St. Martin CSA, in partnership with Laikipia County Government, launched a Public-Private Partnership to strengthen TVET services through policy support, system development, and staff training. Laikipia Governor Joshua Irungu inaugurated the initiative on January 30, 2024, highlighting the impact of collaboration.</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/youth.jpg" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="/news">
                                    Read More
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>New Year 2024</small>
                            </div>
                            <h5 class="mb-3">New Year 2024 with New Director and Renewed Commitment!</h5>
                         <p>As we stepped into the New Year, we were filled with joy as we shared some exciting changes and renewed commitment within our organization. We recently bid farewell to Irene Wamithi, our dedicated Director for the past five years, and welcomed Maurice Muthiga as our new Director. This transition marked a significant moment for us as we continue to grow and evolve.</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/newyear.jpg" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="/news">
                                    Read More
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Wheels of resilient livelihoods</small>
                            </div>
                            <h5 class="mb-3">Wheels of resilient livelihoods</h5>
                            <p>Volunteers are crucial to Kenya's development, with community health volunteers active in every village. The 2030 Agenda for Sustainable Development recognizes volunteer groups as key to achieving the SDGs, as they drive long-term attitude and behavior changes. Volunteerism enhances civic engagement, social inclusion, and solidarity, making it essential for achieving sustainable development goals and involving people at all levels.</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/wheels.png" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="/news">
                                    Read More
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Causes End -->


  <!-- Testimonial Start -->
  <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Stakeholders</div>
            <h1 class=" mb-5">St. Martin SCA's impact to stakeholders and the community at large.</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>"St. Martin CSA transformed my life. As a street child, I found shelter, education, and dignity through their programs. The volunteers’ love gave me hope and a future. Today, I’m self-reliant and advocate for others like me. St. Martin didn’t just save me; it empowered me to dream again."</p>
                    <h5 class="mb-1">Grace</h5>
                    <span class="fst-italic">Beneficiary</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>"Volunteering at St. Martin CSA reshaped my life. Helping vulnerable individuals taught me compassion, patience, and the power of community. The Spirit of St. Martin inspired me to balance heart and head. Being part of this movement is fulfilling, knowing our collective effort transforms lives and strengthens our shared humanity."</p>
                    <h5 class="mb-1">John</h5>
                    <span class="fst-italic">Volunteer</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>"Working at St. Martin CSA redefined my role as a social worker. Empowering communities alongside volunteers taught me humility and solidarity. The organization’s values have shaped both my work and personal growth. St. Martin showed me that true change happens through love, enabling vulnerable people to reclaim their dignity."</p>
                    <h5 class="mb-1">Social worker</h5>
                    <span class="fst-italic">Victor</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>"Leading St. Martin CSA has been humbling and inspiring. Watching the Spirit of St. Martin transform lives is incredible. Placing volunteers and beneficiaries at the center reaffirmed our mission: change happens through community. This movement of love has taught me that leadership is about empowering others, not standing at the top."</p>
                    <h5 class="mb-1">James</h5>
                    <span class="fst-italic">Director</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


    <!--newsletter Start -->
    <div class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-2.jpg">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">CELEBRATING OUR OWN</div>
                    <h1 class="display-6 text-white mb-5">Leave Your Footprint!</h1>
                    <p class="text-white-50 mb-0">St. Martin CSA celebrates 25 years of impactful volunteerism with the video "Leave Your Footprint," honoring those who’ve transformed lives through love, time, and expertise. On Annual Volunteers' Day, events in Marmanet, Sipili, Maili Nne, and Nyahururu applaud volunteers for restoring dignity, fostering growth, and driving community transformation. Thank you, volunteers!</p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100">
                        <iframe width="650" height="383" src="https://www.youtube.com/embed/ph9P68CfeBQ" title="Leave Your Footprint || Celebrating Unsung Heroes In Our Communities" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter End -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="fw-bold text-primary mb-4">St. Martin<span class="text-white">CSA</span></h1>
                    <p>Only Through Community</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href="https://www.facebook.com/SaintMartinCSA" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href="https://www.youtube.com/channel/UCGz-9Kfu501Jzn0SbbPDofg" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-0" href="https://www.instagram.com/saintmartincsa/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>P.O. Box 2098-20300 Nyahururu, Kenya </p>
                    <p><i class="fa fa-phone-alt me-3"></i>+254 (0)720 853 412</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+254 (0)734 992 272</p>
                    <p><i class="fa fa-envelope me-3"></i> info@saintmartin-kenya.org</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="/about">About Us</a>
                    <a class="btn btn-link" href="/contact">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Suggestions</h5>
                    <p>Any suggestions?</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Thank you!">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">St.MartinCSA</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://github.com/cypriannjoroge" target="_blank">@njoro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>