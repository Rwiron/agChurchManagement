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
                        <li style="background-image: url('{{ asset('Frontend/images/10.jpg') }}')">
                            <div class="overlay"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 text-center slider-text">
                                        <div class="slider-text-inner">
                                            <h1>Watch Our Sermons</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
            <div id="fh5co-sermon">
                <div class="row animate-box">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <h2>Our Sermons</h2>
                        <p>
                            Dignissimos asperiores vitae velit veniam totam fuga molestias
                            accusamus alias autem provident. Odit ab aliquam dolor eius.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-center animate-box">
                        <div class="sermon-entry">
                            <div class="sermon"
                                style="background-image: url('{{ asset('Frontend/images/sermon-1.jpg') }}')">
                                <div class="play">
                                    <a class="popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"><i
                                            class="icon-play3"></i></a>
                                </div>
                            </div>
                            <h3>Soul Winning</h3>
                            <span>Pstr. John Doe</span>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="sermon-entry">
                            <div class="sermon"
                                style="background-image: url('{{ asset('Frontend/images/sermon-3.jpg') }}')">
                                <div class="play">
                                    <a class="popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"><i
                                            class="icon-play3"></i></a>
                                </div>
                            </div>
                            <h3>Message From God</h3>
                            <span>Pstr. John Doe</span>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="sermon-entry">
                            <div class="sermon"
                                style="background-image: url('{{ asset('Frontend/images/sermon-2.jpg') }}')">
                                <div class="play">
                                    <a class="popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"><i
                                            class="icon-play3"></i></a>
                                </div>
                            </div>
                            <h3>Our World Today</h3>
                            <span>Pstr. John Doe</span>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="sermon-entry">
                            <div class="sermon"
                                style="background-image: url('{{ asset('Frontend/images/sermon-1.jpg') }}')">
                                <div class="play">
                                    <a class="popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"><i
                                            class="icon-play3"></i></a>
                                </div>
                            </div>
                            <h3>Soul Winning</h3>
                            <span>Pstr. John Doe</span>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="sermon-entry">
                            <div class="sermon"
                                style="background-image: url('{{ asset('Frontend/images/sermon-3.jpg') }}')">
                                <div class="play">
                                    <a class="popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"><i
                                            class="icon-play3"></i></a>
                                </div>
                            </div>
                            <h3>Message From God</h3>
                            <span>Pstr. John Doe</span>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="sermon-entry">
                            <div class="sermon"
                                style="background-image: url('{{ asset('Frontend/images/sermon-2.jpg') }}')">
                                <div class="play">
                                    <a class="popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"><i
                                            class="icon-play3"></i></a>
                                </div>
                            </div>
                            <h3>Our World Today</h3>
                            <span>Pstr. John Doe</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <p>✉️ <a href="mailto:rpagkanombe@gmail.com">rpagkanombe@gmail.com</a></p>
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
                            <small class="block">&copy; <span id="current-year"></span> RPAG Kanombe. All Rights
                                Reserved.</small>
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
