@extends('layouts.header')
@section('content')
<div class="container">
  <div class="row mt-5 mb-2">
    <!-- Button trigger modal -->
    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 200px;background:#F7921D;color:white ">
      Ajouter une formation
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"> Ajouter une formation</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="col-md-12 ofset-md-2">
              <form class="row g-3" method="post" action="{{route('ajout_formation')}}" enctype="multipart/form-data">
                @csrf
                @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
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
                <div class="col-md-12">
                  <label for="inputAddress" class="form-label">Titre</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="Nom de la formation" name="nom">
                </div>
                <div class="col-md-6">
                  <label for="inputAddress" class="form-label">Frais d'inscription</label>
                  <input type="number" class="form-control" id="inputAddress" placeholder="5000" name="frais_dinscription">
                </div>
                <div class="col-6">
                  <label for="inputAddress" class="form-label">Cout de la formation</label>
                  <input type="number" class="form-control" id="inputAddress" placeholder="100.000" name="cout_formation">
                </div>
                <div class="col-6">
                  <label for="inputAddress2" class="form-label">Début de la formation</label>
                  <input type="date" class="form-control" id="inputAddress2" placeholder="..." name="debut_formation">
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Fin de la formation</label>
                  <input type="date" class="form-control" id="inputCity" name="fin_formation">
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Delais d'inscription</label>
                  <input type="date" class="form-control" id="inputCity" name="delais_dinscription">
                </div>
                <div class="col-md-6">
                  <label for="inputAddress" class="form-label">Image/Photo</label>
                  <input type="file" class="form-control" id="inputAddress" name="image">
                </div>
                <div class="col-md-12">
                  <label for="inputAddress" class="form-label">Document</label>
                  <input type="file" class="form-control" id="inputAddress" name="document">
                </div>
                <div class="col-md-12">
                  <label for="inputAddress" class="form-label">Marquette</label>
                  <input type="file" class="form-control" id="inputAddress" name="marquette">
                </div>

                <div class="form-group col-md-12">
                  <label for="inputAddress" class="form-label">Description</label>
                  <textarea id="" cols="30" rows="4" name="description" class="form-control" placeholder="Description de la formation"></textarea>
                </div>
                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>


              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
   <div class="container my-4">
  <div class="table-responsive">
    <table class="table table-striped table-hover align-middle text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Titre</th>
          <th scope="col">Frais</th>
          <th scope="col">Coût</th>
          <th scope="col">Début</th>
          <th scope="col">Fin</th>
          <th scope="col">Image</th>
          <th scope="col">Document</th>
          <th scope="col">Marquette</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($tableau as $tables)
        <tr>
          <th scope="row">{{ $tables->id }}</th>
          <td>{{ $tables->nom }}</td>
          <td>{{ $tables->frais_dinscription }}</td>
          <td>{{ $tables->cout_formation }}</td>
          <td>{{ \Carbon\Carbon::parse($tables->debut_formation)->format('d/m/Y') }}</td>
          <td>{{ \Carbon\Carbon::parse($tables->fin_formation)->format('d/m/Y') }}</td>
          <td>
            @if($tables->image)
              <img src="{{ asset($tables->image) }}" alt="Image" class="img-thumbnail" width="80">
            @else
              <span class="text-muted">Aucune</span>
            @endif
          </td>
          <td>
            @if($tables->document)
              <a href="{{ asset($tables->document) }}" target="_blank" class="btn btn for  btn-sm">Voir</a>
            @else
              <span class="text-muted">Aucun</span>
            @endif
          </td>
          <td>
            @if($tables->marquette)
              <a href="{{ asset($tables->marquette) }}" target="_blank" class="btn btn for  btn-sm">Voir</a>
            @else
              <span class="text-muted">Aucune</span>
            @endif
          </td>
          <td>{{ Str::limit($tables->description, 60) }}</td>
          <td>
            <div class="d-flex gap-1 justify-content-center">
              <a href="{{ route('edite', $tables->id) }}" class="btn btn-warning btn-sm" title="Modifier">
                <i class="bi bi-pencil-square"></i>
              </a>
              <form action="{{ route('deletes', $tables->id) }}" method="POST" onsubmit="return confirm('Confirmer la suppression ?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" title="Supprimer">
                  <i class="bi bi-trash"></i>
                </button>
              </form>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

  </div>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection