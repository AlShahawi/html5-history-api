<?php if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest'): ?>
<h1>My name is Ahmed Al-Shahawi</h1>
<p>
	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
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
			<h1>My name is Ahmed Al-Shahawi</h1>
			<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
		</main>
		<!-- /Main -->
		<script src="loading-indicator.js"></script>
		<script src="app.js"></script>
	</body>
</html>
