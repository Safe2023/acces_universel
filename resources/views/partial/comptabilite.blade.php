@extends('layouts.header')
@section('content')
<style>
  .service-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background-color: white;
    border-radius: 15px;
  }

  .service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  }

  .icon-circle {
    width: 70px;
    height: 70px;
    border: 1px solid #F7921D;
    color: #F7921D;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 28px;
    margin: 0 auto;
    transition: transform 0.3s ease;
  }

  .icon-circle:hover {
    background-color: #F7921D;
    color: #f8f9fa;
    border: none;
  }

  .service-card:hover .icon-circle {
    transform: scale(1.1) rotate(5deg);
  }

  .custom-paragraph {
    text-align: justify;
    line-height: 1.6;
    margin-bottom: 0;
  }

</style>

<section class="section-top breadcrumb-area" style="background-image: url(assets/img/au/comptabilite.png);  background-size:cover; background-position: center center;">
  <div class="container">
    <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
      <div class="inner-content clearfix">
        <div class="title wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
          <h1>Conseil en Développement</h1>
        </div>
        <div class="border-box"></div>
        <div class="breadcrumb-menu wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
          <ul class="clearfix">
            <li><a href="{{url('/')}}">Accueil</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li class="active">Conseil en développement</li>
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
        <h2 class="">Conseil en Développement & Assistance Technique</h2>
        <p style="max-width: 800px; margin: auto;">
          Nous accompagnons les acteurs dans la structuration, l’amélioration et la mise en œuvre de leurs stratégies de développement durable.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row g-4">

      <div class="col-md-4 d-flex">
        <div class="service-card text-center p-4 h-100 d-flex flex-column w-100">
          <div class="icon-circle mb-3">
            <i class="fas fa-balance-scale"></i>
          </div>
          <h5 class="fw-bold">Conseil stratégique en développement</h5>
          <p class="text-muted text-start custom-paragraph flex-grow-1">
            Appui à la formulation de projets innovants<br />
            Structuration des actions autour de la durabilité, la gouvernance et la performance
          </p>
        </div>
      </div>

      <div class="col-md-4 d-flex">
        <div class="service-card text-center p-4 h-100 d-flex flex-column w-100">
          <div class="icon-circle mb-3">
            <i class="fas fa-calculator"></i>
          </div>
          <h5 class="fw-bold">Intermédiation et gestion des coopérants volontaires</h5>
          <p class="text-muted text-start custom-paragraph flex-grow-1">
            Mobilisation et encadrement des volontaires nationaux/internationaux<br />
            Suivi de mission et évaluation d’impact sur le terrain
          </p>
        </div>
      </div>

      <div class="col-md-4 d-flex">
        <div class="service-card text-center p-4 h-100 d-flex flex-column w-100">
          <div class="icon-circle mb-3">
            <i class="fas fa-user-tie"></i>
          </div>
          <h5 class="fw-bold">Formation et renforcement des capacités</h5>
          <p class="text-muted text-start custom-paragraph flex-grow-1">
            Formation en développement web et mobile<br />
            Formation en suivi et évaluation de projets<br />
            Ateliers personnalisés en gestion de projet et innovation sociale
          </p>
        </div>
      </div>

      <div class="col-md-4 d-flex">
        <div class="service-card text-center p-4 h-100 d-flex flex-column w-100">
          <div class="icon-circle mb-3">
            <i class="fas fa-users"></i>
          </div>
          <h5 class="fw-bold">Projets durables</h5>
          <p class="text-muted text-start custom-paragraph flex-grow-1">
            Intégration des enjeux sociaux et environnementaux dans vos projets<br />
            Appui à la mise en œuvre d’initiatives responsables et à impact
          </p>
        </div>
      </div>

      <div class="col-md-4 d-flex">
        <div class="service-card text-center p-4 h-100 d-flex flex-column w-100">
          <div class="icon-circle mb-3">
            <i class="fas fa-file-contract"></i>
          </div>
          <h5 class="fw-bold">Consultation en analyse de projets</h5>
          <p class="text-muted text-start custom-paragraph flex-grow-1">
            Études de faisabilité et évaluation d'impact<br />
            Analyse des risques et planification stratégique
          </p>
        </div>
      </div>

      <!-- Bouton contact -->
      <div class="col-12 text-center mt-5">
        <h4 class="mb-3">Besoin d’un accompagnement informatique personnalisé ?</h4>
        <a href="https://wa.me/2290191718686" target="_blank" class="btn btn-lg" style="background-color: #F7921D; color: white;">
          Contactez-nous
        </a>
      </div>

    </div>
  </div>
</section>



@endsection
