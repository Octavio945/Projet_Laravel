<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier Produits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body style="background-color: #131313; color:white;">
    <div class="container ">
        <div class="row">
          <div class="col s12">
            <h1>MODIFIER PRODUITS </h1>
            <hr>
            {{-- Message pour affiher le succe de l'operation --}}
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            {{-- Message pour afficher l'erreur de l'operation --}}

            <ul>
                @foreach ($errors->all() as $error )
                    <li class="alert alert-danger">{{ $error }}</li>
                @endforeach
            </ul>

            <form action="/modifier/traitement" method="POST">
                @csrf
                <input type="text" name="id" style="display: none" value="{{ $produits->id }}">
                <div class="mb-3">
                  <label for="nom" class="form-label">NOM</label>
                  <input type="text" class="form-control" id="nom" name="nom" value="{{ $produits->name }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">DESCRIPTION</label>
                    <input type="textarea" class="form-control" id="description" name="description" value="{{ $produits->description }}">
                  </div>

                  <div class="mb-3">
                    <label for="prix" class="form-label">PRIX</label>
                    <input type="text" class="form-control" id="prix" name="prix" value="{{ $produits->price }}">
                  </div>

                  <div class="mb-3">
                    <label for="stock" class="form-label">STOCK</label>
                    <input type="text" class="form-control" id="stock" name="stock" value="{{ $produits->stock }}">
                  </div>

                  <div class="mb-3">
                    <label for="categorie" class="form-label">CATEGORIE</label>
                    <select  class="form-select" name="categorie" id="categorie">
                        @foreach( $categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                        @endforeach
                    </select>
                    <br>

                <button type="submit" class="btn btn-primary">Modifier un Produit</button>
                <br><br>
                <a href="/" class="btn btn-danger">Revenir Liste Produit</a>
              </form>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
