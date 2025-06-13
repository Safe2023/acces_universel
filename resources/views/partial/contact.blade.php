@extends('layouts.header')
@section('content')
<style>

  .modal1 {
    background: #F7921D !important;
    color: #fff !important;
       text-transform: uppercase
  }

  .modal1:hover {
    background: #fff !important;
    color: #F7921D !important;
    border: 1px solid #fc9400;
  
  }

  .logo {
    font-weight: 700;
    font-size: 28px;
    display: flex;
    align-items: center;
    gap: 10px;
    cursor: default;
    user-select: none;
  }

  /* Animation sur l'icône œil */
  .logo i {
    animation: eyePulse 2.5s infinite;
    color: #fff;
    font-size: 28px;
    transition: transform 0.3s ease;
  }

  /* Petit effet au survol sur l'icône */
  .logo:hover i {
    transform: scale(1.2) rotate(15deg);
    color: #f99828;
  }

  @keyframes eyePulse {

    0%,
    100% {
      transform: scale(1);
      opacity: 1;
    }

    50% {
      transform: scale(1.1);
      opacity: 0.85;
    }
  }
</style>
</style>

<div class="back-to-top"></div>

<section class="section-top breadcrumb-area" style="background-image: url(assets/img/au/contacte.jpg);  background-size:cover; background-position: center center;">
    <div class="container">
    <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                <div class="inner-content clearfix">
                    <div class="title wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <h1>Nous Contactez</h1>
                    </div>
                    <div class="border-box"></div>
                    <div class="breadcrumb-menu wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <ul class="clearfix">
                            <li><a href="{{url('/')}}">Accueil</a></li>
                            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</section>

<section class="contact-info py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Contactez-nous</h2>
      <p class="text-muted">Nous sommes disponibles pour toute demande ou collaboration</p>
    </div>
    <div class="row g-4 justify-content-center">
      <!-- Téléphone -->
      <div class="col-md-4">
        <div class="card h-100 text-center shadow-sm border-0 p-4">
          <div class="mb-3">
            <div class="icones logo text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width:60px; height:60px;">
              <i class="fas fa-phone-alt fa-lg"></i>
            </div>
          </div>
          <h5 class="fw-bold">Téléphone</h5>
          <p class="text-muted">+229 0191 718 686 <br>+229 0197 138 302</p>
        </div>
      </div>

      <!-- Email -->
      <div class="col-md-4">
        <div class="card h-100 text-center shadow-sm border-0 p-4">
          <div class="mb-3">
            <div class="icones logo text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width:60px; height:60px;">
              <i class="fas fa-envelope fa-lg"></i>
            </div>
          </div>
          <h5 class="fw-bold">Email</h5>
          <p class="text-muted"><a href="mailto:contact@accesuniversel.bj">contact@accesuniversel.bj</a></p>
        </div>
      </div>

      <!-- Adresse -->
      <div class="col-md-4">
        <div class="card h-100 text-center shadow-sm border-0 p-4">
          <div class="mb-3">
            <div class="icones logo text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width:60px; height:60px;">
              <i class="fas fa-map-marker-alt fa-lg"></i>
            </div>
          </div>
          <h5 class="fw-bold">Adresse</h5>
          <p class="text-muted">C/2122 Quartier Mènontin<br>Cotonou, Bénin</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- END ADDRESS -->

<!-- START CONTACT -->
<section id="contact" class="contact_us section-padding mt-5">
  <div class="container">
    <div class="row contact_us_bg">
      <div class="col-lg-7 col-sm-12 col-xs-12">
        <div class="contact">
          <h2 class="fw-bold mb-4">Entrer en contact</h2>
          <p class="text-muted mb-5">Nous sommes ravis d'échanger avec vous pour répondre à vos besoins ou discuter d’une future collaboration.</p>

          @if (session('success'))<div class="alert alert-success">{{session('success')}}</div>
          @endif
          @if (session('error'))<div class="alert alert-danger">{{session('error')}}</div>
          @endif
          <form class="form" name="enq" method="post" action="{{route('envoiedemail')}}">
            @csrf
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Votre Nom" required="required" name="nom_prenom">
              </div>
              <div class="form-group col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Votre Email" required="required" name="email">
              </div>
              <div class="form-group col-md-12">
                <input type="text" class="form-control" placeholder="Sujet" required="required" name="sujet">
              </div>
              <div class="form-group col-md-12">
                <textarea name="massage" id="" cols="30" rows="4" class="form-control" placeholder="Rediger votre message..."></textarea>
              </div>
              <div class="col-md-6 text-center">
                <input type="submit" value="Envoyer votre message" class="btn py-3 px-5 modal1">

              </div>
            </div>
          </form>

        </div>
      </div><!-- END COL  -->
      <div class="col-lg-5 col-sm-12 col-xs-12">
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15860.072423927992!2d2.3714996928235124!3d6.391664995159708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sbj!4v1704285031080!5m2!1sfr!2sbj" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div><!-- END COL  -->
    </div><!-- END ROW -->
  </div><!-- END CONTAINER -->
</section>
@endsection