<section>
  <article class="g-columns blog-list-featured">
    <a href="<?= $article->url() ?>" tabindex="-1">
     <div class="g-columns u-left">

        <div class="blog-thumb">
          <? if($article->image('thumb.png')): ?>
            <img srcset="<?= $article->url() ?>/thumb.png 490w,
                         <?= thumb($article->image('thumb.png'), ['width' => 245, 'quality' => 90))->url(] ?> 245w"
                    sizes="90vw,
                      (min-width: 40em) 12rem"
                    src="<?= thumb($article->image('thumb.png'), ['width' => 245, 'quality' => 90))->url(] ?>"
                    alt="">
          <? else: ?>
            <img srcset="<?= $article->url() ?>/thumb.jpg 490w,
                         <?= thumb($article->image('thumb.jpg'), ['width' => 245, 'quality' => 90))->url(] ?> 245w"
                    sizes="90vw,
                     (min-width: 40em) 12rem"
                    src="<?= thumb($article->image('thumb.jpg'), ['width' => 245, 'quality' => 90))->url(] ?>"
                    alt="">
          <? endif ?>
        </div>

        <div class="blog-caption">
           <h2><?= html($article->title()) ?></h2>
           <ul class="attribution inline-list">
              <? $author = $pages->find('about/people/' . $article->author()) ?>
              <li><?= $article->date('m.d.Y') ?></li>
              <li> <?= $author->title() ?></li>
           </ul>

         <? if($article->description() != ''): ?>

           <p><?= $article->description() ?></p>
           <a href="<?= $article->url() ?>" class="button">Read article</a>

         <? else: ?>

           <p><?= excerpt($article->text(), 150) ?></p>
           <a href="<?= $article->url() ?>" class="button">Read more</a>

         <? endif ?>

        </div>
     </div>
   </a>
  </article>
</section>
