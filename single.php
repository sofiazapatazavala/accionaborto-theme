<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<header  id="headerarticulo" class="interiorheader" style="background-image: url('<?php echo $thumb['0'];?>')">
<div class="contenedor">
        <h2 class="textoblanco" style="text-shadow: 1px 2px 3px #000000;"><?php the_title();?></h2>
        </div>
</header>


    <section id="loadarticulo">
        <div class="contenedor">
    <article class="articulo sombraroja">
                <div class="contenido">
                    <p class="columnas"><?php the_content();?></p>
                    <p><br>Publicado el <?php the_time('j,F,Y') ?></p>

                </div>
            </article>

                <?php endwhile; else: ?>
                <h3>No se encontraron Articulos</h3>
                 <?php endif; ?>
<?php wp_reset_query(); ?>
        </div>
    </section>


<?php get_footer(); ?>
