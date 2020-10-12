<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>My Portfolio</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('frontend/assets/img/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('frontend/assets/img/favicon.png')}}">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="{{url('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('frontend/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{url('frontend/assets/css/responsive.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <header id="masthead" class="site-header" data-anchor-target=".hero" data-top="background: rgba(255,255,255,0); padding: 30px 0; box-shadow: 0px 0px 20px 6px rgba(0, 0, 0, 0);" data-top-bottom="background: rgba(255,255,255,1); padding: 10px 0; box-shadow: 0px 0px 20px 6px rgba(0, 0, 0, 0.2);">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">
                <div class="navbar-header page-scroll">

                    <button type="button" class="navbar-toggle collapsed" data-target="#portfolio-perfect-collapse" aria-expanded="false" >
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <!-- <a href="#hero" class="site-logo"><img src="{{url('frontend/assets/img/logo.png')}}" alt="logo"></a> -->

                </div><!-- /.navbar-header -->

                <div class="main-menu" id="portfolio-perfect-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li class="page-scroll"><a href="#hero">Home</a></li>
                        <li class="page-scroll"><a href="#about">About</a></li>
                        <li class="page-scroll"><a href="#service">Service</a></li>
                        <li class="page-scroll"><a href="#portfolio">Portfolio</a></li>
<!--                         <li class="page-scroll"><a href="#contact">Contact</a></li> -->
                        
                    </ul><!-- /.navbar-nav -->

                </div><!-- /.navbar-collapse -->

            </div>
        </nav><!-- /.primary-navigation -->
    </header><!-- /#header -->
<div id="hero" class="hero">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h1>PASKARIA SIRAIT</h1>
                    <div class="page-scroll">
                        <p class="job-title">Web Developer</p>
                        <a href="#contact" class="btn btn-fill ">Hire me</a>
                        <div class="clearfix visible-xxs"></div>
                        <a href="#portfolio" class="btn btn-border">Explore more</a>
                    </div>
                </div>
            
                <div class="col-md-6 text-right">
                    <img src="{{url('frontend/assets/img/paskasrt.png')}}" alt="alex-vidal">
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
                        <p>Hello! I'm Paskaria, a web developer enthusiast. I'm usually develop my website with framework CodeIgniter, Laravel and database MySql, Postgresql. And I am slighty obsessed for code quality. My personality types are INFJ-T, Introverted, iNtuition, Feeling, Judging-Thinking. So, I am a person who has high motivation, accuracy and integrity at work, is visionary, and really likes learning new things. <P>I’m currently available for a job. If you have a job that you want to get started or think you need my help with something, then get in touch.</p>
                        <a href="https://drive.google.com/file/d/1IBoUkUq9nnanmYuNoJXDA4GO2Ji9QMDt/view?usp=sharing" class="btn btn-fill" target="_blank" download>Download my cv</a>
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
                                <div class="progress-bar" role="progressbar" data-transitiongoal="90"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>Codeigniter</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="90"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>PostgreSQL</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="80"></div><!-- /.progress-bar -->
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
                            <h4>Laravel</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="66"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>Java</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="66"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Php</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="95"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>MySQL</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="85"></div><!-- /.progress-bar -->
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
                            <h4>Back-end</h4>
                            <p>Utilising php frameworks such as Codeigniter, Laravel using database MySQL or PostgreSQL, I've build some websites that you can see in my recent works.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="{{url('frontend/assets/img/back-end.svg')}}" alt="Back End Developer">
                            <h4>Drawing</h4>
                            <p>I like something that need creativity, and I usually drawing with digital painting using sketchbook. Just my hobby.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="{{url('frontend/assets/img/consultancy.svg')}}" alt="Coding">
                            <h4>Reading</h4>
                            <p>I can spend more five hours a day in my free time to read an interesting book. It's cause I like to learn and I love book.</p>
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
                            <img src="{{url('frontend/assets/img/portfolio-1.png')}}" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>e-ScreeningJiwa</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem1"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="{{url('frontend/assets/img/portfolio-2.png')}}" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Sistem Aplikasi DUPAK Back-End</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem2"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="{{url('frontend/assets/img/portfolio-3.png')}}" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Sistem Informasi DUPAK Front-End</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem3"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="{{url('frontend/assets/img/portfolio-4.png')}}" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>SI-BIMBEL</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem4"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="{{url('frontend/assets/img/portfolio-5.png')}}" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Books For Life</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem5"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="{{url('frontend/assets/img/comingsoon.jpg')}}" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>E-Learning</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem6"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                </div>
            </div>
        </section><!-- /.secton-portfolio -->

        <!-- <section class="site-section section-counters text-center">
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

        <!-- <section id="contact" class="site-section section-form text-center">
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

        <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <a class="icon facebook-bg" href="https://web.facebook.com/pazcaria" target="_blank"><i class="icon-facebook"></i></a>
                    <a class="icon twitter-bg" href="https://twitter.com/ungke__" target="_blank"><i class="icon-twitter"></i></a>
                    <a class="icon gplus-bg" href="https://www.linkedin.com/in/paskaria-sirait-b28656108/" target="_blank"><i class="icon-linkedin"></i></a>
                    <a class="icon linkedin-bg" href="#"><i class="icon-gplus"></i></a>
                </div>
                <div class="col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3"><p class="copyright"><?php echo "Copyright © ".(int)date('Y')?></p></div>
                <div class="col-sm-4 col-xs-3">
                    <div class="text-right page-scroll">
                        <a class="icon icon-up-bg" href="#hero"><i class="icon-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- /#footer -->

    <!-- Modals -->
    <div id="portfolioItem1" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="{{url('frontend/assets/img/portfolio-1.png')}}" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">Sistem e-Screening Jiwa</h4>
            <p>Sistem ini bertujuan untuk menampilkan hasil kesehatan mental remaja dengan standarisasi kuesioner dari kementrian kesehatan dengan aktor pengguna adalah Siswa, Guru, Puskesmas. Alur kerja sistem secara garis besar adalah Siswa akan mengisi kuesioner. Hasil kuesioner akan ditampilkan di halaman Guru. Hasil kuesioner memiliki 3 kriteria penilaian yaitu Normal, Abnormal, dan Borderline. Jika hasil kuesioner siswa Abnormal, maka guru akan melakukan konseling pribadi dengan siswa dan jika Borderline, siswa akan direkomendasikan untuk melakukan konseling dengan pihak puskesmas untuk ditangani oleh pihak yang lebih profesional.</p>
            <p>Sistem ini dibangun menggunakan bahasa pemograman PHP, framework Codeigniter, database MySQL</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-fill">Visit Page</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem2" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="{{url('frontend/assets/img/portfolio-2.png')}}" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">Sistem Aplikasi DUPAK Back-End</h4>
            <p>Sistem ini bertujuan untuk mempermudah pegawai untuk melakukan usulan penetapan angka kredit dalam hal kenaikan pangkat. Secara garis besar, alur kerja sistem ini adalah pegawai menambah data setiap butir kegiatan untuk dilakukan penilaian, selanjutnya admin dapat melihat rangkaian kegiatan yang telah dilaksanakan dan mencetak laporan daftar usulan penetapan angka kredit.</p>
            <p>Sistem ini dibangun menggunakan bahasa pemograman PHP native, database MySQL</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-fill">Visit Page</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem3" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="{{url('frontend/assets/img/portfolio-3.png')}}" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">Sistem Informasi DUPAK Front-End</h4>
            <p>Sistem ini bertujuan untuk menampilkan informasi yang berhubungan dengan Daftar Usulan Penetapan Angka Kredit bagi pegawai. Dalam sistem ini menampilkan data-data yang dibutuhkan dalam keperluan usulan penetapan angka kredit pegawai dan pengumuman yang berisi informasi seputar DUPAK.</p>
            <p>Sistem ini dibangun menggunakan bahasa pemograman PHP native, database MySQL</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-fill">Visit Page</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem4" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="{{url('frontend/assets/img/portfolio-4.png')}}" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">SI-BIMBEL</h4>
            <p>Sistem Informasi Bimbingan Belajar Antusias Semarang. Project ini adalah project Tugas Akhir saya. Sistem ini memiliki 4 aktor yaitu siswa, tutor, admin, manajemen. Secara garis besar, alur kerja sistem ini adalah siswa, tutor melakukan pendaftaran yang akan diverifikasi admin. Siswa me-request jadwal belajar privat. Kemudian tutor akan me-request ketersediaan mengajar. Admin melakukan verifikasi, lalu tutor dan siswa akan melakukan sistem belajar mengajar secara privat. setelah selesai, siswa dapat melakukan penilaian terhadap tutor. Tutor dapat melihat jumlah gaji yang diperoleh setiap bulan, siswa/orangtua dapat melihat informasi tagihan setiap bulan. Pihak manajemen dapat melihat laporan tagihan dan gaji. Setiap akhir bulan, pihak manajemen akan mengirimkan informasi tagihan kepada siswa/orangtua melalui email. Setelah pembayaran sudah selesai, pihak manajemen dapat mengkonfirmasi pembayaran lunas.</p>
            <p>Sistem ini dibangun menggunakan bahasa pemograman PHP, framework Codeigniter, database MySQL</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-fill">Visit Page</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem5" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="{{url('frontend/assets/img/portfolio-5.png')}}" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">Books For Life</h4>
            <p>Aplikasi Books For Life merupakan aplikasi web sederhana yang dibangun menggunakan pemogaraman native dengan bahasa PHP dan database Mysql. Aplikasi ini secara garis besar adalah melakukan pemesanan buku-buku yang terdapat dikatalog. Pemesan akan login jika ingin melakukan pemesanan, dan dapat mengubah, menambah buku dan otomatis akan menampilkan total harga pemesanan buku untuk dikirimkan ke alamat penerima.</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-fill">Visit Page</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem6" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="{{url('frontend/assets/img/portfolio-6.jpg')}}" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">E-Learning</h4>
            <p>Saya saat ini dalam proses mengembangkan sebuah sistem e-learning yang akan dikembangkan menggunakan pemograman PHP, Framework Laravel dengan database postgreSQL.</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-fill">Visit Page</a>
          </div>
        </div><!-- /.modal-content
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal --> -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{url('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{url('frontend/assets/js/skrollr.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-progressbar/0.9.0/bootstrap-progressbar.min.js"></script>
    <script src="{{url('frontend/assets/js/jquery.countTo.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/script.js')}}"></script>
  
</body>
</html>