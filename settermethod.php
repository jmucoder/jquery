<!DOCTYPE html>
<html>
<head>
	<style>
		#box{

			background: pink;
			padding: 10px;
			border: 1px solid green;
		}
    .red{
      color: red;
    }
    .green{
      color: green;

	</style>
	<title></title>
</head>
<body>
<div id="box" class="test">
  <h2>Text Box</h2>
  <p>Lorem ipsum<span>dolor sit amet</span></p>


</div>
<br>
  

</div>
<div class="photo" style="background-color: silver"></div>

<form id="sform">
<input id="sname" type="text" placeholder="Name" name=""><br>
<input id="sclass" type="sclass" name="" placeholder="Class"><br><br>
<button class="submits" type="submit">Submit</button>  
</form>
  
  <button id="clickbutton">Set Value</button> 
<button style="background-color: pink border: none" id="clickbutton2">Click to see me</button>
<script
  src="http://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
 $('#clickbutton').click(function(){
      $('#box h2').text("hello Sayeed");
      $('#box p').html("Sayeed Alam Jamui");
      $('#box h2').attr("class", "red");
      $('#box p').attr("class", "green");
    });
$('#clickbutton2').click(function(){

      $('#box p').html("<img src='sayeed.jpg'/><br><h3 style = ' color: red';>Zindagi do pal ki intezar kab tak hum karenge bhala tumhe piyar kab tak hum karenge bhala</h3>");
      $('#box h2').text("I Love You Sayeed");

      $('#box h2').attr("class", "red");
      $('.photo').html("<img src='sayeed.jpg'/><br><h3 style = ' color: red';>Zindagi do pal ki intezar kab tak hum karenge bhala tumhe piyar kab tak hum karenge bhala</h3>");
              


 });
  
  $('#sname').val("sayeed");
  $('#sclass').val("jindal.com");

});


</script>
</body>
</html>