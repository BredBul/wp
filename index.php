<?php
get_header();
?>
<style>
  .main-block {
  position: relative;
}

.main-block__title:not(:last-child) {
  margin-bottom: 30px;
}

.main-block__btn {
  min-width: 230px;
}

.main-block__bg {
  position: relative;
}

.main-block__image {
  margin-bottom: 40px;
}

.main-block__image img {
  -o-object-fit: cover;
     object-fit: cover;
}

.blogs {
  background: url("../img/blogs-page/blogs/blogs-background-01.svg") 0 120% no-repeat, url("../img/blogs-page/blogs/blogs-background-02.svg") 100% 30% no-repeat;
}

.blogs__card {
  margin-bottom: 30px;
}

.filters {
  margin-bottom: 70px;
}

.filters__list {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.filters__item {
  font-weight: 400;
  font-size: 20px;
  color: rgba(0, 0, 0, 0.5);
  font-family: "Roboto";
  cursor: pointer;
}

.filters__item:not(:last-child) {
  margin-right: 22px;
}

.filters__item._active {
  color: #000;
  text-decoration: underline;
}

.card-blog {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  background: #FCF8F8;
  border-radius: 4px;
  -webkit-box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.1);
}

.card-blog__image {
  padding-bottom: 48.6486486486%;
}

.card-blog__image img {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}

.card-blog__content {
  padding: 20px 20px 40px;
}

.card-blog__title {
  font-weight: 600;
  font-size: 20px;
  color: #395690;
}

.card-blog__title:not(:last-child) {
  margin-bottom: 10px;
}

.card-blog__desc {
  font-size: 20px;
}

@media (min-width: 767.98px) {
  .main-block__image {
    margin-top: 20px;
  }
}

@media (min-width: 991.98px) {
  .main-block__image {
    padding-bottom: 0;
    width: calc(50vw - 131px);
    min-height: 594px;
    right: -17px;
  }
}

@media (max-width: 991.98px) {
  .main-block__body {
    height: unset;
  }

  .main-block__body .grid__item {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }

  .main-block__body .order-1-mb {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
  }

  .main-block__body .order-2-mb {
    -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
            order: 2;
  }
}

@media (max-width: 767.98px) {
  .main-block__title:not(:last-child) {
    margin-bottom: 20px;
  }
}
</style>
<main class="page page_blogs">
<section class="page__main-block main-block">
  <div class="grid-container">
    <div class="grid main-block__body align-items-center">
      <div class="grid__item grid__item--ds-7 grid__item--mb-12 order-2-mb">
        <div class="main-block__heading">
          <h1 class="main-block__title h1 text-upper text-center">
            don't miss the free tutorials, our latest updates, specials
            and news about us!
          </h1>
          <a href="#"
             class="main-block__btn btn align-self-center">Subscribe</a>
        </div>
      </div>
      <div class="grid__item grid__item--ds-5 grid__item--mb-12 order-1-mb">
        <div class="main-block__image _ibg">
          <img src="img/blogs-page/main-block-img-01.png"
               alt="" />
        </div>
      </div>
    </div>
  </div>
</section>
<section class="page__blogs blogs">
<div class="grid-container">
<div class="grid">
              <div class="grid__item">
                <div class="blogs__filters filters">
                  <ul class="filters__list">
                    <li class="filters__item _active">All</li>
                    <li class="filters__item">Trainings</li>
                    <li class="filters__item">Renewal</li>
                    <li class="filters__item">Special offers</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="grid blogs__body">
  <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
        
        get_template_part('template-parts/content', 'archive');
      }
    }
  ?>
  </div>
</div>
</section>
  
</main>
<?php
get_footer();
?>