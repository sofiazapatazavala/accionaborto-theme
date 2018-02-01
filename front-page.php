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

          <?php /* El texto de "quienes somos" ahora es editable, los estilos se dejan intactos por ahora */ ?>
          <?php
            $my_query = new WP_Query( 'page_id=301' );
            while ( $my_query->have_posts() ) : $my_query->the_post();
            $do_not_duplicate[] = $post->ID;
          ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php the_content(); ?>
              <?php edit_post_link( __( 'Editar', 'accionaborto' ), '<span>', '</span>' ); ?>
          </article>
          <?php endwhile; ?>
        </div>
    </section>
    <section id="argumentos" style="background-image: url(<?php bloginfo('template_url')?>/img/megafono.png); background-position: -2% 102%; background-repeat: no-repeat;">
      <?php /* Usaremos grilla de Bootstrap para ordenar esta sección */ ?>
      <div class="container">
        <div class="row">
          <div class="col">
            <h2 class="textogris underbarred"><span class="textorojo">Argumentos</span> para el Debate</h2>
            <p class="descripcion">Entrevistas y Columnas de Opinión para <span class="bold">informarse y difundir</span></p>
          </div>
        </div>
        <div class="row">
          <?php /* Cambiamos el uso de query_posts() por WP_Query(), en línea con el tratamiento actual de múltiples loops. */ ?>
          <?php
            $my_query = new WP_Query( 'category_name=argumentos&posts_per_page=3' );
            while ( $my_query->have_posts() ) : $my_query->the_post();
            $do_not_duplicate[] = $post->ID;
          ?>
          <div class="col-md-4">
            <?php /* <div><img src="<?php bloginfo('template_url')?>/img/megafono.png" /></div> */ ?>
              <article class="articulo sombraroja">
                <?php if ( has_post_thumbnail() ) { ?>
                  <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                  <div class="cabecera" style="background-image: url('<?php echo $thumb['0'];?>')">
                  </div>
                <?php } ?>
                <div class="contenido">
                    <h5><?php the_time('j') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?></h5>
                    <h4><?php the_title();?></h4>
                    <?php the_excerpt(); ?>
                    <a class="leermas" href="<?php the_permalink();?>">Leer más</a>
                </div>
              </article>
          </div>
          <?php endwhile; ?>
        </div>
        <div class="row">
          <div class="col">
            <a class="boton" href="http://www.accionaborto.cl/argumentos/">Ver más Argumentos</a>
          </div>
        </div>
      </div>
      <!-- Parte antigua -->
        <div class="contenedor">
            <h2 class="textogris underbarred"><span class="textorojo">Argumentos</span> para el Debate</h2>
            <p class="descripcion">Entrevistas y Columnas de Opinión para <span class="bold">informarse y difundir</span></p>
            <div class="responsive space-between">
              <?php /* <div><img src="<?php bloginfo('template_url')?>/img/megafono.png" /></div> */ ?>

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
