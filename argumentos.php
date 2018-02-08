<?php /* Template Name: Argumentos */ ?>
<?php get_header(); ?>
<body>

     <header id="headerargumentos" class="interiorheader">
        <div class="contenedor">
        <h2 class="textoblanco underbarwhite"><span class="textoamarillo">Argumentos</span> para el Debate</h2>
            <p class="descripcion">Entrevistas y Columnas de Opinión para <span class="bold">informarse y difundir</span></p>
        </div>
    </header>
    <section id="loadargumentos">
        <div class="contenedor">
          <div class="container">
            <div class="row">

         <?php
        $current_page = get_queried_object();

        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
        $query = new WP_Query(
            array(
                'paged'         => $paged,
                'category_name' => 'argumentos',
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

                <article class="articulo sombraroja">
                   <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div class="cabecera" style="background-image: url('<?php echo $thumb['0'];?>')">
</div>
                    <div class="contenido">
                        <h4><?php the_title();?></h4>
                        <?php the_excerpt();?><p><br>Publicado el <?php the_time('j,F,Y') ?></p>
                        <a class="leermas" href="<?php the_permalink();?>">Leer más</a>
                    </div>
                </article><!-- #post-## -->
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
          </div>
        </div>
    </section>


<?php get_footer(); ?>
