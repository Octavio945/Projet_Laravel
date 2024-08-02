<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body style="background-color: #131313; color:white;">
    <div class="container-fluid text-center">
        <div class="row">
          <div class="col s12">
            <div class="col-sm-12 p-3">

            <h1>BACK OFFICE E-COMMERE </h1>
            <hr>
            <div class="row g-0 text-center">
                <div class="col-sm-6 col-md-4">
                    <a href="/add_categorie" class="btn btn-primary">Ajouter une Catégorie de Produit</a>
                </div>
                <div class="col-6 col-md-8">
                    <form class="d-flex"  action="{{ url('/categorie') }}" method="GET">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search" >
                        <button class="btn btn-primary" type="submit">Search</button>
                      </form>
                </div>
            </div>
            <hr>
            <div class="col-sm-12 p-3 ">
                {{-- Message pour affiher le succe de l'operation --}}
                @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                <hr>
                @endif
           </div>
        </div>
        <div class="row g-0 text-center">
            <div class="col-sm-6 col-md-2">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <a href="/" class="accordion-button collapsed bg-dark text-white">
                          Mes Produits
                        </a>
                      </h2>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <a href="/categorie" class="accordion-button collapsed bg-dark text-white"     >
                        Categories
                        </a>
                      </h2>
                    </div>
                  </div>
            </div>
            <div class="col-6 col-md-10">
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom Catégorie</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @php
                    $ide = 1;
                @endphp
                @foreach ($category as $categorie )
                    <tbody>
                        <td>{{ $ide }}</td>
                        <td>{{ $categorie->name }}</td>
                        <td>
                            <a href="/modifier-categorie/{{  $categorie->id  }}" class="btn btn-info">Modifier</a>
                            <a href="/supprimer-categorie/{{  $categorie->id  }}" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tbody>
                    @php
                        $ide++;
                    @endphp
                @endforeach
              </table>
              {{ $category->links() }}
            </div>
            </div>
          </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
