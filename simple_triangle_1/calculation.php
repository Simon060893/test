<?php 
 $a = $_POST['first_segment'];
$b=$_POST['second_segment'];
$c = $_POST['last_segment'];    
if($c == null || trim($c)== ''){ 
	calc(false);
} else{
	calc(true);
}
function calc($type) {
	$val='Incorect data'; 
	 global $a,$b,$c;
 try{ 
	 if(!$type  && check($a) && check($b)){
	 $val='C='.sqrt(pow($a,2)+pow($b,2)); 
	 }else if($type && check($c) && check($b) && !check($a)){
		  $val=sqrt(pow($c,2)-pow($b,2));
		  if(is_nan($val) || $val ==0){$val='Incorect data'; }else{'A='.$val;}
	 }else if($type && check($c) && check($a) && !check($b)){
		  $val=sqrt(pow($c,2)-pow($a,2));
		  if(is_nan($val) || $val ==0){$val='Incorect data'; }else{'V='.$val;}
	 }   
		  throw new Exception();  //use php version: 5.3.10, finally doesn't work here 
 }catch(Exception $e){   
	   header('Location:http://simon.ua/simple_triangle_1/result.php?res='.$val);//localhost
	    exit; 
 } 
 
}
function check($par){
	return ($par != 0 &&  trim($par) != '' );
}
?>