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
      <div class="col-md-3"></div>
    </div>
  </div>
</body>

</html>