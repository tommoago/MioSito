<html>

	<head>
		<title>Tommaso Agostini</title>
		<link href="../style/style.css" rel="stylesheet">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				var h = $(window).height();

				$('#home').on('click', function() {
					$('html, body').animate({
						scrollTop : 0
					}, 1000);
				});

				$('#cv').on('click', function() {
					$('html, body').animate({
						scrollTop : h
					}, 1000);
				});

				$('#cosa').on('click', function() {
					$('html, body').animate({
						scrollTop : h * 2
					}, 1000);
				});

				$('#contatti').on('click', function() {
					$('html, body').animate({
						scrollTop : h * 3
					}, 1000);
				});

			});
		</script>
	</head>
	<body>

		<header>
			<div id="nav">
				<div id="hsin">
					<div id="logo"></div>
				</div>
				<div id="hdes">
					<ul>

						<li id="contatti">
							Contatti
						</li>
						<li id="cosa">
							Cosa faccio
						</li>
						<li id="cv">
							CV
						</li>
						<li id="home">
							Home
						</li>
					</ul>
				</div>
			</div>

		</header>
		<div id="page">
