<!DOCTYPE html>
<html>
<head>
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

      $('#sname,#sclass,#country').focus(function(){
        $(this).css('background-color', "silver")

      });
       $('#sname,#sclass,#country').blur(function(){
        $(this).css('background-color', "")

      });
        $('#country').change(function(){
       // $(this).css('background-color', "yellow")
       var a = $(this).val();

       $('#test').html(a);


      });

         $('#sname,#sclass').select(function(){
        $(this).css('background-color', "yellow");

      });

          $('#sform').submit(function(){
       
           
       // $(this).css('background-color', "")
        alert("form submitted");
      });
  		
  		});
  	     	

  </script>
</body>
</html>