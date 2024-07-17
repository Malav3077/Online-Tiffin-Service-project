    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Tiffin Service - Login</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="{{ asset('img/favicon.ico') }}" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

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

        <!-- Customize CSS -->
        <style>

        
            
            
            body{
                overflow-x:hidden;
            }

        
            #green {
                color: greenyellow;
            }
    @keyframes slideIn {
                from {
                    transform: translateY(-50%);
                    opacity: 0;
                }

                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }

            .animated-form {
                animation: slideIn 0.5s ease-out forwards, fadeIn 0.5s ease-out forwards;
            }

            .animated-form-field {
                animation: fadeIn 0.5s ease-out forwards;
            }

            .animated-form h2 {
                margin-bottom: 20px;
            }

            .signup-link {
                text-align: center;
                margin-top: 20px;
                opacity: 0;
                animation: fadeIn 0.5s ease-out forwards 0.8s;
            }

            .signup-link a {
                color: #007bff;
                text-decoration: none;
            }

            .signup-link a:hover {
                text-decoration: underline;
            }

            .h2{
                text-align: center
            }

            .form-group
            {
                padding: 10px;
                width:500px;
            margin-left:80px;
            }
        
            
        </style>
    </head>

    <body>
        <div class="container-xxl bg-white p-0">
            <!-- Spinner Start -->
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->

            <!-- Navbar & Hero Start -->
            <div class="container-xxl position-relative p-0">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                    <a href="" class="navbar-brand p-0">
                        <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i><span id="green">Tifin</span> Managment Service</h1>
                        <!-- <img src="{{ asset('img/logo.png') }}" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0 pe-4">
                            <a href="{{ asset('/') }}" class="nav-item nav-link ">Home</a>
                            <a href="{{ asset('/about') }}" class="nav-item nav-link ">About</a>
                            <a href="{{ asset('/contact') }}" class="nav-item nav-link">Contact</a>
                            <a href="{{ asset('/create') }}" class="nav-item nav-link">Login
                            <i class="fa fa-sign-in" style="font-size:15px;padding-right:1.5rem"></i></a>
                            
    {{--                      <a href="{{ asset('/admin') }}" class="nav-item nav-link">Admin</a> --}}
                        </div>
                    </div>
                </nav>

                <div class="container-xxl py-5 bg-dark hero-header mb-5">
                    <div class="container my-5 py-5">
                        <div class="row align-items-center g-5">
                            <div class="col-lg-6 text-center text-lg-start">
                                <div class="col-lg-6 text-center text-lg-end overflow-hidden"></div>
                            </div>
                        </div>
                        <h1 class="about"style="color:orange;text-align:center;">Login Page</h1>
                    </div>
                </div>
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
            </div>
        </div>












        {{-- login form here --}}




        <div class="container">
            @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

        <div class="row justify-content-center">
            <div class="col-md-6">
                
                <form method="POST" action="userlogin"  class="animated-form" >
                    @csrf
                    <h2 class="h2" style="margin-left">Login</h2>
                    <div class="form-group animated-form-field">
                        <label for="username">Email</label>
                        <input type="email" class="form-control" name="email"   id="username" placeholder="Enter Email">
                    </div>
                   <div class="form-group animated-form-field">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
</div>


{{-- <div class="form-group animated-form-field">
    <a href="/forgot" class="text-primary">Forgot your password?.</a>
</div> --}}
                
                
                    <button type="submit" class="btn btn-primary" style="margin-left:90px;margin-top:15px">Login</button>
                    <p class="signup-link">Don't have an account? <a href="{{ route('create') }}" class="signup">Create Account</a></p>
                    <img src="img/img1.png" alt="" height="200px" style="position: relative; bottom:300px;left:600px;"> 
                </form>

            </div>
        </div>
    </div>

    @include('/footer') 


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                    $('#signup').click(function (e) {
                        e.preventDefault();
                        $('#loginForm').removeClass('animated-form');
                        $('#loginForm').addClass('animated-form-reverse');
                        $('#signupForm').addClass('animated-form');
                    });
                });

        </script>


        </body>
    </html>