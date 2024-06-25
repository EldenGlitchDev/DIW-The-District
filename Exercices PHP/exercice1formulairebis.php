<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form id="formulaire" action="exercice1formulaire.php" method="post">

        <fieldset>
            <legend class="display-6"><b>Vos coordonnées</b></legend>
            <div class="mb-3">
            <label for="nom" class="form-label">Nom*:</label><input type="text" name="nom" id="nom" class="form-control" placeholder="Veuillez saisir votre nom">
            </div>
    
            <div class="mb-3">
            <label for="prénom" class="form-label">Prénom*:</label><input type="text" name="prenom" id="prenom" class="form-control" placeholder="Veuillez saisir votre prénom">
            </div>
    
    
    
            Sexe*:<br>
            
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexe" value="Féminin" id="sexeF" value="option1">
            <label class="form-check-label" for="sexeF">Féminin</label>
            </div>
    
            <div class="form-check form-check-inline mb-3">
            <input class="form-check-input" type="radio" name="sexe" value="Masculin" id="sexeM" value="option2">
            <label class="form-check-label" for="sexeM">Masculin</label>
            </div>
    
            <div class="mb-3">
            <label for="date" class="form-label"></label>Date de naissance*:<input type="date" name="ddn" id="date" class="form-control">
            </div>
    
    
            <div class="mb-3">
            <label for="code_postal" class="form-label">Code postal*:</label><input type="text" name="code_postal" id="code_postal" class="form-control">
            </div>
    
            <div class="mb-3">
            <label for="adresse" class="form-label">Adresse:</label><input type="text" name="adresse" id="adresse" class="form-control">
            </div>
    
            <div class="mb-3">
            <label for="ville" class="form-label">Ville:</label><input type="text" name="ville" id="ville" class="form-control">
            </div>
    
            <div class="mb-3">
            <label for="email" class="form-label">Email*:</label><input type="text" name="email" id="email" class="form-control" placeholder="dave.loper@afpa.fr">
            </div>
        </fieldset>
    
    
        <fieldset>
            <legend class="display-6"><b>Votre demande</b></legend>
    
            <label id="sujet" for="sujet">Sujet*</label>
            <select class="form-select form-select-sm" aria-label="Small select example">
                <option selected="" id="remove">Veuillez sélectionner un sujet</option>
                <option value="mes commandes">Mes commandes</option>
                <option value="question sur un produit">Question sur un produit</option>
                <option value="réclamation">Réclamation</option>
                <option value="autres">Autres</option>
            </select>
    
    
           <br> Votre question* : <br>
    
            <div class="form-floating">
                <textarea class="form-control" id="votre_question" style="height: 100px"></textarea>
                <label for="floatingTextarea2"></label>
              </div>
    
        <!-- Votre question*<textarea name="votre question" rows="3" cols="18" id="votre_question"></textarea>
        </fieldset>-->
    
        <br>
        <input type="checkbox" name="traitement informatique" value="traitement informatique" id="traitement_informatique">*J'accepte le traitement informatique de ce formulaire
        <br><br>
    
        <button class="btn btn-primary" type="submit">Envoyer</button>
        <button class="btn btn-primary" type="reset">Annuler</button>
    
    
    
        <!-- <p><button type = "submit" name="Envoyer">Envoyer</button>
        <button type ="reset" nam="Annuler">Annuler</button></p> -->
        </form>
</body>
</html>