<?php include("header.php") ?>
    <title><?php echo $core_nome; ?> - Fale Conosco</title>
  </head>
  <body>
    <div id="header">
        <?php include("topo.php"); ?>
        <div class="separator"></div> 
        </div>
    </div>
    <div id="content">
        <div id="falecon"> 
            <div class="centraliza">
                <img src="<?php servidor(); ?>images/falecon/title.png" height="21" width="255" alt="" id="title"><br>
                <img src="<?php servidor(); ?>images/falecon/txt.png" height="42" width="404" alt="" id="texto">
                <div class="separator"></div>
                <img src="<?php servidor(); ?>images/falecon/icon.jpg" height="688" width="565" alt="" id="icon">
                <div id="form">
                    <label for=""><img src="<?php servidor(); ?>images/falecon/nome.jpg" height="14" width="52" alt=""></label>
                    <br>
                    <input type="text" name="" id="nome">
                    <br>
                    <label for=""><img src="<?php servidor(); ?>images/falecon/tel.jpg" height="14" width="74" alt=""></label>
                    <br>
                    <input type="text" name="" id="tel">
                    <br>
                    <label for=""><img src="<?php servidor(); ?>images/falecon/email.jpg" height="14" width="54" alt=""></label>
                    <br>
                    <input type="text" name="" id="emaiil">
                    <br>
                    <img src="<?php servidor(); ?>images/falecon/msg.jpg" height="18" width="96" alt=""><br>
                    <textarea name="" id="msg" cols="30" rows="10"></textarea><br>
                    <center><a href=""><img src="<?php servidor(); ?>images/enviar-bt.jpg" height="30" width="79" alt="" id="cont_bt2"></a></center>
                </div>
                <div class="separator"></div>

            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>

  </body>
</html>