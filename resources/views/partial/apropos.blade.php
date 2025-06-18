@extends('layouts.header')
@section('content')


<section class="section-top breadcrumb-area" style="background-image: url(assets/img/au/union_welcom.jpg);  background-size:cover; background-position: center center;">
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

<section class="about-video-section py-5" style="background-color: #f8f9fa;">
  <div class="container">

    <div class="row ">
      <div class="section-title text-center mb-2">
        <h2 class="">À propos d' ACCES UNIVERSEL</h2>
        <p >
          ACCES UNIVERSEL SARL est une agence africaine de développement durable, spécialisée dans le management de projets de développement international et d’action humanitaire (DIAH), ainsi que dans la coopération technique public-privé.
        </p>
      </div>
    </div>


</section>

<div class="container py-5 shadow-section">
  <div class="row g-4 align-items-start">
    <!-- Vidéo -->
    <div class="col-md-6">
      <div class="video-container rounded overflow-hidden border border-2">
        <iframe class="w-100 rounded" height="400" src="https://www.youtube.com/embed/alswD2tCc_Q" title="Présentation Accès Universel" frameborder="0" allowfullscreen></iframe>
      </div>
      <p class="mt-3 text-center text-muted">
        Découvrez notre univers en vidéo pour mieux comprendre ce que nous faisons et pourquoi nous le faisons avec passion.
      </p>
    </div>

    <!-- Champs d'intervention -->
    <div class="col-md-6">
      <div class="intervention-section">
        <h4 class="intervention-title text-center w-100">Nos champs d’intervention</h4>
        <div class="intervention-item">Climat</div>
        <div class="intervention-item">Eau, Énergie et Alimentation</div>
        <div class="intervention-item">Santé et Développement Humain</div>
        <div class="intervention-item">Égalité Femme-Homme (EFH)</div>
        <div class="intervention-item">Industries Culturelles et Créatives (ICC)</div>
        <div class="intervention-item">Gouvernance économique et droits humains</div>
        <div class="intervention-item">Paix, stabilité et sécurité</div>
        <div class="intervention-item">Technologie et services digitaux</div>
      </div>
    </div>
  </div>
</div>



<div class="container mt-5 mb-5">
  <div class="row justify-content-center mb-5 ">
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
        <p class="text-center">Grâce à nos programmes d’incubation et d’accélération, nous stimulons l'innovation au sein de votre entreprise, renforçant ainsi votre compétitivité et votre position de leader sur votre marché.</p>

      </div>
    </div>
    <div class="col-md-6">
      <div class="h-100 p-5 bg-body-tertiary border rounded-3">
        <h2 class="oigtr">Impartialité</h2>
        <p class="text-center">Nous garantissons une totale impartialité dans la gestion de chacun de nos projets. Nos décisions sont guidées uniquement par la qualité, l’objectivité et les besoins réels de nos clients.</p>

      </div>
    </div>
    <div class="col-md-6 mt-3">
      <div class="h-100 p-5 bg-body-tertiary border rounded-3">
        <h2 class="oigtr">integrité</h2>
        <p class="text-center">Nous créons des changements positifs tangibles et durables dans les communautés que nous servons,
          en mesurant et en maximisant nos contributions à la transformation sociale, économique et environnementale</p>

      </div>
    </div>
    <div class="col-md-6 mt-3">
      <div class="h-100 p-5 bg-body-tertiary border rounded-3">
        <h2 class="oigtr">Impact</h2>
        <p class="text-center">Nous croyons en une entreprise qui construit, qui élève, qui inspire.
          Une entreprise qui agit avec cœur et conscience, pour générer un impact social, humain et durable.</p>

      </div>
    </div>
  </div>
</div>
@endsection