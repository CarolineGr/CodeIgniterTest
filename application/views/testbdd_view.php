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
                    <a class="navbar-brand" href="<?php echo base_url() . index_page()?>/site_controller/">L'ACCORDEUR TEST</a>
                </div>
                <div class="collapse navbar-collapse right" id="main-nav">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url(). index_page()?>/site_controller/">Accueil</a></li>
                    </ul>
                    <div class="row center-block">
                        <?php foreach($records as $r): ?>
                        <h4 style="color: white" class="text-right">Bonjour <?php echo $r->pseudo ; ?>, <a href="#">Se déconnecter</a></h4>
                        <?php endforeach; ?>
                    </div>
                   
                </div>
                
            </div>
        </nav>
        
        
        <?php foreach($records as $r){
            echo $r->id .'<br>';
            echo $r->nom .'<br>';
            echo $r->prenom .'<br>';
            echo $r->pseudo .'<br>';
        }
        ?>
    