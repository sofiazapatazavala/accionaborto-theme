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
            <h2 class="textogris underbarred">
              <a href="<?php echo get_permalink(6); ?>" class="link-portada"><span class="textorojo">Argumentos</span> para el Debate</a>
            </h2>
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
        <?php
          // Se dejará comentado cada botón.
          /*
          <div class="row">
            <div class="col">
              <a class="boton" href="http://www.accionaborto.cl/argumentos/">Ver más Argumentos</a>
            </div>
          </div>
          */
        ?>
      </div>
    </section>
    <section id="herramientas">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="contenedor">
                <h2 class="textoblanco underbarwhite">
                  <a href="<?php echo get_permalink(15); ?>" class="link-portada"><span class="textoamarillo">Herramientas</span> para la Acción</a>
                </h2>
                <p class="descripcion">Gráficas, GIFs, Infografías, Videos y Programas de Radio para <span class="bold">compartir</span></p>
                <?php /*
                  <a class="boton" href="http://www.accionaborto.cl/herramientas/">Todas las herramientas</a>
                  <a class="boton facebook" href="https://www.facebook.com/Mesa-Acci%C3%B3n-por-el-Aborto-en-Chile-219747685183613/">Ir a Facebook</a>
                */ ?>
                <div style="height: 2rem;"></div>
                <h3 class="textoblanco underbarwhite"><span class="textoamarillo">Más</span> recientes</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <h3 class="textoamarillo underbarwhite">Gráficas</h3>
            <br>
            <?php
              $my_query = new WP_Query( 'category_name=graficas&posts_per_page=2' );
              while ( $my_query->have_posts() ) : $my_query->the_post();
              $do_not_duplicate[] = $post->ID;
            ?>
            <article class="articulo sombranegra">
              <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
              <div class="multimedia" style="background-image: url('<?php echo $thumb['0'];?>')">
              </div>
              <div class="contenido flex-row">
                <h4><?php the_title();?></h4>
                <button class="sharer button box" data-sharer="facebook" data-url='<?php the_field('multimedia'); ?>' style="background-image: url('<?php bloginfo('template_url')?>/img/share.png')">S</button>
                <a class="box" href='<?php the_field('multimedia'); ?>' style="background-image: url('<?php bloginfo('template_url')?>/img/download.png')">L</a>
              </div>
            </article>
            <?php endwhile; ?>
          </div>
          <div class="col">
            <h3 class="textoamarillo underbarwhite">GIFs</h3>
            <br>
            <?php
              $my_query = new WP_Query( 'category_name=gif&posts_per_page=2' );
              while ( $my_query->have_posts() ) : $my_query->the_post();
              $do_not_duplicate[] = $post->ID;
            ?>
            <article class="articulo sombranegra">
              <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
              <div class="multimedia" style="background-image: url('<?php echo $thumb['0'];?>')">
              </div>
              <div class="contenido flex-row">
                <h4><?php the_title();?></h4>
                <button class="sharer button box" data-sharer="facebook" data-url='<?php the_field('multimedia'); ?>' style="background-image: url('<?php bloginfo('template_url')?>/img/share.png')">S</button>
                <a class="box" href='<?php the_field('multimedia'); ?>' style="background-image: url('<?php bloginfo('template_url')?>/img/download.png')">L</a>
              </div>
            </article>
            <?php endwhile; ?>
          </div>
          <div class="col">
            <h3 class="textoamarillo underbarwhite">Infografías</h3>
            <br>
            <?php
              $my_query = new WP_Query( 'category_name=infografias&posts_per_page=2' );
              while ( $my_query->have_posts() ) : $my_query->the_post();
              $do_not_duplicate[] = $post->ID;
            ?>
            <article class="articulo sombranegra">
              <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
              <div class="multimedia" style="background-image: url('<?php echo $thumb['0'];?>')">
              </div>
              <div class="contenido flex-row">
                <h4><?php the_title();?></h4>
                <button class="sharer button box" data-sharer="facebook" data-url='<?php the_field('multimedia'); ?>' style="background-image: url('<?php bloginfo('template_url')?>/img/share.png')">S</button>
                <a class="box" href='<?php the_field('multimedia'); ?>' style="background-image: url('<?php bloginfo('template_url')?>/img/download.png')">L</a>
              </div>
            </article>
            <?php endwhile; ?>
          </div>
          <div class="col">
            <h3 class="textoamarillo underbarwhite">Videos</h3>
            <br>
            <?php
              $my_query = new WP_Query( 'category_name=videos&posts_per_page=2' );
              while ( $my_query->have_posts() ) : $my_query->the_post();
              $do_not_duplicate[] = $post->ID;
            ?>
            <article class="articulo sombranegra">
              <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
              <div class="multimedia" style="background-image: url('<?php echo $thumb['0'];?>')">
              </div>
              <div class="contenido flex-row">
                <h4><?php the_title();?></h4>
                <button class="sharer button box" data-sharer="facebook" data-url='<?php the_field('multimedia'); ?>' style="background-image: url('<?php bloginfo('template_url')?>/img/share.png')">S</button>
                <a class="box" href='<?php the_field('multimedia'); ?>' style="background-image: url('<?php bloginfo('template_url')?>/img/download.png')">L</a>
              </div>
            </article>
            <?php endwhile; ?>
          </div>
          <div class="col">
            <h3 class="textoamarillo underbarwhite">Programas de radio</h3>
            <br>
            <?php
              $my_query = new WP_Query( 'category_name=programas-de-radio&posts_per_page=2' );
              while ( $my_query->have_posts() ) : $my_query->the_post();
              $do_not_duplicate[] = $post->ID;
            ?>
            <article class="articulo sombranegra">
              <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
              <div class="multimedia" style="background-image: url('<?php echo $thumb['0'];?>')">
              </div>
              <div class="contenido flex-row">
                <h4><?php the_title();?></h4>
                <button class="sharer button box" data-sharer="facebook" data-url='<?php the_field('multimedia'); ?>' style="background-image: url('<?php bloginfo('template_url')?>/img/share.png')">S</button>
                <a class="box" href='<?php the_field('multimedia'); ?>' style="background-image: url('<?php bloginfo('template_url')?>/img/download.png')">L</a>
              </div>
            </article>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </section>
    <section id="prensa">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="contenedor">
                <h2 class="textoblanco underbarred">
                  <a href="<?php echo get_permalink(18); ?>" class="link-portada">Apariciones en <span class="textoamarillo">Prensa</span></a>
                </h2>
                <p class="descripcion">Noticias en Televisión, Radio, Medios Impresos y Digitales para <span class="bold">difundir</span></p>
                <?php /* <a class="boton" href="http://www.accionaborto.cl/prensa/">Ver links de prensa</a> */ ?>
            </div>
          </div>
        </div>
        <div class="row">
          <?php
            $my_query = new WP_Query( 'category_name=prensa&posts_per_page=3' );
            while ( $my_query->have_posts() ) : $my_query->the_post();
            $do_not_duplicate[] = $post->ID;
          ?>
          <div class="col-md-4">
            <article class="articulo sombranegra">
                <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                <div class="cabecera" style="background-image: url('<?php echo $thumb['0'];?>')">
                </div>
                <div class="contenido">
                    <h4><?php the_title();?></h4>
                    <p><?php the_excerpt();?></p>
                    <a class="boton" href="<?php the_field('link'); ?>">Leer más</a>
                </div>
            </article>
          </div>
          <?php endwhile; ?>
        </div>
      </div>

    </section>
<?php get_footer(); ?>
