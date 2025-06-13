@extends('layouts.header')
@section('content')

<style>
	
</style>
<section class="section-top breadcrumb-area" style="background-image: url(assets/img/au/contact.jpeg);  background-size:cover; background-position: center center;">
    <div class="container">
    <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                <div class="inner-content clearfix">
                    <div class="title wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <h1>Nos Actualités</h1>
                    </div>
                    <div class="border-box"></div>
                    <div class="breadcrumb-menu wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <ul class="clearfix">
                            <li><a href="{{url('/')}}">Accueil</a></li>
                            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                            <li class="active">Actualités</li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</section>

<div class="row">
	<div class="col-md-12 text-center mt-5 mb-5">
		<div class="section-title">
			<h2>Actualités & Mises à jour</h2>
			<p>Restez informé des dernières nouvelles, événements à venir et nouveautés concernant notre plateforme. Nous mettons régulièrement à jour cette section pour vous offrir les informations les plus pertinentes.</p>
		</div>
	</div>
</div>

<section id="blog" class="blog_area section-padding">
	<div class="container">

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
							<!-- Bouton pour ouvrir la modale -->
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
	</div>
</section>
@endsection