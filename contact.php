<?php if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest'): ?>
<h1>Contact</h1>
<p>
	you can contact me @al_shahawi on twitter <br>
	or @alshahawi on github.
</p>
<?php sleep(2); exit; ?>
<?php endif; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sample SPA Application</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id="loading">Loading...</div>
		<!-- Header -->
		<header>
			<h1>Ahmed Al-Shahawi</h1>
			<nav>
				<a href="." class="spa-link">Home</a>
				<a href="blog.php" class="spa-link">Blog</a>
				<a href="about.php" class="spa-link">About</a>
				<a href="contact.php" class="spa-link">Contact</a>
			</nav>
		</header>
		<!-- /Header -->
		<!-- Main -->
		<main>
			<h1>Contact</h1>
			<p>
				you can contact me @al_shahawi on twitter <br>
				or @alshahawi on github.
			</p>
		</main>
		<!-- /Main -->
		<script src="loading-indicator.js"></script>
		<script src="app.js"></script>
	</body>
</html>
