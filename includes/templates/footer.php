
    <footer class="site-footer">
        <div class="contenedor clearfix">
            <div class="footer-informacion">
                <h3>Sobre <span>gdlwebcamp</span></h3>
                <p>Mauris et libero a tellus imperdiet euismod. Pellentesque sit amet ipsum in leo euismod lacinia nec sit amet dolor. Suspendisse ornare efficitur posuere. Sed vitae quam non orci volutpat auctor finibus tristique metus.</p>
            </div>

            <div class="ultimos-tweets">
                <h3>Últimos <span>tweets</span></h3>
                <a class="twitter-timeline" data-height="300" data-theme="light" href="https://twitter.com/TwitterLatAm?ref_src=twsrc%5Etfw"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>

            <div class="menu">
                <h3>Redes <span>sociales</span></h3>
                <nav class="redes-sociales">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </nav>
            </div>
        </div>

        <p class="copyright">
            Todos los derechos reservados GDLWEBCAM 2020.
        </p>
       <!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
  #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
  /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
     We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
 
<div style="display:none;">
      <div id="mc_embed_signup">
      <form action="https://GDLWebCamp.us3.list-manage.com/subscribe/post?u=f3a2a50c82f3e01b760fe4b39&amp;id=a86873f6ea" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
        <h2>Subscribete al newsletter y no te pierda de nada</h2>
      <div class="indicates-required"><span class="asterisk">*</span> es obligatorio</div>
      <div class="mc-field-group">
        <label for="mce-EMAIL">Correo electrónico  <span class="asterisk">*</span>
      </label>
        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
      </div>
        <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f3a2a50c82f3e01b760fe4b39_a86873f6ea" tabindex="-1" value=""></div>
          <div class="clear"><input type="submit" value="Subscribirse" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </div>
      </form>
      </div>
</div>
 
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email'; /*
 * Translated default messages for the $ validation plugin.
 * Locale: ES
 */
$.extend($.validator.messages, {
  required: "Este campo es obligatorio.",
  remote: "Por favor, rellena este campo.",
  email: "Por favor, escribe una dirección de correo válida",
  url: "Por favor, escribe una URL válida.",
  date: "Por favor, escribe una fecha válida.",
  dateISO: "Por favor, escribe una fecha (ISO) válida.",
  number: "Por favor, escribe un número entero válido.",
  digits: "Por favor, escribe sólo dígitos.",
  creditcard: "Por favor, escribe un número de tarjeta válido.",
  equalTo: "Por favor, escribe el mismo valor de nuevo.",
  accept: "Por favor, escribe un valor con una extensión aceptada.",
  maxlength: $.validator.format("Por favor, no escribas más de {0} caracteres."),
  minlength: $.validator.format("Por favor, no escribas menos de {0} caracteres."),
  rangelength: $.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
  range: $.validator.format("Por favor, escribe un valor entre {0} y {1}."),
  max: $.validator.format("Por favor, escribe un valor menor o igual a {0}."),
  min: $.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
});}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
    </footer>


    <script src="js/vendor/modernizr-3.8.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')
    </script>
    <script src="js/plugins.js"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <script src="js/jquery.animateNumber.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/jquery.lettering.js"></script>

    <?php 
        $archivo = basename($_SERVER['PHP_SELF']);
        $pagina = str_replace(".php","", $archivo);
        if($pagina == 'invitados' || $pagina == 'index'){
            echo '<script src="js/jquery.colorbox.js"></script>';
        }else if($pagina == 'conferencia'){
            echo '<script src="js/lightbox.js"></script>';
        }
    
    ?>
    
    <script src="js/main.js"></script>
    <script src="js/cotizador.js"></script>


    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('set', 'transport', 'beacon');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>