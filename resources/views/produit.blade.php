<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/ajout.css')}}">

</head>

<body>


    <form action="{{ route('produit') }}" method="post">
        {{ csrf_field () }}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" name="name" placeholder="entrez le nom" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prix</label>
            <input type="number" class="form-control" name="prix" placeholder="entrez le prix" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">photo</label>
            <input type="file" class="form-control" name="photo" placeholder="entrez la photo" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">description</label>
            <input type="text" class="form-control" name="email" placeholder="entrez votre description" id="exampleInputEmail1" aria-describedby="emailHelp">
            

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">categorie</label>
            <input type="text" class="form-control" name="prenom" placeholder="entrez le prenom" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>


        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>