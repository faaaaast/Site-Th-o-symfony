<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    	<!-- Font awesome cdn CSS-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link rel="stylesheet" href="assets/CSS/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="assets/img/images_the_district/the_district_brand/logo.png">

		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/assets/css/commande.css" />
		<script src="https://kit.fontawesome.com/88b3df3889.js" crossorigin="anonymous"></script>
    <style>
        #panier-liste {
          list-style-type: none;
          padding-left: 0;
        }
        #panier-liste img {
          width: 200px;
          height: 150px;
        }
      </style>
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

    <!-- Début de la div de l'image sous la nav bar du haut + texte sur l'image -->
    <div class="background-image">
        <img class="logo" src="assets/img/images_the_district/bg.jpg" alt="logo">
        <div class="text-overlay">
            <h2>Délicieusement connecté à tous les goûts</h2>
            <p>The District, où la saveur urbaine rencontre la rapidité du fast-food !</p>
            <form class="search-form">
                <input type="text" placeholder="Rechercher...">
            </form>
        </div>
    </div>
    <!-- Fin de la div de l'image sous la nav bar du haut + texte sur l'image -->
<section class="cc-menu merriweather py-5 centered-form"> 
<br><br><br><br><br><br><br>
            <div class="text-center" >
                <h1>Mon Panier</h1>
        
                <h2>Produits sélectionnés :</h2>
                <ul  id="panier-liste"></ul>
        
                <h2>Prix total :</h2>
                <p id="prix-total"></p>
                <button onclick="resetPanier()">Réinitialiser</button>
                <button onclick="finaliser()">finaliser commande</button>
            </div>
            <script>
                function resetPanier() {
                    // Supprimer les données du sessionStorage
                    sessionStorage.removeItem("panier");
                    sessionStorage.removeItem("prixTotal");
        
                    // Rediriger vers la page principale
                    window.location.href = "plats.php";
                }
        
                document.addEventListener("DOMContentLoaded", function () {
                    // Récupérer les données du sessionStorage
                    var panier = JSON.parse(sessionStorage.getItem("panier")) || [];
        
                    // Calculer le prix total
                    var prixTotal = 0;
                    panier.forEach(function (produit) {
                        prixTotal += produit.prix;
                    });
        
                    // Enregistrer le prix total dans le sessionStorage
                    sessionStorage.setItem("prixTotal", prixTotal);
        
                    // Afficher les produits sélectionnés
                    var panierListe = document.getElementById("panier-liste");
                    panier.forEach(function (produit) {
                        var li = document.createElement("li");
        
                        var img = document.createElement("img");
                        img.src = produit.image;
                        img.alt = "Produit";
                        li.appendChild(img);
        
                        var div = document.createElement("div");
        
                        var h3 = document.createElement("h3");
                        h3.textContent = produit.nom;
                        div.appendChild(h3);
        
                        var pDesc = document.createElement("p");
                        pDesc.textContent = produit.description;
                        div.appendChild(pDesc);
        
                        var pPrix = document.createElement("p");
                        pPrix.textContent = "Prix : " + produit.prix + "€";
                        div.appendChild(pPrix);

                        var hr = document.createElement("hr");

                        pPrix.insertAdjacentElement("afterend", hr);
                        
                        li.appendChild(div);
                        panierListe.appendChild(li);
                        
                    });
        
                    // Afficher le prix total
                    var prixTotalElement = document.getElementById("prix-total");
                    prixTotalElement.textContent = "Prix total : " + prixTotal.toFixed(2) + "€";
                });


                function finaliser(){
                    window.location.href = "/HTML/formulaire.php"
                }
            </script>

</section>

<br><br>
    <?php
include('assets/exo_php/footer.php')
?>
</body>
</html>