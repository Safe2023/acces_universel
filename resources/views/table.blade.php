@extends('layouts.head')

@section('pagetitle')
<div class="container mt-5">
    <h4 class="mb-4 text-center">Liste des actualités</h4>

    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Bouton pour ouvrir le modal -->
    <button type="button" class="btn btn-outline-warning d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalAjout">
        <i class="bi bi-plus-circle-fill fs-5"></i> Ajouter une actualité
    </button>

    <!-- Modal d'ajout -->
    <div class="modal fade" id="modalAjout" tabindex="-1" aria-labelledby="modalAjoutLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('ajout_actualite') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalAjoutLabel">Ajouter une actualité</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>
                    <div class="modal-body">

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="mb-3">
                            <input type="text" class="form-control" name="titre" placeholder="Titre de l'actualité" value="{{ old('titre') }}">
                        </div>

                        <div class="mb-3">
                            <input type="date" class="form-control" name="date" value="{{ old('date') }}">
                        </div>

                        <div class="mb-3">
                            <input type="file" class="form-control" name="image">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" name="description" placeholder="Description" value="{{ old('description') }}">
                        </div>

                        <div class="mb-3">
                            <textarea name="description_complete" class="form-control" rows="4" placeholder="Description complète...">{{ old('description_complete') }}</textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-warning">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Tableau -->
    <div class="table-responsive mt-4">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Titre</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Description complète</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($table as $tableau)
                <tr>
                    <td>{{$tableau->id}}</td>
                    <td>
                        <img src="{{ asset($tableau->image) }}" alt="Image" width="80">
                    </td>
                    <td>{{ $tableau->titre }}</td>
                    <td>{{ \Carbon\Carbon::parse($tableau->date)->format('d/m/Y') }}</td>
                    <td>{{ Str::limit($tableau->description, 100) }}</td>
                    <td>{{ Str::limit($tableau->description_complete, 100) }}</td>
                    <td class="">
    <div class="d-flex gap-1 justify-content-center">
        <!-- Bouton modal -->
        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit{{ $tableau->id }}" title="Modifier">
            <i class="bi bi-pencil-square"></i>
        </button>

        <!-- Formulaire de suppression -->
        <form action="{{ route('delete', $tableau->id) }}" method="POST" onsubmit="return confirm('Confirmer la suppression ?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">
                <i class="bi bi-trash"></i>
            </button>
        </form>
    </div>

    <!-- Modal de modification -->
    <div class="modal fade" id="modalEdit{{ $tableau->id }}" tabindex="-1" aria-labelledby="modalEditLabel{{ $tableau->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel{{ $tableau->id }}">Modifier une actualité</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('update', $tableau->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Titre</label>
                            <input type="text" class="form-control" name="titre" placeholder="Titre de l'actualité" value="{{ $tableau->titre }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control" name="date" value="{{ $tableau->date }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" name="image">
                            @if($tableau->image)
                                <small class="d-block mt-1">Image actuelle :</small>
                                <img src="{{ asset($tableau->image) }}" alt="Image actuelle" style="max-width: 150px; max-height: 100px;">
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" placeholder="Description" value="{{ $tableau->description }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description complète</label>
                            <textarea name="description_complete" class="form-control" rows="4" placeholder="Description complète...">{{ $tableau->description_complete }}</textarea>
                        </div>

                        <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-warning" data-bs-dismiss="modal">Mettre à jour</button>
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@endsection