<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/ico/favicon.ico">
        <link href="<?php echo get_template_directory_uri(); ?>/css/sticky-footer-navbar.css" rel="stylesheet">
        <title>Écob</title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/doc.min.css" rel="stylesheet">
        
        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
        
        <!-- Custom styles for this template -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/carousel.css" rel="stylesheet">
        <style id="holderjs-style" type="text/css"></style><style type="text/css"></style></head>
    <!-- NAVBAR=========================================== -->
    <body style="">
        <?php
include('header.php');
        ?>
        
        <!-- Carousel
================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item">
                    
                    <div class="container">
                        <div class="carousel-caption">
                            <?php
//Carousel 1
$post=get_post(33);
$contenu=$post->post_content;
echo $contenu;
                            ?>
                            
                        </div>
                    </div>
                </div>
                <div class="item active">
                    <div class="container">
                        <div class="carousel-caption">
                            <?php
//Carousel 2
$post=get_post(35);
$contenu=$post->post_content;
echo $contenu;
                            ?>
                            
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="carousel-caption">
                            <?php
//Carousel 3
$post=get_post(37);
$contenu=$post->post_content;
echo $contenu;
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div><!-- /.carousel -->
        
        <div class="starter-template" style="text-align:center;">
            <?php
//Description
$post=get_post(31);
$contenu=$post->post_content;
echo $contenu;
            ?>  
        </div>
        
        <!-- Marketing messaging and featurettes
================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
        
        <div class="container marketing">
            
            
            <!-- START THE FEATURETTES -->
            
            <hr class="featurette-divider">
            
            <div class="row featurette">
                <?php
//Promouvoir l’habitat sain
$post=get_post(13);
$contenu=$post->post_content;
echo $contenu;
                ?>
                <span class=" hidden-sm hidden-xs">
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive" data-src="<?php echo get_template_directory_uri(); ?>/holder.js/500x500/auto" alt="500x500" src="<?php echo get_template_directory_uri(); ?>/img/index/photo1.png">
                    </div>
                </span>
                
            </div>
            
            <div class="row featurette">
                <div class="col-md-5">
                    <img class="featurette-image img-responsive" data-src="<?php echo get_template_directory_uri(); ?>/holder.js/500x500/auto" alt="500x500" src="<?php echo get_template_directory_uri(); ?>/img/index/photo2.png">
                </div>
                <?php
//Défendre les ressources naturelles
$post=get_post(15);
$contenu=$post->post_content;
echo $contenu;
                ?>
            </div>
            
            <div class="row featurette">
                <?php
//Favoriser l’innovation en respectant les traditions
$post=get_post(17);
$contenu=$post->post_content;
echo $contenu;
                ?>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive" data-src="<?php echo get_template_directory_uri(); ?>/holder.js/500x500/auto" alt="500x500" src="<?php echo get_template_directory_uri(); ?>/img/index/photo3.png">
                </div>
            </div>
            
            <div class="row featurette">
                <div class="col-md-5">
                    <img class="featurette-image img-responsive" data-src="<?php echo get_template_directory_uri(); ?>/holder.js/500x500/auto" alt="500x500" src="<?php echo get_template_directory_uri(); ?>/img/index/photo4.png">
                </div>
                <?php
//Participer au développement de l’économie locale
$post=get_post(19);
$contenu=$post->post_content;
echo $contenu;
                ?>
                
                
                <div class="row featurette">
                    <?php
//Faciliter la formation de proximité
$post=get_post(21);
$contenu=$post->post_content;
echo $contenu;
                    ?>
                    
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive" data-src="<?php echo get_template_directory_uri(); ?>/holder.js/500x500/auto" alt="500x500" src="<?php echo get_template_directory_uri(); ?>/img/index/photo5.png">
                    </div>
                </div>
                
                <div class="row featurette">
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive" data-src="<?php echo get_template_directory_uri(); ?>/holder.js/500x500/auto" alt="500x500" src="<?php echo get_template_directory_uri(); ?>/img/index/photo1.png">
                    </div>
                    <?php
//Mettre en avant un fonctionnement favorisant collaboration, transparence et relations humaines
$post=get_post(24);
$contenu=$post->post_content;
echo $contenu;
                    ?>
                    
                </div>
                
                <div class="row featurette">
                    <?php
//Réunir tous les acteurs locaux d’une même filière pour défendre des intérêts communs
$post=get_post(26);
$contenu=$post->post_content;
echo $contenu;
                    ?>
                    
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive" data-src="<?php echo get_template_directory_uri(); ?>/holder.js/500x500/auto" alt="500x500" src="<?php echo get_template_directory_uri(); ?>/img/index/photo2.png">
                    </div>
                </div>
                
                <div class="row featurette">
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive" data-src="<?php echo get_template_directory_uri(); ?>/holder.js/500x500/auto" alt="500x500" src="<?php echo get_template_directory_uri(); ?>/img/index/photo3.png">
                    </div>
                    <?php
//Renforcer l’attrait des petites structures par la compétence globale
$post=get_post(28);
$contenu=$post->post_content;
echo $contenu;
                    ?>
                    
                </div>
                
                
                <hr class="featurette-divider">
                <div lass="col-md-12">
                    <div class="starter-template" style="text-align:center;">
                        <h1>Vous voulez en savoir plus ...</h1>
                        <p class="lead">Les artisans vous l'expliquent dans cette vidéo</p>
                    </div>
                    
                    
                    <iframe width="100%" height="720" style="margin: 0px;paddin:0px;" src="//www.youtube.com/embed/XKR25Nglfu8" frameborder="0" allowfullscreen></iframe>
                </div>
                
                
                
                
                <hr class="featurette-divider">
                
                <div class="starter-template" style="text-align:center;">
                    <h1>Centre Bretagne ?</h1>
                    <p class="lead">Regardez bien, nous ne sommes peut-être pas loin de chez vous !</p>
                </div>
                
                <!-- /END THE FEATURETTES -->
                <div class="col-md-12">
                    <iframe src="https://mapsengine.google.com/map/embed?mid=zTcaEspWZxiU.k9deHi7YyOIc" width="100%" height="600px" style="margin-bottom:100px;"></iframe>
                </div>
                <hr class="featurette-divider">
                
                <!-- Three columns of text below the carousel -->
                <div class="row" style="text-align:center;">
                    <div class="col-lg-3">
                        <img class="img-thumbnail" href="http://www.numericob.com/" data-src="holder.js/140x140" alt="140x140" src="<?php echo get_template_directory_uri(); ?>/img/partenaires/numericob.jpg" style="width: 140px; height: 140px;">
                        <h2>Numéricob</h2>
                        <p><a class="btn btn-primary" href="http://www.numericob.com/" role="button">Site internet</a></p>
                    </div><!-- /.col-lg-4 -->
                    
                    <div class="col-lg-3">
                        <img class="img-thumbnail" href="http://www.centre-ouest-bretagne.org/" data-src="holder.js/140x140" alt="140x140" src="<?php echo get_template_directory_uri(); ?>/img/partenaires/paysCOB.jpg" style="width: 140px; height: 140px;">
                        <h2>Le Pays Cob</h2>
                        <p><a class="btn btn-primary" href="http://www.centre-ouest-bretagne.org/" role="button">Site internet</a></p>
                    </div><!-- /.col-lg-4 -->
                    
                    <div class="col-lg-3">
                        <img class="img-thumbnail" href="http://www.capeb.fr/"  data-src="holder.js/140x140" alt="140x140" src="<?php echo get_template_directory_uri(); ?>/img/partenaires/capeb.jpg" style="width: 200px; height: 140px;">
                        <h2>CAPEB</h2>
                        <p><a class="btn btn-primary" href="http://www.capeb.fr/" role="button">Site internet</a></p>
                    </div><!-- /.col-lg-4 -->
                    
                    <div class="col-lg-3">
                        <img class="img-thumbnail" href="http://www.kreiz-breizh.fr"  data-src="holder.js/140x140" alt="140x140" src="<?php echo get_template_directory_uri(); ?>/img/partenaires/cckb.jpg" style="width: 200px; height: 140px;">
                        <h2>CCKB</h2>
                        <p><a class="btn btn-primary" href="http://www.kreiz-breizh.fr" role="button">Site internet</a></p>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
                <p><br/><br/><br/><br/><br/><br/></p>
                
            </div><!-- /.container -->    
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
            
            
        </body></html>