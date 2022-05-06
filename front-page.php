<?php
get_header();
?>
<main class="page page_home">
  <section class="page__main-block main-block">
    
  </section>
  <div class="grid-container coming-soon-section">
    <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
        the_content();
      }
    }
    ?>
</main>
</div>
<?php
get_footer();
?>