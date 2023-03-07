@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">
                <span>SotM Africa, Yaounde</span>
                <span class="typed-cursor">|</span>
                <span class="typeout-fallback"> 2023</span>
            </div>
            <div class="masthead-heading text-uppercase">Yaounde | 1-3 December 2023 | Open mapping as a support tool
                for local development in Africa
            </div>
            <a class="btn btn-primary btn-xl text-uppercase" id="btn-conference" href="#services">conference
                proceedings</a>
        </div>
    </header>

    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="ading text-uppercase">About SotM Africa 2023</h2>
                <h3 class="section-subheading text-muted">SotM Africa 2023 will be a 3 days of learning, sharing and fun!
                </h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span><img class="img-fluid rounded-circle" src="{{ asset('assets/img/about-section/conference.jpg') }}"
                            alt="conference_image"></span>
                    <h4 class="my-3">Conference</h4>
                    <p class="text-muted">SOTM Africa will bring together participants from around the world to discuss
                        challenges, learn, and celebrate many years of mapping together.</p>
                </div>
                <div class="col-md-4">
                    <span><img class="img-fluid rounded-circle" src="{{ asset('assets/img/about-section/workshop.jpg') }}"
                            alt="workshop_image"></span>

                    <h4 class="my-3">Workshops</h4>
                    <p class="text-muted">Featuring full-day of workshops, hands-on experience coupled with learning and
                        sharing!</p>
                </div>
                <div class="col-md-4">
                    <span><img class="img-fluid rounded-circle" src="{{ asset('assets/img/about-section/community.jpg') }}"
                            alt="community_image"></span>

                    <h4 class="my-3">Community</h4>
                    <p class="text-muted">The community will meet and fun!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-dark py-2" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <div class="portfolio-caption bg-dark">
                            <div class="portfolio-caption-heading"><span class="counter display-4">500</span><span
                                    class="plusSymbol display-4">+</span></div>
                            <div class="portfolio-caption-subheading text-white">Attendees</div>
                            <hr>
                            <div class="portfolio-caption text-white bg-dark"><small>From everywhere</small></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <div class="portfolio-caption bg-dark">
                            <div class="portfolio-caption-heading"><span class="counter display-4">48</span><span
                                    class="plusSymbol display-4">+</span></div>
                            <div class="portfolio-caption-subheading text-white">Hours</div>
                            <hr>
                            <div class="portfolio-caption text-white bg-dark"><small>Learning and fun</small></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <div class="portfolio-caption bg-dark">
                            <div class="portfolio-caption-heading"><span class="counter display-4">2</span><span
                                    class="plusSymbol display-4">+</span></div>
                            <div class="portfolio-caption-subheading text-white">Parallel sessions</div>
                            <hr>
                            <div class="portfolio-caption bg-dark text-white"><small>To choose from</small></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Blog</h2>
            </div>
            <div class="row py-2">
                <div class="col-lg-6">
                    <h6>State of the Map Africa 2023 will be held in Yaounde Cameroun</h6>
                    <p class="blog-text">State of the Map Africa 2021, which was meant to be in Nairobi, Kenya will now be
                        held
                        virtually online on the same dates 19–21 November 2021. The decision to go virtual is the safest
                        approach for the well-being of our local and global community... <a href="#"
                            class="continueBlog text-orange text-decoration-none">continue reading</a>
                    </p>
                </div>
                <div class="col-lg-6">
                    <h6>SotM Africa 2021 is in Nairobi, Kenya</h6>
                    <p class="blog-text">We are pleased to announce the next State of the Map Africa which will take place
                        from
                        19 to 21 November 2021 in Nairobi, Kenya. Join OpenStreetMap and Free and Open Source Software
                        (FOSS)
                        entusiasts learn, share and connect in Nairobi, Kenya... <a href="#"
                            class="continueBlog text-orange text-decoration-none">continue reading</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light page-section text-center" id="sotmTwitter">
        <div class="container">
            <div class="row pb-4 twitterIcon">
                <i class="fa-brands fa-twitter fa-3x"></i>
            </div>
            <div class="row text-white">
                <h3 class="twitterPage">sotm=africa?
                    <a href="https://twitter.com/search?q=323sotmafrica" target="_blank">#sotmafrica</a>
                </h3>
            </div>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Sponsors</h2>
            </div>
            <div class="row">
                <h3 class="section-subheading text-muted text-center">Gold sponsors</h3>
                <div class="col-lg-8 mx-auto text-center">
                    <ul class="partners-section d-flex flex-row">
                        <li>
                            <a href="https://hotosm.org/" target="_blank">
                                <img src="{{ asset('assets/img/partners/hotosm.png') }}"
                                    title="Humanitarian OpenStreetMap Team" alt="HOT">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.afd.fr/en" target="_blank"> <img
                                    src="{{ asset('assets/img/partners/afd.png') }}"
                                    title="Agence Française de Développement" alt="AFD">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mt-2">
                <h3 class="section-subheading text-muted text-center">Bronze sponsors</h3>
                <div class="col-lg-8 mx-auto text-center">
                    <ul class="partners-section d-flex flex-row">
                        <li>
                            <a href="https://kaart.com/" target="_blank"> <img
                                    src="{{ asset('assets/img/partners/kaart.svg') }}" title="Kaart" alt="Kaart">
                            </a>
                        </li>
                        <li>
                            <a href="https://critigen.com/" target="_blank"> <img
                                    src="{{ asset('assets/img/partners/critigen.png') }}" title="Critigen"
                                    alt="Critigen">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients-->
    <div class="py-3">
        <div class="container">
            <div class="row text-center">
                <h5 class="display-6">Supporters</h5>
                <ul>
                    <li class="list-unstyled"> <a href="http://openstreetmap.fr/" target="_blank"
                            class="text-decoration-none">
                            <!-- <img src="/img/supporters/" title="Supporter" alt="OSM France"> --> OSM France
                        </a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="my-4 text-center becomeSponsor">
        <a class="btn btn-secondary text-uppercase shadow" href="#">Become a sponsor</a>
    </div>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading">Subscribe for updates</h2>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row mb-5">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group mx-4">
                            <!-- Email address input-->
                            <input class="form-control py-2" id="email" type="email" placeholder="name@mail.com"
                                data-sb-validations="required,email" aria-describedby="emailHelp" />
                            <div id="emailHelp" class="form-text text-center text-white">Subscribe to our email list</div>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.
                            </div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="col-md-text-center subscribeBtn"><button
                                class="btn btn-primary btn-xl text-uppercase py-1" id="submitButton"
                                type="submit">Submit</button>
                        </div>
                    </div>

                    <div class="col-md-3"></div>
                </div>
            </form>
        </div>
    </section>
@endsection
