<?php include("header.php"); wp_funcoes(); ?>
    <title><?php echo $core_nome; ?></title>
  </head>
  <body>
    <div id="header">
        <?php include("topo.php"); ?>
        <div id="banner">
            <div id="slider-area">
                <div id="slider">
                    <img src="<?php servidor(); ?>images/slider/1.png" height="456" width="1980" alt="">
                    <img src="<?php servidor(); ?>images/slider/2.png" height="456" width="1980" alt="">
                </div>
            </div>
            <div id="mini-menu" class="centraliza">
                <a href="<?php servidor(); ?>obras-andamento/" title=""><img src="<?php servidor(); ?>images/oband_off.png" height="25" width="211" alt="" class="botao"></a> |
                <a href="http://www.nahumresidence.com.br/" title="" target="_blank"><img src="<?php servidor(); ?>images/nahum_off.png" height="25" width="207" alt="" class="botao"></a>
            </div>
            <div class="separator"></div>
        </div>
    </div>
    <div id="content">
        <div id="home">
            <div id="nahum">
                <div class="centraliza">
                    <img src="<?php servidor(); ?>images/lanc.png" height="366" width="453" alt="" id="lanc">
                    <div id="meio">
                        <a href="http://www.nahumresidence.com.br/" title=""><img src="<?php servidor(); ?>images/nh-txt.png" height="121" width="602" alt="" target="_blank"></a> <br>
                        <div id="carrosel">
                            <a href="" id="prev">◄</a>
                            <div id="gal-area">
                                <div id="gal">
                                    <a href="<?php servidor(); ?>images/nh-gal/1.jpg" title="" >
                                        <img src="<?php servidor(); ?>images/nh-gal/1.jpg" alt="">
                                    </a>
                                    <a href="<?php servidor(); ?>images/nh-gal/2.jpg" title="" >
                                        <img src="<?php servidor(); ?>images/nh-gal/2.jpg" alt="">
                                    </a>
                                    <a href="<?php servidor(); ?>images/nh-gal/3.jpg" title="" >
                                        <img src="<?php servidor(); ?>images/nh-gal/3.jpg" alt="">
                                    </a>
                                    <a href="<?php servidor(); ?>images/nh-gal/4.jpg" title="" >
                                        <img src="<?php servidor(); ?>images/nh-gal/4.jpg" alt="">
                                    </a>
                                    <a href="<?php servidor(); ?>images/nh-gal/5.jpg" title="" >
                                        <img src="<?php servidor(); ?>images/nh-gal/5.jpg" alt="">
                                    </a>
                                    <a href="<?php servidor(); ?>images/nh-gal/6.jpg" title="" >
                                        <img src="<?php servidor(); ?>images/nh-gal/6.jpg" alt="">
                                    </a>
                                    <a href="<?php servidor(); ?>images/nh-gal/7.jpg" title="" >
                                        <img src="<?php servidor(); ?>images/nh-gal/7.jpg" alt="">
                                    </a>
                                    <a href="<?php servidor(); ?>images/nh-gal/8.jpg" title="" >
                                        <img src="<?php servidor(); ?>images/nh-gal/8.jpg" alt="">
                                    </a>
                                    <a href="<?php servidor(); ?>images/nh-gal/9.jpg" title="" >
                                        <img src="<?php servidor(); ?>images/nh-gal/9.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <a href="" id="next">►</a>

                        </div>
                    </div>
                    <img src="<?php servidor(); ?>images/nh-foto.png" height="451" width="225" alt="" id="foto">
                    <div class="centraliza"></div>
                </div>
            </div>
            <div class="centraliza">
                <div class="colunas">
                    <div id="h-not">
                        <img src="<?php servidor(); ?>images/noti-title.jpg" height="22" width="114" alt="" id="not-title">
                        <div class="separator"></div>
                        <?php query_posts( array( 'posts_per_page'=> 3, 'paged' => 1 ) ); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="not">
                            <?php the_post_thumbnail(array(220,164)); ?><br>
                            <p class="title"><?php the_title(); ?></p>
                            <p class="resumo"><?php $excerpt = get_the_excerpt( $deprecated ); echo $excerpt; ?></p>
                            <a href="<?php the_permalink(); ?>"><img src="<?php servidor(); ?>images/leia-mais_off.jpg" height="30" width="79" alt="" class="botao"></a>
                        </div>
                        <?php endwhile?>
                        <?php endif; ?>

                        <div class="separator"></div>
                    </div>
                    <div id="fb"></div>
                </div>
                <div class="colunas">
                    <div id="h-contato">
                        <img src="images/contato.png" height="87" width="303" alt=""><br><br>
                        <label for="nome"><img src="<?php servidor(); ?>images/nome.png" height="11" width="39" alt=""></label><br>
                        <input type="text" name="" id="nome"><br>   
                        <label for="email"><img src="<?php servidor(); ?>images/email.png" height="11" width="40" alt=""></label><br>
                        <input type="text" name="" id="email"><br>
                        <label for="msg"><img src="<?php servidor(); ?>images/msg.png" height="14" width="70" alt=""></label><br>
                        <textarea name="" id="msg" cols="30" rows="10"></textarea>
                        <br>
                        <center><a href=""><img src="images/enviar-bt.jpg" height="30" width="79" alt="" id="cont_bt"></a></center><br>
                        <img src="<?php servidor(); ?>images/cont-icon.jpg" height="171" width="270" alt="">
                    </div>
                </div>
                <div class="separator"></div>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>

  </body>
</html>

