<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="google-site-verification" content="DW8-i9WeMitc9uVPOORftYLAV_t7mmcEofpML_ngffM">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?

  // meta text and image for linking and sharing
  snippet('global-head-seo');

  // favicon and touch icons
  snippet('global-head-icons');

  // if on localhost, use dev stylesheet
  $hostName = gethostname();

  if (strpos($hostName, '.local') !== false) {
    echo css('assets/build/css/main.dev.css');
  } else {
    echo css('assets/build/css/main.production.css');
  };

  ?>

  <!-- verify website for pinterest -->
  <meta name="p:domain_verify" content="0b5a7a4922f64b08b63aa48ed18176cf"/>

</head>


<? // set body classes

$template = str_replace('.', '-', $page->intendedTemplate());

if ($page->slug() != $template) {
  $slug = $page->slug();
} else {
  $slug = '';
}

if (($page->bodyClass() != '') && ($page->bodyClass() != $template)) {
  $customBodyClass = $page->bodyClass(); }
else {
  $customBodyClass = '';
}

// put it all together
$bodyClasses = $template . ' ' . $slug . ' ' . $customBodyClass . ' depth-' . $page->depth();

?>

<body class="<?= $bodyClasses ?>">

<? // snippet('announcement-modal') ?>
