<!DOCTYPE html>
<html>
<head>
	<title>Learning Heroes pagina beheer</title>
	<meta charset="<?php echo CHARSET ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="noindex,nofollow">


	<!-- CSS -->
	<?php
		echo Theme::cssBootstrap();
		echo Theme::css(array(
			'learningheroes.css'
		), DOMAIN_ADMIN_THEME_CSS);
	?>

	<!-- Javascript -->
	<?php
		echo Theme::jquery();
		echo Theme::jsBootstrap();
	?>

	<!-- Plugins -->
	<?php Theme::plugins('loginHead') ?>
</head>
<body class="login">

<!-- Plugins -->
<?php Theme::plugins('loginBodyBegin') ?>

<!-- Alert -->
<?php include('html/alert.php'); ?>

<div class="container">
	<div class="row justify-content-md-center pt-5">
		<div class="col-md-4 pt-5">
            <?php echo '<img class="logo mb-4 mx-auto d-block" src="' . Theme::src('logo-learningheroes.png', HTML_PATH_ADMIN_THEME_IMG) . '">'; ?>
		<?php
			if (Sanitize::pathFile(PATH_ADMIN_VIEWS, $layout['view'].'.php')) {
				include(PATH_ADMIN_VIEWS.$layout['view'].'.php');
			}
		?>
		</div>
	</div>
</div>

<!-- Plugins -->
<?php Theme::plugins('loginBodyEnd') ?>

</body>
</html>
