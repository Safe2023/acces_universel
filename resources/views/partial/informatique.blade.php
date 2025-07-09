@extends('layouts.header')
@section('content')
<style>
    .service-box {
        border: 2px solid #F7921D;
        border-radius: 20px;
        transition: all 0.3s ease;
        text-align: center;
        padding: 20px 15px;
        background-color: #fff;
    }

    .service-icon {
        background-color: #F7921D;
        color: #fff;

        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px auto;
        border-radius: 50%;
        font-size: 20px;
        transition: all 0.3s ease;
    }

    .service-box:hover {
        background-color: #F7921D;
        color: #fff;
    }

    .service-box:hover .service-icon {
        background-color: #fff;
        color: #F7921D;
    }

    .service-box h5,
    .service-box p {
        transition: color 0.3s ease;
    }

    .service-box:hover h5,
    .service-box:hover p {
        color: #fff;
    }

    .accordion-button .active {
        background-color: #F7921D;
        color: #fff;
    }


    .accordion-button:not(.collapsed) {
        background-color: #F7921D;
        color: #fff;
    }

    .accordion-button:hover {
        background-color: #ac5f06;
        color: #fff;
    }

    .accordion-button::after {
        filter: invert(1);
    }

    button:focus:not(:focus-visible) {
        display: none;
    }

    .about-img .main-img {
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .about-img .main-img:hover {
        transform: scale(1.03);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.25);
    }

    .paragraph {
        text-align: justify;
        line-height: 1.6;
        margin-bottom: 0;
    }
</style>
</style>

<section class="section-top breadcrumb-area" style="background-image: url(assets/img/au/informatique.jpg);  background-size:cover; background-position: center center;">
    <div class="container">
        <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
            <div class="inner-content clearfix">
                <div class="title wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                    <h1>Informatique</h1>
                </div>
                <div class="border-box"></div>
                <div class="breadcrumb-menu wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                    <ul class="clearfix">
                        <li><a href="{{url('/')}}">Accueil</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li class="active">Informatique</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-video-section py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="section-title text-center mb-2">
                <h2 class="">Solutions Informatiques Professionnelles</h2>
                <p class="paragraph">
                    Chez <strong>ACCES UNIVERSEL SARL</strong>, nous comprenons que l’informatique est un levier stratégique pour toute organisation moderne.
                    C’est pourquoi nous vous accompagnons dans la conception, la mise en œuvre et la maintenance de solutions informatiques robustes, innovantes et adaptées à vos besoins. De la gestion des systèmes d'information à la cybersécurité, en passant par le développement web et logiciel, notre équipe d’experts vous guide dans votre transformation numérique.
                </p>

            </div>
        </div>
    </div>
</section>

<div class="container-fluid about bg-light mb-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <div class="about-img pb-5 ">
                    <img src="assets/img/au/info.jpg" class="img-fluid main-img" alt="Image principale">
                </div>
            </div>
            <div class="col-lg-7" >

                <h4 class="px-3 mb-0 text-center mb-3" style="color: #F7921D;">Solutions Informatiques</h4>

                <h6 class="mb-3">Nous développons des outils numériques sur mesure pour répondre aux besoins spécifiques des organisations publiques, privées et communautaires</h6>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Implémentation de systèmes d'information et de gestion
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Conception de logiciels de gestion administrative et technique <br />
                                Déploiement de solutions de suivi-évaluation de projets<br />
                                Accompagnement à l’intégration et à la formation des équipes
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Développement web
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Création de sites internet dynamiques et responsives <br />
                                Développement d'applications web professionnelles
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Développement mobile
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Conception d'applications Android et iOS <br />
                                Intégration des fonctionnalités offline/online selon les contextes
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Développement de logiciels (desktop)
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Conception d’applications de bureau pour Windows <br />
                                Développement d'outils internes personnalisés
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
       
    </div>
</div>


 <div class="text-center mt-5 mb-5">
            <h4 class="mb-3">Besoin d’un accompagnement ou d'un conseil en Développement & Assistance Technique?</h4>
            <a href="https://wa.me/2290191718686" target="_blank" class="btn btn-lg" style="background-color: #F7921D; color: white;">Contactez-nous</a>
        </div>
@endsection