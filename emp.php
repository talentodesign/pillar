<?php include("header.php") ?>
    <title><?php echo $core_nome; ?> - Empreendimentos</title>
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
                <img src="<?php servidor(); ?>images/emp/title.png" height="21" width="309" alt="" id="title">
                <div class="separator"></div>
                <div id="andindex">
                    <a href="<?php servidor(); ?>obras-andamento/"><img src="<?php servidor(); ?>images/emp/and-on.jpg" height="699" width="229" alt="" class="fade"></a>
                </div>
                <div id="concindex">
                    <a href="<?php servidor(); ?>obras-concluidas/"><img src="<?php servidor(); ?>images/emp/conc-on.jpg" height="697" width="229" alt="" class="fade"></a>
                </div>
                <div class="separator"></div>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>

  </body>
</html>