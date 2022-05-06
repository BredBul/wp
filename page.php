<?php
get_header();
?>
<main class="page page_about">
  <section class="page__main-block main-block">
    <div class="grid-container">
      <div class="main-block__body align-items-center">
        <div class="main-block__content order-2-mb">
          <div class="main-block__heading">
            <h1 class="main-block__title h1 text-upper text-center">
              get to know our company
            </h1>
            <p class="main-block__desc desc text-center">
              Text with a brief description of the company, because we
              will cover the topic in the second block
            </p>
            <a href="#"
               class="main-block__btn btn align-self-center">More details</a>
          </div>
        </div>
        <div class="main-block__image _ibg order-1-mb">
          <img src="img/about-page/main-block-image-01.png"
               alt="" />
        </div>
      </div>
    </div>
  </section>
  <section class="page__custom-block custom-block">
    <div class="grid-container">
      <div class="grid custom-block__body align-items-center">
        <div class="grid__item grid__item--ds-6 grid__item--mb-12 order-1 order-1-mb">
          <div class="custom-block__image _ibg">
            <img src="img/about-page/custom-block/custom-block-image-01.png"
                 alt="" />
          </div>
        </div>
        <div class="grid__item grid__item--ds-6 grid__item--mb-12 order-2 order-2-mb">
          <div class="custom-block__content">
            <h2 class="custom-block__title text-upper">block header</h2>
            <p class="custom-block__text desc">
              There will be a detailed description of the company, maybe
              how it all started, how the idea came, maybe about the team,
              or how we encountered some problem in the market and started
              looking for solutions, so the team turned out and at the
              same time we solved the problems in the market, in In
              general, it is still worth thinking about this block, to see
              what other companies write in the block about us, and not
              about the product, we will tell about the product on another
              page, so this block should not coincide with the information
              from the page about the product. The volume of the test
              should be approximately the same as it is now on the
              prototype, so that it is visually on the same level with the
              adjacent picture, I think so
            </p>
          </div>
        </div>
      </div>
      <div class="grid custom-block__body align-items-center">
        <div class="grid__item grid__item--ds-6 grid__item--mb-12 order-2 order-1-mb">
          <div class="custom-block__image _ibg">
            <img src="img/about-page/custom-block/custom-block-image-02.png"
                 alt="" />
          </div>
        </div>
        <div class="grid__item grid__item--ds-6 grid__item--mb-12 order-1 order-2-mb">
          <div class="custom-block__content">
            <h2 class="custom-block__title text-upper">
              company founder
            </h2>
            <p class="custom-block__text desc">
              Here we will tell you about the founder in the format "Hi! I
              am the founder of the company. For example, in zipify they
              tell about the founder about his experience and the path of
              an entrepreneur, you can ala the same story or that at some
              point pleased the philosophy of the company, in general it
              is also worth thinking about
            </p>
            <p class="custom-block__text desc">
              You can tell on the basis of what he chooses employees, what
              is important for him in the company, maybe some goals that
              intersect with the goals of the company
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
    
    <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
        the_content();
      }
    }
  ?>
</main>
<?php
get_footer();
?>