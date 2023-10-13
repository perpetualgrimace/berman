<?php

kirbytext::$tags['button'] = array(
  'attr' => array(
    'text', 'link', 'class'
  ),
  'html' => function($tag) {

    $link = $tag->attr('link', 'https://google.com');
    $text = $tag->attr('button', 'button: buttontext');

    return '<a href="' . $link . '" class="button">' . $text . '</a>';

  }
);
