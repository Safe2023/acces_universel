<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Enregistrer une formation</title>
</head>

<body>
    <div class="container mt-5 pt-5 mb-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h5 class="text-center">Enregistrer une formation</h5>
                <form class="row g-3" method="post" action="{{route('updates', $formation->id)}}" enctype="multipart/form-data">
                    @csrf
                    @if(isset($formation))
                    @method('PUT')
                    @endif

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

                    <h5 class="text-center">Modifier la formation</h5>

                    <div class="col-md-12">
                        <label for="inputAddress" class="form-label">Titre</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Nom de la formation" name="nom" value=" $formation->nom}}">
                    </div>

                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Frais d'inscription</label>
                        <input type="number" class="form-control" id="inputAddress" placeholder="5000" name="frais_dinscription" value="{{$formation->frais_dinscription}}">
                    </div>

                    <div class="col-6">
                        <label for="inputAddress" class="form-label">Cout de la formation</label>
                        <input type="number" class="form-control" id="inputAddress" placeholder="100000" name="cout_formation" value="{{$formation->cout_formation}}">
                    </div>

                    <div class="col-6">
                        <label for="inputAddress2" class="form-label">Début de la formation</label>
                        <input type="date" class="form-control" id="inputAddress2" name="debut_formation" value="{{$formation->debut_formation}}">
                    </div>

                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Fin de la formation</label>
                        <input type="date" class="form-control" id="inputCity" name="fin_formation" value="{{$formation->fin_formation}}">
                    </div>

                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Délais d'inscription</label>
                        <input type="date" class="form-control" id="inputCity" name="delais_dinscription" value="{{$formation->delais_dinscription}}">
                    </div>

                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Image/Photo</label>
                        <input type="file" class="form-control" id="inputAddress" name="image">
                        @if(isset($formation) && $formation->image)
                        <small class="d-block mt-1">Image actuelle :</small>
                        <img src="{{ asset($formation->image) }}" width="100" alt="Image actuelle">
                        @endif
                    </div>

                    <div class="col-md-12">
                        <label for="inputAddress" class="form-label">Document</label>
                        <input type="file" class="form-control" id="inputAddress" name="document">
                        @if(isset($formation) && $formation->document)
                        <small class="d-block mt-1">Document actuel : <a href="{{ asset($formation->document) }}" target="_blank">Voir</a></small>
                        @endif
                    </div>

                    <div class="col-md-12">
                        <label for="inputAddress" class="form-label">Marquette</label>
                        <input type="file" class="form-control" id="inputAddress" name="marquette">
                        @if(isset($formation) && $formation->marquette)
                        <small class="d-block mt-1">Marquette actuelle : <a href="{{ asset($formation->marquette) }}" target="_blank">Voir</a></small>
                        @endif
                    </div>

                    <div class="form-group col-md-12">
                        <label for="inputAddress" class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="4" placeholder="Description de la formation">{{$formation->description}} </textarea>
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary">
                            Mettre à jour
                        </button>
                    </div>
                </form>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>