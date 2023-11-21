<!DOCTYPE html>
<html lang="fr-fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catégorie - The District </title>
  <link rel="stylesheet" href="assets/CSS/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="/img/images_the_district/the_district_brand/logo.png">
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

  <!-- Début de la div du carroussel -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/images_the_district/bg1.jpeg" class="d-block w-100" alt="1">
      </div>
      <div class="carousel-item">
        <img src="assets/img/images_the_district/bg2.jpeg" class="d-block w-100" alt="2">
      </div>
      <div class="carousel-item">
        <img src="assets/img/images_the_district/bg3.jpeg" class="d-block w-100" alt="3">
      </div>
    </div>
  </div>
  <!-- Fin de la div du carroussel -->

  <!-- Début de la div contenant les aliments -->
  <hr>
  <h1 class="categorie" > Nos choix</h1>
  <hr>
  <div class="card-group">
    <div class="card" style="width: 20rem;">
      <img src="assets/img/images_the_district/catégorie/aperitif.png" class="card-img-top" alt="nos-apéritifs">
      <div class="card-body">
        <h5 class="card-title">Nos Cocktails</h5>
        <p class="card-text"></p>
        <a href="aperitif.php" class="btn btn-primary zoom">Voir nos choix</a>
      </div>
    </div>

    <div class="card" style="width: 20rem;">
      <img src="assets/img/images_the_district/catégorie/salade.png" class="card-img-top" alt="nos-salades">
      <div class="card-body">
        <h5 class="card-title">Nos Salades</h5>
        <p class="card-text"></p>
        <a href="salade.php" class="btn btn-primary zoom">Voir nos choix</a>
      </div>
    </div>

    <div class="card" style="width: 20rem;">
      <img src="assets/img/images_the_district/catégorie/hamburger.png" class="card-img-top" alt="nos-burgers">
      <div class="card-body">
        <h5 class="card-title">Nos Burgers</h5>
        <p class="card-text"></p>
        <a href="burgers.php" class="btn btn-primary zoom">Voir nos choix</a>
      </div>
    </div>

    <div class="card" style="width: 20rem;">
      <img src="assets/img/images_the_district/catégorie/pizza.png" class="card-img-top" alt="nos-pizzas">
      <div class="card-body">
        <h5 class="card-title">Nos Pizzas</h5>
        <p class="card-text"></p>
        <a href="pizza.php" class="btn btn-primary zoom">Voir nos choix</a>
      </div>
    </div>

    <div class="card" style="width: 20rem;">
      <img src="assets/img/images_the_district/catégorie/desserts.png" class="card-img-top" alt="nos-desserts">
      <div class="card-body">
        <h5 class="card-title">Nos desserts </h5>
        <p class="card-text"></p>
        <a href="desserts.php" class="btn btn-primary zoom">Voir nos choix</a>
      </div>
    </div>




    <div class="card" style="width: 20rem;">
      <img src="assets/img/images_the_district/catégorie/café/café.png" class="card-img-top" alt="nos-cafés">
      <div class="card-body">
        <h5 class="card-title">Nos Cafés</h5>
        <p class="card-text"></p>
        <a href="cafes.php" class="btn btn-primary zoom">Voir nos choix</a>
      </div>
    </div>
  </div>
  <!-- Fin de la div contenant les aliments -->

</body>

</html>