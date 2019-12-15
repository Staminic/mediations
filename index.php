<?php defined( '_JEXEC' ) or die;

include_once JPATH_THEMES.'/'.$this->template.'/logic.php';

?>

<!doctype html>
<html lang="<?php echo $this->language; ?>">
  <head>
      <jdoc:include type="head" />
  </head>

  <body class="<?php echo $active->alias . ($pageclass ? ' ' . $pageclass : ''); ?> item-<?php echo $active->id; ?> view-<?php echo $view; ?>">

  <?php // print_r($params); ?>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark d-flex">
      <a class="navbar-brand mr-md-auto flex-md-grow-1" href="/">Plateforme des médiations muséales</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse" aria-controls="collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="collapse">
        <jdoc:include type="modules" name="main-navbar" />
      </div>
    </nav>
  </header>

    <?php if ($active->id == '108') : ?>
      <div class="page-title">
        <div class="container">
          <?php if ($view != 'list') : ?>
            {module BackToInstitutions}
            <h2 class="h1"><?php echo $params['page_title']; ?></h2>
          <?php else : ?>
          <h1><?php echo $params['page_title']; ?></h1>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($this->countModules('content-above')) : ?>
      <jdoc:include type="modules" name="content-above" style="html5"/>
    <?php endif; ?>

    <div class="container">
      <?php if (!empty($app->getMessageQueue)) : ?>
        <jdoc:include type="message" />
      <?php endif ?>

      <jdoc:include type="modules" name="component-above" />

      <jdoc:include type="component" />

      <i class="fas fa-user"></i>
      <i class="far fa-user"></i>
      <i class="fab fa-github-square"></i>
    </div>

    <jdoc:include type="modules" name="debug" />
  </body>
</html>
