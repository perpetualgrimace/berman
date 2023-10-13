<?

snippet('global-head', ['bodyClass' => 'parent']);
snippet('global-nav');

snippet('global-header');
snippet('global-textblock');
snippet('quote', ['source' => $page->quote1()]);
snippet('about-logos');
snippet('quote', ['source' => $page->quote2()]);
snippet('principle-list');
// snippet('global-cta', ['alignment' => 'u-left-center']);

snippet('global-footer');

?>
