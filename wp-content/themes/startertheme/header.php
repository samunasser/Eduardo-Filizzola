<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet" type="text/css">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>

</head>
<body>

<h5 id="logo">Filizzola</h5>
<div class="container_12" id="container">
	<div class="grid_4">
		<ul id="menu">
			<?php wp_list_pages('depth=1&title_li=&exclude='); ?>
		</ul>
	</div>

	<div class="grid_8" id="header">
		<div class="grid_8 omega" id="slogan"><strong>Eduardo Filizzola</strong> é mineiro, músico, escritor, arranjador e produtor musicalcom mais de 30 anos de carreira.</div>
		<div class="clear_fix"></div>
	</div>
	<div class="grid_8" id="content">
		<div>