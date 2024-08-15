<!DOCTYPE html>
<html>
<head>
	<title>Navigation Bar Example</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}

		nav {
			background-color: #333;
			color: #fff;
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 10px;
		}

		nav a {
			color: #fff;
			text-decoration: none;
		}

		nav button {
			background-color: #fff;
			color: #333;
			border: none;
			padding: 10px;
			border-radius: 5px;
			cursor: pointer;
			font-weight: bold;
			text-transform: uppercase;
		}
	</style>
</head>
<body>
	<nav>
		<a href="#">Quiz</a>
		<button onclick="window.history.back( )">Back</button>
	</nav>
</body>
</html>
