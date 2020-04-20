<!DOCTYPE html>
<?php
?>
<html lang="fr-FR">
<head>
    <title>Acceuil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./Acceuil.css">
    <link rel="stylesheet" href="./Animate.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" >
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


    <div class="bg1 view">
        <div class="content1 text-white">
            <h1 style="font-family: 'Comic Sans MS'">Bienvenue sur notre site</h1>
            <a href="catalogue/Catalogue.php"><button class="btn btn-info btn-lg">Consulter le catalogue</button> </a>
        </div>
    </div>

    <div class="scroll scroll_bg1">
        <h1>Qu’est-ce qu’un stage ?</h1><br><br><br><br><br><br>
         <p> Le stage est une période temporaire de mise en situation professionnelle qui s'inscrit dans le cadre
             d'un cursus pédagogique. C’est l’occasion de mettre
             en pratique des connaissances acquises lors de ma formation, il peut aussi me permettre d’acquérir des
             compétences professionnelles nouvelles que je pourrai valoriser dans mon CV ou dans un premier
             emploi.
        </p>
    </div>

    <div class="bg2 view container-fluid">
        <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-4 box fast animated bounceIn">
                    <h2 class="text-dark">Bienvenue sur notre Site</h2>
                    <p class="text-white">Ce site a pour but de rapprocher les relations entre sociétés et étudiants.</p>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-4 text-dark fast animated bounceIn">
                    <div class="box">
                        <h3 class="text-dark">Espace Etudiant :</h3>
                        <p>Cliquer ici pour accéder à l'espace etudiant</p>
                        <a href="Espace_client.php"><button class="btn btn-warning">Espace etudiant</button></a>
                    </div>
                    <br>
                    <div class="box">
                        <h3 class="text-dark">Espace Société :</h3>
                        <p>Cliquer ici pour accéder à l'espace des entreprises</p>
                        <a href="Espace_societe_login.php"><button class="btn btn-warning">Espace société</button></a>
                    </div>
                    <br>
                    <div class="box">
                        <h3 class="text-dark">Espace Administrateur :</h3>
                        <p>Cliquer ici pour accéder à l'espace admin</p>
                        <a href="Espace_Admin_Login.php"><button class="btn btn-warning">Espace admin</button></a>
                    </div>
                    <br>
                </div>
                <div class="col-lg-1"></div>
            </div>
    </div>

    <div class="scroll scroll_bg2">
        <h1>Pourquoi faire un stage ?</h1><br><br><br><br><br><br><br>
         <p>Cela permet d'avoir une idée concrète de la vie d'une entreprise (ou de tout autre organisme), de son
            fonctionnement, d'engranger une expérience non négligeable qui me servira lorsque je chercherai un
            emploi. De plus le stage est un moyen de modifier ou d’affiner mon orientation professionnelle car je me
            confronte à une expérience réelle.
        </p>
    </div>

    <div class="bg3 view">
        <div class="content3 text-white">
            <h1 style="font-family: 'Comic Sans MS'">Merci d'avoir visité notre site</h1>
        </div>
    </div>




<script src="./JQuery.js"></script>
<script src="./jquery.min.js"></script>
<script src="./css3-animate-it.js"></script>
<script>
    function elementInViewport(elem)
    {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemTop=$(elem).offset().top ;
        return ( (docViewBottom>=elemTop-100) && (docViewTop<=elemTop+600) );
    }
    var box1=$(".box")[0];
    var box2=$(".box")[1];
    var box3=$(".box")[2];
    var box4=$(".box")[3];
    window.addEventListener('scroll',function () {
        if(elementInViewport(box1)){
            $(box1).removeClass('fast animated bounceOut go');
            $(box1).addClass('fast animated bounceIn go');
            $(box2).removeClass('fast animated bounceOut go');
            $(box2).addClass('fast animated bounceIn go');
            $(box3).removeClass('fast animated bounceOut go');
            $(box3).addClass('fast animated bounceIn go');
            $(box4).removeClass('fast animated bounceOut go');
            $(box4).addClass('fast animated bounceIn go')
        }
        else{
            $(box1).removeClass('fast animated bounceIn go');
            $(box1).addClass('fast animated bounceOut go');
            $(box2).removeClass('fast animated bounceIn go');
            $(box2).addClass('fast animated bounceOut go');
            $(box3).removeClass('fast animated bounceIn go');
            $(box3).addClass('fast animated bounceOut go');
            $(box4).removeClass('fast animated bounceIn go');
            $(box4).addClass('fast animated bounceOut go');
        }
    },false)
</script>
</body>
</html>
