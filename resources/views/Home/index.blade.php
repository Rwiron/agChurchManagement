<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPAG Kanombe</title>
     <!-- Favicon -->
    <link href="{{ asset('Frontend/images/logo.png') }}" rel="icon" />


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
                                <li><a href="#" class="donate">Donate</a></li>
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
                        <li style="background-image: url('{{ asset('Frontend/images/1.jpg') }}')">
                            <div class="overlay"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 text-center">
                                        <div class="slider-text">
                                            <div class="slider-text-inner">
                                                <h1>Living &amp; Sharing the Gospel of God</h1>
                                                <p>
                                                    <a class="btn btn-primary btn-demo popup-vimeo"
                                                        href="https://vimeo.com/channels/staffpicks/93951774">
                                                        <i class="icon-play4"></i> Watch Video</a>
                                                    <a class="btn btn-primary btn-learn">Join us here! <i
                                                            class="icon-arrow-right3"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li style="background-image: url('{{ asset('Frontend/images/4.jpg') }}')">
                            <div class="overlay"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 text-center">
                                        <div class="slider-text">
                                            <div class="slider-text-inner">
                                                <h1>Tell The World</h1>
                                                <p>
                                                    <a class="btn btn-primary btn-demo popup-vimeo"
                                                        href="https://vimeo.com/channels/staffpicks/93951774">
                                                        <i class="icon-play4"></i> Watch Video</a>
                                                    <a class="btn btn-primary btn-learn">Join us here! <i
                                                            class="icon-arrow-right3"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li style="background-image: url('{{ asset('Frontend/images/2.jpg') }}')">
                            <div class="overlay"></div>
                            <div class="container-fluids">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 text-center">
                                        <div class="slider-text">
                                            <div class="slider-text-inner text-center">
                                                <h1>Know More About Jesus</h1>
                                                <p>
                                                    <a class="btn btn-primary btn-demo popup-vimeo"
                                                        href="https://vimeo.com/channels/staffpicks/93951774">
                                                        <i class="icon-play4"></i> Watch Video</a>
                                                    <a class="btn btn-primary btn-learn">Join us here! <i
                                                            class="icon-arrow-right3"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
            <div id="fh5co-intro">
                <div class="row animate-box">
                    <div class="col-md-12 col-md-offset-0 text-center">
                        <h2>Living in God's Amazing Grace!</h2>
                        <span>We are open Sunday to Monday</span>
                    </div>
                </div>
            </div>

            <div id="fh5co-services" class="fh5co-light-grey">
                <div class="row animate-box">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <h2>Church Program</h2>
                        <p>
                            Join Assemblies of God Kanombe Church (RPAG) for a variety of
                            enriching programs designed to support spiritual growth,
                            community engagement, and personal development.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <div class="services">
                            <a href="#" class="img-holder"><img class="img-responsive"
                                    src="{{ asset('Frontend/images/2011.jpg') }}" alt="Sunday Services" /></a>
                            <div class="desc">
                                <h3><a href="#">Sunday Services</a></h3>
                                <p>
                                    Experience uplifting worship and inspiring sermons every
                                    Sunday. Join us at 9:00 AM and 11:00 AM for our main
                                    services.
                                </p>
                                <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="services">
                            <a href="#" class="img-holder"><img class="img-responsive"
                                    src="{{ asset('Frontend/images/211.jpg') }}" alt="Bible Study" /></a>
                            <div class="desc">
                                <h3><a href="#">Bible Study</a></h3>
                                <p>
                                    Deepen your understanding of the scriptures with our weekly
                                    Bible study sessions. Every Wednesday at 7:00 PM.
                                </p>
                                <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="services">
                            <a href="#" class="img-holder"><img class="img-responsive"
                                    src="{{ asset('Frontend/images/SA01.jpeg') }}" alt="Youth Program" /></a>
                            <div class="desc">
                                <h3><a href="#">Youth Program</a></h3>
                                <p>
                                    Empowering the next generation through engaging activities,
                                    mentorship, and spiritual guidance. Join us every Saturday
                                    at 4:00 PM.
                                </p>
                                <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <div class="services">
                            <a href="#" class="img-holder"><img class="img-responsive"
                                    src="{{ asset('Frontend/images/wwq1.jpg') }}" alt="Community Outreach" /></a>
                            <div class="desc">
                                <h3><a href="#">Community Outreach</a></h3>
                                <p>
                                    Join our outreach programs to make a positive impact in our
                                    community. Monthly events aimed at helping those in need.
                                </p>
                                <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="services">
                            <a href="#" class="img-holder"><img class="img-responsive"
                                    src="{{ asset('Frontend/images/wdw2.jpg') }}" alt="Counseling Services" /></a>
                            <div class="desc">
                                <h3><a href="#">Counseling Services</a></h3>
                                <p>
                                    Our pastoral counseling services provide spiritual and
                                    emotional support for individuals and families. Available by
                                    appointment.
                                </p>
                                <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="services">
                            <a href="#" class="img-holder"><img class="img-responsive"
                                    src="{{ asset('Frontend/images/200.jpg') }}" alt="Choir Practice" /></a>
                            <div class="desc">
                                <h3><a href="#">Choir Practice</a></h3>
                                <p>
                                    Be a part of our vibrant choir and enhance our worship
                                    experience. Practice sessions every Friday at 6:00 PM.
                                </p>
                                <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div id="fh5co-services" class="fh5co-light-grey">
                <div class="row animate-box">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <h2>Services</h2>
                        <p>
                            Our church offers a variety of services to support our
                            community, including live events, biblical counseling, and
                            outreach programs.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <div class="services">
                            <a href="#" class="img-holder"><img class="img-responsive"
                                    src="{{ asset('Frontend/images/10.jpg') }}" alt="Live Events" /></a>
                            <div class="desc">
                                <h3><a href="#">Live Events</a></h3>
                                <p>
                                    Join us for live events and gatherings that bring our
                                    community together to worship and fellowship.
                                </p>
                                <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="services">
                            <a href="#" class="img-holder"><img class="img-responsive"
                                    src="{{ asset('Frontend/images/5.jpg') }}" alt="Biblical Counseling" /></a>
                            <div class="desc">
                                <h3><a href="#">Biblical Counseling</a></h3>
                                <p>
                                    We offer biblical counseling to support individuals and
                                    families in their spiritual and personal growth.
                                </p>
                                <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="services">
                            <a href="#" class="img-holder"><img class="img-responsive"
                                    src="{{ asset('Frontend/images/3.jpg') }}" alt="Helping Children" /></a>
                            <div class="desc">
                                <h3><a href="#">Helping Children</a></h3>
                                <p>
                                    Our programs for children focus on education, spiritual
                                    growth, and providing a safe and nurturing environment.
                                </p>
                                <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div id="fh5co-services" class="fh5co-light-grey">
                <div class="row animate-box">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <h2>Ministries</h2>
                        <p>
                            Explore our dedicated ministries that cater to different groups
                            within our church community, fostering spiritual growth,
                            fellowship, and support.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 animate-box">
                        <div class="services">
                            <a href="#" class="img-holder"><img class="img-responsive"
                                    src="{{ asset('Frontend/images/men.jpg') }}" alt="Men's Ministry" /></a>
                            <div class="desc">
                                <h3><a href="#">Men's Ministry</a></h3>
                                <p>
                                    Engage with our Men's Ministry through Bible studies, prayer
                                    meetings, and fellowship activities designed to strengthen
                                    faith and brotherhood.
                                </p>
                                <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box">
                        <div class="services">
                            <a href="#" class="img-holder"><img class="img-responsive"
                                    src="{{ asset('Frontend/images/woman.jpg') }}" alt="Women's Ministry" /></a>
                            <div class="desc">
                                <h3><a href="#">Women's Ministry</a></h3>
                                <p>
                                    Join our Women's Ministry for nurturing fellowship,
                                    spiritual growth, and empowerment through various programs
                                    and events.
                                </p>
                                <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box">
                        <div class="services">
                            <a href="#" class="img-holder"><img class="img-responsive"
                                    src="{{ asset('Frontend/images/yourh.jpg') }}" alt="Youth Ministry" /></a>
                            <div class="desc">
                                <h3><a href="#">Youth Ministry</a></h3>
                                <p>
                                    Our Youth Ministry offers dynamic activities, mentorship,
                                    and spiritual guidance to empower the next generation of
                                    leaders in faith.
                                </p>
                                <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box">
                        <div class="services">
                            <a href="#" class="img-holder"><img class="img-responsive"
                                    src="{{ asset('Frontend/images/children.jpg') }}"
                                    alt="Children's Ministry" /></a>
                            <div class="desc">
                                <h3><a href="#">Children's Ministry</a></h3>
                                <p>
                                    Our Children's Ministry focuses on providing a safe,
                                    nurturing environment where kids can learn about God's love
                                    through fun and engaging activities.
                                </p>
                                <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div id="fh5co-sermon">
                <div class="row animate-box">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <h2>Our Sermons</h2>
                        <p>
                            Experience inspiring sermons from our pastors that bring the
                            word of God to life.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-center animate-box">
                        <div class="sermon-entry">
                            <div class="sermon"
                                style="background-image: url('{{ asset('Frontend/images/102.jpg') }}')">
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
                                style="background-image: url('{{ asset('Frontend/images/12.jpg') }}')">
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
                                style="background-image: url('{{ asset('Frontend/images/11.jpg') }}')">
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
            <div id="fh5co-bible-verse">
                <div class="overlay"></div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row animate-box">
                            <div class="owl-carousel owl-carousel-fullwidth">
                                <div class="item">
                                    <div class="bible-verse-slide active text-center">
                                        <blockquote>
                                            <p>
                                                &ldquo;For God so loved the world, that he gave his
                                                only begotten Son, that whosoever believeth in him
                                                should not perish, but have everlasting life.&rdquo;
                                            </p>
                                            <span>John 3:16</span>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="bible-verse-slide active text-center">
                                        <blockquote>
                                            <p>
                                                &ldquo;The LORD [is] my strength and my shield; my
                                                heart trusted in him, and I am helped: therefore my
                                                heart greatly rejoiceth; and with my song will I
                                                praise him.&rdquo;
                                            </p>
                                            <span>Psalms 28:7</span>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="bible-verse-slide active text-center">
                                        <blockquote>
                                            <p>
                                                &ldquo;And we have known and believed the love that
                                                God hath to us. God is love; and he that dwelleth in
                                                love dwelleth in God, and God in him.&rdquo;
                                            </p>
                                            <span>1 John 4:16</span>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div id="fh5co-events">
                <div class="row animate-box">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <h2>Our Events</h2>
                        <p>
                            Join us for events that bring our community together and help us
                            grow in faith.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <div class="events-entry">
                            <span class="date">March 10, 2024</span>
                            <h3><a href="#">Message From God</a></h3>
                            <p>Join us for an inspiring message from our pastor.</p>
                            <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="events-entry">
                            <span class="date">March 20, 2024</span>
                            <h3><a href="#">Community Outreach</a></h3>
                            <p>
                                Be part of our outreach program and make a difference in our
                                community.
                            </p>
                            <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="events-entry">
                            <span class="date">March 30, 2024</span>
                            <h3><a href="#">Youth Gathering</a></h3>
                            <p>
                                Our youth gathering focuses on spiritual growth and fellowship
                                for young people.
                            </p>
                            <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div id="fh5co-news" class="fh5co-light-grey">
                <div class="row animate-box">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <h2>Our News</h2>
                        <p>
                            Stay updated with the latest news and announcements from our
                            church.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 animate-box">
                        <div class="news">
                            <a href="#" class="img-holder"><img class="img-responsive fixed-size"
                                    src="{{ asset('Frontend/images/21.jpg') }}" alt="Live News" /></a>
                            <div class="desc">
                                <span class="date">March 30, 2024</span>
                                <h3><a href="#">Live News</a></h3>
                                <p>
                                    Catch up on the latest updates and happenings in our church
                                    community.
                                </p>
                                <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box">
                        <div class="news">
                            <a href="#" class="img-holder"><img class="img-responsive fixed-size"
                                    src="{{ asset('Frontend/images/012.jpg') }}" alt="Biblical Counseling" /></a>
                            <div class="desc">
                                <span class="date">March 30, 2024</span>
                                <h3><a href="#">Biblical Counseling</a></h3>
                                <p>
                                    Learn more about our biblical counseling services and how
                                    they can support you.
                                </p>
                                <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box">
                        <div class="news">
                            <a href="#" class="img-holder"><img class="img-responsive fixed-size"
                                    src="{{ asset('Frontend/images/3.jpg') }}" alt="Helping Children" /></a>
                            <div class="desc">
                                <span class="date">March 30, 2024</span>
                                <h3><a href="#">Helping Children</a></h3>
                                <p>
                                    Discover our programs aimed at supporting and nurturing
                                    children in our community.
                                </p>
                                <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box">
                        <div class="news">
                            <a href="#" class="img-holder"><img class="img-responsive fixed-size"
                                    src="{{ asset('Frontend/images/10.jpg') }}" alt="Community Outreach" /></a>
                            <div class="desc">
                                <span class="date">March 30, 2024</span>
                                <h3><a href="#">Community Outreach</a></h3>
                                <p>
                                    Join us in our efforts to reach out and support our local
                                    community.
                                </p>
                                <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div id="fh5co-contact">
                <div class="row animate-box">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <h2>Contact us</h2>
                        <p>
                            Need to get in touch with us? Either fill out the form with your inquiry or find the
                            department email you'd like to contact below.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-md-push-8 animate-box">
                        <div id="google-map" class="fh5co-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.4773085168986!2d30.126166876243797!3d-1.9628364367424567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca7e31546b6c7%3A0x3dbcf4d4aa967012!2sAssemblies%20of%20God-Kanombe!5e0!3m2!1sen!2srw!4v1716543334526!5m2!1sen!2srw"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-7 col-md-pull-2 animate-box">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First name*" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last name*" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email*" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="" class="form-control" id="" cols="30" rows="7"
                                        placeholder="What can we help you with?"></textarea>
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
                        <h4> RPAG </h4>
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
