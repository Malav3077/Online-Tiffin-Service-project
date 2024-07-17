<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tiffin Service - Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
     /* Customized CSS for Menu */
/* Customized CSS for Menu */
/* Customized CSS for Menu */
/* Customized CSS for Menu */
.menu {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.tiffin {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 20px;
    width: 48%;
    display: flex;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.tiffin:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

.tiffin img {
    width: 40%;
    border-radius: 10px 0 0 10px;
}

.tiffin div {
    width: 60%;
    padding-left: 20px;
}

.name {
    font-size: 1.2em;
    font-weight: bold;
    margin-bottom: 8px;
    color: #333;
}

.price {
    font-size: 1em;
    font-weight: bold;
    color: #ff5e78;
}

/* Additional styles for enhanced attractiveness */
.menu {
    background-color: #f8f8f8;
    padding: 30px;
}

.tiffin {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 25px;
    margin-bottom: 25px;
    width: 48%;
    display: flex;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.tiffin:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.tiffin img {
    width: 40%;
    border-radius: 10px 0 0 10px;
}

.tiffin div {
    width: 60%;
    padding-left: 20px;
}

.name {
    font-size: 1.5em;
    font-weight: bold;
    margin-bottom: 10px;
    color: #333;
}

.price {
    font-size: 1.2em;
    font-weight: bold;
    color: #ff5e78;
}
.button {
    background-color: #4CAF50; /* Green background color */
    color: white; /* White text color */
    font-size: 1em;
    font-weight: bold;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: #45a049; /* Darker green color on hover */
}
.h2{
    color:rgb(216, 12, 15);
    margin-left:450px;
    text-decoration:underline rgba(24, 29, 34, 0.267);
    font-weight:900;
    font-size:25px;
}





/* Style for each row */
/* Style for each row */
.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-bottom: 40px; /* Increased margin between rows */
}

/* Additional margin for individual tiffin items */
.tiffin {
    width: calc(33.33% - 10px); /* Adjust width to fit three columns */
    margin-bottom: 40px; /* Increased margin between items */
}

/* Margin between Gujarati and Punjabi dishes */
.gujarati + .punjabi {
    margin-top: 60px; /* Increased margin between Gujarati and Punjabi dishes */
}

/* Additional padding for menu container */
.menu {
    padding: 40px; /* Increased padding for menu container */
}
#green
{
    color:greenyellow;
}


        
    </style>
</head>

<body>
    @php
        use Illuminate\Support\Facades\Session;
    @endphp
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
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="/about" class="nav-item nav-link">About</a>
                        <a href="/contact" class="nav-item nav-link">Contact</a>
                        
                        @if(Session::get('payment_success'))
                                <a href="{{ route('myorders') }}" class="nav-item nav-link">My Orders</a>
                            @endif
                      
                      <a href="{{ route('logout') }}" class="nav-item nav-link">Logout</a>
                        
                        
                        {{-- <a href="/admin" class="nav-item nav-link">Admin</a> --}}
            </nav>
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Deliciously delivered. Tiffin made
                                simple
                            </h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">"From order to delivery, we've got your
                                tiffin needs covered. Enjoy hassle-free meal planning!"
                            </p>
                            <a href="#navigateByMe" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A
                                Tiffin  </a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                             <img class="" src="img/home1logo.png" alt="Error" width="500px" height="500px" style="margin-left: 80px"> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                   
                    <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Quality Food</h5>
                                <p>"Good food is very often, even most often, simple food"</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5>Online Order</h5>
                                <p>"Hungry minds order online"</p>
                            </div>
                        </div>
                    </div>
                    
                    <div id="navigateByMe"></div>
                </div>
                <!-- Service End -->
                
                
                
                <!-- Menu Start -->
                <br>
                <h2 class="h2">Menu Available</h2>
                <div class="menu">
    <div class="row">
        <div class="tiffin gujarati">
            <img src="img/guj_dish.jpg" alt="Small Veg Tiffin" style="border-radius: 50%">
            <div>
                <p class="name">Small Gujarati Dish</p>
                <p class="price">50 Rs.</p>
                {{-- <a href = "{{ route('small') }}"class="button">More Details</a> --}}
                <a href = "/small"class="button">More Details</a>
            </div>
        </div>
        <div class="tiffin gujarati">
            <img src="img/guj_dish.jpg" alt="Medium Veg Tiffin" style="border-radius: 50%">
            <div>
                <p class="name">Medium Gujarati Dish</p>
                <p class="price">75 Rs.</p>
                 <a href = "/medium" class="button">More Details</a>
            </div>
        </div>
        <div class="tiffin gujarati">
            <img src="img/guj_dish.jpg" alt="Large Veg Tiffin" style="border-radius: 50%">
            <div>
                <p class="name">Large Gujarati Dish</p>
                <p class="price">120 Rs.</p>
                <a href = "/large"  class="button">More Details</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="tiffin punjabi">
            <img src="img/punjabi_img.jpg" alt="Small Non Veg Tiffin"  style="border-radius: 50%">
            <div>
                <p class="name">Small Punjabi Dish</p>
                <p class="price">200 Rs.</p>
                  <a href = "/smallp"  class="button">More Details</a>
            </div>
        </div>
        <div class="tiffin punjabi">
            <img src="img/punjabi_img.jpg" alt="Medium Non Veg Tiffin"  style="border-radius: 50%">
            <div>
                <p class="name">Medium Punjabi Dish</p>
                <p class="price">250 Rs.</p>
              <a href = "/mediump" class="button">More Details</a>
            </div>
        </div>
        <div class="tiffin punjabi">
            <img src="img/punjabi_img.jpg" alt="Large Non Veg Tiffin"  style="border-radius: 30%">
            <div>
                <p class="name">Large Punjabi dish</p>
                <p class="price">350 Rs.</p>
               <a href = "/largep" class="button">More Details</a>
            </div>
        </div>
    </div>
</div>


@include('/footer')





                            <!-- JavaScript Libraries -->
                            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                            <script
                            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                            <script src="lib/wow/wow.min.js"></script>
                            <script src="lib/easing/easing.min.js"></script>
                            <script src="lib/waypoints/waypoints.min.js"></script>
                            <script src="lib/counterup/counterup.min.js"></script>
                            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
                            <script src="lib/tempusdominus/js/moment.min.js"></script>
                            <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
                            <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
                            
                            <!-- Template Javascript -->
                            <script src="js/main.js"></script>



                           
                        </body>
                        
                        </html>