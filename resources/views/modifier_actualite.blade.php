<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<!-- enctype="multipart/form-data" -->

<body>
    <div class="container md-5 mt-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 ofset-md-2">

                <form action="{{ route('update' ,$actualite->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($actualite))
                    @method('PUT') <!-- pour la méthode PUT en modification -->
                    @endif

                    @if (session()->has('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <h4 class="text-center mb-4">Modifier une actualité</h4>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="titre" placeholder="Titre de l'actualité" value="{{ $actualite->titre}}">
                    </div>

                    <div class="mb-3">
                        <input type="date" class="form-control" name="date" value="{{$actualite->date}}">
                    </div>

                    <div class="mb-3">
                        <input type="file" class="form-control" name="image">
                        @if(isset($actualite) && $actualite->image)
                        <small>Image actuelle :</small><br>
                        <img src="{{ asset($actualite->image) }}" alt="Image actuelle" style="max-width: 150px; max-height: 100px;">
                        @endif
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="description" placeholder="Description" value="{{$actualite->description}}">
                    </div>

                    <div class="mb-3">
                        <textarea name="description_complete" class="form-control" rows="4" placeholder="Description complète...">{{ old('description_complete', $actualite->description_complete ?? '') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Mettre à jour</button>
                </form>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>