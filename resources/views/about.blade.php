<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tiffin Service - About</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">




    <!-- customize css add -->
    <style>
        /* body{
            overflow-x: hidden;
        } */
        #green {
            color: greenyellow;
        }

        .about {
            color: orange;
            text-align: center;
        }


        * {
  font-family: Nunito, sans-serif;
}

.text-blk {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
  line-height: 25px;
}

.responsive-container-block {
  min-height: 75px;
  height: fit-content;
  width: 100%;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  display: flex;
  flex-wrap: wrap;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
  justify-content: flex-start;
}

.responsive-container-block.bigContainer {
  padding-top: 10px;
  padding-right: 30px;
  padding-bottom: 10px;
  padding-left: 30px;
  background-image: url("https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/bb29.png");
  background-position-x: initial;
  background-position-y: initial;
  background-size: cover;
  background-attachment: initial;
  background-origin: initial;
  background-clip: initial;
  background-color: initial;
  background-repeat-x: no-repeat;
  background-repeat-y: no-repeat;
}

.responsive-container-block.Container {
  max-width: 800px;
  flex-direction: column;
  align-items: center;
  padding-top: 20px;
  padding-right: 20px;
  padding-bottom: 20px;
  padding-left: 20px;
  margin-top: 150px;
  margin-right: auto;
  margin-bottom: 150px;
  margin-left: auto;
  background-color: white;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
}

.text-blk.heading {
  font-size: 36px;
  line-height: 45px;
  font-weight: 800;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 30px;
  margin-left: 0px;
}

.text-blk.subHeading {
  text-align: center;
  font-size: 18px;
  line-height: 26px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 60px;
  margin-left: 0px;
}

.socialIcon {
  width: 33px;
  height: 33px;
}

.social-icons-container {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
}

.social-icon {
  margin: 0 50px 0 50px;
}

.social-icon:hover {
  cursor: pointer;
}

@media (max-width: 768px) {
  .text-blk.heading {
    font-size: 55px;
    line-height: 65px;
  }

  .text-blk.subHeading {
    font-size: 18px;
    line-height: 24px;
  }

  .socialIcon {
    width: 20px;
    height: 20px;
  }

  .text-blk.subHeading {
    line-height: 27px;
  }

  .text-blk.heading {
    font-size: 32px;
    line-height: 40px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 20px;
    margin-left: 0px;
  }

  .social-icon {
    margin: 0 25px 0 25px;
  }
}

@media (max-width: 500px) {
  .responsive-container-block.bigContainer {
    padding-top: 10px;
    padding-right: 20px;
    padding-bottom: 10px;
    padding-left: 20px;
  }

  .text-blk.heading {
    font-size: 45px;
    line-height: 55px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 20px;
    margin-left: 0px;
  }

  .text-blk.subHeading {
    font-size: 14px;
    line-height: 22px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 30px;
    margin-left: 0px;
  }

  .social-icons-container {
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
  }

  .text-blk.subHeading {
    font-size: 16px;
    line-height: 23px;
  }

  .text-blk.heading {
    font-size: 26px;
    line-height: 30px;
  }

  .social-icon {
    margin: 0 20px 0 20px;
  }
}
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i><span id="green">Tifin</span>
                        Managment Service
                    </h1>
                    <!-- <img src="{{ asset('img/logo.png') }}" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{ asset('/') }}" class="nav-item nav-link ">Home</a>
                        <a href="{{ asset('/about') }}" class="nav-item nav-link active">About</a>
                        <a href="{{ asset('/contact') }}" class="nav-item nav-link">Contact</a>
                        <a href="{{ asset('/create') }}" class="nav-item nav-link">Login
                        <i class="fa fa-sign-in" style="font-size:15px;padding-right:1.5rem"></i> </a>

                        {{-- <a href="{{ asset('/admin') }}" class="nav-item nav-link">Admin</a> --}}
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            </div>
                        </div>
                    </div>
                    <h1 class="about">
                        About Us
                    </h1>
                </div>
            </div>

            <div class="responsive-container-block bigContainer">
  <div class="responsive-container-block Container">
    <p class="text-blk heading">
      About Us
    </p>
    <p class="text-blk subHeading">
     Welcome to <a href="/"><span style = "color:purple">Tiffin Managment Service  !</span> </a>We're here to make your life easier with delicious Gujarati and Punjabi dishes delivered to your door. Our goal is simple: to provide convenient, top-quality meals that bring the flavors of Gujarat and Punjab to your table. Join us for a culinary journey filled with convenience and authentic taste.


    </p>
    <div class="social-icons-container">
      <a class="social-icon" href="https://www.facebook.com/vivek.machhi.1481" target="_blank">
         <img class="socialIcon image-block" src= "img/fb.png">
      </a>
      <a class="social-icon" href="https://www.linkedin.com/in/malav-parekh-937139292/"target="_blank">
        <img class="socialIcon image-block" src="img/link.png">
      </a>
      <a class="social-icon" href="https://www.instagram.com/malav_._3077._/"target="_blank">
        <img class="socialIcon image-block" src="img/insta.png">
      </a>
      <a class="social-icon" href="https://twitter.com/MalavParekh97"target="_blank">
        <img class="socialIcon image-block" src="img/tweet.png">
      </a>
    </div>
  </div>
</div>
            @extends('/footer')

            <!-- Navbar & Hero End -->


            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
            <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
            <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
            <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
            <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
            <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
            <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
            <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

            <!-- Template Javascript -->
            <script src="{{ asset('js/main.js') }}"></script>
            
            
            
            {{-- <img src="img/aboutusimg.jpg" alt="error" width="50%" height="200px"> --}}
            
</body>

</html>
