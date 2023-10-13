<div class="<?= $layout ?>">
   <a href="<?= $service->url() ?>" class="card card-vertical">

      <div class="card-thumb">
      </div>

      <div class="card-caption">
        <h3><?= $service->title() ?></h3>
        <p><? e($service->caption(), $service->caption()) ?></p>
      </div>

   </a>
</div>
