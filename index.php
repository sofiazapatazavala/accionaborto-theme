<?php get_header(); ?>

<div id="primary" class="content-area" style="padding-top: 60px;">
  <main id="main" class="site-main">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-8">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <header class="post-header">
              <h1><?php the_title(); ?></h1>
            </header>
            <div class="post-content">
              <?php the_content(); ?>
            </div>
            <footer class="post-footer">
              <?php edit_post_link( __( 'Editar', 'accionaborto' ), '<span class="edit-link btn btn-light btn-block" style="margin-bottom:10px;">', '</span>' ); ?>
            </footer>
          <?php endwhile; ?>
          <nav aria-label="Page navigation example">
            <div class="pagination justify-content-center">
              <div class="page-item"><?php previous_posts_link( 'Newer posts' ); ?></div>
              <div class="page-item"><?php next_posts_link( 'Older posts' ); ?></div>
          </nav>
          <?php else : ?>
            <p><?php esc_html_e( 'Sorry, no encontramos los posts que buscas.' ); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
