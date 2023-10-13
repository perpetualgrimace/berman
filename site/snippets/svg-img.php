<?
// check for variables passed from template
if (isset($class)) { $class = $class; } else { $class = NULL; }
if (isset($filename)) { $filename = $filename; } else { $filename = NULL; }
?>

<img class="<?= $class ?>" src="<?= $site->url() ?>/assets/img/<?= $filename ?>.svg" alt="" onerror="this.src='<?= $site->url() ?>/assets/img/<?= $filename ?>.png;this.onerror=null;'" draggable="false">
