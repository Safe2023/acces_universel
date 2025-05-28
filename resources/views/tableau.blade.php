@extends('layouts.head')

@section('pagetitle')
<div class="container mt-5">
  <h4 class="mb-4 text-center">Liste des formations</h4>

  @if (session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
  @endif
  <div class="d-flex justify-content-start mb-3">

    <!-- Bouton avec icône stylisée -->
    <button type="button" class="btn btn-outline-warning d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <i class="bi bi-plus-circle-fill fs-5"></i> Ajouter une formation
    </button>
  </div>

  <!-- Modal d'ajout -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter une formation</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
        </div>
        <div class="modal-body">
          <form class="row g-3" method="post" action="{{ route('ajout_formation') }}" enctype="multipart/form-data">
            @csrf

            @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif

            <div class="col-12">
              <label class="form-label">Titre</label>
              <input type="text" class="form-control" name="nom" placeholder="Nom de la formation">
            </div>

            <div class="col-md-6">
              <label class="form-label">Frais d'inscription</label>
              <input type="number" class="form-control" name="frais_dinscription" placeholder="5000">
            </div>

            <div class="col-md-6">
              <label class="form-label">Coût de la formation</label>
              <input type="number" class="form-control" name="cout_formation" placeholder="100000">
            </div>

            <div class="col-md-6">
              <label class="form-label">Début</label>
              <input type="date" class="form-control" name="debut_formation">
            </div>

            <div class="col-md-6">
              <label class="form-label">Fin</label>
              <input type="date" class="form-control" name="fin_formation">
            </div>

            <div class="col-md-6">
              <label class="form-label">Délai d'inscription</label>
              <input type="date" class="form-control" name="delais_dinscription">
            </div>

            <div class="col-md-6">
              <label class="form-label">Image</label>
              <input type="file" class="form-control" name="image">
            </div>

            <div class="col-md-12">
              <label class="form-label">Document</label>
              <input type="file" class="form-control" name="document">
            </div>

            <div class="col-md-12">
              <label class="form-label">Marquette</label>
              <input type="file" class="form-control" name="marquette">
            </div>

            <div class="col-12">
              <label class="form-label">Description</label>
              <textarea class="form-control" rows="4" name="description" placeholder="Description de la formation"></textarea>
            </div>

            <div class="modal-footer">
              <button type="submit" class="btn btn-outline-warning" data-bs-dismiss="modal">Enregistrer</button>
            </div>
          </form>
        </div>


      </div>
    </div>
  </div>

  <!-- Tableau -->
  <div class="table-responsive mt-4">
    <table class="table table-bordered table-hover align-middle text-center">
      <thead class="table-dark">
        <tr>
          <th>#</th>
          <th>Image</th>
          <th>Titre</th>
          <th>Frais</th>
          <th>Coût</th>
          <th>Début</th>
          <th>Fin</th>
          <th>Document</th>
          <th>Marquette</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($tableau as $tables)
        <tr>
          <td>{{ $tables->id }}</td>
          <td>
            @if($tables->image)
            <img src="{{ asset($tables->image) }}" alt="Image" class="img-thumbnail" style="width: 80px; height: 80px; object-fit: cover;">
            @else
            <span class="text-muted">Aucune</span>
            @endif
          </td>
          <td>{{ $tables->nom }}</td>
          <td>{{ $tables->frais_dinscription }}</td>
          <td>{{ $tables->cout_formation }}</td>
          <td>{{ \Carbon\Carbon::parse($tables->debut_formation)->format('d/m/Y') }}</td>
          <td>{{ \Carbon\Carbon::parse($tables->fin_formation)->format('d/m/Y') }}</td>
          <td>
            @if($tables->document)
            <a href="{{ asset($tables->document) }}" target="_blank" class="btn btn-outline-info btn-sm">Voir</a>
            @else
            <span class="text-muted">Aucun</span>
            @endif
          </td>
          <td>
            @if($tables->marquette)
            <a href="{{ asset($tables->marquette) }}" target="_blank" class="btn btn-outline-info btn-sm">Voir</a>
            @else
            <span class="text-muted">Aucune</span>
            @endif
          </td>
          <td>{{ Str::limit($tables->description, 60) }}</td>
          <td>
            <div class="d-flex gap-1 justify-content-center">
              <!-- Bouton déclencheur du modal -->
              <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $tables->id }}" title="Modifier">
                <i class="bi bi-pencil-square"></i>
              </button>

              <!-- Formulaire de suppression -->
              <form action="{{ route('deletes', $tables->id) }}" method="POST" onsubmit="return confirm('Confirmer la suppression ?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" title="Supprimer">
                  <i class="bi bi-trash"></i>
                </button>
              </form>
            </div>

            <!-- Modal de modification -->
            <div class="modal fade" id="editModal{{ $tables->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $tables->id }}" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel{{ $tables->id }}">Modifier la formation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="{{ route('updates', $tables->id) }}" enctype="multipart/form-data" class="row g-3">
                      @csrf
                      @method('PUT')

                      <div class="col-md-12">
                        <label class="form-label">Titre</label>
                        <input type="text" class="form-control" name="nom" value="{{ $tables->nom }}">
                      </div>

                      <div class="col-md-6">
                        <label class="form-label">Frais d'inscription</label>
                        <input type="number" class="form-control" name="frais_dinscription" value="{{ $tables->frais_dinscription }}">
                      </div>

                      <div class="col-md-6">
                        <label class="form-label">Coût</label>
                        <input type="number" class="form-control" name="cout_formation" value="{{ $tables->cout_formation }}">
                      </div>

                      <div class="col-md-6">
                        <label class="form-label">Début</label>
                        <input type="date" class="form-control" name="debut_formation" value="{{ $tables->debut_formation }}">
                      </div>

                      <div class="col-md-6">
                        <label class="form-label">Fin</label>
                        <input type="date" class="form-control" name="fin_formation" value="{{ $tables->fin_formation }}">
                      </div>

                      <div class="col-md-6">
                        <label class="form-label">Délai d'inscription</label>
                        <input type="date" class="form-control" name="delais_dinscription" value="{{ $tables->delais_dinscription }}">
                      </div>

                      <div class="col-md-6">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
                        @if($tables->image)
                        <img src="{{ asset($tables->image) }}" width="80" class="mt-1">
                        @endif
                      </div>

                      <div class="col-md-6">
                        <label class="form-label">Document</label>
                        <input type="file" class="form-control" name="document">
                        @if($tables->document)
                        <a href="{{ asset($tables->document) }}" target="_blank" class="d-block mt-1">Voir le document</a>
                        @endif
                      </div>

                      <div class="col-md-6">
                        <label class="form-label">Marquette</label>
                        <input type="file" class="form-control" name="marquette">
                        @if($tables->marquette)
                        <a href="{{ asset($tables->marquette) }}" target="_blank" class="d-block mt-1">Voir la marquette</a>
                        @endif
                      </div>

                      <div class="col-md-12">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" rows="4" name="description">{{ $tables->description }}</textarea>
                      </div>

                      <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-warning " data-bs-dismiss="modal">Mettre à jour</button>
                      </div>
                    </form>
                  </div>

                </div>
              </div>
            </div>
          </td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>


@endsection