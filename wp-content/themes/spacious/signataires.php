<?php
/*
     Template Name: signataires
*/     
?>  
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/ico/favicon.ico">
        <link href="<?php echo get_template_directory_uri(); ?>/css/sticky-footer-navbar.css" rel="stylesheet">
        <title>Écob</title>
        
        <!-- Bootstrap core CSS -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
        <style id="holderjs-style" type="text/css"></style><style type="text/css"></style></head>
    <!-- NAVBAR=========================================== -->
    <body style="">
        <header class="container-fluid" style="padding:0;">
            <div class="row-fluid">
                <div class="span12">
                    <div class="full-width hero-image" >
                        <div class="bghelp" style="display: none;"> 
                            <img src="<?php echo get_template_directory_uri(); ?>/img/bandeau_small.png" style="background: transparent;">
                        </div>
                        <img data-src="<?php echo get_template_directory_uri(); ?>/img/bandeau_small.png" class="full-width loading" src="<?php echo get_template_directory_uri(); ?>/img/bandeau_small.png" style="display: inline;width:100%"> 
                    </div>
                </div>
            </div>
            
        </header>
        <?php
include('header.php');
        ?>
        
        
        <!-- Marketing messaging and featurettes
================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
        
        <div class="container marketing">
            
            
            <!-- START THE FEATURETTES -->
            
            <div class="starter-template" style="text-align:center;">
                <h1>Signataires</h1>
                <p class="lead">Vous pouvez télécharger le document comprenant tous les signataire en cliquant sur le lien dans la bare de navigation.</p>
            </div>
            <div class="row">
                <div class="col-lg-3">
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-6">
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Recherche</button>
                        </span>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            
            
            <hr class="featurette-divider">
            <div class="row featurette" >
                <div class="col-md-9">
                    <?php
//Espace
$post=get_post(70);
$contenu=$post->post_content;
echo $contenu;
                    ?>
                </div>
                <?php
//Espace
$post=get_post(75);
$contenu=$post->post_content;
echo $contenu;
                ?>
                
                <hr class="featurette-divider">
                <?php
//Biosmose
$post=get_post(78);
$contenu=$post->post_content;
echo $contenu;
                ?>
                <hr class="featurette-divider">
                <?php
//ECE
$post=get_post(83);
$contenu=$post->post_content;
echo $contenu;
                ?>
                <hr class="featurette-divider">
                <?php
//Hoibian
$post=get_post(85);
$contenu=$post->post_content;
echo $contenu;
                ?>
                <hr class="featurette-divider">
                <?php
//BATITHERM
$post=get_post(87);
$contenu=$post->post_content;
echo $contenu;
                ?>
                <hr class="featurette-divider">
                <?php
//Batinov'air
$post=get_post(89);
$contenu=$post->post_content;
echo $contenu;
                ?>
                <hr class="featurette-divider">
                <?php
//DE QUELEN
$post=get_post(91);
$contenu=$post->post_content;
echo $contenu;
                ?>
                <hr class="featurette-divider">
                <?php
//COB BOIS
$post=get_post(93);
$contenu=$post->post_content;
echo $contenu;
                ?>
                <hr class="featurette-divider">
                <?php
//HD Agencement
$post=get_post(95);
$contenu=$post->post_content;
echo $contenu;
                ?>
                <hr class="featurette-divider">
                <?php
//ART ELEC
$post=get_post(97);
$contenu=$post->post_content;
echo $contenu;
                ?>
                <hr class="featurette-divider">
                <?php
//ARESLA
$post=get_post(99);
$contenu=$post->post_content;
echo $contenu;
                ?>
                <hr class="featurette-divider">
                <?php
//Klein
$post=get_post(101);
$contenu=$post->post_content;
echo $contenu;
                ?>
                <hr class="featurette-divider">
                <?php
//Argoat Turbo Dif
$post=get_post(104);
$contenu=$post->post_content;
echo $contenu;
                ?>   
                <hr class="featurette-divider">
                <?php
//Biodevra
$post=get_post(106);
$contenu=$post->post_content;
echo $contenu;
                ?>
                <hr class="featurette-divider">
                <?php
//Maic
$post=get_post(108);
$contenu=$post->post_content;
echo $contenu;
                ?>
                <hr class="featurette-divider">
                <?php
//Terraterre
$post=get_post(110);
$contenu=$post->post_content;
echo $contenu;
                ?>
                <hr class="featurette-divider">
                <?php
//BIOMAAC
$post=get_post(112);
$contenu=$post->post_content;
echo $contenu;
                ?>
                <hr class="featurette-divider">
                <?php
//LE CORVELLEC
$post=get_post(114);
$contenu=$post->post_content;
echo $contenu;
                ?>
                <hr class="featurette-divider">
                <?php
//DEUX MAINS DES MURS
$post=get_post(116);
$contenu=$post->post_content;
echo $contenu;
                ?>
                <hr class="featurette-divider">
                <?php
//ALAIN GLOU
$post=get_post(118);
$contenu=$post->post_content;
echo $contenu;
                ?>
                <hr class="featurette-divider">
                <?php
//STEPHANE BALCH
$post=get_post(120);
$contenu=$post->post_content;
echo $contenu;
                ?>
                
                <!-- /END THE FEATURETTES -->
                
            </div><!-- /.container -->
            <p><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></p>
            
            <!-- FOOTER -->
            <div id="footer" class="navbar navbar-fixed-bottom" role="navigation">
                <div class="container">
                    <p class="pull-right text-muted"><a href="#">Retour en haut de page</a></p>
                    <p class="text-muted">© 2014 Écob, Éco-construction Concertation Ouverture Bien-être.</p>
                </div>
            </div>
            
            
            
            
            <!-- Bootstrap core JavaScript
================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/js/docs.min.js"></script>
            <script type="text/javascript" src="http://www.littleco.com/wp-content/themes/littlecompany/js/jquery.transit.min.js?ver=20130926"></script>
            
            
        </body></html>