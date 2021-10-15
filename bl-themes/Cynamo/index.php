<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="generator" content="Bludit">

	<!-- Dynamic title tag -->
	<?php echo Theme::metaTagTitle(); ?>

	<!-- Dynamic description tag -->
	<?php echo Theme::metaTagDescription(); ?>

	<!-- Include Favicon -->
	<?php echo Theme::favicon('img/favicon.png'); ?>

	<!-- Include CSS Styles from this theme -->
	<?php echo Theme::css('assets/css/main.css'); ?>

	<!-- Load Bludit Plugins: Site head -->
	<?php Theme::plugins('siteHead'); ?>

	<script src="https://unpkg.com/feather-icons"></script>
</head>
<body class=" dark">
	<nav class="light">
		<img class="logo" src="<?php echo $site->logo() ?>">
		<ul>
			<li class="dv"><a href="#" class="item"><i data-feather="home"></i>Home</a></li>
			<li class="dv"><a href="#" class="item"><i data-feather="briefcase"></i>Work</a></li>
			<li class="dv"><a href="#" class="item"><i data-feather="smile"></i>About me</a></li>
			<li class="dv"><a href="#" class="item"><i data-feather="at-sign"></i>Contact</a></li>
			<li class="mb"><div class="burguer b-menu"><div class="icon open"><i data-feather="menu"></i></div><div class="icon close"><i data-feather="x"></i></div></div></li>
			<li class="dv"><div class="toggle night dark"><div class="icon open"><i data-feather="moon"></i></div><div class="icon close"><i data-feather="sun"></i></div></div></li>
		</ul>
	</nav>
	<header class="lgt">
		<div class="head">

		</div>
		<div class="works-title">
			<h3>Works</h3>
		</div>
		<div class="">
			<ul class="list">
				<?php foreach ($content as $page): ?>
					<li class="itemList">
						<img src="<?php echo $page->coverImage(); ?>">
					</li>
				<?php endforeach ?>
			</ul>
		</div>
	</header>
	<div id="Desplegar" class="Responsive-M light oculto text-center">
		<ul>
			<li><a href="#" class="item"><i data-feather="home"></i>Home</a></li>
			<li><a href="#" class="item"><i data-feather="briefcase"></i>Work</a></li>
			<li><a href="#" class="item"><i data-feather="smile"></i>About</a></li>
			<li><a href="#" class="item"><i data-feather="at-sign"></i>Contact</a></li>
	</div>
	<script>
      feather.replace()
  </script>
	<script>
			let menuToggle = document.querySelector('.toggle');
			let mobileToggle = document.querySelector('.burguer');
			let nightMode = document.querySelector('.dark');
			let lightMode = document.querySelector('.light')
			let lgtMode = document.querySelector('.lgt')
			let desplegarMenu = document.querySelector('.Responsive-M')
			menuToggle.onclick = function(){
				menuToggle.classList.toggle('active')
				nightMode.classList.toggle('active')
				lightMode.classList.toggle('active')
				lgtMode.classList.toggle('active')
			}
			mobileToggle.onclick = function(){
				mobileToggle.classList.toggle('active')
				desplegarMenu.classList.toggle('oculto')
			}
	</script>
</body>
</html>
