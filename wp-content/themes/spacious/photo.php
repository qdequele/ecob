<?php
/*
     Template Name: photo
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
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-image-gallery.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/blueimp-gallery.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/blueimp-gallery-indicator.css">
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

<div class="starter-template" style="text-align:center;">
    <h1>Galerie photo</h1>
    <p class="lead">N'hésitez pas à cliquer dessus pour les visionner en grande taille</p>
</div>

<hr class="featurette-divider">

<div class="starter-template" style="text-align:center;">
    <h1>Chantiers</h1>
    <p class="lead">Vous trouverez les photos des chantiers fait les adhérent à l'Écob.</p>
</div>
<?php echo do_shortcode( '[[gallery columns="9" link="none" ids="172,171,170,169,168,167,166,165,164,163,162,161,160,159,158,157,156,155,154,153,152,151,150,149,148,147,146,145,144,143,142,141,140,139,138,137,136,135,134,133"]' ) ?>
        
        
        
        
        

<div class="col-md-12">
    <hr class="featurette-divider" style="margin-bottom:100px;">
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
<script type="text/javascript" src="http://www.littleco.com/wp-content/themes/littlecompany/js/jquery.transit.min.js?ver=20130926">
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-image-gallery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.blueimp-gallery.js"></script>

</body></html>