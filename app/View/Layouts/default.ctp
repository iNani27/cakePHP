<?php
/* iNani theme */
?>
<!DOCTYPE html>
<!--
20160204 @iNani Web Dev
-->
<html>
    <head>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="http://localhost/portfolio/app/vue/img/favicon.ico" />
        <title>Isabelle Nani</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- HTML5 shim et Respond.js pour le support des Ã©lÃ©ments HTML5 et des media queries dans IE8 -->
        <!-- ATTENTION: Respond.js ne fonctionne pas si on lit la page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!--<link rel="stylesheet" href="http://localhost/portfolio/app/vue/css/styles.css">
        <link rel="stylesheet" href="http://localhost/cakePHP/app/webroot/theme.css">
        -->
        <style>
            body{}
            #content{background-color:lightgreen;maring:0 2.3em;padding:2em;}
            footer{padding:1em;}
            footer, footer a, footer a:visited{background-color:black;color:white;text-align:center;}
            footer a:hover{color:lightblue;}
            footer p{margin-top:.9em;font-size: 1.5em;}
        </style>

    </head>
    <body>
        <div id="container">
            <div class="row">
                <!-- menu -->
                <div class="col-xs-12">
                    <nav class="navbar navbar-inverse navbar-fixed-top">
                        <!-- menu navbar -->
                        <div class="navbar-header">
                            <button type ="button" class ="navbar-toggle" data-toggle ="collapse" data-target =".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Web Dev</a>  <!-- IntitulÃ© lorsque le menu est rÃ©tractÃ©, sert de titre -->
                        </div>
                        <!-- menu collapse -->
                        <div class="collapse navbar-collapse">
                            <ul class ="nav navbar-nav">
                                <li class=""><a href="#section1">Qui</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle ="dropdown" href="#">Quoi <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Objet | But</a></li>
                                        <li><a href="#">CV | ExpÃ©riences</a></li>
                                        <li class="active"><a href="#section23">RÃ©alisations</a>
                                        <li class="active"><a href="#section24">FonctionalitÃ©s</a></li>
                                        <li class="active"><a href="#section25">Langages de programmation</a></li>
                                    </ul>  
                                </li>
                                <li><a href="#section3">Comment</a></li>
                                <li><a href="#section4">Où</a></li>
                            </ul>
                            <!-- menu log -->
                            <ul class="nav navbar-nav navbar-right">
                                <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Sign Up</a></li>-->
                                <li><a href="?connect"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Se connecter</a></li>
                            </ul>
                        </div>  
                    </nav>
                </div>

                <div id="content" class="col-lg-12">
                    <header>
                        <h1 class="text-right"><span class="text-uppercase">Web Dev</span><br /><span class="small">Productions </span>&copy;Isabelle Nani</h1>
                    </header>
                    <p>Some content ...</p>

                </div>
            </div>
            <div class="row">
                <footer class="col-sm-12">
                    <p>&copy;&nbsp;<a href="https://in.linkedin.com/in/isabelle-nani-b5aa7746" title="Isabelle NANI - LinkedIn professional profile" target="_blank">iNani</a></p>
                </footer>
            </div>
        </div>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
