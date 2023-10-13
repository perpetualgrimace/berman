<?

// get main img
if($person->image('person.jpg')) {
  $personImg = $person->image('person.jpg')->url();
} elseif($person->image('person.png')) {
  $personImg = $person->image('person.png')->url();
}

// get hover img
if($person->image('person_hover.jpg')) {
  $personHover = $person->image('person_hover.jpg')->url();
} elseif($person->image('person_hover.png')) {
  $personHover = $person->image('person_hover.png')->url();
} else {
  $personHover = NULL;
}

?>

  <div class="card<? if ($person->num() == 1) { echo ' u-margin-top-lg'; } ?>">

    <a href="<?= $person->url() ?>" class="card-thumb person-card-thumb u-margin-top-off-children" tabindex="-1">
      <img class="card-img" src="<?= $personImg ?>" alt="" draggable="false">
      <? if ($personHover != NULL): ?>
        <img class="card-img card-img-hover" src="<?= $personHover ?>" alt="" draggable="false">
      <? endif ?>
    </a>

    <div class="card-caption">
      <h3><?= $person->title() ?></h3>
      <p><?= $person->position() ?></p>
    </div>

  </div>
