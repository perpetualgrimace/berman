
<dl class="milli links contact-links vertical-list">

  <div class="grid-1-2-1 u-margin-bottom-off">

    <dt><strong>Phone: </strong></dt>
    <dd>
      <a href="tel:<?= $page->phone() ?>" target="_blank"><span class="u-screenreader">Call us: </span><?= $page->phone() ?></a>
    </dd>

    <dt><strong>Email: </strong></dt>
    <dd>
      <a href="mailto:<?= $page->email() ?>" target="_blank"><span class="u-screenreader">Email us: </span><?= $page->email() ?></a>
    </dd>
    <? if ($page->address1() != ""): ?>
      <dt><strong>Address: </strong></dt>
      <dd>
        <a href="http://maps.google.com/?q=<?= $page->address1() . $page->address2() ?>" target="_blank"><span class="u-screenreader">Our Address: </span>
          <?= $page->address1()?>
          <br>
          <?= $page->address2()?>
          </a>
      </dd>
    <? endif ?>

    <dt><strong>LinkedIn: </strong></dt>
    <dd>
      <a href="https://www.linkedin.com/company/<?= $page->linkedin() ?>" target="_blank"><span class="u-screenreader">Our LinkedIn page: </span><?= $page->linkedin() ?></a>
    </dd>
    <dt><strong>Facebook: </strong></dt>
    <dd>
      <a href="https://facebook.com/<?= $page->facebook() ?>" target="_blank"><span class="u-screenreader">Our Facebook page: </span><?= $page->facebook() ?></a>
    </dd>
  </div>

  <div class="grid-1-2-1">
    <dt><strong>Instagram: </strong></dt>
    <dd>
      <a href="https://instagram.com/<?= $page->instagram() ?>" target="_blank"><span class="u-screenreader">Our Instagram page: </span><?= $page->instagram() ?></a>
    </dd>
    <dt><strong>Twitter: </strong></dt>
    <dd>
      <a href="https://twitter.com/<?= $page->twitter() ?>" target="_blank"><span class="u-screenreader">Our Twitter handle: </span>@<?= $page->twitter() ?></a>
    </dd>
  </div>
</dl>
