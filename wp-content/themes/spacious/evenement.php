<?php
/*
     Template Name: evenement
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


<ul> 
    
    <?php echo do_shortcode( '[cplw category="65" width="500" height="500" effects="none" posts_to_show="10" time="1000" sort_by="date" excerpt_length="10000" thumb_width="150" thumb_height="150" date_format="F j, Y" display="title,excerpt,comment_num,date,thumb,author, photo" order="desc"]' ) ?>
</ul>
        
        
        
        

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