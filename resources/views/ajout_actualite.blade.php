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

                <form action="{{ route('ajout_actualite') }}" method="POST" enctype="multipart/form-data">
                    @csrf

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

                    <h4 class="text-center mb-4">Ajouter un produit</h4>

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

                    <button type="submit" class="btn btn-primary w-100">Ajouter une actualité</button>
                </form>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>