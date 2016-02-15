<?php 

function find()
{
	$a = array(450,420,440,430,421); 
	$b = array(460,410,410,430,413,375,256,411,1000); 
	$c = array(430,440,470,435,434,255,1975); 

	$d = max(max($a),max($b),max($c)); 	
	echo $d;
}

find();

?>