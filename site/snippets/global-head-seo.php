<?php

// for convenience
$siteTitle     = $site->title();
$pageTitle     = $page->title();
$pageTemplate  = $page->intendedTemplate();
$pageUrl       = $page->url();
$twitterHandle = '@' . $pages->find('contact')->twitter();


// tags
if($page->tags() != '') {
  $tags = $page->tags();
} elseif($pageTemplate == 'berman.140') {
  $tags = 'Berman140';
} else {
  $tags = $site->keywords();
}


// description
if($page->description() != '') {
  $description = $page->description();
} elseif($pageTemplate == 'berman.140') {
  $description = 'Berman140 description';
} else {
  $description = $site->description();
}


// description when sharing
if($page->description() != '') {
  $shareDescription = $page->description();
} elseif($page->intendedTemplate() == 'berman.140') {
  $shareDescription = 'Berman140 description';
} elseif($page->text() != '') {
  // TODO: replace with chopper $shareDescription = excerpt($page->text(), '140');
  $shareDescription = $page->text();
} else { $shareDescription = NULL; }


// social image
if ($page->socialImg() != '') {
  $img = $page->image($page->socialImg());
} elseif ($page->image($site->socialImg())) {
  $img = $page->image($site->socialImg());
} elseif ($page->heroImg() != '') {
  $img = $page->image($page->heroImg());
} elseif ($page->image($site->heroImg())) {
  $img = $page->image($site->heroImg());
} else {
  $img = NULL;
}
// linkedin image
if ($page->linkedinImg() != '') {
  $linkedinImg = $page->image($page->linkedinImg());
} else {
  $linkedinImg = NULL;
}



// authors()
$authors = $page->authors()->toStructure();
$authorCount = 0; // init

// get number of authors
foreach ($authors as $author) {
  $authorCount++;
}

// one author
if ($authorCount == 1 && $page->template() != 'blog-berman140') {
  $author = $pages->find('about/people/' . $page->authors()->toStructure())->title();
// multiple authors
} else {
  $author = 'Berman Team';
}

?>

<!-- Search engines -->
<meta name="description" content="<?= $description ?>">
<meta name="keywords" content="<?= $tags ?>">


<!-- Google Plus -->
<meta itemprop="name" content="<?= $pageTitle ?>">
<?php if ($shareDescription != NULL): ?>
  <meta itemprop="description" content="<?= $shareDescription ?>">
<?php endif ?>
<?php if ($img != NULL): ?>
  <meta itemprop="image" content="<?= $img->url() ?>">
<?php endif ?>


<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="<?= $twitterHandle ?>">
<meta name="twitter:title" content="<?= $pageTitle ?>">
<?php if ($shareDescription != NULL): ?>
  <meta name="twitter:description" content="<?= $shareDescription ?>">
<?php endif ?>
<?php if ($img != NULL): ?>
  <meta name="twitter:image:src" content="<?= $img->url() ?>">
<?php endif ?>
<meta name="twitter:player" content="">


<!-- Open Graph General (Facebook & Pinterest) -->
<meta property="og:url" content="<?= $pageUrl ?>">
<meta property="og:title" content="<?= $pageTitle ?>">
<?php if ($shareDescription != NULL): ?>
  <meta name="og:description" content="<?= $shareDescription ?>">
<?php endif ?>
<meta property="og:site_name" content="<?= $siteTitle ?>">
<!-- share image for LinkedIn, the special snowflake ❄️ -->
<?php if ($linkedinImg != NULL): ?>
  <meta property="og:image" content="<?= $linkedinImg->url() ?>">
  <meta property="og:image:width" content="180">
  <meta property="og:image:height" content="110">
<?php endif ?>
<?php if ($img != NULL): ?>
  <!-- share image for everyone else -->
  <meta property="og:image" content="<?= $img->url() ?>">
  <meta property="og:image:width" content="<?= $img->width() ?>">
  <meta property="og:image:height" content="<?= $img->height() ?>">
<?php endif ?>
<meta property="fb:admins" content="">
<meta property="fb:app_id" content="">
<meta property="og:locale" content="en_US">


<!-- Open Graph Article (Facebook & Pinterest) -->
<?php if ($page->template() == 'blog'): ?>
  <meta property="og:type" content="article">
  <meta property="article:author" content="<?= $author ?>">
  <meta property="article:section" content="Advertising">
  <meta property="article:tag" content="<?= $tags ?>">
  <meta name="twitter:creator" content="<?= $twitterHandle ?>">
<?php else: ?>
  <meta property="og:type" content="website">
  <meta name="twitter:creator" content="<?= $twitterHandle ?>">
<?php endif ?>
