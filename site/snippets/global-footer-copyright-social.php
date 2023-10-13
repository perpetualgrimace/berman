<div class="footer-copyright-text milli"><?= kirbytext($site->copyright()) ?></div>

<h3 class="u-screenreader">Follow Berman:</h3>

<ul class="footer-social-list u-margin-top inline-list">
  <?

  // define social media icons in an array
  $social_media = ['twitter', 'facebook', 'instagram'];

  foreach($social_media as $social):
    $snippet = 'global-nav-' . $social;

  ?>

    <li class="footer-social-item">
      <a class="footer-social-link footer-social-link-<?= $social ?>" href="http://<?= $social ?>.com/<?= $pages->find('contact')->$social() ?>">
        <? snippet($snippet) ?><span class="u-screenreader"><?= $social ?></span>
      </a>
    </li>

  <? endforeach ?>
</ul>
