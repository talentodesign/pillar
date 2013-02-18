<?php include("header.php") ?>
    <title><?php echo $core_nome; ?> - Nahum Residence</title>
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
                <div id="top">
                    <img src="<?php servidor(); ?>images/emp/nahum-pf.jpg" alt="" id="pf">
                    <div id="info">
                        <div id="titulo">
                            DENOMINAÇÃO/EMPREENDIMENTO<br>Nahum Residence
                        </div>
                        <div id="txt">
                            <p>
                            REGISTRO INCORPORAÇÃO <br>
                            Livro . Matrícula <br>
                              <br>
                            LOCALIZAÇÃO <br>
                            Av. Dr. Freitas, n°2949 <br>
                            (Av.Al. Barroso/Av.João Paulo II) – Curió Utinga. <br>
                            Belém . Pará <br>
                              <br>
                            DISPOSIÇÃO <br>
                            Bloco Único, com 17 andares, sendo 13 andares de apartamentos (4 unidades, por andar) <br>
                              <br>
                            INFRA ESTRUTURA <br>
                              <br>
                            - Cyber <br>
                            - Relax <br>
                            - Sauna <br>
                            - Fitness <br>
                            - Piscina <br>
                            - Sala Jogos <br>
                            - Playground <br>
                            - Churrasqueira <br>
                            - Grupo Gerador <br>
                            - Salão de Festas <br>
                            - Quadra Esportes <br>
                            - Gás individualizado <br>
                            - Garagem, em três níveis. <br>
                            - Elevadores (social/serviço). <br>
                            - Infra estrutura para Split <br>
                            - Revest. externo em cerâmica, com detalhes em pastilha porcelanizada <br>
                            - Revest. Interno : - porcelanato (salas, quarto..... <br>
                            <?php $i=0;
                             while ( $i<= 20) {?>
                            - Mais <br>
                            <?php $i++;} ?>
                            </p>     
                        </div>   
                    </div>
                    <div id="mapa">
                        <iframe width="517" height="401" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=-1.425157,-48.454943+(Nahum+Residence)&amp;aq=&amp;sll=-1.425157,-48.454943&amp;sspn=0.023725,0.042272&amp;t=h&amp;ie=UTF8&amp;ll=-1.417435,-48.457518&amp;spn=0.034408,0.044289&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
                        <p>
                            Av. Dr. Freitas, n°2949                            
                        </p>
                    </div>
                    <div class="separator"></div>
                </div>
                <div id="bot">
                    <div id="graficos">
                        <span id="tt">Gráfico de obra em andamento</span><br>

                    </div>
                    <div id="galeria-area">
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
                    <div class="separator"></div>
                </div>
            </div>
        </div>
    <?php include("footer.php"); ?>

  </body>
</html>