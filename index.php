<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Projeto 03</title>
        <meta charset="utf-8">
        <meta name="author" content="Jenifer Senna"/>
        <meta name="description" content="projeto pratico 2"/>
        <meta name="keywords" content="palavras,separadas,por,virgula"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <header>
            <div class="container">
                
                <div class="logo"></div>

                <nav class="desktop-menu">
                    <ul>
                        <li><a href="">home</a></li>
                        <li><a href="">serviços</a></li>
                        <li><a href="">sobre</a></li>
                        <li><a href="">contato</a></li>
                    </ul>
                </nav>
                <nav class="mobile-menu">
                    <ul>
                        <li><a href="">home</a></li>
                        <li><a href="">serviços</a></li>
                        <li><a href="">sobre</a></li>
                        <li><a href="">contato</a></li>
                    </ul>
                </nav>
                
                <div class="clear"></div>

                <div class="chamada1">
                    <h2>Sistemas próprios<br> para empresas autênticas</h2>
                    <p>Praesent pellentesque dapibus mi id viverra. Proin maximus porta 
                        felis eu rhoncus. Nunc tristique sapien vitae feugiat egestas. Mauris orci 
                        felis, rhoncus a dui ac, pharetra cursus nisi</p>
                </div><!-- chamada1 -->
            </div><!-- container -->
        </header>

        <section class="section1">
            <div class="container">
                <div class="txt-section1">
                    <h2>Desenvolvemos Sistemos Únicos</h2>
                    <p>Loren Ipsum silor domor amet</p>
                    <ul>
                        <li>Sites</li>
                        <li>Lojas Virtuais</li>
                        <li>Sistemas</li>
                    </ul>
                    <div class="clear"></div>
                    <div class="btn-section1">
                        Entre em contato
                    </div><!-- botton-section1 -->
                </div><!-- txt-section1 -->
                <div class="device-section1"></div><!-- device-section1 -->
                <div class="clear"></div>
            </div><!-- container -->
        </section><!-- section1 -->
        <section class="section2">
            <div class="container">
                <h2>Desenvolvido por pessoas e para pessoas</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing 
                    elit. Proin sagittis, risus ut tempus condimentum, 
                    urna est volutpat augue, a placerat ligula magna 
                    tincidunt sapien. Ut tempus pulvinar ante, at 
                    euismod orci commodo suscipit. Nunc ut viverra 
                    dui. Ut efficitur cursus diam a volutpat. Sed 
                    sagittis pharetra dolor, ac mollis sapien 
                    condimentum vitae. Ut in interdum tortor.</p>
                    <img src="img/mockup.jpg"/>
                    <!-- <div class="clear"></div> -->
            </div><!-- container -->
        </section><!-- section2 --> 
          
        <section class="section3">
            
        <div class="part1">
            <div class="wraper-part1">
                <h2>Nosso time</h2>
                <p>Lorem ipsum dolor sit amet, consectetur 
                    adipiscing elit. Proin sagittis, risus 
                    ut tempus condimentum, urna est volutpat 
                    augue, a placerat ligula magna tincidunt 
                    sapien. Ut tempus pulvinar ante, at euismod 
                    orci commodo suscipit.</p>
            </div><!-- wraper-part1 -->
            </div><!-- part1 -->
            
        <div class="part2">
            <div class="sobre-autor">
                <div class="titulo-autor">
                    <div class="wraper-titulo-autor">
                        <h2>Jenifer Senna</h2>
                        <p>Co-funder / Desenvolvedor</p>
                    </div><!-- wraper-titulo-autor -->
                    <div class="img-autor"></div>
                </div><!-- tutilo-autor -->
                <div class="texto-autor">
                    <p>Proin sagittis, risus ut tempus condimentum, urna 
                        est volutpat augue, a placerat ligula magna 
                        tincidunt sapien. Ut tempus pulvinar ante, 
                        at euismod orci.</p>
                </div><!-- texto-autor -->
            </div><!-- sobre-autor -->
            
            <div class="slider-bullets">
                <span style="background-color: rgb(170,170,170);"></span>
                <span></span>
                <span></span>
            </div><!-- slider-bullets -->    
        </div><!-- part2 -->
        <div class="clear"></div>
        </section><!-- section3 -->
        
        <section class="section4">
            <div class="container">
                <div class="form">
                    <h2>Entre em contato</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing 
                        elit. Suspendisse ultricies, sapien nec scelerisque 
                        mattis, ante tortor suscipit ipsum</p>

                    <form>
                        <input type="text" name="nome" placeholder="Nome">
                        <input type="text" name="email" placeholder="E-mail">
                        <textarea nome="mensagem" placeholder="Menagem"></textarea>
                        <div class="clear"></div>
                        <div><input type="submit" value="Enviar"></div>
                    </form>
                </div><!-- form -->

                <div class="map-wraper">
                    <h2>Faça uma visita</h2>
                    <div class="map-wraper3">
                    <div class="map-wraper2">
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCx8sh_HlLuleKqI2-ujHXj3P4jZfhnSUQ'></script><div class="map" id='gmap_canvas'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style> <a href='http://maps-generator.com/pt'>maps-generator.com</a><script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(-27.586811,-48.54557299999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-27.586811,-48.54557299999999)});infowindow = new google.maps.InfoWindow({content:'<p style="color:black;text-align:left;font-weight:bold;">Meu Mapa</p><p style="color:black;text-align:left;">Rua Rafael Bandeira Florianópolis</p><br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                    </div><!-- map-wraper2 -->
                    </div><!-- map-wraper3 -->
                </div><!-- map-wraper -->

                <div class="clear"></div>
            </div><!-- container -->
        </section><!-- section4 -->

        <footer>
            <div class="container">
                <p>Todos os direitos reservados</p>
                <p>contato@contato.com</p>

                <div class="clear"></div>
            </div>
        </footer>
    </body>
</html>