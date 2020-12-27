<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body class="bcg">

<div id="ssd">
	<h1>I am Md Sayeed ALAM fROM iES cOLLEGE OF TECHNOLOGY</h1>
	<P class="sd">oK UNDERSTAND</P>
</div>

<script
  src="http://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

  <script>
  	$(document).ready(function(){
  		$("#ssd").click(function(){
  			$("#ssd").css("width", "100%",);
  		});
  	     	
$("#ssd").dblclick(function(){
  			$("#ssd").css("background-color", "white");
});
$("#ssd").contextmenu(function(){
  			$("#ssd").css("background-color", "green");
});
$("#ssd").mouseenter(function(){
  			$("#ssd").css("background-color", "tomato");
});
$("#ssd").mouseleave(function(){
  			$("#ssd").css("background-color", "silver");
});
  	});

  </script>
</body>
</html>