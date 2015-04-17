<?php 
 $a = $_POST['first_segment'];
$b=$_POST['second_segment'];
$c = $_POST['last_segment'];    

geron(); 

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
	 header('Location:http://simon.ua/simple_triangle_2/result.php?res='.$res); 
	    exit; 
}
function checkSection($a,$b,$c){
	if(check($a)&&check($b)&&check($c)){//already has checked on client
		return ($a<=($b+$c) && $b<=($a+$c) && $c<=($b+$a) );
	}
}
?>