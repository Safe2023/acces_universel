<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Chorbi - IT Solution & Business Service HTML5 Template">
    <meta name="keywords" content="themes_master, blog, business, clean, corporate, creative, ecommerce, gallery, multipurpose, one page, photography, portfolio, responsive, shop">
    <meta name="author" content="themes_master">
    <!-- SITE TITLE -->
    <title>ACCES UNIVERSEL</title>
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/themify-icons.css">
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
    <!--slicknav Css-->
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<style>
    .icones {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background-color: #f99828;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: auto;
        color: #fff;
    }

    .icones:hover {
        color: #f99828;
        background-color: #fff;
        border: 1px solid #f99828;

    }

    .btn-second {
        text-transform: uppercase;
        background-color: #fff;
        color: #f99828;
        border: #f99828 1px solid;
        font-weight: bold;
        box-shadow: 0;

    }

    .btn-second .btn.focus,
    .btn-secondary:hover {
        background-color: #f99828;
        color: #fff;
        border: #f99828;
        font-weight: bold;
    }
</style>
<style>
    .breadcrumb-area {
        position: relative;
        background-attachment: scroll;
        background-position: center top;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 297px 0 202px;
        z-index: 10;
    }

    .breadcrumb-area::before {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(0, 0, 0, 0.50) none repeat scroll 0 0;
        content: "";
        z-index: -1;
    }

    .breadcrumb-area .inner-content {
        position: relative;
        display: block;
        text-align: center;
    }

    .breadcrumb-area .title {
        position: relative;
        display: block;
    }

    .breadcrumb-area .title h1 {
        color: #ffffff;
        font-size: 72px;
        line-height: 80px;
        font-weight: 700;
        text-transform: none;
    }

    .breadcrumb-area .inner-content .border-box {
        position: relative;
        display: block;
        width: 70px;
        height: 2px;
        background: #ffffff;
        margin: 14px auto 24px;
    }

    .breadcrumb-area .breadcrumb-menu {
        position: relative;
        display: block;
        line-height: 0;
    }

    .breadcrumb-area .breadcrumb-menu ul {
        position: relative;
        display: block;
        overflow: hidden;
        text-align: center;
    }

    .breadcrumb-area .breadcrumb-menu ul li {
        position: relative;
        display: inline-block;
        float: none;
        color: #ffffff;
        font-size: 18px;
        line-height: 26px;
        font-weight: 400;
        text-transform: capitalize;
        transition: all 500ms ease;
        padding: 0 3px;
        font-family: 'Hind Siliguri', sans-serif;
    }

    .breadcrumb-area .breadcrumb-menu ul li a {
        color: #ffffff;
        transition: all 500ms ease;
    }



    /*** 
=============================================
    Breadcrumb Area Style2 Css
=============================================
***/
    .breadcrumb-area.style2 {
        padding: 348px 0 212px;
    }

    .breadcrumb-area.style2::before {
        display: none;
    }

    .breadcrumb-area.style2 .inner-content {
        text-align: left;
    }

    .breadcrumb-area.style2 .title h1 {
        color: #52a85e;
        font-weight: 700;
        margin-bottom: 18px;
    }

    .breadcrumb-area.style2 .breadcrumb-menu ul {
        text-align: left;
    }

    .breadcrumb-area.style2 .breadcrumb-menu ul li {
        color: #222222;
        padding: 0 3px;
        text-transform: uppercase;
    }

    .breadcrumb-area.style2 .breadcrumb-menu ul li a {
        color: #222222;
    }



    /*** 
=============================================
    Breadcrumb Area Style3 Css
=============================================
***/
    .breadcrumb-area.style3 {
        padding: 188px 0 192px;
    }

    .breadcrumb-area.style3::before {
        display: none;
    }

    .breadcrumb-area.style3 .inner-content {
        text-align: left;
    }

    .breadcrumb-area.style3 .title h1 {
        color: #ffffff;
        font-weight: 800;
        margin-bottom: 18px;
    }

    .breadcrumb-area.style3 .breadcrumb-menu ul {
        text-align: left;
    }

    .breadcrumb-area.style3 .breadcrumb-menu ul li {
        color: #ffffff;
        padding: 0 3px;
        text-transform: capitalize;
    }

    .breadcrumb-area.style3 .breadcrumb-menu ul li a {
        color: #ffffff;
    }
</style>
<style>
    .contact-section .contact-info p {
        font-weight: 600;
        color: #000000;
        margin-bottom: 0;
    }

    .contact-section .contact-info p a {
        color: #1a1a1a;
    }

    .contact-section .contact-info p span {
        display: block;
        font-size: 16px;
        font-weight: 400;
        color: #999999;
    }

    .contact-section .icon {
        margin-top: 10px;
    }

    .contact-section .contact-info .icon span {
        font-size: 20px;
        color: #F7921D;
    }

    @media (min-width: 992px) {
        .contact-section .contact-info .border-height {
            border-left: 1px solid rgba(0, 0, 0, 0.1);
            border-right: 1px solid rgba(0, 0, 0, 0.1);
        }
    }

    .contact-section .contact-form {
        width: 100%;
    }

    .mes {
        color: #fc9400;
    }

    .mes:hover {
        color: #161616;
    }

    .modal1 {
        background: #F7921D;
        color: #fff;
    }

    .modal1:hover {
        background: #fff;
        color: #F7921D;
        border: 1px solid #fc9400;
    }
</style>
<style>
    .breadcrumb-area {
        position: relative;
        background-attachment: scroll;
        background-position: center top;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 297px 0 202px;
        z-index: 10;
    }

    .breadcrumb-area::before {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(0, 0, 0, 0.50) none repeat scroll 0 0;
        content: "";
        z-index: -1;
    }

    .breadcrumb-area .inner-content {
        position: relative;
        display: block;
        text-align: center;
    }

    .breadcrumb-area .title {
        position: relative;
        display: block;
    }

    .breadcrumb-area .title h1 {
        color: #ffffff;
        font-size: 72px;
        line-height: 80px;
        font-weight: 700;
        text-transform: none;
    }

    .breadcrumb-area .inner-content .border-box {
        position: relative;
        display: block;
        width: 70px;
        height: 2px;
        background: #ffffff;
        margin: 14px auto 24px;
    }

    .breadcrumb-area .breadcrumb-menu {
        position: relative;
        display: block;
        line-height: 0;
    }

    .breadcrumb-area .breadcrumb-menu ul {
        position: relative;
        display: block;
        overflow: hidden;
        text-align: center;
    }

    .breadcrumb-area .breadcrumb-menu ul li {
        position: relative;
        display: inline-block;
        float: none;
        color: #ffffff;
        font-size: 18px;
        line-height: 26px;
        font-weight: 400;
        text-transform: capitalize;
        transition: all 500ms ease;
        padding: 0 3px;
        font-family: 'Hind Siliguri', sans-serif;
    }

    .breadcrumb-area .breadcrumb-menu ul li a {
        color: #ffffff;
        transition: all 500ms ease;
    }



    /*** 
=============================================
    Breadcrumb Area Style2 Css
=============================================
***/
    .breadcrumb-area.style2 {
        padding: 348px 0 212px;
    }

    .breadcrumb-area.style2::before {
        display: none;
    }

    .breadcrumb-area.style2 .inner-content {
        text-align: left;
    }

    .breadcrumb-area.style2 .title h1 {
        color: #52a85e;
        font-weight: 700;
        margin-bottom: 18px;
    }

    .breadcrumb-area.style2 .breadcrumb-menu ul {
        text-align: left;
    }

    .breadcrumb-area.style2 .breadcrumb-menu ul li {
        color: #222222;
        padding: 0 3px;
        text-transform: uppercase;
    }

    .breadcrumb-area.style2 .breadcrumb-menu ul li a {
        color: #222222;
    }



    /*** 
=============================================
    Breadcrumb Area Style3 Css
=============================================
***/
    .breadcrumb-area.style3 {
        padding: 188px 0 192px;
    }

    .breadcrumb-area.style3::before {
        display: none;
    }

    .breadcrumb-area.style3 .inner-content {
        text-align: left;
    }

    .breadcrumb-area.style3 .title h1 {
        color: #ffffff;
        font-weight: 800;
        margin-bottom: 18px;
    }

    .breadcrumb-area.style3 .breadcrumb-menu ul {
        text-align: left;
    }

    .breadcrumb-area.style3 .breadcrumb-menu ul li {
        color: #ffffff;
        padding: 0 3px;
        text-transform: capitalize;
    }

    .breadcrumb-area.style3 .breadcrumb-menu ul li a {
        color: #ffffff;
    }
</style>
<style>
    .team-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .team-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .team-card img {
        border-top-left-radius: 0.5rem;
        border-top-right-radius: 0.5rem;
    }

    .for {
        color: #f99828;
        border: #f99828 1px solid;
        background-color: #ffffff;
    }

    .for:hover {
        color: #ffffff;
        border: #f99828 1px solid;
        background-color: #f99828;
    }

    .subs {
        color: #ffffff;
        border: #f99828 1px solid;
        background-color: #f99828;


    }

    .subs:hover {
        color: #f99828;
        border: #f99828 1px solid;
        background-color: #ffffff;
    }
</style>

<body>

    <!-- START LOGO WITH CONTACT -->
    <section class="logo-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-top-contact">
                        <i class="fa fa-home"></i>
                        <h4><strong>91718686 / 97138302</strong></h4>
                    </div>
                </div><!--- END COL -->

                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-top-contact">
                        <i class="fa fa-clock-o"></i>
                        <h4><strong>Ouvert du lundi au vendredi : 08h - 18h</strong></h4>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="top_social_profile">
                        <ul>
                            <li><a href="https://www.facebook.com/profile.php?id=61553480523014&mibextid=ZbWKwL" class="top_f_facebook"><i class="fa fa-facebook" title="Facebook"></i></a></li>
                            <li><a href="#" class="top_f_whatsapp"><i class="fa fa-whatsapp" title="Whatsapp"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/accesuniversel" class="top_f_linkedin"><i class="fa fa-linkedin" title="LinkedIn"></i></a></li>
                            <li><a href="https://wphtml.com/cdn-cgi/l/email-protection" class="top_f_envelope"><i class="fa fa-envelope" title="envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <style>
    body {
      margin: 0;
      padding-bottom: 100px; /* pour laisser la place au menu mobile */
    }

    /* NAVBAR DESKTOP */
    .dropdown-menu {
      display: none;
      position: absolute;
      background-color: #fff;
      min-width: 160px;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
      z-index: 1000;
    }

    .nav-item.dropdown:hover .dropdown-menu {
      display: block;
    }

    .dropdown-menu a {
      padding: 8px 16px;
      display: block;
      color: #212529;
      text-decoration: none;
    }

    .dropdown-menu a:hover {
      background-color: #f8f9fa;
    }

    /* MENU MOBILE FIXE EN BAS */
    .bottom-nav {
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      background: #fff;
      border-top: 1px solid #ddd;
      box-shadow: 0 -1px 5px rgba(0, 0, 0, 0.05);
      z-index: 1050;
    }

    .bottom-nav a {
      flex: 1;
      text-align: center;
      padding: 8px 0;
      font-size: 12px;
      color: #6c757d;
      text-decoration: none;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .bottom-nav a i {
      font-size: 18px;
    }

    .bottom-nav a span {
      margin-top: 2px;
      font-size: 11px;
    }

    .bottom-nav a.active {
      color: #0d6efd;
    }

    /* DROPDOWN MOBILE */
    .dropdown-menu-mobile {
      position: fixed;
      bottom: 60px;
      left: 0;
      right: 0;
      background-color: #ffffff;
      box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.1);
      border-radius: 8px 8px 0 0;
      overflow: hidden;
      opacity: 0;
      visibility: hidden;
      transform: translateY(20px);
      transition: all 0.3s ease-in-out;
      z-index: 1049;
    }

    .dropdown-menu-mobile.show {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }

    .dropdown-menu-mobile a {
      padding: 12px;
      display: block;
      color: #212529;
      text-decoration: none;
    }

    .dropdown-menu-mobile a:hover {
      background-color: #f1f1f1;
    }

    .chevron {
      font-size: 10px;
      transition: transform 0.3s ease;
    }

    .chevron.rotate {
      transform: rotate(180deg);
    }
  </style>
</head>
<body>

  <!-- NAVBAR DESKTOP -->
  <header class="d-none d-md-block">
    <div class="container">
      <div class="row align-items-center py-3">
        <div class="col-md-2">
          <a class="navbar-logo img-fluid" href="/"><img src="assets/img/au/logo_04.webp" alt="Logo" height="40"></a>
        </div>
        <div class="col-md-8 text-center">
          <nav class="nav justify-content-center">
            <a class="nav-link" href="#">Accueil</a>
            <a class="nav-link" href="#">À propos</a>
            <a class="nav-link" href="#">Formation</a>
            <div class="nav-item dropdown position-relative">
              <a class="nav-link dropdown-toggle" href="#" id="blogDropdown">Blog</a>
              <div class="dropdown-menu" aria-labelledby="blogDropdown">
                <a class="dropdown-item" href="#">Articles</a>
                <a class="dropdown-item" href="#">Actualités</a>
                <a class="dropdown-item" href="#">Interviews</a>
              </div>
            </div>
            <a class="nav-link" href="#">Contact</a>
          </nav>
        </div>
        <div class="col-md-2 text-end">
          <a href="#" class="btn btn-outline-primary">
            <i class="fas fa-user"></i>
          </a>
        </div>
      </div>
    </div>
  </header>

  <!-- NAVBAR MOBILE HAUT -->
  <header class="d-flex d-md-none justify-content-between align-items-center p-2 shadow-sm bg-white">
    <a href="#"><img src="https://via.placeholder.com/80x30?text=Logo" alt="Logo" /></a>
    <a href="#" class="btn btn-outline-primary btn-sm">
      <i class="fas fa-user"></i> Connexion
    </a>
  </header>

 
  <!-- MENU MOBILE EN BAS -->
  <nav class="bottom-nav d-flex d-md-none">
    <a href="#" class="active">
      <i class="fas fa-home"></i>
      <span>Accueil</span>
    </a>
    <a href="#">
      <i class="fas fa-info-circle"></i>
      <span>À propos</span>
    </a>
    <a href="#">
      <i class="fas fa-chalkboard-teacher"></i>
      <span>Formation</span>
    </a>
    <a href="#" id="mobileBlogToggle">
      <i class="fas fa-blog"></i>
      <span>Blog</span>
      <i class="fas fa-chevron-up chevron d-block"></i>
    </a>
    <a href="#">
      <i class="fas fa-envelope"></i>
      <span>Contact</span>
    </a>
  </nav>

  <!-- DROPDOWN MOBILE POUR BLOG -->
  <div class="dropdown-menu-mobile text-center d-md-none" id="mobileBlogMenu">
    <a href="#">Articles</a>
    <a href="#">Actualités</a>
    <a href="#">Interviews</a>
  </div>

  <!-- Bootstrap JS + Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const toggleBtn = document.getElementById('mobileBlogToggle');
    const blogMenu = document.getElementById('mobileBlogMenu');
    const chevron = document.querySelector('#mobileBlogToggle .chevron');

    toggleBtn.addEventListener('click', function (e) {
      e.preventDefault();
      blogMenu.classList.toggle('show');
      chevron.classList.toggle('rotate');
    });

    document.addEventListener('click', function (e) {
      if (!toggleBtn.contains(e.target) && !blogMenu.contains(e.target)) {
        blogMenu.classList.remove('show');
        chevron.classList.remove('rotate');
      }
    });
  </script>
  <main>
        @yield('content')
    </main>
    <!-- START FOOTER -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="footer_logo">
                        <img src="assets/img/au/logo_01.png" alt="" />
                        <p>Nous serons ravis de vous accueillir dans nos locaux.</p>
                    </div>
                    <div class="social_profile">
                        <ul>
                            <li><a href="https://www.facebook.com/profile.php?id=61553480523014&mibextid=ZbWKwL" class="top_f_facebook"><i class="fa fa-facebook" title="Facebook"></i></a></li>
                            <li><a href="#" class="top_f_whatsapp"><i class="fa fa-whatsapp" title="Whatsapp"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/accesuniversel" class="top_f_linkedin"><i class="fa fa-linkedin" title="LinkedIn"></i></a></li>
                            <li><a href="https://wphtml.com/cdn-cgi/l/email-protection" class="top_f_envelope"><i class="fa fa-envelope" title="envelope"></i></a></li>
                        </ul>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_footer single_footer_top_one">
                        <h4>Accès Universel</h4>
                        <ul>
                            <li><a href="#">Relation Investisseurs</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Prochain rendez-vous</a></li>
                            <li><a href="#">Événements</a></li>

                        </ul>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-1">
                    <div class="single_footer single_footer_top">
                        <h4>Liens rapides</h4>
                        <ul>
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#">Formation</a></li>
                            <li><a href="/contact">Contactez-nous</a></li>

                        </ul>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="newsletter-form">
                        <h4>Abonnez-vous pour les mises à jour</h4>
                        @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <form action="{{route('newsletter.newsletter')}}" method="post" class="subscribe">
                            @csrf
                            <input type="text" class="subscribe__input" placeholder="Address Email " name="email">
                            <button type="submit" class="subs">S'abonner</button>
                        </form>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer_copyright">
                        <p>&copy; 2025 Acces universel.Tous droits réservésd.</p>
                    </div>
                </div>
            </div>
        </div><!--- END CONTAINER -->
    </div>
    <!-- END FOOTER -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');

            function setActiveLink() {
                const currentUrl = window.location.href;
                navLinks.forEach(function(link) {
                    if (link.href === currentUrl) {
                        link.parentElement.classList.add('active');
                    } else {
                        link.parentElement.classList.remove('active');
                    }
                });
            }

            setActiveLink();

            window.addEventListener('popstate', setActiveLink);
        });
    </script>
    <!-- Latest jQuery -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- owl-carousel min js  -->
    <script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- magnific-popup js -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- jquery.slicknav -->
    <script src="assets/js/jquery.slicknav.js"></script>
    <!-- jquery mixitup min js -->
    <script src="assets/js/jquery.mixitup.js"></script>
    <!-- jquery venobox min js -->
    <script src="assets/js/venobox.min.js"></script>
    <!-- countTo js -->
    <script src="assets/js/jquery.inview.min.js"></script>
    <!-- WOW - Reveal Animations When You Scroll -->
    <script src="assets/js/wow.min.js"></script>
    <!-- stellar js -->
    <script src="assets/js/jquery.stellar.min.js"></script>
    <!-- scrolltopcontrol js -->
    <script src="assets/js/scrolltopcontrol.js"></script>
    <!-- scripts js -->
    <script src="assets/js/scripts.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"92aff395cb19d12c","version":"2025.3.0","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"af32052a4af94682924748133ff6d4eb","b":1}' crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>


