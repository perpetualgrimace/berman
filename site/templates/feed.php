<?

    $items = $pages->find('blog')->children()->not('series')->flip()->children()->limit(10);

    snippet('feed', array(
      'link'  => url('blog'),
      'items' => $items,
      'descriptionField'  => 'description',
      'descriptionLength' => 150
    ));

?>
