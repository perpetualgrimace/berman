<?

// license
c::set('license', 'K2-PRO-f71670bd7f3992be93fc7406f0316848');

// cachebuster (https://github.com/getkirby-plugins/cachebuster-plugin)
c::set('cachebuster', true);

// debug
c::set('debug', true);

// .md extension support
c::set('content.file.extension', 'md');

// smart quotes
c::set('smartypants', true);

// languages
c::set('languages', array(
  array(
    'code'    => 'en',
    'name'    => 'English',
    'locale'  => 'en_US',
    'default' => true,
    'url'     => '/'
  )
));


// routing
c::set('routes', array(

  // admin » panel
  array(
    'pattern' => 'admin',
    'action'  => function() {
      go('panel');
    }
  ),

  // rss » feed
  array(
    'pattern' => 'rss',
    'action'  => function() {
      go('feed');
    }
  ),

  // method » services
  array(
    'pattern' => 'method|about/services',
    'action'  => function() {
      go('services');
    }
  ),

  // redirect about subpages to main about page
  array(
    'pattern' => 'about/(:any)|about/verticals/(:any)',
    'action'  => function() {
      go('about');
    }
  ),

  // redirect people pages to filtered blog pages
  array(
    'pattern' => 'about/people/(:any)',
    'action'  => function($slug) {
      go('blog#' . $slug);
    }
  ),

  // insights » blog
  array(
    'pattern' => 'insights',
    'action'  => function() {
      go('blog');
    }
  ),

  // insights/* » blog/*
  array(
    'pattern' => 'insights/(:any)',
    'action'  => function($uid) {
      $page = page($uid);
      go('blog/' . $uid);
    }
  ),

  // redirect 2017 blog posts
  array(
    'pattern' => 'blog/(being-there-is-not-enough)',
    'action'  => function($slug) {
      go('blog/2017/' . $slug);
    }
  ),

  // redirect 2016 blog posts
  array(
    'pattern' => 'blog/(five-social-media-mistakes|get-your-foot-in-the-door-5-tips-to-secure-the-interview|the-confusing-situation-of-st-patricias-day|good-work|what-word-would-you-ban|biggest-impediment-to-creativity|one-thing-you-do-outside-of-work-that-makes-you-a-better-creator|one-pet-peeve-that-irks-you-in-advertising-targeting-women|favorite-red-white-and-blue-brand|one-thing-a-teacher-or-mentor-told-you-before-college-that-you-use-in-your-work-every-day|describe-your-job-and-work-responsibilities-to-yourself-at-age5|how-has-working-in-advertising-changed-how-you-interact-with-the-world|one-great-agency-workplace-habit-for-students|two-most-important-factors-in-a-successful-advertising-campaign|what-books-do-you-recommend-to-spark-creativity|avoid-getting-burnt-out-in-your-work|most-important-element-of-agency-culture|whats-your-go-to-song-you-play-while-you-work-to-help-you-focus|last-memorable-ad-you-saw|what-advertising-buzz-word-or-phrase-are-you-ready-to-retire|favorite-website-to-go-for-work-inspiration|one-aspect-of-marketing-that-you-find-gets-an-undeserved-bad-rap|mistakes-you-re-making-when-applying-for-a-job-in-advertising-or-any-other-field|the-ingredients-of-a-rock-star-junior-creative)',
    'action'  => function($slug) {
      go('blog/2016/' . $slug);
    }
  ),

  // redirect 2015 blog posts
  array(
    'pattern' => 'blog/(subjectivity-vs-objectivity|superbowl-2015|design-ethics|cheerleading-management|discipline-of-self-teaching|why-i-hate-the-phrase-fix-it-in-post|fathers-day-gift-guide-for-the-start-up-dad|startup-office-and-lab-spaces-in-boston-worth-noting|overlooked-american-innovations|kick-ass-kickstarters|an-introduction-top-3-challenges-of-marketers-in-young-companies-and-tips-to-overcome-them|how-to-achieve-big-goals-with-small-budgets|five-signs-that-your-website-needs-attention|how-to-overcome-lack-of-support-from-the-top|making-order-in-the-midst-of-chaos|quickread-why-most-masschallenge-finalists-will-fail|beautify-your-desktop)',
    'action'  => function($slug) {
      go('blog/2015/' . $slug);
    }
  ),

  // redirect 2014 blog posts
  array(
    'pattern' => 'blog/(nobody-cares|how-it-works|why-marketing-fails-1|why-marketing-fails-2|truth|cool|message-before-medium|how-marketing-works|botch-marketing-1|botch-marketing-2|botch-marketing-3|botch-marketing-4|botch-marketing-5|botch-marketing-6)',
    'action'  => function($slug) {
      go('blog/2014/' . $slug);
    }
  ),

  // convert underscores to dashes
  array(
    'pattern' =>
    'work/(write_something|crimson_hexagon|snack_it_up|digital_hands|real_kids_shades|tivoli_audio)',
    'action'  => function($slug) {
      go('work/' . $slug);
    }
  )
));
