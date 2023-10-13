<?php

return function($site, $pages, $page) {

   // get all career openings
   $openings = $page->children()->listed();

   // pass $works and $casestudies to the template
   return compact('openings');

};
