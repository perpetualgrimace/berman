<?

// convert structured list to kirby collection
$responses = $page->responses()->toStructure();

?>

<section class="section g-columns">

  <article class="g-col g-8">
    <? foreach ($responses as $response):

      // get the response
      $responseText = $response->response()->widont();

      // get the respondant's information
      $personSlug  = $response->person();
      $person      = $pages->find('about/people/' . $personSlug);

      // for convenience
      $personName  = $person->title();
      $personTitle = $person->position();

      // get url
      if ($pages->find('about/people/' . $person->slug())->isVisible()) {
        $personUrl = $pages->find('blog')->url() . '#' . $personSlug;
      } else {
        $personUrl = $pages->find('blog')->url() . '#berman';
      }

      // get image
      if ($person->image('headshot.jpg')) {
        $personImg = $person->image('headshot.jpg')->url();
      } elseif ($person->image('person.jpg')) {
        $personImg = $person->image('person.jpg')->url();
      } else {
        $personImg = $site->url() . '/assets/img/b140-headshot.png';
      }

    ?>

    <div class="card b140-card">

      <a href="<?= $personUrl ?>" class="card-thumb b140-card-thumb u-margin-top-off-children">
        <img class="card-img" src="<?= $personImg ?>" alt="" draggable="false">
      </a>

      <div class="card-caption b140-card-caption">
        <h2 class="card-caption-name gamma"><?= $personName ?></h2>
        <p class="card-caption-title milli u-margin-top-off"><?= $personTitle ?></p>
        <p class="card-caption-response delta u-margin-top-sm"><?= $responseText ?></p>
      </div>

    </div>

    <? endforeach ?>
  </article>

  <aside class="g-col g-4">
    <? snippet('blog-sidebar') ?>
  </aside>

</section>
