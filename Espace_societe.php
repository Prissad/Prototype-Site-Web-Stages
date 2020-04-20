<!DOCTYPE html>
<?php
?>
<html lang="fr-FR">
<head>
    <title>Espace_societe</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" href="Espace_societe.css">
</head>
<body>
<div>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" >
    <a class="navbar-brand" href="Acceuil.php"><img src="home-logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">HOME</a>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="Espace_client.php">Espace Etudiant</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Espace_societe_login.php">Espace Société</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Espace_Admin_Login.php">Espace Administrateur</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="catalogue/Catalogue.php">Consulter le Catalogue</a>
        </li>
    </ul>
    <!--form class="form-inline my-2 my-lg-0" action="/action_page.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 mr-sm-3" type="submit">Search</button>
    </form-->
</nav>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-3"><a href="#"><button class="btn-lg btn-warning">Ajouter offre</button> </a> </div>
        <div class="col-lg-3"><a href="#"><button class="btn-lg btn-warning">Modifier offre</button> </a> </div>
        <div class="col-lg-3"><a href="#"><button class="btn-lg btn-warning">Supprimer offre</button> </a> </div>
        <div class="col-lg-3"><a href="#"><button class="btn-lg btn-warning">Consulter liste des étudiants</button> </a> </div>
    </div>
</div>

</body>
</html>
