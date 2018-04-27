<?php 
	function render_template($config) { 
		ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= meta_title() ?></title>
	<meta name="description" content="<?= $config['meta_description'] ?>">
	<style><?= page_styles() ?></style>
</head>
<body>
	<p>My greeting: <strong><?= greeting() ?></strong>!</p>
	<?= $config['footer'] ?>
</body>
</html>
<?php 
		echo ob_get_clean();
	}
?>