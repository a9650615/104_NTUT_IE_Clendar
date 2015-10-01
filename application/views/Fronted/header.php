<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <title><?=$title?></title>
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>source/css/main.css"></link>
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>source/css/bootstrap.css"></link>
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>source/css/bootstrap-theme.min.css"></link>
        <script src="<?=base_url()?>source/js/jquery-1.11.3.min.js"></script>
        <script src="<?=base_url()?>source/js/bootstrap.min.js"></script>
    </head>
<body>
   <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="<?=base_url().$index?>"><?=$title?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden active">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <?
                        if($links)
                        foreach($links as $lin){
                            ?>
                                <li>
                                    <a class="page-scroll" href="<?=$lin[0]?>"><?=$lin[1]?></a>
                                </li>
                            <?
                        }
                    ?>
                    <li class="">
                        <a class="page-scroll" href="#about">關於</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
   <div class="padd-top"></div>