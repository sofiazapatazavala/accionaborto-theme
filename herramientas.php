<?php /* Template Name: Herramientas */ ?>
<?php get_header(); ?>

     <header id="headerherramientas" class="interiorheader">
        <div class="contenedor">
            <h2 class="textoblanco underbarwhite"><span class="textoamarillo">Herramientas</span> para la Acción</h2>
            <p class="descripcion">Gráficas, GIFs, Infografías, Videos y Programas de Radio para <span class="bold">compartir</span></p>

        </div>
    </header>
    <section class="background-herramientas">
        <div <?php /* id="loader" class="contenedor flex-wrap" */ ?>>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg">
                <h3 class="textoamarillo underbarwhite">Gráficas</h3>
                <br>
                <?php
                  $my_query = new WP_Query( 'category_name=graficas&posts_per_page=-1' );
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
              <div class="col-lg">
                <h3 class="textoamarillo underbarwhite">GIFs</h3>
                <br>
                <?php
                  $my_query = new WP_Query( 'category_name=gif&posts_per_page=-1' );
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
              <div class="col-lg">
                <h3 class="textoamarillo underbarwhite">Infografías</h3>
                <br>
                <?php
                  $my_query = new WP_Query( 'category_name=infografias&posts_per_page=-1' );
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
              <div class="col-lg">
                <h3 class="textoamarillo underbarwhite">Videos</h3>
                <br>
                <?php
                  $my_query = new WP_Query( 'category_name=videos&posts_per_page=-1' );
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
              <div class="col-lg">
                <h3 class="textoamarillo underbarwhite">Programas de radio</h3>
                <br>
                <?php
                  $my_query = new WP_Query( 'category_name=programas-de-radio&posts_per_page=-1' );
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
              <?php /* Código anterior comentado */ ?>
              <?php /*

<?php
        $current_page = get_queried_object();

        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
        $query = new WP_Query(
            array(
                'paged'         => $paged,
                'category_name' => 'herramientas',
                'order'         => 'desc',
                'post_type'     => 'post',
                'post_status'   => 'publish',
                'posts_per_page'=> '6',
            )
        );

        if ($query->have_posts()) {
               while ($query->have_posts()) {
               $query->the_post(); ?>

               <div class="col-md-4">

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
          </div>
          <?php
            }
            wp_reset_postdata();
          }
          ?>
        </div>
        <div class="row">
          <div class="col">
            <?php
              // next_posts_link() usage with max_num_pages
              next_posts_link( '<span style="float: left;">Entradas Anteriores</span>', $query->max_num_pages );
              previous_posts_link( '<span style="float: right;">Nuevas Entradas</span>' );
            ?>
          </div>
        </div>
        */ ?>
      </div>
    </div>
    </section>


<?php get_footer(); ?>
