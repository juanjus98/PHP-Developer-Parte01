<?php
/**
* CompleteRange
*/
class CompleteRange 
{
	/**
	 * Completar rango.
	 * Completa un rango de números.
	 *
	 * @category CompleteRange
	 * @package build
	 * @author Juan Julio Sandoval <juanjus98@gmail.com>
	 * @since 2016-12-29
	 * @version 0.1
	 * @param array $range 
	 * @return array
	 */
	function build($range)
	{
		//Ordenamos $range de forma asendente.
		sort($range);

		//Obtenemos el inicio y fin de rango.
		$start = $range[0]; //Inicio
		$end = end($range); //Fin

		//Generamos un nuevo rango de números.
		$newRange = range($start, $end);

		return $newRange;
	}
}

//Usamos la clase.
$CompleteRange = new completeRange();
$entrada01 = [1,2,4,5];
$salida01 = $CompleteRange->build($entrada01);

$entrada02 = [2,4,9];
$salida02 = $CompleteRange->build($entrada02);

$entrada03 = [55,58,60];
$salida03 = $CompleteRange->build($entrada03);

//Mostramos resultados
echo "<h2>Problema 02</h2>";
echo "[1,2,4,5] => [".rtrim(implode(',', $salida01), ',')."]";
echo "<hr>";

echo "[2,4,9] => [".rtrim(implode(',', $salida02), ',')."]";
echo "<hr>";

echo "[55,58,60] => [".rtrim(implode(',', $salida03), ',')."]";
echo "<hr>";