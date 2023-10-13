<?

snippet('global-head', ['bodyClass' => 'home']);
snippet('global-nav');

snippet('home-header');
snippet('global-textblock', ['alignment' => 'u-left-center']);
snippet('quote', ['source' => $page->quote1()]);
snippet('home-services');
snippet('quote', ['source' => $page->quote2()]);
snippet('work-list');
snippet('quote', ['source' => $page->quote3()]);
snippet('home-blog-list', ['alignment' => 'u-left-center']);
snippet('global-cta');

snippet('global-footer');

?>
