<?php
	$nome="MOISES";
	$nome=strtolower($nome);
	echo $nome;
	echo"<br>";
	$m="moises";
	$m=strtoupper($m);
	echo $m;	
	




	echo"<br>";
	$t="oliveira";
	$t=rtrim($t);
	echo $t;

	echo"<br>";
	$y="    matheus";
	$y=trim($y);
	echo $y;
	echo"<br>";




	echo"palavra revetida";
	echo"<br>";
	$k="MOISES";
	$k=strrev($k);
	echo $k;
	echo"<br>";




	echo" tamnho da string";
	$o="MOISES SILVA DE OLIVRIRA";
	$o = strlen($o);
	echo"<br>";
	echo $o;


	echo"<br>";


	echo"trocar expresao ";
	$palavra = "MOISES";
	$palavra = str_replace("OI", "#" , $palavra);
	echo $palavra;


?>	