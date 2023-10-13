<form class="contactform u-margin-top-lg u-margin-bottom-lg" action="<?= $page->url()?>" method="post">
  <div class="contactform-container g-columns g-constant u-margin-top-off-children">

    <div class="field g-col g-6">
      <label for="contactform-name"><span><?= $page->labelName() ?></span></label>
      <input name="name" class="required" type="text" id="contactform-name" required autofocus>
      <label class="error error-name" style="display: none;" for="contactform-name" aria-hidden="true" role="presentation"><?= $page->error_name() ?></label>
    </div>

    <div class="field g-col g-6">
      <label for="contactform-email"><span><?= $page->labelEmail() ?></span></label>
      <input name="email" class="required" type="email" id="contactform-email" inputmode="email" required>
      <label class="error error-email" style="display: none;" for="contactform-email" aria-hidden="true" role="presentation"><?= $page->error_email() ?></label>
      <label class="error error-email-invalid" style="display: none;" for="contactform-email" aria-hidden="true" role="presentation"><?= $page->error_email_invalid() ?></label>
    </div>

    <div class="field g-col">
      <label for="contactform-text"><span><?= $page->labelText() ?></span></label>
      <textarea name="text" class="required" id="contactform-text" required></textarea>
      <label class="error error-text" style="display: none;" for="contactform-text" aria-hidden="true" role="presentation"><?= $page->errorText() ?></label>
    </div>

    <label class="uniform__potty u-screenreader" for="website" style="display: none;">Please leave this field blank</label>
    <input type="text" name="website" id="website" class="uniform__potty" style="display: none;">

    <div class="field g-col u-left-right u-padding-bottom-off">
      <button name="_submit" class="contact-submit button u-margin-top-sm" type="submit" value="<?= $form->token() ?>"<? e($form->successful(), ' disabled')?>><?= $page->submitButton() ?></button>
    </div>

  </div>

</form>
