<footer>
  <div class="contenedor responsive space-between">
    <div class="responsivefooter">
        <div id="logofooter"></div>
          <?php wp_nav_menu(
            array(
              'container' => false,
              'items_wrap' => '<ul class="left">%3$s</ul>',
              'theme_location' => 'menufooter'
            ));
          ?>
    </div>

    <ul class="right">
        <li><span>Contáctanos en:</span></li>
        <li><a style="background-image:url('<?php bloginfo('template_url')?>/img/email.png');>" href="mailto:contacto@accionaborto.cl">contacto@accionaborto.cl</a></li>
        <li><a  style="background-image:url('<?php bloginfo('template_url')?>/img/facebook-box.png');>" href="https://www.facebook.com/Mesa-Acci%C3%B3n-por-el-Aborto-en-Chile-219747685183613/">ir al facebook</a></li>
        <li><a  style="background-image:url('<?php bloginfo('template_url')?>/img/twitter-box.png');>" href="https://twitter.com/Mesaaborto_Cl">ir al twitter</a></li>

    </ul>
  </div>
</footer>

<script type="text/javascript">
  $(document).ready(function(){
    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
          'scrollTop': $target.offset().top
        }, 600, 'swing');
    });
  });
</script>

<?php wp_footer(); ?>

</body>
</html>
