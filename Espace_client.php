<!DOCTYPE html>
<?php
?>
<html lang="fr-FR">
<head>
    <title>Espace Client</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="Espace_client.css">
    <link rel="stylesheet" href="Animate.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark" >
        <a class="navbar-brand" href="Acceuil.php"><img src="home-logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">HOME</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="Espace_client.php">Espace Etudiant</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Espace Société</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Espace Administrateur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Consulter le Catalogue</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 mr-sm-3" type="submit">Search</button>
        </form>
    </nav>

    <div class="row tab">
        <button class="col-lg-6 tablinks animated bounceInLeft" id="byDefault" onclick="openState(event, 'connect')">Se connecter</button>
        <button class="col-lg-6 tablinks animated bounceInRight" onclick="openState(event, 'sign_in')">Créer un compte</button>
    </div>

    <div id="connect" class="tabcontent">
        <label for="mail">Adresse mail :</label>
        <input type="email" placeholder="Adresse Mail" class="form-control" id="mail">
        <br>
        <label for="pw">Mot de Passe :</label>
        <div class="password row">
            <div class="col-lg-11"><input type="password" class="form-control" placeholder="Mot de Passe" id="pw"></div>
            <div class="col-lg-1"><button class="btn" id="Show/hide">Show</button></div>
        </div>
        <br>
        <input type="submit" value="Valider" class="btn btn-danger">
    </div>

    <div id="sign_in" class="tabcontent">
        <h3>Créer un compte</h3>
        <p>Ici formulaire de création de compte.</p>
    </div>



<script src="JQuery.js"></script>
<script src="jquery.min.js"></script>
<script src="css3-animate-it.js"></script>
<script>
    document.getElementById("byDefault").click();
    function openState(evt, name) {
        var i, tabcontent, tablinks;

        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        document.getElementById(name).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
<script>
    var mail=document.getElementById('mail');
    mail.onclick= function(){
        $(mail).addClass("is-invalid");
        mail.onclick=null;
    }
    mail.addEventListener('blur',function () {
        if(/[^@]+@[^@]+.[^@]+/i.test(mail.value)){
            $(mail).removeClass("is-invalid");
            $(mail).addClass("is-valid");
        }
        else{
            $(mail).removeClass("is-valid");
            $(mail).addClass("is-invalid");
        }
    })
</script>
<script>
    var show_hide=document.getElementById('Show/hide');
    var pw=document.getElementById('pw');
    show_hide.onclick=function () {
        if(show_hide.innerText=="Show"){
            show_hide.innerText="Hide";
            $(pw).attr('type','text');
        }
        else{
            show_hide.innerText="Show";
            $(pw).attr('type','password');
        }
    }
</script>
</body>
</html>
