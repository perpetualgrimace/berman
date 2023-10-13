<section id="contactform">

<? if(param('status') == "go"):

  $email = get('email');
  $name  = get('name');
  $text  = get('text');

  $contact = email(array(
    'to'      => 'Berman <info@bermanadvertising.com>',
    'from'    => "$name <$email>",
    'subject' => 'Message from bermanadvertising.com contact form',
    'body'    => "From: $name; Message: \n $text"
  ));

    if($contact->send()): ?>

    <div class="message-success">
      <div class="g-columns u-center">
        <?= kirbytext($page->success()) ?>
      </div>
    </div>

    <? else: ?>

    <div class="message-fail">
      <div class="g-columns u-center">
        <?= kirbytext($page->fail()) ?>
      </div>
    </div>

    <? endif ?>

  <? else: ?>

  <h2><?= $page->headline() ?></h2>

  <form action="<?= $page->url() ?>/status:go" method="post">

    <div class="grid-2-1">
      <label for="contactform-name"><span><?= $page->labelName() ?></span></label>
      <input class="required" type="text" id="contactform-name" name="name">
      <label class="error error-name" style="display: none;" for="contactform-name"><?= $page->error_name() ?></label>
    </div>

    <div class="grid-2-1">
      <label for="contactform-email"><span><?= $page->labelEmail() ?></span></label>
      <input class="required" type="text" id="contactform-email" name="email" inputmode="email">
      <label class="error error-email" style="display: none;" for="contactform-email"><?= $page->error_email() ?></label>
      <label class="error error-email-invalid" style="display: none;" for="contactform-email"><?= $page->error_email_invalid() ?></label>
    </div>

    <div class="grid-1">
      <label for="contactform-text"><span><?= $page->labelText() ?></span></label>
      <textarea class="required" name="text" id="contactform-text"></textarea>
      <label class="error error-text" style="display: none;" for="contactform-text"><?= $page->errorText() ?></label>
    </div>

    <div class="grid-2-1 u-left-right">
      <button class="button" type="submit" name="submit">Tell us</button>
    </div>

  </form>

  <? endif ?>

</section>

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
