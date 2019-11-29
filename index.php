<?php defined( '_JEXEC' ) or die;

include_once JPATH_THEMES.'/'.$this->template.'/logic.php';

?>
<!doctype html>
<html lang="<?php echo $this->language; ?>">
<head>
    <jdoc:include type="head" />
</head>

<body class="<?php echo $active->alias . ' ' . $pageclass; ?>">

    <!--
        SHOW ME YOUR AWESOME CODE
    -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <jdoc:include type="component" />
                <i class="fas fa-user"></i>
                <i class="far fa-user"></i>
                <i class="fab fa-github-square"></i>
            </div>
        </div>
    </div>

    <jdoc:include type="modules" name="debug" />
    <script src="templates/frontend/build/app.js"></script>
</body>

</html>
