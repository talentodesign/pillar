<?php include("header.php") ?>
    <title><?php echo $core_nome; ?> - Obras Concluídas</title>
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
                <img src="<?php servidor(); ?>images/emp/conc-title.jpg" height="29" width="326" id="title">
                <div id="obs">
                    <div class="obraid">
                        <a href="<?php servidor(); ?>obra-c/">
                            <img src="<?php servidor(); ?>images/emp/madison-index2.jpg" alt="" class="fade2">
                            <div class="desc">MADISON RESIDENCE</div>
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