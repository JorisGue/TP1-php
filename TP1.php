<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire d'inscription</title>
  </head>
  <body>
    <h1>Formulaire d'inscription</h1>
<div class="alignement" >
    <div>
      <label for="Prénom">Prénom :</label>
      <input id="Prénom"type="text" name="Prénom" value="">
</div>
</br>
<div>
      <label for="Nom">Nom :</label>
      <input id="Nom"type="text" name="Nom" value="">
    </div>
  </br>
    <div>
      <label for="Mot de passe">Mot de passe :</label>
      <input id="Mot de passe"type="text" name="Mot de passe" value="">
      <label for="Caractères">(3 caractères min.)</label>
    </div>
  </br>
    <div>
      <label for="Confirmation">Confirmation :</label>
      <input id="Confirmation" type="text" name="Confirmation" value="">
    </div>
  </br>
    <div>
      <span >Civilité</span>
      <input id="civ1" type="radio" name="Civilité" value="1"><label for="civ1">Homme</label>
      <input id ="civ2"type="radio" name="Civilité" value="2"><label for="civ2">Femme</label>
    </div>
    </br>
    <div>
      <label  for="Ville">Ville :</label>
      <select id="Ville"name="Ville" size="1">
        <option value="ville1"></option>
        <option value="ville1">Angers</option>
        <option value="ville2">Tours</option>
        <option value="ville3">Cholet</option>
      </select>
    </div>
  </br>
<div>
  <label  for="Sport">Sport ( Optionnel) :</label>
  <input id="sport1"type="checkbox" name="Sport" value="1"><label for="sport1">Football</label>
  <input id="sport2"type="checkbox" name="Sport" value="2"><label for="sport2">Tennis</label>
  <input id="sport3"type="checkbox" name="Sport" value="3"><label for="sport3">Handball</label>
  <input id="sport4"type="checkbox" name="Sport" value="4"><label for="sport4">Equitation</label>
  <input id="sport5"type="checkbox" name="Sport" value="5"><label for="sport5">Natation</label>
  <input id="sport6"type="checkbox" name="Sport" value="6"><label for="sport6">Golf</label>
</div>
</br>
<div>
  <label for="Fichier">Photo :</label>
  <input id ="Fichier" type="file" name="Fichier" value="">
</div>
</br>
<div>
  <label for="Description">Description :</label>
  <textarea id="Description"cols="40" rows="5" name="myname">
</textarea>
</div>
</br>
<div>
<input type="submit" name="Envoyer" value="Envoyer le formulaire">
</div>

</div>

  </body>
</html>
