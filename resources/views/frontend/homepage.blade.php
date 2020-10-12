@extends('template')
@section('title', 'Homepage')
 
@section('intro-header')
<div id="hero" class="hero">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h1>Alex Vidal</h1>
                    <div class="page-scroll">
                        <p class="job-title">Full Stack Developer</p>
                        <a href="#contact" class="btn btn-fill ">Hire me</a>
                        <div class="clearfix visible-xxs"></div>
                        <a href="#portfolio" class="btn btn-border">Explore more</a>
                    </div>
                </div>
            
                <div class="col-md-6 text-right">
                    <img src="{{url('frontend/assets/img/alex-vidal.png')}}" alt="alex-vidal">
                </div>

            </div>
        </div>
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section id="about" class="site-section section-about text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h2>About</h2>
                        <img src="{{url('frontend/assets/img/lines.svg')}}" class="img-lines" alt="lines">
                        <p>Hello! I'm Alex, a full stuck developer, a Ruby enthusiast, and a guy slighty obsessed for code quality. Also I'm a co-founder of pykod.com. I’m currently available for freelance work. If you have a project that you want to get started or think you need my help with something, then get in touch.</p>
                        <a href="http://www.grad.illinois.edu/sites/default/files/pdfs/cvsamples.pdf" class="btn btn-fill" target="_blank" download>Download my cv</a>
                    </div>
                </div>
            </div>
        </section><!-- /.secton-about -->

        <section class="site-section section-skills">
            <div class="container">
                <div class="text-center">
                    <h3>My Skills</h3>
                    <img src="{{url('frontend/assets/img/lines.svg')}}" class="img-lines" alt="lines">
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Html/css</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="100"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>Python</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="75"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Javascript</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="82"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>Ruby</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="66"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Php</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="97"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>Java</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="45"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                </div>
            </div>
        </section><!-- /.secton-skills -->

        <section id="service" class="site-section section-services overlay text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>What i do</h3>
                        <img src="{{url('frontend/assets/img/lines.svg')}}" class="img-lines" alt="lines">
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="{{url('frontend/assets/img/front-end.svg')}}" alt="Front End Developer">
                            <h4>Front-end</h4>
                            <p>As a javascript developer, I have experience in HTML5 and CSS3 techniques working with jQuery or more advanced javascript MVC frameworks such as angular</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="{{url('frontend/assets/img/back-end.svg')}}" alt="Back End Developer">
                            <h4>Back-end</h4>
                            <p>Utilising php frameworks such as Zend or creating bespoke code, I've written services supporting thousands of users, including REST APIs, e-learning applications and more.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="{{url('frontend/assets/img/consultancy.svg')}}" alt="Coding">
                            <h4>Consultancy</h4>
                            <p>As well as providing development services, I can also help you decide strategic roadmaps via consultancy services.</p>
                        </div><!-- /.service -->
                    </div>
                </div>
            </div>
        </section><!-- /.secton-services -->

        <section id="portfolio" class="site-section section-portfolio">
            <div class="container">
                <div class="text-center">
                    <h3>My recent Works</h3>
                    <img src="{{url('frontend/assets/img/lines.svg')}}" class="img-lines" alt="lines">
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="{{url('frontend/assets/img/portfolio-1.jpg')}}" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Project Title</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem1"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="{{url('frontend/assets/img/portfolio-2.jpg')}}" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Project Title</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem2"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="{{url('frontend/assets/img/portfolio-3.jpg')}}" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Project Title</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem3"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="{{url('frontend/assets/img/portfolio-4.jpg')}}" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Project Title</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem4"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="{{url('frontend/assets/img/portfolio-5.jpg')}}" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Project Title</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem5"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="{{url('frontend/assets/img/portfolio-6.jpg')}}" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Project Title</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem6"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                </div>
            </div>
        </section><!-- /.secton-portfolio -->

        <section class="site-section section-counters text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <p class="counter start" data-to="10" data-speed="2000">0</p>
                        <h4>Years Experience</h4>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="counter start" data-to="120" data-speed="2000">0</p>       
                        <h4>Projects Delivered</h4>      
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p id="infinity" class="counter" data-from="0" data-to="1" data-speed="1000">0</p>
                        <h4>Seconds on this site!<br>What are you waiting for?</h4>
                    </div>
                </div>
            </div>
        </section><!-- /.section-counters -->

        <section id="contact" class="site-section section-form text-center">
            <div class="container">

                <h3>Contact</h3>
                <img src="{{url('frontend/assets/img/lines.svg')}}" class="img-lines" alt="lines">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control mt-x-0" placeholder="Name" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>   
                        </div>
                        <div class="col-sm-12">
                            <textarea name="message" id="mesaage" class="form-control" placeholder="Message" required></textarea>
                        </div>
                    </div>
                    <button href="#" class="btn btn-border" type="submit">Hire Me <span class="glyphicon glyphicon-send"></span></button>
                </form>
            </div>
        </section><!-- /.section-form -->

    </main><!-- /#main -->
    @endsection