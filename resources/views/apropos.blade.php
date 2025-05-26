@extends('layouts.header')
@section('content')

<style>
  .oigtr{
    text-align: center;
    font-size: 20px;
    color: #f99828;
    text-transform: uppercase;
  }
</style>
<section class="section-top breadcrumb-area" style="background-image: url(assets/img/bg/section-bg.jpg);  background-size:cover; background-position: center center;">
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
                            <li class="active">A propos0</li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</section>

<section class="about-content-two section-padding mt-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-12 col-xs-12">
				<div class="about-two-img">
					<img src="assets/img/au/DG_AU.jpg" class="img-fluid" alt="" />
				</div>
			</div><!--- END COL -->
			<div class="col-lg-6 col-sm-12 col-xs-12">
				<div class="about-two">
					<h4>A PROPOS DE NOUS</h4>
			 	<h5>Gérez tout <br /><b>en un seul endroit</b></h5>
					<p> ACCES UNIVERSEL SARL est une agence africaine de développement durable, spécialisée dans le management de projets de développement 
					international et d’action humanitaire (DIAH), et dans la coopération technique public-privé.</p>
				</div>
				<div class="award_area">
					<img src="assets/img/award.png" alt="" />
					<h4>Formation <br /> de qualité</h4>
					<p>Nos formations allient théorie, pratique et certification, pour garantir une montée en compétence complète et validée.

 </p>
				</div>
				<a class="about-btn" href="about.html">Know More</a>
			</div><!--- END COL -->
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</section>
<div class="container mt-5 pt-5 mb-5">
<div class="row justify-content-center mb-2 bg-light">
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
      </div> <div class="col-md-6 mt-3">
        <div class="h-100 p-5 bg-body-tertiary border rounded-3">
          <h2 class="oigtr">integrité</h2>
          <p>Nous créons des changements positifs tangibles et durables dans les communautés que nous servons, 
          en mesurant et en maximisant nos contributions à la transformation sociale, économique et environnementale</p>
        
        </div>
      </div> <div class="col-md-6 mt-3">
        <div class="h-100 p-5 bg-body-tertiary border rounded-3">
          <h2 class="oigtr">Impact</h2>
          <p>Nous croyons en une entreprise qui construit, qui élève, qui inspire.
          Une entreprise qui agit avec cœur et conscience, pour générer un impact social, humain et durable.</p>
        
        </div>
      </div>
    </div>
</div>
@endsection