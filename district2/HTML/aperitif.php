<!DOCTYPE html>
<html lang="fr-fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nos Apéritifs - The District </title>
  <link rel="stylesheet" href="assets/CSS/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

  <!-- Début de la div de la nav bar du haut -->
  <nav class="fondcouleurnav navbar navbar-expand-lg bg-beige justify-content-center text-center">
    <img class="logo" src="assets/img/images_the_district/the_district_brand/logo.png" alt="logo" style="height: 100px; width: 100px;">

    <div class="collapse navbar-collapse justify-content-center text-center" id="navbarNav">
        <a class="navbar-brand mx-5 hover-scale" aria-current="page" href="index.php">Accueil</a>
        <a class="navbar-brand mx-5 hover-scale" aria-current="page" href="categorie.php">Catégorie</a>
        <a class="navbar-brand mx-5 hover-scale" href="plats.php">Plats</a>
        <a class="navbar-brand mx-5 hover-scale" href="contact.php">Contact</a>
        <a class="navbar-brand mx-5 hover-scale" href="commande.php">Commandes</a>
    </div>
    <div class="collapse navbar-collapse justify-content-center text-center" id="navbarNav">
        <a href="panier.php"><i class="fa-sharp fa-solid fa-basket-shopping fa-xl zoom"> </i></a>
    </div>
</nav>
  <!-- Fin de la div de la nav bar du haut -->

  <!-- Début de la div contenant les aliments -->
  <hr>
  <h1 class="cocktails"> Nos choix de cocktails</h1>
  <hr>
  <div class="card-group">
    <div class="card" style="width: 20rem;">
      <img src="assets/img/images_the_district/catégorie/cocktail-manhattan.png" class="card-img-top" alt="Manhattan">
      <div class="card-body">
        <h5 class="card-title">Le Manhattan </h5>
        <p class="card-text"> À votre santé : Des cocktails d'exception pour toutes les occasions. </p>
      </div>
    </div>
    <div class="card" style="width: 20rem;">
      <img src="assets/img/images_the_district/catégorie/LeBostonRumPunch.png" class="card-img-top" alt="Boston">
      <div class="card-body">
        <h5 class="card-title">Le Boston Rum Punch</h5>
        <p class="card-text"> À votre santé : Des cocktails d'exception pour toutes les occasions. </p>
      </div>
    </div>
    <div class="card" style="width: 20rem;">
      <img src="assets/img/images_the_district/catégorie/london.png" class="card-img-top" alt="london">
      <div class="card-body">
        <h5 class="card-title">Le London Fog</h5>
        <p class="card-text"> À votre santé : Des cocktails d'exception pour toutes les occasions. </p>
      </div>
    </div>
    <div class="card" style="width: 20rem;">
      <img src="assets/img/images_the_district/catégorie/milano.png" class="card-img-top" alt="milano">
      <div class="card-body">
        <h5 class="card-title">Le Milano</h5>
        <p class="card-text">À votre santé : Des cocktails d'exception pour toutes les occasions. </p>
      </div>
    </div>
    <div class="card" style="width: 20rem;">
      <img src="assets/img/images_the_district/catégorie/bronx.png" class="card-img-top" alt="bronx">
      <div class="card-body">
        <h5 class="card-title">Le Bronx</h5>
        <p class="card-text">À votre santé : Des cocktails d'exception pour toutes les occasions.</p>
      </div>
    </div>
  </div>
  <!-- Fin de la div contenant les aliments -->

  <!-- Début de la div du bouton directionnel vers la page catégorie -->
  <div class="bouton">
    <a href="categorie.php" class="btn btn-primary zoom">Retour à la page catégorie</a>
  </div>
  <!-- Fin de la div du bouton directionnel vers la page catégorie -->

</body>

</html>