<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPAG Kanombe</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/style.css') }}">
    <script src="{{ asset('Frontend/js/modernizr-2.6.2.min.js') }}"></script>
    <style>
        .logo-text {
            font-size: 24px;
            font-weight: bold;
            color: #000;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-left: 184px;
        }

        @media screen and (max-width: 768px) {
            .container-wrap {
                width: 100%;
            }

            .logo-text {
                margin-left: 10px;
            }

            .desktop-text {
                display: none;
            }

            .mobile-text {
                font-size: 16px;
            }
        }

        .fixed-size {
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="fh5co-loader"></div>
    <div id="page">
        <nav class="fh5co-nav" role="navigation">
            <div class="container-wrap">
                <div class="top-menu">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center align-items-center">
                            <div id="fh5co-logo" class="d-flex flex-column align-items-center logo-container">
                                <a href="{{ route('home.index') }}" class="d-flex align-items-center">
                                    <img src="{{ asset('Frontend/images/logo.png') }}" alt="RPAG Kanombe"
                                        class="logo-img">
                                    <div class="logo-text text-center">
                                        <span class="desktop-text">
                                            Rwanda Pentecostal Assemblies of God<br />
                                            <span class="kanombe-text">Assemblies of God-Kanombe</span>
                                        </span>
                                        <span class="mobile-text">
                                            Rwanda Pentecostal Assemblies of God-Kanombe
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12 col-md-offset-0 text-center menu-1">
                            <ul class="menu">
                                <li class="active"><a href="{{ route('home.index') }}">Home</a></li>
                                <li><a href="{{ route('home.sermons') }}">Sermons</a></li>
                                <li class="has-dropdown">
                                    <a href="{{ route('home.news') }}">News</a>

                                </li>
                                <li><a href="{{ route('home.events') }}">Events</a></li>
                                <li><a href="{{ route('home.about') }}">About</a></li>
                                <li><a href="{{ route('home.contact') }}">Contact</a></li>
                                <li><a href="{{ route('login') }}" class="donate">Sign In</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="ticker-wrap">
                        <div class="ticker">
                            <div class="ticker__item">✨ Welcome to Rwanda Pentecostal Assemblies of God Kanombe Church!
                                ✨</div>
                            <div class="ticker__item">🙏 Join us for Sunday services at 9:00 AM and 11:00 AM. 🙏</div>
                            <div class="ticker__item">📖 Bible study every Wednesday at 7:00 PM. 📖</div>
                            <div class="ticker__item">👦 Youth program every Saturday at 4:00 PM. 👧</div>
                            <div class="ticker__item">❤️ Community outreach program on the first Saturday of every
                                month. ❤️</div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container-wrap">
            <aside id="fh5co-hero">
                <div class="flexslider">
                    <ul class="slides">
                        <li style="background-image: url('{{ asset('Frontend/images/021.jpg') }}')">
                            <div class="overlay"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 text-center slider-text">
                                        <div class="slider-text-inner">
                                            <h1>Contact Us</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
            <div id="fh5co-contact">
                <!-- Google Map Section -->
                <div class="row animate-box">
                    <div class="col-md-12 text-center">
                        <h2>Find Us Here</h2>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.4773085168986!2d30.126166876243797!3d-1.9628364367424567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca7e31546b6c7%3A0x3dbcf4d4aa967012!2sAssemblies%20of%20God-Kanombe!5e0!3m2!1sen!2srw!4v1716543334526!5m2!1sen!2srw"
                            width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <br />
                <hr />
                <div class="row">
                    <div class="col-md-6 animate-box">
                        <h2>Contact us</h2>
                        <p>
                            Need to get in touch with us? Either fill out the form with your
                            inquiry or find the department email you'd like to contact
                            below.
                        </p>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First name*" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last name*" required />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email*" required />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="What can we help you with?" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Submit" class="btn btn-primary btn-modify" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END container-wrap -->

        <!-- END container-wrap -->
        <div class="container-wrap">
            <footer id="fh5co-footer" role="contentinfo">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <h4>Contact</h4>
                        <div class="contact-details">
                            <p>📍 Kanombe, Kigali, Rwanda</p>
                            <p>📞 <a href="tel:+250788598533">+250 788 598 533</a></p>
                            <p>📞 <a href="tel:+250788417026">+250 788 417 026</a></p>
                            <p>📞 <a href="tel:+250734529012">+250 734 529 012</a></p>
                            <p>
                                ✉️
                                <a href="mailto:rpagkanombe@gmail.com">rpagkanombe@gmail.com</a>
                            </p>
                        </div>
                        <ul class="fh5co-social-icons">
                            <li>
                                <a href="#"><i class="icon-twitter2"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-facebook2"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-dribbble2"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 text-center">
                        <h4>Rwanda Pentecostal Assemblies of God</h4>
                        <div style="margin-top: 10px">
                            <img src="{{ asset('Frontend/images/logo.png') }}" alt="RPAG Kanombe Logo"
                                class="footer-logo-img" />
                        </div>
                        <br />
                        <h4>Assemblies of God-Kanombe</h4>
                    </div>
                    <div class="col-md-4 text-center">
                        <h4>Church Links</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; <span id="current-year"></span> RPAG Kanombe. All
                                Rights Reserved.</small>
                            <small class="block">Designed and Developed By Wiron Ltd</small>
                        </p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- END container-wrap -->
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>

    <script src="{{ asset('Frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('Frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('Frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/magnific-popup-options.js') }}"></script>
    <script src="{{ asset('Frontend/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('Frontend/js/main.js') }}"></script>
    <script>
        document.getElementById("current-year").textContent =
            new Date().getFullYear();
    </script>
</body>

</html>
