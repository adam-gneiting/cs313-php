<html>
<head>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="js/bootbox.min.js"></script>
	<script src="js/cs213-exercise.js"></script>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/cs213-exercise.css" rel="stylesheet">
</head>
<body>
	<form action="">
		<div class="input">
			<label class="input-label">Text to Append:</label>
			<input id="replace-text" type="text" name="replace-text" />
		</div>
		<div class="input">
			<label class="input-label">Color:</label>
			<input id="color" type="text" name="color" />
		</div>
	</form>

	<div class="controls">
		<button id="toggle" type="submit" class="btn btn-default">Toggle Visibility</button>
		<button id="update" type="submit" class="btn btn-primary">Update</button>
	</div>

	<div id="output">
		<span id="text-to-append">default</span>
	</div>
<body>
</html>