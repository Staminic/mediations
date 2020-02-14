<?php defined( '_JEXEC' ) or die;

include_once JPATH_THEMES.'/'.$this->template.'/logic.php';

?>

<!doctype html>
<html lang="<?php echo $this->language; ?>">
  <head>
      <jdoc:include type="head" />
  </head>

  <body class="site <?php echo $active->alias . ($pageclass ? ' ' . $pageclass : ''); ?> item-<?php echo $active->id; ?><?php echo ((($active->parent_id) && ($active->parent_id != '1')) ? ' parent-itemid-' . $active->parent_id : ''); ?> view-<?php echo $view; ?><?php echo (($user->groups[11] == '11') ? ' loggedin' : '') ; ?>">

    <?php // print_r($user->groups[11]); ?>

    <header class="header">
      <nav class="navbar navbar-expand-lg bg-black d-flex">
        <a class="navbar-brand mr-lg-auto flex-lg-grow-1 " href="/">
          <img src="<?php echo $tpath; ?>/img/pmm-logo.svg" class="mr-3" style="height: 38px;" alt="Logo de la Plateforme des médiations muséales" />
          <span class="d-none d-sm-inline">Plateforme des médiations muséales</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse" aria-controls="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapse">
          <jdoc:include type="modules" name="main-navbar" />
        </div>
      </nav>
    </header>

    <main class="main overflow-hidden">
      <?php if ($this->countModules('content-above')) : ?>
        <jdoc:include type="modules" name="content-above" style="html5"/>
      <?php endif; ?>

      <div class="container">
        <jdoc:include type="message" />

        <jdoc:include type="modules" name="component-above" />

        <jdoc:include type="component" />

        <jdoc:include type="modules" name="component-below" />
      </div>
    </main>

    <footer class="footer">
      <div class="footer bg-black py-3">
        <div class="container">
          <jdoc:include type="modules" name="footer" />
        </div>
      </div>

      <div class="footer-below py-3">
        <div class="container">
          <jdoc:include type="modules" name="footer-below" />
        </div>
      </div>
    </footer>

    <jdoc:include type="modules" name="debug" />
  </body>
</html>
