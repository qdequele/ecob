<div class="navbar-wrapper">
    <div class="container">
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>
            <div class="container">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li <?php if(get_query_var('pagename') == "") echo 'class="active"' ?>><a href="/"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/menu/home.png" style="height:23px;width:23px;margin-top:-10px; margin-right:10px;">Accueil</a></li>
                        <li <?php if(get_query_var('pagename') == "charte") echo 'class="active"' ?>><a href="/charte"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/menu/charte.png" style="height:23px;width:23px;margin-top:-10px; margin-right:10px;">Charte</a></li>
                        <li <?php if(get_query_var('pagename') == "signataires") echo 'class="active"' ?>><a href="/signataires"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/menu/signataires.png" style="height:23px;width:23px;margin-top:-10px; margin-right:10px;">Signataires</a></li>
                        <li <?php if(get_query_var('pagename') == "photo") echo 'class="active"' ?>><a href="/photo"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/menu/photo.png" style="height:23px;width:23px;margin-top:-10px; margin-right:10px;">Galerie photo</a></li>
                        <li <?php if(get_query_var('pagename') == "evenement") echo 'class="active"' ?>><a href="/evenement"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/menu/calendrier.png" style="height:23px;width:23px;margin-top:-10px; margin-right:10px;">Événements</b></a></li >
                <li <?php if(get_query_var('pagename') == "contact") echo 'class="active"' ?>><a href="/contact"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/menu/contact.png" style="height:23px;width:23px;margin-top:-10px; margin-right:10px;">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
</div>