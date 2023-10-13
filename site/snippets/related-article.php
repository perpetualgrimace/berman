<?
// make sure $showSeriesName is defined, defaults to TRUE
if (isset($showSeriesName)) { $showSeriesName = $showSeriesName; }
else { $showSeriesName = TRUE; }
?>

<li class="milli">
  <a href="<?= $article->url() ?>"><?

    /* Three possible formats:
       - Series name, #1: Article title
       - Series name: Article title
       - Article title
    */

    // the article is in a series
    if ($article->series() != '') {

      // show the series name before the article title
      if ($showSeriesName == TRUE) {
        echo $pages->find('blog/series/' . $article->series())->title();
      }

      // numbered series entry
      if ($article->seriesNum() != 'unnumbered' && $article->intendedTemplate() != 'blog-berman140') {
        // if we're showing the series name, insert a comma between the series name and number
        if ($showSeriesName == TRUE) { echo ', '; }
        // add the number itself
        echo '#' . $article->seriesNum();
      }

      // if any of the above conditions have been met and the entry is not a berman140, insert a colon and a space
      if (($showSeriesName == TRUE || $article->seriesNum() != 'unnumbered') && $article->intendedTemplate() != 'blog-berman140') {
        echo ': ';
      }

    }

    // finally, the article title itself
    echo $article->title() ?>
  </a>
</li>
