<!DOCTYPE html>
<html>
<head>

	<script
  src="http://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <style>
  	body {font-family: arial}
  	#box{
  		padding: 10px;
  		border: 1px solid #000;
  	}

  </style>
	<title>jQuery</title>
</head>
<body>
	<h1>
		sayeed alam jQuery Selectors
	</h1>
	<div id="box" class="test">
		<h2>Text Box</h2>
		<p>Jamui Bihar Ka niwasi hai ye ladka re babu</p>
		<ul id="list">
			<li>orange</li>
			<li class="test">Sayeed Alam</li>
			<li>Watermelon</li>
		</ul>
ll
	</div>




	<script
  src="http://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
	<script>
	$(document).ready(function(){

	$("ul li:eq(1)").css("color", "green");
	//$(".test").css("border", "1px solid");	
});

		
	

		
	
	</script>

</body>
</html>