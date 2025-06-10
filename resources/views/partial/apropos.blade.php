@extends('layouts.header')
@section('content')

<style>
  .oigtr {
    text-align: center;
    font-size: 20px;
    color: #f99828;
    text-transform: uppercase;
  }

  
  @media (max-width: 768px) {
    .breadcrumb-area {
      height: 150px;
      /* hauteur réduite en mobile */
    }
  }

 .video-section {
      padding: 80px 0;
      background: linear-gradient(to right, #fdfbfb, #ebedee);
    }

    .video-card {
      background: #ffffff;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      padding: 30px;
      transition: transform 0.3s ease;
    }

    .video-card:hover {
      transform: translateY(-5px);
    }

    .video-wrapper {
      position: relative;
      padding-bottom: 56.25%;
      height: 0;
      overflow: hidden;
      border-radius: 10px;
    }

    .video-wrapper iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: none;
    }

    .section-title {
      font-size: 2.5rem;
      font-weight: bold;
      margin-bottom: 15px;
      color: #333;
    }

    .section-subtitle {
      font-size: 1.1rem;
      color: #666;
      margin-bottom: 30px;
    }
    
</style>
<section class="section-top breadcrumb-area" style="background-image: url(assets/img/au/union_welcom.jpg);  background-size:cover; background-position: center center;"  >
  <div class="container">
    <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
      <div class="inner-content clearfix">                   
        <div class="title wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
          <h1>A propos de nous</h1>
        </div>
        <div class="border-box"></div>
        <div class="breadcrumb-menu wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
          <ul class="clearfix">
            <li><a href="{{url('/')}}">Accueil</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li class="active">A propos</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="video-section">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-md-10 col-lg-8">
        <h2 class="section-title">Découvrez notre univers</h2>
        <p class="section-subtitle">Plongez dans notre présentation vidéo pour mieux comprendre ce que nous faisons et pourquoi nous le faisons avec passion.</p>
        <div class="video-card">
          <div class="video-wrapper">
            <iframe src="https://www.youtube.com/embed/alswD2tCc_Q" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<div class="container mt-5 mb-5">
  <div class="row justify-content-center mb-5 bg-light">
    <div class="heading_container col-md-7 text-center heading-section ftco-animate ">
      <h2 class="text-center mt-3 ">
        <span>Nos valeurs</span>
      </h2>
      <p>Nos valeurs guident chacune de nos décisions et définissent notre engagement envers un avenir meilleur pour tous.</p>

    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="h-100 p-5 bg-body-tertiary border rounded-3">
        <h2 class="oigtr">INNOVATION</h2>
        <p class="text-center">Nous prenons des décisions et agissons de manière équitable et objective, sans favoritisme ni préjugés, pour garantir des résultats justes et équilibrés dans toutes nos initiatives de développement.</p>

      </div>
    </div>
    <div class="col-md-6">
      <div class="h-100 p-5 bg-body-tertiary border rounded-3">
        <h2 class="oigtr">Impartialité</h2>
        <p>Nous garantissons une totale impartialité dans la gestion de chacun de nos projets. Nos décisions sont guidées uniquement par la qualité, l’objectivité et les besoins réels de nos clients.</p>

      </div>
    </div>
    <div class="col-md-6 mt-3">
      <div class="h-100 p-5 bg-body-tertiary border rounded-3">
        <h2 class="oigtr">integrité</h2>
        <p>Nous créons des changements positifs tangibles et durables dans les communautés que nous servons,
          en mesurant et en maximisant nos contributions à la transformation sociale, économique et environnementale</p>

      </div>
    </div>
    <div class="col-md-6 mt-3">
      <div class="h-100 p-5 bg-body-tertiary border rounded-3">
        <h2 class="oigtr">Impact</h2>
        <p>Nous croyons en une entreprise qui construit, qui élève, qui inspire.
          Une entreprise qui agit avec cœur et conscience, pour générer un impact social, humain et durable.</p>

      </div>
    </div>
  </div>
</div>
@endsection