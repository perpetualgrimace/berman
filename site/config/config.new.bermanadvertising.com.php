<?php

// cache
c::set('cache', true);
c::set('cache.ignore', array(
  'contact',
  'search',
  'sitemap',
  'feed'
));

// cachebuster
c::set('cachebuster', true);
