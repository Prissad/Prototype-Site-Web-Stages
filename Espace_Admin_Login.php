<?php
session_start();
require "ConnexionDB.php";
if(isset($_POST["pw"])){
    $bdd=ConnexionDB::getInstance();
    $req=$bdd->prepare("select * from admin where id= :id and admin_mdp= :psswd");
    $req->execute(array("id" => $_POST["id"],"psswd"=>$_POST["pw"]));
    if ($res=$req->fetch()){
        $_SESSION["id"]=$res["id"];
        header("location: Espace_Admin.php");
    }else{
        $msg="vous avez ecrit un id ou un mdp erroné";
    }


}
?>
<!DOCTYPE html>

<html lang="fr-FR">
<head>
    <title>Espace Client</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="Espace_admin_login.css">
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
<div class="row tab">
    <button class="col-lg-12 tablinks animated bounceInLeft" id="byDefault" onclick="openState(event, 'connect')">Se connecter</button>
</div>

<div id="connect" class="tabcontent">
    <p> <?php if (isset($msg)){echo $msg;} ?> </p>
    <form id="1" method="post" action="Espace_Admin_Login.php">
        <label for="mail">ID :</label>
        <input type="text" placeholder="ID" class="form-control" id="id" name="id">
        <br>
        <label for="pw">Mot de Passe :</label>
        <div class="password row">
            <div class="col-lg-11"><input type="password" class="form-control" placeholder="Mot de Passe" id="pw" name="pw"></div>
            <div class="col-lg-1"><button type="button" class="btn" id="Show/hide">Show</button></div>
        </div>
        <br><br>
        <input type="submit" value="Valider" class="btn btn-danger" style="position: relative; margin-left: 97vh;">
    </form>
</div>




<script src="JQuery.js"></script>
<script src="jquery.min.js"></script>
<script src="css3-animate-it.js"></script>
<script>
    document.getElementById("byDefault<?php if(isset($msgins))echo("-s");?>").click();
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
    };
</script>
</body>
</html>
