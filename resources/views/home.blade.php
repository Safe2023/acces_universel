@extends('layouts.head')

@section('pagetitle')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Tableau de bord</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Tableau de bord</li>
                </ol>
            </div>

        </div>
    </div>
</div>
@endsection

@section('content')

<div class="row">
    <div class="col-xl-8">  
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-start">
                    <h5 class="card-title me-2">Visiteurs</h5>
                    
                </div>
               
                <div class="row text-center">
                    <div class="col-lg-4">
                        <div class="mt-2">
                            <p class="text-muted mb-1">Aujourd'hui</p>
                            <h5>{{ $today }}</h5>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="mt-2">
                            <p class="text-muted mb-1">Ce Mois</p>
                            <h5>{{ $month }}</h5>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mt-2">
                            <p class="text-muted mb-1">Cette Année</p>
                            <h5>{{ $year }}</h5>
                        </div>
                    </div>
                </div>

                <hr class="mb-0">
                
                {{-- <div class="apex-charts" id="area-chart" dir="ltr"></div> --}}
            </div>
        </div>
    </div>
  

    @php
        $nombreInscrits = $inscrits->groupBy('formation_id');
    @endphp

    <div class="col-xl-4">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    @foreach ($nombreInscrits as $formationId => $inscrits)
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table align-middle mb-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h5 class="font-size-14 mb-1">Formation</h5>
                                                @php
                                                    $formation = \App\Models\Formation::find($formationId);
                                                @endphp
                                                <p class="text-muted mb-0">{{ $formation ? Str::limit($formation->title, 11, '...') : 'N/A' }}</p>
                                            </td>
                                            <td>
                                                <div class="apex-charts"></div>
                                            </td>
                                            <td>
                                                <p class="text-muted mb-1">Inscrits</p>
                                                <h5 class="mb-0">{{ $inscrits->count() }}</h5>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
  
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-start">
                    <h5 class="card-title mb-3 me-2">Souscriptions</h5>
                </div>

                <div class="d-flex flex-wrap">
                    <div>
                        <p class="text-muted mb-1">Total Souscrits</p>
                        <h4 class="mb-3">{{($suscriptions)}}</h4>
                    </div>
                    <div class="ms-auto align-self-end">
                        <i class="bx bx-group display-4 text-light"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection
