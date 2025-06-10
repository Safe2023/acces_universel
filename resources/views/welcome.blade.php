@extends('layouts.header')
@section('content')
<style>
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
      0%, 100% {
        transform: scale(1);
        opacity: 1;
      }
      50% {
        transform: scale(1.1);
        opacity: 0.85;
      }
    }

	
</style>
<!-- START HOME -->
<div id="fw_al_007" class="carousel ps_rotate_scale_c ps_indicators_l ps_control_rotate_f swipe_x ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#fw_al_007" data-slide-to="0" class="active"></li>
		<li data-target="#fw_al_007" data-slide-to="1"></li>
		<li data-target="#fw_al_007" data-slide-to="2"></li>
	</ol>
	<!-- Wrapper For Slides -->
	<div class="carousel-inner" role="listbox">
		<!-- First Slide -->
		<div class="carousel-item active">
			<!-- Slide Background -->
			<img src="assets/img/au/welcom.jpg" alt="slider image" />
			<!-- Slide Text Layer -->
			<div class="fw_al_007_slide">
				<h3 data-animation="animated flipInX">Nous sommes là pour</h3>
				<h1 data-animation="animated flipInX">Donner du Futur à votre investissement</h1>
				<p data-animation="animated flipInX">Nous serons ravis de vous accueillir au sein de notre agence.</p>
				<a href="#service" data-animation="animated flipInX">En savoir plus</a>
			</div>
		</div>
		<!-- End of Slide -->
		<!-- Second Slide -->
		<div class="carousel-item">
			<!-- Slide Background -->
			<img src="assets/img/au/union_welcom.jpg" alt="slider image" />
			<!-- Slide Text Layer -->
			<div class="fw_al_007_slide">
				<h3 data-animation="animated flipInX">Venez avec nous</h3>
				<h1 data-animation="animated flipInX">Choisissez l'agence parfaite</h1>
				<p data-animation="animated flipInX">Nous sommes impatients de vous accueillir dans notre agence.</p>
				<a href="#service" data-animation="animated flipInX">En savoir plus</a>
			</div>
		</div>
		<!-- End of Slide -->
		<!-- Third Slide -->
		<div class="carousel-item">
			<!-- Slide Background -->
			<img src="assets/img/au/impartialite.jpg" alt="slider image" />
			<!-- Slide Text Layer -->
			<div class="fw_al_007_slide">
				<h3 data-animation="animated flipInX">Allons-y maintenant</h3>
				<h1 data-animation="animated flipInX">Votre meilleure agence numérique</h1>
				<p data-animation="animated flipInX">Ensemble. Nous pouvons façonner un avenir meilleur.</p>
				<a href="#service" data-animation="animated flipInX">En savoir plus</a>
			</div>
		</div>
		<!-- End of Slide -->
	</div><!-- End of Wrapper For Slides -->
	<!-- Left Control -->
	<a class="left carousel-control" href="#fw_al_007" role="button" data-slide="prev">
		<span class="fa fa-angle-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<!-- Right Control -->
	<a class="right carousel-control" href="#fw_al_007" role="button" data-slide="next">
		<span class="fa fa-angle-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div> <!-- End Paradise Slider -->
<!-- END  HOME -->

<!-- START ABOUT FEATURE CONTENT -->
<section class="feature section-padding mt-5">
	<div class="container">
		<div class="section-title text-center mb-5">
			<h2>L'EXPERTISE SUR MESURE</h2>
			<p>Que vous soyez une entreprise en pleine croissance, un entrepreneur ambitieux ou une marque à la recherche d’impact, notre mission est claire : vous propulser dans l’ère numérique avec des solutions innovantes, esthétiques et performantes.</p>
		</div>
		<div class="row as_box ">
			<div class="col-lg-3 col-sm-6 col-xs-12 no-padding">
				<div class="about_single  fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
					<div class="mb-4 icones logo">
						 <i class="fas fa-eye"></i>
					</div>
					<h4>Vision</h4>
					<p>
						Devenir un pôle d'excellence pour la résolution des grands défis de développement en termes d'accès Universel
						aux ressources essentielles.</p>
				</div>
			</div><!--- END COL -->
			<div class="col-lg-3 col-sm-6 col-xs-12 no-padding">
				<div class="about_single  fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
					<div class="mb-4 icones logo">
						 <i class="fas fa-bullseye"></i>
					</div>
					<h4>Mission</h4>
					<p> Façonner un avenir durable grâce aux projets et aux partenariats pour un impact positif.</p>
				</div>
			</div><!--- END COL -->
			<div class="col-lg-3 col-sm-6 col-xs-12 no-padding">
				<div class="about_single  fadeInRight" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
					<div class="mb-4 icones logo">
						<i class="fas fa-lightbulb"></i> 
					</div>
					<h4>Démrache</h4>
					<p>
						Identifier les enjeux de developpement<br>
						Susciter des debats autour<br>
						Inciter a l'action
					</p>
				</div>
			</div><!--- END COL -->
			<div class="col-lg-3 col-sm-6 col-xs-12 no-padding">
				<div class="about_single  fadeInRight" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
					<div class="mb-4 icones logo">
						 <i class="fas fa-headset fa-lg"></i>
					</div>
					<h4>Assistance 24h/24 et 7j/7</h4>
					<p>Besoin d’aide ? Notre support est disponible 24/7. On vous répond rapide et efficace, à tout moment.</p>
				</div>
			</div><!--- END COL -->
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</section>
<!-- END ABOUT FEATURE CONTENT -->
<section class="our_work section-padding mt-5 ">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="section-title">
					<h2>Notre étude de cas</h2>
					<p>C'est un fait établi depuis longtemps qu'un lecteur sera distrait par le contenu lisible d'une page lorsqu'il examinera sa mise en page.</p>
				</div>
			</div>
		</div>

	</div>
</section>
<section data-stellar-background-ratio="0.3" class="counter_area counter_feature">
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-3 col-sm-6 col-xs-12">
				<div class="single-project single-project-one">
					<span class="ti-user"></span>
					<h2 class="counter-num">+2652</h2>
					<h4>Clients satisfaits</h4>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-12">
				<div class="single-project single-project-two">
					<span class="ti-star"></span>
					<h2 class="counter-num">1821</h2>
					<h4>Des visites incroyables</h4>
				</div>
			</div><!-- END COL -->
			<div class="col-lg-3 col-sm-6 col-xs-12">
				<div class="single-project single-project-three">
					<span class="ti-pencil-alt"></span>
					<h2 class="counter-num">5660</h2>
					<h4>En affaires</h4>
				</div>
			</div><!-- END COL -->
			<div class="col-lg-3 col-sm-6 col-xs-12">
				<div class="single-project single-project-four">
					<span class="ti-support"></span>
					<h2 class="counter-num">1259</h2>
					<h4>Cas de support</h4>
				</div>
			</div><!-- END COL -->
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</section>
<!-- START ABOUT TWO -->

<!-- END ABOUT TWO -->

<!--START SERVICE -->
<div id="service" class="best-service section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="section-title mt-5">
					<h2 class="section-title-white">SERVICES</h2>
					<p class="section-title-white">Nos experts vous guideront dans la création et la mise en œuvre de stratégies de développement solide</p>
				</div>
			</div>
		</div>

		<div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
			<div class="carousel-inner">

				<!-- SLIDE 1 -->
				<div class="carousel-item active">
					<div class="row">
						<div class="col-md-4">
							<div class="single_service ss_one text-center">
								<img src="assets/img/service-icon/audit.png" alt="" />
								<h3>Conseil en Développement</h3>
								<p>Nous favorisons l'Innovation à travers des programmes d'incubation et d'accélération.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single_service ss_two text-center">
								<img src="assets/img/service-icon/backlink.png" alt="" />
								<h3>Innovation</h3>
								<p>Nous investissons dans la formation et l'éducation pour renforcer les compétences et les capacités locales.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single_service ss_three text-center">
								<img src="assets/img/service-icon/seo.png" alt="" />
								<h3>Formation & Education</h3>
								<p>Nous concevons et soutenons des projets axés sur la durabilité environnementale et sociale.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- SLIDE 2 -->
				<div class="carousel-item">
					<div class="row">
						<div class="col-md-4">
							<div class="single_service ss_five text-center">
								<img src="assets/img/service-icon/media.png" alt="" />
								<h3>Projets durables</h3>
								<p>Nous œuvrons pour l’optimisation de la coordination, du suivi et de la formation des coopérants volontaires.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single_service ss_six text-center">
								<img src="assets/img/service-icon/outreach.png" alt="" />
								<h3>Intermédiation & Gestion des coopérants</h3>
								<p>Location de salle<br />Location d’espace<br />Coworking</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single_service ss_five text-center">
								<img src="assets/img/service-icon/media.png" alt="" />
								<h3>Projets durables</h3>
								<p>Nous œuvrons pour l’optimisation de la coordination, du suivi et de la formation des coopérants volontaires.</p>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- CONTROLS -->
			<button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next">
				<span class="carousel-control-next-icon"></span>
			</button>

			<!-- INDICATORS -->
			<div class="carousel-indicators mt-5">
				<button type="button" data-bs-target="#serviceCarousel" data-bs-slide-to="0" class="active"></button>
				<button type="button" data-bs-target="#serviceCarousel" data-bs-slide-to="1"></button>
			</div>
		</div>
	</div>
</div>

<!--END SERVICE -->

<!-- START TEAM -->
<section class="our_team section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="section-title">
					<h2>Une équipe engagée, compétente et passionnée.</h2>
					<p>Derrière chaque projet, il y a des femmes et des hommes unis par la même vision : vous offrir des solutions innovantes, performantes et humaines.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="single-team-home">
					<div class="img"><img src="assets/img/au/DG_AU.jpg" class="img-fluid" alt=""></div>
					<div class="team-content-home">
						<h6>Saturnine M. K. Médessè</h6>
						<p>Directrice</p>
						<ul class="social-home">
							<li><a href="https://www.facebook.com/share/18xd2ziYZX/" class="facebook-home"><i class="fa-brands fa-facebook-f"></i></a></li>
							<li><a href="https://www.linkedin.com/in/saturnine-m-k-m%C3%A9dess%C3%A8-37393b17a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="twitter-home"><i class="fa-brands fa-linkedin-in"></i></a></li>

						</ul>
					</div>
				</div>
			</div><!-- END COL -->
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="single-team-home">
					<div class="img"><img src="assets/img/au/personel2.jpg" class="img-fluid" alt=""></div>
					<div class="team-content-home">
						<h3>BOGNON Mahougon Léobard</h3>
						<p>Directeur des Fonctions Transversales</p>
						<ul class="social-home">
							<li><a href="#" class="facebook-home"><i class="fa-brands fa-facebook-f"></i></a></li>
							<li><a href="linkedin.com/in/léobard-mahougnon-bognon-5b30477a" class="twitter-home"><i class="fa-brands fa-linkedin-in"></i></a></li>

						</ul>
					</div>
				</div>
			</div><!-- END COL -->
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="single-team-home">
					<div class="img"><img src="assets/img/au/personel4.jpg" class="img-fluid" alt=""></div>
					<div class="team-content-home">
						<h3>KOUGBLENOU do capio Vianio</h3>
						<p>Directeur des Stratégies Partenariat et Opérations</p>
						<ul class="social-home">
							<li><a href="#" class="facebook-home"><i class="fa-brands fa-facebook-f"></i></a></li>
							<li><a href="linkedin.com/in/vianiokougblénou" class="twitter-home"><i class="fa-brands fa-linkedin-in"></i></a></li>

						</ul>
					</div>
				</div>
			</div><!-- END COL -->

		</div><!-- END ROW -->
	</div><!-- END CONTAINER -->
</section>
<!-- END TEAM -->


<section class="process_area section-padding">
	<div class="container">
		<div class="section-title text-center">
			<h2>Processus de travail</h2>
			<p>Chaque projet suit un processus structuré et collaboratif, pensé pour garantir qualité, efficacité et résultats.</p>
		</div>
		<div class="row text-center">
			<div class="col-lg-4 col-sm-4 col-xs-12">
				<div class="single_process">
					<div class="process_num">
						<h4>1</h4>
					</div>
					<h3>Planifier et créer</h3>
					<p>Tout commence par une écoute attentive de vos besoins.On analyse, on structure, on imagine des solutions qui ont du sens.Puis, place à la création : maquettes, idées, concepts… On donne forme à votre vision.</p>
				</div>
			</div><!-- END COL -->
			<div class="col-lg-4 col-sm-4 col-xs-12">
				<div class="single_process">
					<div class="process_num">
						<h4>2</h4>
					</div>
					<h3>Développer et tester</h3>
					<p>Nos outils ? Code propre, bonnes pratiques, réactivité.
						Avant toute mise en ligne, tout est testé, optimisé, vérifié pour garantir un résultat fiable et performant.</p>
				</div>
			</div><!-- END COL -->
			<div class="col-lg-4 col-sm-4 col-xs-12">
				<div class="single_process">
					<div class="process_num">
						<h4>3</h4>
					</div>
					<h3>Faire vivre</h3>
					<p>Nous vous accompagnons pour l’améliorer, l’enrichir, le faire évoluer au fil du temps.
						Votre succès est notre priorité.</p>
				</div>
			</div><!-- END COL -->
		</div><!-- END ROW -->
	</div><!-- END CONTAINER -->
</section>
<!-- END PROCESS -->

<!-- START BLOG -->
<section id="blog" class="blog_area section-padding mt-5">
	<div class="container">
		<div class="section-title text-center ">
			<h2 class="defe">Dernières nouvelles</h2>
			<p>Les actualités de ACCES UNIVERSEL</p>
		</div>
		<div class="row">
    @foreach ($actualites as $actualite)
        <div class="col-md-4 col-sm-6 mb-4">
           <div class="card team-card shadow-sm">
    <img src="{{ asset($actualite->image) }}" class="card-img-top" alt="Image de l'actualité">
    <div class="card-body">
        <span>
            {{ \Carbon\Carbon::parse($actualite->date)->format('M d, Y') }} |
            <a href="#" class="btn">{{ $actualite->titre }}</a>
        </span>
        <p class="card-text small">{{ Str::limit($actualite->description, 100) }}</p>
        <div class="d-flex justify-content-end">
            <button class="btn subs btn-sm" data-bs-toggle="modal" data-bs-target="#modal-{{ $actualite->id }}">
                Detail <span><i class="bi bi-arrow-90deg-up"></i></span>
            </button>
        </div>
    </div>
</div>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal-{{ $actualite->id }}" tabindex="-1" aria-labelledby="modalLabel-{{ $actualite->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-4">
                        <div class="row">
                            <!-- Image à gauche -->
                            <div class="col-md-5">
                                <img src="{{ asset($actualite->image) }}" alt="Image" class="img-fluid rounded mb-3">
                                <div class="small text-muted text-center" style="font-size: 20px;">
                                    <span class="">{{ \Carbon\Carbon::parse($actualite->date)->format('d/m/Y') }}</span>
                                    
                                </div>
                            </div>

                            <!-- Détails à droite -->
                            <div class="col-md-7">
                                <h5 class="mb-2 text-center " style="color: #f99828;">{{ $actualite->titre }}</h5>
                                <p>{{ $actualite->description_complete }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-top-0">
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

		<div class="d-flex mt-5" style="justify-content:center;">

			<a href="/actualite" class="btn subs btn-sm">Decouvrir plus de formations</a>
		</div>
	</div>
</section>
<!-- END BLOG -->

<!-- START QUOTE -->

<!-- END QUOTE -->

<!-- START TESTIMONIAL -->
<!-- <section class="testimonial-demo section-padding">
	<div class="container">
		<div class="section-title text-center wow zoomIn">
			<h2>Chorbi Reviews</h2>
			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout established fact that a reader will.</p>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div id="testimonial-slider" class="owl-carousel">
					<div class="testimonial">
						<div class="testimonial_content">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor.</p>
						</div>
						<div class="testi_pic_title tpt_one">
							<div class="pic">
								<img src="assets/img/testimonial/img-1.jpg" alt="">
							</div>
							<h4>James Clayton</h4>
							<small class="post">- Design Expert</small>
						</div>
					</div>
					<div class="testimonial">
						<div class="testimonial_content">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor.</p>
						</div>
						<div class="testi_pic_title tpt_two">
							<div class="pic">
								<img src="assets/img/testimonial/img-2.jpg" alt="">
							</div>
							<h4>James Simmons</h4>
							<small class="post">- Marketing Expert</small>
						</div>
					</div>
					<div class="testimonial">
						<div class="testimonial_content">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor.</p>
						</div>
						<div class="testi_pic_title tpt_three">
							<div class="pic">
								<img src="assets/img/testimonial/img-3.jpg" alt="">
							</div>
							<h4>Alex feroundo</h4>
							<small class="post">- Founder</small>
						</div>
					</div>
					<div class="testimonial">
						<div class="testimonial_content">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor.</p>
						</div>
						<div class="testi_pic_title tpt_one">
							<div class="pic">
								<img src="assets/img/testimonial/img-4.jpg" alt="">
							</div>
							<h4>Kallu Mastan</h4>
							<small class="post">- Mastan group</small>
						</div>
					</div>
					<div class="testimonial">
						<div class="testimonial_content">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor.</p>
						</div>
						<div class="testi_pic_title tpt_two">
							<div class="pic">
								<img src="assets/img/testimonial/img-2.jpg" alt="">
							</div>
							<h4>Devid max</h4>
							<small class="post">- Max iNC</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!-- END TESTIMONIAL -->



<!-- START COMPANY PARTNER LOGO  -->
<div class="partner-logo section-padding mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="partner_title">
					<h3>Nos partenaire</h3>
				</div>
				<div class="partner">
					<a href="#"><img src="assets/img/au/partenair1.jpeg" alt="image"></a>
					<a href="#"><img src="assets/img/au/partenair2.jpeg" alt="image"></a>
					<a href="#"><img src="assets/img/au/partenair3.jpeg" alt="image"></a>
					<a href="#"><img src="assets/img/au/partenair4.jpeg" alt="image"></a>
					<a href="#"><img src="assets/img/au/partenair5.jpeg" alt="image"></a>
					<a href="#"><img src="assets/img/au/partenair6.jpeg" alt="image"></a>
					<a href="#"><img src="assets/img/au/partenair7.jpeg" alt="image"></a>
				</div>
			</div><!-- END COL  -->
		</div><!--END  ROW  -->
	</div><!-- END CONTAINER  -->
</div>
<style>
	.partner {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1.5rem;
    padding: 2rem 0;
}

.partner a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 140px;
    height: 100px;
    background-color: #f9f9f9;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.partner a:hover {
    transform: scale(1.05);
}

.partner img {
    max-width: 100%;
    max-height: 80px;
    object-fit: contain;
}

</style>

@endsection