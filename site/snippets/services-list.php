<?

$services = ['Strategy', 'Assets', 'Experiences'];

?>

<section class="section u-padding-bottom-off">
  <div class=" g-columns u-center">

    <? /* <h2 id="services" class="u-center"><?= $page->servicesHeadline() ?></h2> */ ?>
    <? foreach ($services as $service):
      $serviceHeadline = 'brand' . $service . 'Title';
      $serviceList = 'brand' . $service . 'List';
      $serviceIcon = 'icons/service-icons/brand-' . strtolower($service) . '-icon';
    ?>
      <div class="g-col g-4">
        <? snippet('svg-img', [
          'filename' => $serviceIcon,
          'class' => 'u-margins-auto u-margin-top'
          ]) ?>
        <h3 class="service-heading display u-margin-top"><?= $page->$serviceHeadline() ?></h3>
        <ul class="service-list">
          <? foreach($page->$serviceList()->yaml() as $serviceItem): ?>
            <li class="milli service-item"><?= $serviceItem ?></li>
          <? endforeach ?>
        </ul>
      </div>
    <? endforeach ?>

  </div>
</section>
