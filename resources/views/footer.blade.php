    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Footer</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    body{
        overflow-x: hidden
    }

    .footer {
        background-color: black;
        color: #fefefe;
        height:auto;
        width: 123.70%;
        position: relative;
        top:100px;
        right:133px;
    }

    .footer .heading {
    color: #fefefe;
    max-width: 1010px;
    width: 90%;
    text-transform: uppercase;
    margin: 0 auto;
    margin-bottom: 3rem;
    font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
    }

    .footer .content {
    display: flex;
    justify-content: space-evenly;
    margin: 1.5rem;
    }

    .footer .content p {
    margin-bottom: 1.3rem;

    }

    .footer .content a {
    text-decoration: none;
    color: #fefefe;
    }

    .footer .content a:hover {
    border-bottom: 1px solid #971717;
}


    .footer .content h4 {
    margin-bottom: 1.3rem;
    font-size: 19px;
    color:red;
    }

    footer {
    text-align: center;
    margin-bottom: 2rem;
    position: relative;
    }

    footer hr {
    margin: 2rem 0;
    }

    @media (max-width: 767px) {
    .footer .content {
        display: flex;
        flex-direction: column;
        font-size: 14px;
    }

    .footer {
        position: unset;
    }
    }

    @media (min-width: 768px) and (max-width: 1024px) {
    .footer .content,
    .footer {
        font-size: 14px;
    }
    }

    @media (orientation: landscape) and (max-height: 500px) {
    .footer {
        position: unset;
    }
    }
    </style>
        <script
        src="https://kit.fontawesome.com/66aa7c98b3.js"
        crossorigin="anonymous"
        ></script>
    </head>
    <body>
        <div class="footer">
        <div class="heading">
            <h2 style="color:gray;position: relative;top:20px;">MV<sup>™</sup></h2>
        </div>
        <div class="content">
            {{-- <div class="services">
            <h4>Services</h4>
            <p><a href="#">App development</a></p>
            <p><a href="#">Web development</a></p>
            <p><a href="#">DevOps</a></p>
            <p><a href="#">Web designing</a></p>
            </div> --}}
            <div class="social-media">
            <h4>Social</h4>
            <p>
                <a href="https://www.linkedin.com/in/malav-parekh-937139292/"target="parent"
                ><i class="fab fa-linkedin"></i> Linkedin</a
                >
            </p>
            <p>
                <a href="https://twitter.com/MalavParekh97"  target="parent"
                ><i class="fab fa-twitter"></i> Twitter</a
                >
            </p>
            <p>
                <a href="https://github.com/Malav3077"  target="parent"
                ><i class="fab fa-github"></i> Github</a
                >
            </p>
            <p>
                <a href="#  target="parent""
                ><i class="fab fa-facebook"></i> Facebook</a
                >
            </p>
            <p>
                <a href="https://www.instagram.com/malav_._3077._/"  target="parent"
                ><i class="fab fa-instagram"></i> Instagram</a
                >
            </p>
            </div>
            <div class="links">
            <h4>Quick links</h4>
            <p><a href="/">Home</a></p>
            <p><a href="/about">About</a></p>
            <p><a href="/contact">Contact</a></p>
            <p><a href="/create">Login</a></p>
            </div>
            <div class="details">
            <h4 class="address">Address</h4>
            <p>
            D/204 AdishwarNagar<br />
                Naroda,<br>Ahmedabad-382330
            </p>
            <h4 class="mobile">Mobile</h4>
            <p><a>+91 75730 51360</a></p>
            <h4 class="mail">Email</h4>
            <p><a>malavparekh97@gmail.com</a></p>
            </div>
        </div>
        <footer>    
            <hr />
            © 2024 <span style="color:rgb(64, 254, 64); font-weight:500">
                MV
            </span> Online Tiffin Services
        </footer>
        </div>
    </body>
    </html>
