<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
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
                <a class="text-white-50 ms-3" href=""><i class="fab fa-instagram"></i></a>
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
                    
                   

                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Contacts & Donations</h1>
            <nav aria-label="breadcrumb animated slideInDown"><p><i class="fa fa-map-marker-alt me-3"></i>P.O. Box 2098-20300 Nyahururu, Kenya </p>
                <p><i class="fa fa-phone-alt me-3"></i>+254 (0)720 853 412</p>
                <p><i class="fa fa-phone-alt me-3"></i>+254 (0)734 992 272</p>
                <p><i class="fa fa-envelope me-3"></i> info@saintmartin-kenya.org</p>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


     <!-- Donate Start -->
     <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1>Make a Donation:</h1>
                    <div class="h-100 bg-secondary p-5">
                        <form id="mpesaForm">
                            <div class="row g-3">
                                <!-- Name Field -->
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-light border-0" id="name" name="name" placeholder="Your Name" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                
                                <!-- Phone Number Field -->
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-light border-0" id="phone" name="phone" placeholder="Your Phone Number" required>
                                        <label for="phone">Your Phone Number</label>
                                    </div>
                                </div>
                
                                <!-- Donation Amount Field -->
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="number" class="form-control bg-light border-0" id="amount" name="amount" placeholder="Donation Amount" required>
                                        <label for="amount">Donation Amount (in KES)</label>
                                    </div>
                                </div>
                
                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary px-5" style="height: 60px;">
                                        Donate Now
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3755.0254168878864!2d36.36305100436908!3d0.04129122988773218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x178763c38569e36d%3A0x42219e47d7b1bd31!2sSt%20Martin%20Catholic%20Social%20Appostolats!5e0!3m2!1sen!2ske!4v1723658990059!5m2!1sen!2ske"
                        frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate End --> 

     <!--newsletter Start -->
     <div class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-2.jpg">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">BADILISHA</div>
                    <h1 class="display-6 text-white mb-5">Stories Of Addiction.</h1>
                    <p class="text-white-50 mb-0">St. Martin CSA is a charity organisation that works with the local communities for the benefit of vulnerable people in their midst. We particularly support children in need and people with addiction and mental health issues as well as facilitate a conciliatory and peaceful​ living together. St. Martin CSA is based in Nyahururu, Kenya.</p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100">
                        <iframe width="650" height="383" src="https://www.youtube.com/embed/PKGnAphPl2g" title="Badilisha - Stories of addiction" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

    {{-- mpesa javascript --}}
    <script>
    document.getElementById('mpesaForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch('/process-donation', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.ResponseCode === '0') {
            alert('Please complete the payment on your mobile phone.');
        } else {
            alert('There was an issue processing your payment. Please try again.');
        }
    })
    .catch(error => console.error('Error:', error));
});

    </script> 

</body>

</html>