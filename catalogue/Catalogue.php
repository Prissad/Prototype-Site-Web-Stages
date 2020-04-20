<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='css/complicated.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->

    <title>Catalogue</title>
</head>
<body>
<a class="cd-nav-trigger cd-text-replace" href="#primary-nav">Menu<span aria-hidden="true" class="cd-icon"></span></a>

<div class="cd-projects-container">
    <ul class="cd-projects-previews">
        <li>
            <a href="#0">
                <div class="cd-project-title">
                    <h2>Stages</h2>
                    <p>Liste des Stages disponibles</p>
                </div>
            </a>
        </li>

        <li>
            <a href="#0">
                <div class="cd-project-title">
                    <h2>Workshops</h2>
                    <p>Liste des Workshops disponibles</p>
                </div>
            </a>
        </li>

        <li>
            <a href="#0">
                <div class="cd-project-title">
                    <h2>Certifications</h2>
                    <p>Liste des Certifications disponibles</p>
                </div>
            </a>
        </li>

        <li>
            <a href="#0">
                <div class="cd-project-title">
                    <h2>Tout voir</h2>
                    <p>Liste des toutes les formations disponibles en toute catégorie</p>
                </div>
            </a>
        </li>
    </ul> <!-- .cd-projects-previews -->

    <?php
    session_start();
    require "../ConnexionDBstage.php";
    $bdds=ConnexionDBstage::getInstance();
    $reqs=$bdds->prepare("select * from stage");
    $reqs->execute();
    $reqw=$bdds->prepare("select * from workshop");
    $reqw->execute();
    $reqc=$bdds->prepare("select * from certification");
    $reqc->execute();
    $reqs2=$bdds->prepare("select * from stage");
    $reqs2->execute();
    $reqw2=$bdds->prepare("select * from workshop");
    $reqw2->execute();
    $reqc2=$bdds->prepare("select * from certification");
    $reqc2->execute();
    $is=0;
    $iw=0;
    $ic=0;
    $i=0;
    ?>

    <ul class="cd-projects">
        <li>
            <div class="preview-image">
                <div class="cd-project-title">
                    <h2>Stages</h2>
                    <p>Liste des Stages disponibles</p>
                </div>
            </div>

            <div class="cd-project-info">
                <?php
                    while ($ress=$reqs->fetch()){
                        if($is % 3==0){
                            echo '
                        <div class="row mr-auto">
			                <div class="col-lg-4">
			               <a href="#0">
				                <img style="width: 40vh;height: 25vh" src="../'.$ress["photo"].'" alt="project image">
				            
					            <h2>'.$ress["id"].')'.$ress["titre"].'</h2>
				            
			               </a>
			                </div>
			             ';}
                        else if($is % 3==2){
                            echo '
			                <div class="col-lg-4">
			               <a href="#0">
				                <img style="width: 40vh;height: 25vh" src="../'.$ress["photo"].'" alt="project image">
				            
					            <h2>'.$ress["id"].')'.$ress["titre"].'</h2>
				            
			               </a>
			                </div>
			             </div>';}
                        else{
                        echo '
			                <div class="col-lg-4">
			               <a href="#0">
				                <img style="width: 40vh;height: 25vh" src="../'.$ress["photo"].'" alt="project image">
				            
					            <h2>'.$ress["id"].')'.$ress["titre"].'</h2>
				            
			               </a>
			                </div>';}
                        $is=$is+1;
                    }
            ?>
            </div> <!-- .cd-project-info -->
        </li>

        <li>
            <div class="preview-image">
                <div class="cd-project-title">
                    <h2>Workshops</h2>
                    <p>Liste des Workshops disponibles</p>
                </div>
            </div>

            <div class="cd-project-info">
                <?php
                while ($resw=$reqw->fetch()){
                    if($iw % 3==0){
                        echo '
                        <div class="row mr-auto">
			                <div class="col-lg-4">
			               <a href="#0">
				                <img style="width: 40vh;height: 25vh" src="../'.$resw["photo"].'" alt="project image">
				            
					            <h2>'.$resw["id"].')'.$resw["titre"].'</h2>
				            
			               </a>
			                </div>
			             ';}
                    else if($iw % 3==2){
                        echo '
			                <div class="col-lg-4">
			               <a href="#0">
				                <img style="width: 40vh;height: 25vh" src="../'.$resw["photo"].'" alt="project image">
				            
					            <h2>'.$resw["id"].')'.$resw["titre"].'</h2>
				            
			               </a>
			                </div>
			             </div>';}
                    else{
                        echo '
			                <div class="col-lg-4">
			               <a href="#0">
				                <img style="width: 40vh;height: 25vh" src="../'.$resw["photo"].'" alt="project image">
				            
					            <h2>'.$resw["id"].')'.$resw["titre"].'</h2>
				            
			               </a>
			                </div>';}
                    $iw=$iw+1;
                }
                ?>
            </div> <!-- .cd-project-info -->
        </li>

        <li>
            <div class="preview-image">
                <div class="cd-project-title">
                    <h2>Certifications</h2>
                    <p>Liste des Certifications disponibles</p>
                </div>
            </div>

            <div class="cd-project-info">
                <?php
                while ($resc=$reqc->fetch()){
                    if($ic % 3==0){
                        echo '
                        <div class="row mr-auto">
			                <div class="col-lg-4">
			               <a href="#0">
				                <img style="width: 40vh;height: 25vh" src="../'.$resc["photo"].'" alt="project image">
				            
					            <h2>'.$resc["id"].')'.$resc["titre"].'</h2>
				            
			               </a>
			                </div>
			             ';}
                    else if($ic % 3==2){
                        echo '
			                <div class="col-lg-4">
			               <a href="#0">
				                <img style="width: 40vh;height: 25vh" src="../'.$resc["photo"].'" alt="project image">
				            
					            <h2>'.$resc["id"].')'.$resc["titre"].'</h2>
				            
			               </a>
			                </div>
			             </div>';}
                    else{
                        echo '
			                <div class="col-lg-4">
			               <a href="#0">
				                <img style="width: 40vh;height: 25vh" src="../'.$resc["photo"].'" alt="project image">
				            
					            <h2>'.$resc["id"].')'.$resc["titre"].'</h2>
				            
			               </a>
			                </div>';}
                    $ic=$ic+1;
                }
                ?>
            </div> <!-- .cd-project-info -->
        </li>

        <li>
            <div class="preview-image">
                <div class="cd-project-title">
                    <h2>Tout voir</h2>
                    <p>Liste des toutes les formations disponibles en toute catégorie</p>
                </div>
            </div>

            <div class="cd-project-info">
                <?php
                echo '<div class="row mr-auto">
                    <div class="col-lg-4">
                        <p>Stages</p>
                    </div>
                    <div class="col-lg-4">
                        <p>Workshops</p>
                    </div>
                    <div class="col-lg-4">
                        <p>Certifications</p>
                    </div>
                 </div>';
                $ress=$reqs2->fetch();
                $resw=$reqw2->fetch();
                $resc=$reqc2->fetch();
                while ($ress || $resw || $resc){
                        echo '
                        <div class="row mr-auto">
			                <div class="col-lg-4">';
                            if($ress){echo'
			               <a href="#0">
				                <img style="width: 40vh;height: 25vh" src="../'.$ress["photo"].'" alt="project image">
				            
					            <h2>'.$ress["titre"].'</h2>
				            
			               </a>';}
			                echo'</div>
			                <div class="col-lg-4">';
			               if($resw){echo'
                                <a href="#0">
				                <img style="width: 40vh;height: 25vh" src="../'.$resw["photo"].'" alt="project image">
				            
					            <h2>'.$resw["titre"].'</h2>
				            
			               </a>';}
			                echo'</div>
			                <div class="col-lg-4">';
                                if($resc){echo'
			               <a href="#0">
				                <img style="width: 40vh;height: 25vh" src="../'.$resc["photo"].'" alt="project image">
				            
					            <h2>'.$resc["titre"].'</h2>
				            
			               </a>';}
			                echo'</div>
			                
			           </div>
			             ';
                        $i=$i+1;
                    $ress=$reqs2->fetch();
                    $resw=$reqw2->fetch();
                    $resc=$reqc2->fetch();
                }
                ?>
            </div> <!-- .cd-project-info -->
        </li>
    </ul> <!-- .cd-projects -->

    <button class="scroll cd-text-replace">Scroll</button>
</div> <!-- .cd-project-container -->

<nav class="cd-primary-nav" id="primary-nav">
    <ul>
        <li class="cd-label">Navigation</li>
        <li><a href="../Acceuil.php">Acceuil</a></li>
        <li><a href="../Espace_client.php">Espace Etudiant</a></li>
        <li><a href="../Espace_societe_login.php">Espace Societe</a></li>
        <li><a href="../Espace_Admin_Login.php">Espace Administrateur</a></li>
    </ul>
</nav> <!-- .cd-primary-nav -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>