<?

$servicesPage = $pages->find('services');
$services = ['Strategy', 'Assets', 'Experiences'];

?>

<section class="services-container section">
  <div class="g-columns u-left-center">
    <div class="g-col g-8 u-margins-auto u-padding-bottom-off">

    <?= $page->services()->kt() ?>
    <!--<p><a href="method" class="button">Learn more<span class="u-screenreader"> about our method</span></a></p>-->
    <div class="service-list-container u-margin-top-lg u-center">
      <ul class="service-list u-margin-top-off-children u-margin-bottom-off g-columns g-constant"><!-- Classitis, I know. But it's all necessary. -->
        <? foreach ($services as $service):
          $serviceHeadline = 'brand' . $service . 'Title';
          $serviceList = 'brand' . $service . 'List';
          $serviceIcon = 'icons/service-icons/brand-' . strtolower($service) . '-icon-linked';
        ?>
          <li class="g-col g-4">
            <a href="<?= $pages->find('services') . '#services' ?>" class="service-image-container service-image-link">
              <? snippet('svg-img', [
                'filename' => $serviceIcon,
                'class' => 'service-image u-margins-auto'
                ]) ?>
              <span class="service-heading display gamma u-margin-top-sm u-margin-bottom-sm" href="<?= $servicesPage->url() . '#services' ?>"><?= $servicesPage->$serviceHeadline() ?></span>
            </a>
          </li>
        <? endforeach ?>
      </ul>
    </div>
  </div>
</section>
