<?php

use Buvdarbi\View;

/**
* @var View $this
*/

$content = $this->renderContent($params);
$this->registerJsFile('assets/script.js');
$this->registerJsFile('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
$this->registerJsFile('https://kit.fontawesome.com/d1cd09ca1b.js');
$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
$this->registerJsFile('https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
$this->registerCssFile('https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
$this->registerCssFile('assets/styles.css');

?>

<!DOCTYPE html>
<html lang="lv">
<head>
	<title>Viedie būvdarbi</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php foreach ($this->cssFiles as $css): ?>
        <link rel="stylesheet" type="text/css" href="<?= $css ?>">
    <?php endforeach; ?>
    <?php foreach ($this->jsFiles as $js): ?>
    	<script src="<?= $js ?>"></script>
    <?php endforeach; ?>
</head>
<body style="font-weight: 600;">

<?= $content ?>

</body>
</html>