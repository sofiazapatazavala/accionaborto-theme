<?php get_header(); ?>

    <header id="inicio" class="flex-row">
        <div class="amarillo" style="width: 2%"></div>
        <div class="azul" style="width: 2%"></div>
        <div class="morado" style="width: 4%"></div>
            <h1 id="logo">Mesa Accion Aborto Chile </h1>

        <div class="morado" style="width: 4%"></div>
        <div class="azul" style="width: 2%"></div>
        <div class="amarillo" style="width: 2%"></div>
        </header>
    <section id="quienes">
        <div class="contenedor">
            <h2 class="textoblanco underbarred">¿<span class="textoamarillo">Quiénes</span> Somos?</h2>
            <ul class="responsive space-between">

                <li class="flex-column">
                    <img src="<?php bloginfo('template_url')?>/img/mujeres.png" />
                    <h3>Somos Mujeres</h3>
                    <p>La Mesa Acción por el Aborto en Chile se instala en 2015 con el objetivo de generar argumentos para el debate sobre la despenalización del aborto y el derecho a decidir de las mujeres. Este espacio está integrado por organizaciones de mujeres y feministas, organizaciones de derechos humanos, derechos sexuales y reproductivos como <a href="http://www.amnistia.cl">Amnistía Internacional </a>, <a href="http://www.aprofa.cl">APROFA</a>, Académicas de la Universidad de Chile y Universidad Diego Portales , <a href="http://www.humanas.cl">Corporación Humanas </a>, <a href="http://revoluciondemocratica.cl/frente-de-genero/">Frente de Género Revolución Democrática</a>, <a href="https://www.fondoalquimia.org">Fondo Alquimia , <a href="http://www.insmujer.cl">Fundación Instituto de la Mujer </a>, <a href="http://www.oge.cl">Observatorio de Género y Equidad</a>, <a href="http://www.observatoriogenerosalud.cl">Observatorio de Equidad de Género en Salud</a>, <a href="http://autonomascontralaviolencia.blogspot.cl">Coordinadora Autónoma Contra la Violencia</a>, <a href="https://www.facebook.com/IAFeminista/">Frente Feminista de Izquierda Autónoma</a></p>
                </li>
            </ul>
        </div>
    </section>
    <section id="argumentos" style="background-image: url(<?php bloginfo('template_url')?>/img/megafono.png); background-position: -2% 102%; background-repeat: no-repeat;">
        <div class="contenedor">
            <h2 class="textogris underbarred"><span class="textorojo">Argumentos</span> para el Debate</h2>
            <p class="descripcion">Entrevistas y Columnas de Opinión para <span class="bold">informarse y difundir</span></p>
            <div class="responsive space-between">
                <!-- <div><img src="<?php bloginfo('template_url')?>/img/megafono.png" /></div> -->

                <?php query_posts('category_name=argumentos&posts_per_page=2'); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="articulo sombraroja">
                  <?php if ( has_post_thumbnail() ) { ?>
                    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                    <div class="cabecera" style="background-image: url('<?php echo $thumb['0'];?>')">
                    </div>
                  <?php } ?>
                  <div class="contenido">
                      <h4><?php the_title();?></h4>
                      <?php the_excerpt('30');?><p><br>Publicado el <?php the_time('j') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?></p>
                      <a class="leermas" href="<?php the_permalink();?>">Leer más</a>
                  </div>
                </article>

                <?php endwhile; else: ?>
                <h3>No se encontraron Articulos</h3>
                 <?php endif; ?>
<?php wp_reset_query(); ?>

            </div>
            <a class="boton" href="http://www.accionaborto.cl/argumentos/">Ver más Argumentos</a>
        </div>
    </section>
    <section id="herramientas">
        <div class="contenedor">
            <h2 class="textoblanco underbarwhite"><span class="textoamarillo">Herramientas</span> para la Acción</h2>
            <p class="descripcion">Gráficas, GIFs, Infografías, Videos y Programas de Radio para <span class="bold">compartir</span></p>
            <a class="boton" href="http://www.accionaborto.cl/herramientas/">Ir a Herramientas</a>
            <a class="boton facebook" href="https://www.facebook.com/Mesa-Acci%C3%B3n-por-el-Aborto-en-Chile-219747685183613/">Ir a Facebook</a>
        </div>
    </section>
    <section id="prensa">
        <div class="contenedor">
            <h2 class="textoblanco underbarred">Apariciones en <span class="textoamarillo">Prensa</span></h2>
            <p class="descripcion">Noticias en Televisión, Radio, Medios Impresos y Digitales para <span class="bold">difundir</span></p>
            <a class="boton" href="http://www.accionaborto.cl/prensa/">Ver links de prensa</a>
        </div>
    </section>
<?php get_footer(); ?>
