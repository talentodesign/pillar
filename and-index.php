<?php include("header.php") ?>
    <title><?php echo $core_nome; ?> - Obras em Andamento</title>
  </head>
  <body>
    <div id="header">
        <?php include("topo.php"); ?>
        <div class="separator"></div> 
        </div>
    </div>
    <div id="content">
        <div id="emp"> 
            <div class="centraliza"> 
                <img src="<?php servidor(); ?>images/emp/and-title.jpg" height="22" width="408" alt="" id="title"><br>
                <div id="obs">
                    <div class="obraid">
                        <a href="<?php servidor(); ?>obra-a/">
                            <img src="<?php servidor(); ?>images/emp/nahum-index.jpg" alt="" class="fade2">
                            <div class="desc">NAHUM RESIDENCE</div>
                        </a>
                    </div>
                </div>

                <div class="separator"></div>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>

  </body>
</html>