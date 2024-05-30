<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/commande.css">
    <link rel="shortcut icon" href="assets/img/the_district_brand/favicon.png">
</head>
<body>
    <div class="container">

    <?php
    require_once('header.php')
  ?>

    <br>

    <div class="container" id="background-img"><br>
<div class="row justify-content-center">

<div class="container">
  <div class="row justify-content-center g-0">
  <div class="card mb-3" style="max-width: 580px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="assets/img/food/cheesburger.jpg" class="img-fluid border border-dark border-4" alt="cheesburger">
    </div>
    <div class="col-md-8 cardscolor">
      <div class="card-body">
        <h5 class="card-title txtcolor">Cheesburger</h5>
        <p class="card-text txtcolor">Booooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooof ?</p>
        <a href="#" class="btn btn-primary">Commander</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>


<!--<div id="rectangleviolet" class="col-6 g-0">
    
      <div class="container p-0">
        <div class="row">
        <img src="assets/img/food/pizza-margherita.jpg" alt="pizza-margherita" title="pizza-margherita" id="imgcommande" class="col-1">
        <div class="col-2 txtrectangle">Nom du plat</div>
        <div class="col-3 txtrectangle">Description du plat</div>
        <div class="col-2 justify-content-end mt-5 pt-5 txtrectangle">Quantité</div>
        </div>
    </div>
</div>-->

</div>

<br><br>

<form id="formulaire" method="post">
  <div class="container">
    <div class="row">
  <div class="mb-3">
    <label for="NometPrenom" class="form-label" id="NometPrenomCSS">Nom et prénom</label>
    <input type="text" class="form-control" id="NometPrenomJS">
<p id="couleurtxt">Ce champ est obligatoire</p>
  </div>
  <div class="mb-3 col-6">
    <label for="email" class="form-label" id="emailCSS">Email</label>
    <input type="email" class="form-control" id="emailJS">
<p id="couleurtxt">Ce champ est obligatoire</p>
  </div>
  <div class="mb-3 col-6">
    <label for="telephone" class="form-label" id="telephoneCSS">Téléphone</label>
    <input type="text" class="form-control" id="telephoneJS">
<p id="couleurtxt">Ce champ est obligatoire</p>
  </div>
  <div class="mb-3">
    <label for="votreadresse" class="form-label" id="votreadresseCSS">Votre adresse</label>
    <textarea class="form-control" rows="3" id="votreadresseJS"></textarea>
<p id="couleurtxt">Ce champ est obligatoire</p>    
  </div>
</div>
</div>




<div class="container">
  <div class="row justify-content-end">
  <button class="btn btn-primary col-3" type="submit">Envoyer</button>
</div>
</div>
</form>

<br>

</div>
        
    <br>

    <?php
    require_once('footer.php')
?>

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="assets/js/commande.js"></script>
</body>
</html>