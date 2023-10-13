<?

// cache
c::set('cache', true);
c::set('cache.driver', 'memcached');
c::set('cache.ignore', array(
  'contact',
  'search',
  'sitemap',
  'feed'
));

// cachebuster
c::set('cachebuster', true);
