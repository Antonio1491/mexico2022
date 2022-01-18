<footer class="hide-for-small-only footer">
  <div class="row text-center ">
    <div class="column medium-4 hide-for-small-only">
      <!-- <h3 class="titulo_footer">Sobre <span>Congreso Parques</Param></span></h3>
      <p>El Congreso de Parques Urbanos Sudamérica es una experiencia única de aprendizaje que tiene como objetivo reunir y 
        capacitar a profesionales de la industria en un mismo lugar.</p> -->
      <a href="#">
        <img src="./img/wup_logotipo_bc.png" alt="" class="footer__logotipo">
      </a>
    </div>
    <!-- <div class="column medium-4 hide-for-small-only enlaces_relevantes">
      <h3 class="titulo_footer">Enlaces <span>Relevantes</Param></span></h3>  
      <ul>
        <li><a href="https://www.congresoparques.com/guayaquil/assets/doc/carta-molde.docx">Carta Molde</a></li>
        <li><a href="assets/doc/precios_grupales.pdf">Información General</a></li>
        <li><a href="https://www.flipsnack.com/revistaparques/protocolo-covid-19-congreso-parques-sudam-rica.html">Protocolo COVID-19</a></li>
      </ul>
    </div> -->
    
    <div class="column medium-4 footer__titulo"  >
      <hgroup>
        <h3>2021 WORLD PARKS</h3>
        <h2> CONGRESS</h2>
        <!-- <h1>SUDAMÉRICA</h1> -->
        <h4>5-10 December 2021</h4>
        <!-- <h6>Presentado por la Asociación Nacional de Parques y Recreación Argentina.</h6> -->
      </hgroup>
    </div>
    <div class="column medium-4 hide-for-small-only redes">
      <!-- <h3 class="titulo_footer">Datos de <span>Contacto</Param></span></h3> -->
      <div class="redes">
        <a href="https://www.facebook.com/worldurbanparks" target="_blank"><img src="img/i_facebook.png" alt=""></a>
        <a href="https://twitter.com/WUParks" target="_blank"><img src="img/i_twitter.png" alt=""></a>
        <a href="https://www.instagram.com/wurbanparks/" target="_blank"><img src="img/i_instagram.png" alt=""></a>
        <!-- <a href="https://www.youtube.com/channel/UC_ExzrmxP5er7qZHeVpWidQ" target="_blank"><img src="img/i_youtube.png" alt=""></a> -->
      </div>      
      <p class="text-center">
       Tel. +1 780 644 69761 <br> office@worldurbanparks.org
      </p>
    </div>
  </div>
  <div class="row footer_derechos">
    <p>All rights reserved World Parks Congress</p>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-1.11.1.min.js" ></script>
<script src="js/lightbox.js" defer></script>
<!-- jquery cdn -->

<!-- cdn librería slick (slider patrocinadores) -->
<script src="js/vendor/foundation.js"></script>
<script src="js/vendor/jquery.animateNumber.js" defer></script>
<script src="js/js.js" defer></script>
<script src="js/OcultaryVisualizar.js" defer></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js"></script> -->
<script src="js/vendor/what-input.js"></script>
<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" ></script>
<!-- Inicialización de foundation -->
<script>
        ;(function() {
            // Initialize
            var bLazy = new Blazy();
        })();
    </script>
<script type="text/javascript">
$(document).foundation()

// Control de menú sticky
$(function (){
    $(window).scroll(function(){
       if ($(this).scrollTop() > 50) {
        $('#encabezado').addClass("menu_solido");
        // $('#link_home').removeClass("home");                                                                                                                                                                                                                                                                                                                                   
       } else {
        $("#encabezado").removeClass("menu_solido");
        // $('#link_home').addClass("home");
       }
    });

    //asignar botón para regresar a inicio si se encuentra en las demás secciones
    var url=window.location;
    if(url = "https://congresoparques.com/guayaquil/"){
      $('#link_home').removeClass('home'); 
    }
});

const $offcanvas = $('#off-canvas')
$offcanvas.find('li').click(function (ev){
  $offcanvas.foundation('close')
});



//=========  hospedaje  =========
$(function(){
$(".oculto").hide();
$(".MO").click(function(){
      var nodo = $(this).attr("href");

      if ($(nodo).is(":visible")){
           $(nodo).hide();
           return false;
      }else{
    $(".oculto").hide();
    $(nodo).fadeToggle( "slow" );
    return false;
      }
});
});

//=========== Pop Up =============
$(document).ready(function(){
  // $('#open').click(function(){
        $('#popup').fadeIn('slow');
        $('.popup-overlay').fadeIn('slow');
        $('.popup-overlay').height($(window).height());
        return false;
    });

$(document).ready(function(){
    $('#close').click(function(){
        $('#popup').fadeOut('slow');
        $('.popup-overlay').fadeOut('slow');
        return false;
    });
 });
</script>


<script type="text/javascript">
 lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
    
$('.slider').slick({
slidesToShow: 4,
slidesToScroll: 1,
autoplay: true,
autoplaySpeed: 2000,
});

$('.slider_expositores').slick({
slidesToShow: 5,
slidesToScroll: 1,
autoplay: true,
autoplaySpeed: 2000,
});

</script>
<!-- contador -->
<script type="text/javascript">
  function countdown(id){
    var fecha=new Date('<?=$_SESSION['ano']?>','<?=$_SESSION['mes']?>','<?=$_SESSION['dia']?>','<?=$_SESSION['hora']?>','<?=$_SESSION['minuto']?>','<?=$_SESSION['segundo']?>')
    var hoy=new Date()
    var dias=0
    var horas=0
    var minutos=0
    var segundos=0
      if (fecha>hoy){
          var diferencia=(fecha.getTime()-hoy.getTime())/1000
          dias=Math.floor(diferencia/86400)
          diferencia=diferencia-(86400*dias)
          horas=Math.floor(diferencia/3600)
          diferencia=diferencia-(3600*horas)
          minutos=Math.floor(diferencia/60)
          diferencia=diferencia-(60*minutos)
          segundos=Math.floor(diferencia)
          document.getElementById("contador").innerHTML='<span class="faltan">MISSING </span><span class="num_dias">' + dias + ' DAYS </span>'  + horas + ':' + minutos + ':' + segundos
                    if (dias>0 || horas>0 || minutos>0 || segundos>0){
                            setTimeout("countdown(\"" + id + "\")",1000)
                    }
            }
            else{
                    document.getElementById('restante').innerHTML='Quedan ' + dias + ' D&iacute;as, ' + horas + ' Horas, ' + minutos + ' Minutos, ' + segundos + ' Segundos'
            }
        }
</script>


