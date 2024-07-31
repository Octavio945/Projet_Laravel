<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Detail produit </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body style="background-color: #131313; color:white;">
    <div class="container">
        <div class="col-sm-12 p-3">
            <h1>Page Detail produit</h1>
        </div>
        <div class="row g-0 ">
            <div class="col-sm-6 col-md-6">
                <img src="https://th.bing.com/th/id/OIP.o-sXGAZontC6Fy9lo6Wb-AHaJQ?w=141&h=180&c=7&r=0&o=5&pid=1.7" alt="image_produit" width="100%" height="100% "/>
            </div>
            <div class="col-6 col-md-6 gap-3">
                <div class="grid gap-3">
                    <div class="p-3 g-col-6"><h2> Nom Produit : {{ $produits->name }}</h2></div>
                    <div class="p-3 g-col-6">
                        <h3>Description</h3>
                        <p>{{ $produits->description }}</p>
                    </div>
                    <div class="p-3 g-col-6"><h3>Prix : {{ $produits->price }}</h3></div>
                    <div class="p-3 g-col-6"><h3>Quantité : {{ $produits->stock }}</h3></div>
                    <div class="p-3 g-col-6"><h3>Catégorie : {{ $produits->category_id }}</h3></div>
                    <div class="p-3 g-col-6"><a href="/" class="btn btn-danger"><i class="bi bi-arrow-left">Revenir Liste Produit</i></a></div>
                    <div class="p-3 g-col-6"><a href="/modifier-produit/{{  $produits->id  }}" class="btn btn-info"><i class="bi bi-pencil">Modifier</i></a></div>
                    <div class="p-3 g-col-6"><a href="/supprimer-produit/{{  $produits->id  }}" class="btn btn-danger"><i class="bi bi-trash">Supprimer</i></a></div>
                  </div>
            </div>
          </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>
