 
<!DOCTYPE>
<html>
<head>
<meta charset="UTF-16"/>
</head>
<body>
<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>  
<style>
body{
color:black;
}
 
 input{ 
width:268px;;
height:50px;
border:2px solid black;
font-weight:18px;
margin-top:5px;
}
button{
border:2px solid black;
border-radius:5px;
background:gray;
font-weight:bold;
width:120px; 
height:30px;
margin-top:5px;
}
button:hover{
cursor:pointer;
}
 
</style>
<header> 

</header>
<main>
<article>
<div class="calc"> 
<?php
	 echo '<input type="textarea"  value="'.htmlspecialchars($_GET['res']).'" disabled/> </br> ';
	
?>
	<button id="back">back</button> 
</div>
</article>
</main>
<footer></footer>
<script>
 $('#back').click(function(){location.replace("http://simon.ua/simple_triangle_2/")}); 
</script>
</body>
</html>