@extends('layouts.header')
@section('content')

    <!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(/asset/au/formation.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                       <h1>{{$formation->nom}}</h1>
                    </div>
                    <div class="border-box"></div>
                    <div class="breadcrumb-menu wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <ul class="clearfix">
                            <li><a href="{{url('/')}}">Accueil</a></li>
                            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                            <li class="active">Détails</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
<div class="container my-5">
    <div class="card shadow-lg border-0">
        <div class="row g-0">
            
            <div class="col-md-6">
                <img src="{{ asset('/upload/formations/' . $formation->image_path) }}" class="img-fluid h-100 w-100 object-fit-cover rounded-start" alt="Image de la formation">
            </div>

           
            <div class="col-md-6 p-4 d-flex flex-column justify-content-between">
                <div>
                    <span class="badge bg-secondary mb-2">Formation</span>
                    <h2 class="mb-3 text-primary">{{ $formation->nom }}</h2>

                    <ul class="list-unstyled mb-3">
                        <li class="mb-2">
                            <i class="bi bi-calendar-event text-muted"></i>
                            <strong>Date :</strong> {{ $formation->date ?? 'À venir' }}
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-cash-coin text-muted"></i>
                            <strong>Frais d'inscription :</strong> {{ $formation->frais_inscription ?? 'Non précisé' }} FCFA
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-cash-stack text-muted"></i>
                            <strong>Frais de formation :</strong> {{ $formation->frais_formation ?? 'Non précisé' }} FCFA
                        </li>
                    </ul>

                    <p class="text-justify">{{ $formation->description }}</p>
                </div>

                
                <div class="d-flex justify-content-between mt-4 align-items-center flex-wrap">
                    <a href="" class="btn btn-primary">
                        <i class="bi bi-pencil-square"></i> S'inscrire à cette formation
                    </a>

                    <div class="d-flex gap-2">
                        @if($formation->maquette)
                        <a href="{{ asset('upload/formations/' . $formation->maquette) }}" target="_blank" class="btn btn-outline-secondary" download>
                            <i class="bi bi-download"></i> Maquette
                        </a>
                        @endif
                        @if($formation->tdr)
                        <a href="{{ asset('upload/formations/' . $formation->tdr) }}" target="_blank" class="btn btn-outline-secondary" download>
                            <i class="bi bi-download"></i> TdR
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection