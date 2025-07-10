@extends('layouts.header')
@section('content')
<section class="section-top breadcrumb-area" style="background-image: url(assets/img/au/culture.jpg);  background-size:cover; background-position: center center;">
  <div class="container">
    <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
      <div class="inner-content clearfix">
        <div class="title wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
          <h1>Industries Culturelles et Créatives (ICC)</h1>
        </div>
        <div class="border-box"></div>
        <div class="breadcrumb-menu wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
          <ul class="clearfix">
            <li><a href="{{url('/')}}">Accueil</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li class="active">Industries Culturelles <strong style="font-weight: 700;">/</strong> Créatives</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
       
        .titles {
            color: #f99828;
            font-weight: 700;
        }
        .feature-box{
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
            padding: 30px;
            transition: all 0.3s ease-in-out;
            height: 100%;
        }
        .feature-box:hover{
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .icon{
            font-size: 40px;
            color: #f99828;
            margin-bottom: 15px;
        }
    </style>



<section class="bg-light py-5 text-center">
    <div class="container">
        <h1 class="titles">Industries Culturelles et Créatives (ICC)</h1>
        <p class="lead mt-3">ACCES UNIVERSEL valorise les talents locaux et l’économie créative comme levier de développement et d’inclusion.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
         
            <div class="col-md-4">
                <div class="feature-box text-center">
                    <div class="icon"><i class="fas fa-lightbulb"></i></div>
                    <h5 class="fw-bold">1. Accompagnement de projets créatifs</h5>
                    <p>Appui à la structuration de projets culturels (mode, musique, audiovisuel, arts visuels, etc.).</p>
                    <p>Coaching artistique et stratégique.</p>
                </div>
            </div>

           
            <div class="col-md-4">
                <div class="feature-box text-center">
                    <div class="icon"><i class="fas fa-chalkboard-teacher"></i></div>
                    <h5 class="fw-bold">2. Formation et renforcement des compétences</h5>
                    <p>Ateliers sur l’entrepreneuriat culturel.</p>
                    <p>Formations sur la gestion de projets artistiques, le marketing culturel et la propriété intellectuelle.</p>
                </div>
            </div>

           
            <div class="col-md-4">
                <div class="feature-box text-center">
                    <div class="icon"><i class="fas fa-university"></i></div>
                    <h5 class="fw-bold">3. Conseil en valorisation du patrimoine culturel</h5>
                    <p>Projets intégrant les savoir-faire traditionnels dans des dynamiques contemporaines.</p>
                    <p>Stratégies de médiation culturelle et de transmission intergénérationnelle.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


    

