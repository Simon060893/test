<?php 
 $a = $_POST['first_segment'];
$b=$_POST['second_segment'];
$c = $_POST['last_segment'];  
$typeTrianle = $_POST['group1'];  
if($c == null || trim($c)== ''){
	echo $c;
	calc(false);
}else if($typeTrianle == '1') { 
	geron();
}else{
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
	   header('Location:http://simon.ua/simple_triangle/result.php?res='.$val);//localhost
	    exit; 
 } 
 
}
function check($par){
return ($par != 0 &&  trim($par) != '' );
}

function geron(){
	global $a,$b,$c;
	$res = 'Incorect data';
	if(checkSection($a,$b,$c)){
	$p=($a+$b+$c)/2;
	$res = sqrt($p*($p-$a)*($p-$b)*($p-$c));
	if(is_nan($res) || $res == 0  ){
		$res = 'Incorect data'; 
		}else{
			'S='.$res;} 
	}
	 header('Location:http://simon.ua/simple_triangle/result.php?res='.$res); 
	    exit; 
}
function checkSection($a,$b,$c){
	if(check($a)&&check($b)&&check($c)){//already has checked on client
		return ($a<=($b+$c) && $b<=($a+$c) && $c<=($b+$a) );
	}
}
?>