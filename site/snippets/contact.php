<section class="section g-columns u-left no-bottom-padding">

  <!-- main contact form / message area -->
  <div class="contact-container g-col g-9" id="contactform">

    <!-- no message; show contact form -->
    <? if(!$form->hasMessage()): ?>

      <h2><?= $page->headline() ?></h2>
      <? snippet('contact-form') ?>


    <!-- success message -->
    <? elseif($form->hasMessage() && $form->successful()): ?>
      <div class="message-success">
        <div class="g-columns u-center">
          <?= kirbytext($page->success()) ?>
        </div>
      </div>


    <!-- fail message -->
    <? else: ?>
      <div class="message-fail">
        <div class="g-columns u-center">
          <?= kirbytext($page->fail()) ?>
        </div>
      </div>
    <? endif ?>

  </div>


  <!-- sidebar -->
  <div class="contact-sidebar g-col g-3 u-hide-below-m2">
    <? snippet('contact-sidebar') ?>
  </div>

</section><!-- section -->




<? // ajax form states; currently unused
/*
<div class="alert message-success" style="display: none;">
<div class="g-columns u-center">
<?= kirbytext($page->success()) ?>
</div>
</div>

<div class="alert message-fail" style="display: none;">
<div class="g-columns u-center">
<?= kirbytext($page->fail()) ?>
</div>
</div>
*/
?>
