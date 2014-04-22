<?php
/*
     Template Name: contact
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
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css" type="text/css" />
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
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
        
        
        <form class="formoid-metro-cyan" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:90%;min-width:150px" method="post" action="#">
            <div class="title"><h2>Contactez nous!</h2></div>
            <div class="element-input" title="Nom Prenom">
                <label class="title">Nom<span class="required">*</span></label>
                <input class="large" type="text" name="nom" required="required"/>
            </div>
            <div class="element-email">
                <label class="title">Email<span class="required">*</span></label>
                <input class="large" type="email" name="email" value="" required="required"/>
            </div>
            <div class="element-textarea" title="...">
                <label class="title">Message<span class="required">*</span></label>
                <textarea class="medium" name="message"  cols="20" rows="5" required="required"></textarea>
            </div>
            <div class="submit">
                <input type="submit" value="Submit"/>
            </div>
        </form>
        
        
<?php
    $to      = 'dequelen.quentin@gmail.com';
    $subject = 'Ecob : '.$_POST["nom"];
    $message = $_POST["message"];
    $message = utf8_decode($message);
    $headers = 'From: '.$_POST["email"]."\r\n".
         'Content-Type: text/plain; charset="UTF8_FR"\r\n'. 
         'Reply-To: dequelen.quentin@gmail.com'."\r\n" .
         'X-Mailer: PHP/';

     mail($to, $subject, $message, $headers);
 ?>
        
        
        
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
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/css/contact.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/docs.min.js"></script>
        <script type="text/javascript" src="http://www.littleco.com/wp-content/themes/littlecompany/js/jquery.transit.min.js?ver=20130926"></script>
        
        
    </body></html>