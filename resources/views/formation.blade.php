@extends('layouts.header')
@section('content')



<main class="container mt-5">
    <div class="row">
        <div class="p-4 mb-3 bg-body-tertiary rounded">
            <h4 class="fst-italic text-center">Formation & Education</h4>
            <p class="mb-0 text-center">Nous concevons et soutenons des projets axés sur la durabilité environnementale et sociale.</p>
        </div>
    </div>
    <div class="row g-5">
        <div class="col-md-3">
            <div class="position-sticky" style="top: 2rem;">

                <div>
                    <h4 class="fst-italic">Dernières actualités</h4>
                    @foreach ($actualites as $actualite)
                    <div class="row   py-3  text-decoration-none border-top align-itens-center">
                        <div class="col-md-4 col-6">
                            <img src="{{ asset($actualite->image) }}" class="bd-placeholder-img" alt="" width="100%">
                        </div>
                        <div class="col-md-8 col-6">
                            <h6 class="mb-0">{{ $actualite->titre }}</h6>
                            <small class="text-body-secondary"> {{ \Carbon\Carbon::parse($actualite->date)->format('M d, Y') }} |</small>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
        <div class="col-md-9">
            <div class="container mb-5">
                <div class="row rounded text-body-emphasis bg-body-secondary p-4">
                    <div class="col-md-2"></div>

                    <div class="col-md-8">
                        <form class="d-flex" action="{{ route('search') }}" method="get">
                            <input class="form-control me-2" name="search" type="search" placeholder="Rechercher une formation...">
                            <button class="btn btn for  btn-sm" type="submit">Rechercher</button>
                        </form>
                    </div>

                    <div class="col-md-2"></div>
                </div>
            </div>

            @if($formations->isEmpty())
            <p class="btn btn-danger mt-5 text-center">Nous ne disposons pas de ce type de formation pour le moment</p>
            @else
            <div class="row">
                @foreach($formations as $formation)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ asset($formation->image) }}" class="card-img-top" alt="{{ $formation->nom }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h6 class="card-title text-center">{{ $formation->nom }}</h6>
                            <p class="card-text small">{{ \Illuminate\Support\Str::limit($formation->description, 100) }}</p>

                            <div class="d-flex justify-content-around mb-2">
                                <!-- Bouton d'ouverture de la modale -->
                                <button type="button" class="btn btn for  btn-sm" data-bs-toggle="modal" data-bs-target="#modalFormation{{ $formation->id }}">
                                    Détails <i class="bi bi-arrow-90deg-up ms-1"></i>
                                </button>

                                <!-- Bouton de réservation -->
                                <a href="#" class="btn subs btn-sm">Réserver <i class="bi bi-bag ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MODAL AMÉLIORÉ -->
                <div class="modal fade" id="modalFormation{{ $formation->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $formation->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content shadow-lg border-0 rounded-4">

                            <!-- Header -->
                            <div class="modal-header bg-white border-bottom rounded-top-4 d-flex justify-content-between align-items-center">
                                <h6 class=" w-100 text-center fw-bold text-dark" id="modalLabel{{ $formation->id }}">
                                    {{ $formation->nom }}
                                </h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                            </div>

                            <!-- Body -->
                            <div class="modal-body bg-light p-4">

                                <!-- Image -->
                                <div class="text-center mb-3">
                                    <img src="{{ asset($formation->image) }}" alt="{{ $formation->nom }}" class="img-fluid rounded shadow-sm" style="max-height: 300px; object-fit: cover;">
                                </div>

                                <!-- Détails -->
                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <div class="bg-white rounded p-3 shadow-sm">
                                            <strong>📌 Frais d'inscription :</strong><br>
                                            {{ number_format($formation->frais_dinscription, 0, ',', ' ') }} FCFA

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bg-white rounded p-3 shadow-sm">
                                            <strong>💰 Coût de la formation :</strong><br>
                                            {{ number_format($formation->cout_formation, 0, ',', ' ') }} FCFA
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="bg-white rounded p-3 shadow-sm">
                                            <strong>📅 Début :</strong><br>
                                            {{ \Carbon\Carbon::parse($formation->debut_formation)->format('d/m/Y') }}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="bg-white rounded p-3 shadow-sm">
                                            <strong>📅 Fin :</strong><br>
                                            {{ \Carbon\Carbon::parse($formation->fin_formation)->format('d/m/Y') }}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="bg-white rounded p-3 shadow-sm">
                                            <strong>📌 Fin des inscriptions :</strong><br>
                                            {{ \Carbon\Carbon::parse($formation->delais_dinscription)->format('d/m/Y') }}
                                        </div>
                                    </div>
                                </div>

                                <!-- Description -->
                                <p class="mb-4 text-muted text-justify">
                                    <strong>Description :</strong><br>
                                    {{ $formation->description }}
                                </p>

                                <!-- Documents -->
                                @if($formation->document || $formation->marquette)
                                <div class="mt-4">
                                    <h6 class="fw-bold text-primary">📁 Documents associés</h6>
                                    <ul class="list-unstyled ps-3">
                                        @if($formation->document)
                                        <li>📄 <a href="{{ asset($formation->document) }}" target="_blank">Document de formation</a></li>
                                        @endif
                                        @if($formation->marquette)
                                        <li>📐 <a href="{{ asset($formation->marquette) }}" target="_blank">Marquette</a></li>
                                        @endif
                                    </ul>
                                </div>
                                @endif

                            </div>

                            <!-- Footer -->
                            <div class="modal-footer bg-white rounded-bottom-4">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>

                                <a  href="javascript:void(0);" 
                                    onclick="payerFormation('{{ $formation->id }}', '{{ $formation->frais_dinscription }}', '{{ $formation->nom }}')"
                                    class="btn subs btn-sm">
                                    Réserver cette formation
                                </a>

                              
                            </div>

                        </div>
                    </div>
                </div>


                @endforeach
            </div>

            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center">
                    {{ $formations->appends(request()->input())->links() }}
                </div>
            </div>
            @endif
        </div>

    </div>

    </div>
</main>
<!-- <div class="container">
    <div class="row justify-content-center mb-2 mt-5  bg-light">
        <div class="heading_container col-md-7 text-center heading-section ftco-animate ">
            <h2 class="text-center mt-3 ">
                <span>Contactez-nous</span>
            </h2>
            <p>Vous aviez la possibilité de nous contacter pour demander des informations sur un produit/service spécifique proposé par notre entreprise. Nous somme disponible 24h/24 7j/7 pour repondre a votre préocupations.</p>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card team-card shadow-sm">
                <img src="assets/img/au/formation.jpg" class="card-img-top" alt="Nom de l'équipe">
                <div class="card-body">
                    <h5 class="card-title text-center">Marie Dupont</h5>
                    <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque alias officia adipis</p>
                    <p class="card-text small">Spécialiste en image de marque et stratégies digitales.</p>
                    <div class="d-flex" style="justify-content: space-around;">
                        <a href="#" class="btn for  btn-sm">Détail <span><i class="bi bi-arrow-right-short"></i></span></a>
                        <a href="#" class="btn subs btn-sm">Reserver <span><i class="bi bi-bag"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card team-card shadow-sm">
                <img src="assets/img/au/formation.jpg" class="card-img-top" alt="Nom de l'équipe">
                <div class="card-body">
                    <h5 class="card-title text-center">Marie Dupont</h5>
                    <p class="card-text text-muted">Responsable Communication</p>
                    <p class="card-text small">Spécialiste en image de marque et stratégies digitales.</p>
                    <div class="d-flex" style="justify-content: space-around;">
                        <a href="#" class="btn for  btn-sm">Détail <span><i class="bi bi-arrow-right-short"></i></span></a>
                        <a href="#" class="btn subs btn-sm">Reserver <span><i class="bi bi-bag"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card team-card shadow-sm">
                <img src="assets/img/au/formation.jpg" class="card-img-top" alt="Nom de l'équipe">
                <div class="card-body">
                    <h5 class="card-title text-center">Marie Dupont</h5>
                    <p class="card-text text-muted">Responsable Communication</p>
                    <p class="card-text small">Spécialiste en image de marque et stratégies digitales.</p>
                    <div class="d-flex" style="justify-content: space-around;">
                        <a href="#" class="btn for  btn-sm">Détail <span><i class="bi bi-arrow-right-short"></i></span></a>
                        <a href="#" class="btn subs btn-sm">Reserver <span><i class="bi bi-bag"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection