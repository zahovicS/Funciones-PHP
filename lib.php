<?php 

	function Saludar()
	{
		echo "<h1 style='color:red;'>HOLA, BIENVENIDO A PHP</h1>";
	}

	function Saludo($usuario=" ")
	{
		echo "<h1 style='color:red;'>HOLA, Buenas Noches $usuario</h1>";
	}

	function _PI()
	{
		return 3.1415;
	}

	function sumatoria()
	{
		//echo func_get_arg(0);
		//echo "/ ",count(func_get_args());
		//return $n1+$n2;

		$sumatoria=0;
		for ($i=0; $i < count(func_get_args()); $i++) 
		{ 
			$sumatoria+=func_get_arg($i);	
		}
		return $sumatoria;
	}

	function promedio()
	{
		$promedio=0;
		for ($i=0; $i < count(func_get_args()); $i++) { 
			$promedio+=func_get_arg($i);
		}

		return $promedio/count(func_get_args());
	}

?>	