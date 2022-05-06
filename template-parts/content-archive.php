<div class="grid__item grid__item--ds-4 grid__item--mb-12">
    <div class="blogs__card card-blog">
        <div class="card-blog__image _ibg">
            <a href="">
                <img src="<?php the_post_thumbnail_url('medium'); ?>"
                     alt="<?php the_title(); ?>" />
            </a>
        </div>
        <div class="card-blog__content">
            <div class="card-blog__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="card-blog__desc">
                <?php
                the_excerpt();
                ?>
            </div>
        </div>
    </div>
</div>
