<!DOCTYPE html>
<html>
<head>
	<style>
		#box{

			background: pink;
			padding: 10px;
			border: 1px solid #000;
		}

	</style>
	<title></title>
</head>
<body>
<form action="" id="sform">
  <input id="sname" type="text" name="" placeholder="Name"><br>
  <input id="sclass" type="text" name="" placeholder="class">
  <p>Country</p>
  <select id="country" >
    <option value="India">India</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Japan">Japan</option>
    <option value="China">China</option>
  </select>
  <br><br>
  <input type="submit" name="">

</form>
<div id="test" style=" border: 1px solid red">
  

</div>

<script
  src="http://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
 var a = $('#box').html();
 console.log(a);
$('#sform').submit(function(){
	var name = $('#sname').val();
	var classname = $('#sclass').val();
	var country = $('#country').val();
	alert("Name:- " + name + " Class:- " + classname  +  " Country:- " + country);

});



});


</script>
</body>
</html>