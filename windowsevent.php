<!DOCTYPE html>
<html>
<head>
	<style>
		
		#box{
			width: 24%;
			height: 200px;
			background: pink;
			padding: 10px;
			border: 1px solid #000;
			overflow: auto;
		}
	</style>
	<title></title>
</head>
<body>
	<h1>
		jQuery Windows Event
	</h1>
<div id="box">
	<p>Lorem ipsum dolor sit sjalkdjdlsad Lorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsaddsadjaldj
	dkaldjasd
dkaslfj</p>

</div>
<p>Lorem ipsum dolor sit sjalkdjdlsad Lorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsad
Lorem ipsum dolor sit sjalkdjdlsad Lorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsad Lorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem iLorem ipsum dolor sit sjalkdjdlsad Lorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsad Lorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLoLorem ipsum dolor sit sjalkdjdlsad Lorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsad Lorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadrem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsad Lorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadpsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsad Lorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsad Lorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsadLorem ipsum dolor sit sjalkdjdlsad</p>
<script
  src="http://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
	$(document).ready(function(){
		$("#box").scroll(function(){
			//console.log("scrolling");
			$(this).css("background-color", "yellow");
			
		});
		$(window).resize(function(){
		console.log("resize");	
	  });
	});


</script>

</body>
</html>