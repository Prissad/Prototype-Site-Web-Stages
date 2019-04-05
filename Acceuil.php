<!DOCTYPE html>
<?php
?>
<html lang="fr-FR">
<head>
    <title>Acceuil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="Acceuil.css">
    <link rel="stylesheet" href="Animate.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" >
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


    <div class="bg1 view">
        <div class="content1 text-white">
            <h1 style="font-family: 'Comic Sans MS'">Bienvenue sur notre site</h1>
            <a href="#"><button class="btn btn-info btn-lg">Consulter le catalogue</button> </a>
        </div>
    </div>

    <div class="scroll scroll_bg1">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore incidunt suscipit similique,
            dolor corrupti cumque qui consectetur autem laborum fuga quas ipsam doloribus sequi, mollitia,
            repellendus sapiente repudiandae labore rerum amet culpa inventore, modi non. Quo nisi veritatis vitae nam, labore fugit.
            Inventore culpa iusto, officia exercitationem. Voluptates quibusdam odit odio incidunt consequatur,
            consectetur aspernatur optio vitae molestias,
            quas repellendus fugit ullam culpa, eligendi et dignissimos voluptatibus illum?
            Molestias aliquam nostrum quasi ipsa culpa, iusto explicabo ut error,
            consequuntur enim temporibus, adipisci tempora voluptate, id consequatur mollitia eveniet blanditiis.
            Illo quod repellendus alias? Cum rem doloremque adipisci accusantium? Saepe, necessitatibus!
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
                        <button class="btn btn-warning">Espace société</button>
                    </div>
                    <br>
                    <div class="box">
                        <h3 class="text-dark">Espace Administrateur :</h3>
                        <p>Cliquer ici pour accéder à l'espace admin</p>
                        <button class="btn btn-warning">Espace admin</button>
                    </div>
                    <br>
                </div>
                <div class="col-lg-1"></div>
            </div>
    </div>

    <div class="scroll scroll_bg2">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore incidunt suscipit similique,
            dolor corrupti cumque qui consectetur autem laborum fuga quas ipsam doloribus sequi, mollitia,
            repellendus sapiente repudiandae labore rerum amet culpa inventore, modi non. Quo nisi veritatis vitae nam, labore fugit.
            Inventore culpa iusto, officia exercitationem. Voluptates quibusdam odit odio incidunt consequatur,
            consectetur aspernatur optio vitae molestias,
            quas repellendus fugit ullam culpa, eligendi et dignissimos voluptatibus illum?
            Molestias aliquam nostrum quasi ipsa culpa, iusto explicabo ut error,
            consequuntur enim temporibus, adipisci tempora voluptate, id consequatur mollitia eveniet blanditiis.
            Illo quod repellendus alias? Cum rem doloremque adipisci accusantium? Saepe, necessitatibus!
        </p>
    </div>

    <div class="bg3 view">
        <div class="content3 text-white">
            <h1 style="font-family: 'Comic Sans MS'">Merci d'avoir visité notre site</h1>
        </div>
    </div>




<script src="JQuery.js"></script>
<script src="jquery.min.js"></script>
<script src="css3-animate-it.js"></script>
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
