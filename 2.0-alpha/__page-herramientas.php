<?php /* Template Name: Herramientas */ ?>
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



     <header id="headerherramientas" class="interiorheader">
        <div class="contenedor">
            <h2 class="textoblanco underbarwhite"><span class="textoamarillo">Herramientas</span> para la Acción</h2>
            <p class="descripcion">Gráficas, GIFs, Infografías, Videos y Programas de Radio para <span class="bold">compartir</span></p>

        </div>
    </header>
    <section id="loadherramientas">
        <div id="loader" class="contenedor flex-wrap">

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

                <?php
            }

            // next_posts_link() usage with max_num_pages
            next_posts_link( '<span class="textoblanco">Entradas Anteriores</span>', $query->max_num_pages );
            previous_posts_link( '<span class="textoblanco" style="margin-right:20px">Nuevas Entradas</span>' );

            wp_reset_postdata();
        }
        ?>

        </div>
    </section>


<?php get_footer(); ?>
