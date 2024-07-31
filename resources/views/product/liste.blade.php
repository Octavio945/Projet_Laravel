<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste Produits</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body style="background-color: #131313; color:white;">
    <div class="container-fluid text-center ">
        <div class="row">
          <div class="col s12  ">
            <div class="col-sm-12 p-3 ">
                <h1>BACK OFFICE E-COMMERE </h1>
            <hr>
            <div class="row g-0 text-center">
                <div class="col-sm-6 col-md-4">
                    <a href="/ajouter" class="btn btn-primary">Ajouter un Produit</a>
                </div>
                <div class="col-6 col-md-8">
                    <form class="d-flex"  action="{{ url('/') }}" method="GET">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search" >
                        <button class="btn btn-primary" type="submit">Search</button>
                      </form>
                </div>
            </div>
            <hr>
            </div>
            <div class="row g-0 text-center " >
                <div class="col-sm-6 col-md-2">
                    <div class="accordion" id="accordionPanelsStayOpenExample" >
                        <div class="accordion-item" >
                          <h2 class="accordion-header " >
                            <a href="/" class="accordion-button collapsed bg-dark text-white" >
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
                    {{-- Message pour affiher le succe de l'operation --}}
                        @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <table class="table table-dark table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom </th>
                                    <th>Description</th>
                                    <th>Prix </th>
                                    <th>Stock</th>
                                    <th>Categorie</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            @php
                                $ide = 1;
                            @endphp
                            @foreach ($produits as $produit )
                                <tbody>
                                    <td>{{ $ide }}</td>
                                    <td>{{ $produit->name }}</td>
                                    <td>{{ $produit->description }} </td>
                                    <td>{{ $produit->price }} FCFA</td>
                                    <td>{{ $produit->stock }}</td>
                                    <td>{{ $produit->categories->name }}</td>
                                    <td>
                                        <a href="/detail_produit/{{ $produit->id }}" class="btn btn-warning"><i class="bi bi-eye">Voir</i></a>
                                        <a href="/modifier-produit/{{  $produit->id  }}" class="btn btn-info"><i class="bi bi-pencil">Modifier</i></a>
                                        <a href="/supprimer-produit/{{  $produit->id  }}" class="btn btn-danger"><i class="bi bi-trash">Supprimer</i></a>
                                    </td>
                                </tbody>
                                @php
                                    $ide++;
                                @endphp
                            @endforeach
                        </table>
                        {{ $produits->links() }}
                </div>
              </div>


          </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
