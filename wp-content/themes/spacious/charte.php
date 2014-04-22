<?php
/*
     Template Name: charte
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
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/ico/favicon.ico">
        <link href="<?php echo get_template_directory_uri(); ?>/css/sticky-footer-navbar.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/charte.css" rel="stylesheet">
        <title>Écob</title>
        
        <!-- Bootstrap core CSS -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
        <style id="holderjs-style" type="text/css"></style><style type="text/css"></style></head>
    <!-- NAVBAR=========================================== -->
    <body style="">
        
        <?php
include('header.php');
        ?>
        
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
        
        
        <div class="starter-template" style="text-align:center;">
            <h1>CHARTE</h1>
            <p class="lead">La présente charte définit et induit les engagements de ses signataires.</p><br/> 
            <div id="charte">
                <?php
$post=get_post(9);
$contenu=$post->post_content;
echo $contenu;
                ?>
                <img alt="ecob" src="<?php echo get_template_directory_uri(); ?>/img/ecob.jpg" style="width:40%; height:auto;">
                <br/>
                <br/>
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Statut
                </button>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        
        
        
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel" ><h1 class="featurette-heading" style="text-align:center;">STATUS <br/><span class="text-muted" style="text-align:center;">Groupe éco-construction en Pays COB « ECOB »</span></h1></h4>
                    </div>
                    <div class="modal-body">
                        <?php
$post=get_post(7);
$contenu=$post->post_content;
echo $contenu;
                        ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
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