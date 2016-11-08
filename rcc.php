<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Demonix Fox</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/nStyles.css">
		<script src="/js/jquery-1.11.3.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>

		<script src="/tabs/projects/rcc/js/rcc.js"></script>
	</head>
	<body>
		<?php include $_SERVER['DOCUMENT_ROOT']."/shared/navbar.html"; ?>
		<div class="container">
			<h2>Random Card Cast Generator</h2>
			<hr/>
			<div>
				Last Pack List Generated On: <span id="generated_date"></span><img id="loading" src="./img/spinner.gif" style="height: 52px; width:70px; display:none;"/>
			</div>
			<hr/>
			<div>
				<label for="pack_count">Number of packs:</label><input type="number" class="form-control" id="pack_count" value="10"/>
				<button class="btn btn-primary" id="get_random" style="margin-top:15px;">Get New Card Packs</button>
				<div id="card_panel" style="display:none;">
					<hr/>
					<div class="panel panel-default">
						<div class="panel-heading">Generated Card Packs</div>
						<div class="panel-body">
							<pre><span id="card-list-body"></span></pre>
						</div>
					</div>
				</div>
			</div>

		</div>
	</body>
</html>
