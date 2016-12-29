<?php
/**
* ClearPar
*/
class ClearPar 
{
	
	/**
	 * Eliminar parentesis.
	 * Elimna parentesis que estan incompletos, debe complir el patron "()".
	 *
	 * @category ClearPar
	 * @package build
	 * @author Juan Julio Sandoval <juanjus98@gmail.com>
	 * @since 2016-12-29
	 * @version 0.1
	 * @param string $param
	 * @return string
	 */
	function build($param)
	{
		//Obtenemos el número de veces que aparece en la cadena "()".
		$repite = substr_count($param, '()');
		//Creamos una nueva cadena.
		$newString = str_pad("", $repite*2, "()");

		return $newString;
	}
}

//Usamos la clase.
$ClearPar = new ClearPar();

$entrada01 = "()())()";
$salida01 = $ClearPar->build($entrada01);

$entrada02 = "()(()";
$salida02 = $ClearPar->build($entrada02);

$entrada03 = ")(";
$salida03 = $ClearPar->build($entrada03);

$entrada04 = "((()";
$salida04 = $ClearPar->build($entrada04);

//Mostramos los resultados.
echo "<h2>Problema 03</h2>";

echo $entrada01 . " => <strong>".$salida01."</strong>";
echo "<hr>";

echo $entrada02 . " => <strong>".$salida02."</strong>";
echo "<hr>";

echo $entrada03 . " => <strong>".$salida03."</strong>";
echo "<hr>";

echo $entrada04 . " => <strong>".$salida04."</strong>";
echo "<hr>";