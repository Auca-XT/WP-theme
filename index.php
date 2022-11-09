<?php get_header();

while(have_posts()) {
  the_post();?>
  <h2><a href="<?php the_permalink(); ?>"</a><?php the_title(); ?></h2>
  <?php the_content(); ?>
  <hr> 
  <?php }

get_footer();

?>