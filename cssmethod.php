<!DOCTYPE html>
<html>
<head>
	<style>
		.first{
			background-color: red;
			
		}
		.second{

				color: green
		}

		#box{
			
			border: 2px solid blue;
			width: 40%;
		}

	</style>
	<title></title>
</head>
<body>
	<div id="box">
		<h1>Test Box</h1>
		<p>Lorem ipsum sayeed alam jamui Bihar Amari Ka niwasi hun mai samjh gaye re babu</p>
    </div>
		<button id="addbutton">Add Class</button>
		<button id="removebutton">Remove Class</button>
		<button id="togglebutton">Toggle Class</button>

	
<script
  src="http://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
	$(document).ready(function(){
		$('#addbutton').click(function(){
			$('#box').addClass("second");
		});
		$('#removebutton').click(function(){
			$('#box').removeClass("second");
		});
		$('#togglebutton').click(function(){
			$('#box').toggleClass("second");
		});
		});


</script>

</body>
</html>