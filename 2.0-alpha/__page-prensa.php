<?php /* Template Name: Prensa */ ?>
<?php get_header(); ?>
<body>



    <nav>
    <div class="contenedor">

        <?php wp_nav_menu(
    array(
        'container' => false,
        'items_wrap' => '<ul id="menu" class="responsive menu space-between">%3$s</ul>',
        'theme_location' => 'menu2'
        )); ?>

        </div>
    </nav>


     <header id="headerprensa" class="interiorheader">
        <div class="contenedor">
            <h2 class="textoblanco underbarred">Apariciones en <span class="textoamarillo">Prensa</span></h2>
            <p class="descripcion">Noticias en Televisión, Radio, Medios Impresos y Digitales para <span class="bold">difundir</span></p>

        </div>
    </header>
     <section id="loadprensa">
        <div id="loader" class="contenedor flex-wrap">
<?php
        $current_page = get_queried_object();

        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
        $query = new WP_Query(
            array(
                'paged'         => $paged,
                'category_name' => 'prensa',
                'order'         => 'desc',
                'post_type'     => 'post',
                'post_status'   => 'publish',
                'posts_per_page'=> '6',
            )
        );

        if ($query->have_posts()) {
               while ($query->have_posts()) {
               $query->the_post(); ?>


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
<?php
            }

            // next_posts_link() usage with max_num_pages
            next_posts_link( 'Entradas Anteriores', $query->max_num_pages );
            previous_posts_link( '<span style="margin-right:20px">Nuevas Entradas</span>' );

            wp_reset_postdata();
        }
        ?>



        </div>
    </section>


<?php get_footer(); ?>
