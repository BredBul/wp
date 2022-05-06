<?php
get_header();
?>
<main class="page page_blogs">
  <div class="grid-container">
  <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
        
        get_template_part('template-parts/content', 'archive');
      }
    }
  ?>
</div>
</main>
<?php
get_footer();
?>