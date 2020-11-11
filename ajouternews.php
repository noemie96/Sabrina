<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" text="style.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <title>ajouter</title>
</head>

<body>
    <form method="POST" action="traitementnews.php" class="col-8 offset-2" enctype="multipart/form-data">
        <h1>Ajouter</h1>
        <div class="form-group row">
            <label for="nom" class="col-sm-2 col-form-label">titre</label>
            <div class="col-sm-10"><input type="text" class="form-control" placeholder="titre" name="titre" id="titre"></div>
        </div>

        <div class="form-group row">
            <label for="marque" class="col-sm-2 col-from-label">auteur</label>
            
            <div class="col-sm-10"><input type="text" class="from-control" placeholder="auteur" name="auteur" id="auteur"></div>
        </div>
        <div class="form-group row">
                <label for="date" class="col-sm-2 col-form-label">Date</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="date" placeholder="date" name="date">
                </div>
            </div>

        <div class="form-group row">
            <label for="texte" class="col-sm-2 col-from-label">texte</label><textarea class="form-control" name="texte"
                id="texte"></textarea>




            <input type="submit" class="btn btn-primary"></button>
        </div>

        <a href="index.php?#slide4">Retour</a>
    </form>

</body>

</html>