<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>L'accordeur</title>
        
        <link rel="stylesheet"  href="<?php echo base_url()?>assets/css/stylecss.css" />
        
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-theme.min.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        

    </head>
    
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(). index_page()?>/site_controller/">L'ACCORDEUR TEST</a>
                </div>
                <div class="collapse navbar-collapse right" id="main-nav">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url(). index_page()?>/site_controller/">Accueil</a></li>
                        <li><a href="<?php echo base_url(). index_page()?>/site_controller/testbdd/">Test connexion bdd</a></li>
                    </ul>
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('site_controller/authentification'); ?>
                        
                        <label for="pseudo">Pseudo</label>
                        <input type="text" id="pseudo" name="pseudo" style="color: black">

                        <label for="mdp">Mot de passe</label>
                        <input type="password" id="mdp" name="mdp" style="color: black">

                        <input type="submit" name="submit" value="Connexion" style="color: black">
                        
                    <?php echo form_close(); ?>
                </div>
            </div>
        </nav>
      
        <div class="row">
            <?php echo form_open('site_controller/testform'); ?>
            <label for="pseudo">Pseudo :</label>
                <input type="text" id="pseudo" name="pseudo" style="color: black">

                <input type="submit" name="submit" value="Essayer" style="color: black">
            <?php echo form_close(); ?>
        </div>