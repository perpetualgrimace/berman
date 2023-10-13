<?
// check for alignment
if (isset($alignment)) {
  $alignment = ' ' . $alignment; }
else {
  $alignment = '';
}

// check for a custom field
if (isset($field)) {
  $field = $field;
} else {
  $field = 'text';
}

// get an id
if (isset($id)) { $id = $id; }
elseif ($field = 'text') { $id = 'intro'; }
else { $id = $field; }

?>

<section class="textblock section">
  <div id="<?= $id ?>" class="g-columns<?= $alignment ?>">
    <article class="g-col g-9 gamma u-margins-auto">

      <?= kirbytext($page->$field()) ?>

    </article>
  </div>
</section>
