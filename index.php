<!DOCTYPE html>
<html>
<head>
	<title>Suggest Data dengan PHP dan jQuery Ajax</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="pencarian.js"></script>
</head>
<body>
<form>
	<div class="input_div">
		<input type="text" id="input_pencarian" placeholder="Cari Disini.." maxlength="40" onkeyup="cari(this.value);" />
		<div id="box_pencarian"></div>
	</div>
</form>
</body>
</html>