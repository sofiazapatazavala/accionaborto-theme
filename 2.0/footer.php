<footer>
        <div class="contenedor responsive space-between">
            <div class="responsivefooter">
                <div id="logofooter"></div>
            <?php wp_nav_menu(
    array(
        'container' => false,
        'items_wrap' => '<ul class="left">%3$s</ul>',
        'theme_location' => 'menufooter'
        )); ?>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <?php wp_footer(); ?>

</body>

</html>
