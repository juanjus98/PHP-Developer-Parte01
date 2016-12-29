<?php
/**
 * ChangeString
 */
class ChangeString
{
	
	/**
	 * Array que contiene todas la letras del abecedario en español.
	 * @var array
	 */
	var $abc = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");

	/**
	 * Remplazar letras de una cadena de texto.
	 * Reemplaza cada letra de una cadena de texto por la letra siguiente en el alfabeto.
	 *
	 * @category ChangeString
	 * @package build
	 * @author Juan Julio Sandoval <juanjus98@gmail.com>
	 * @since 2016-12-29
	 * @version 0.1
	 * @param [string] $param [Recibe una cadena de texto.]
	 * @return [string] [Retorna una cadena de texto.]
	 */
	function build($param)
	{
		$newString = "";

		//Separamos la cadena $param en un array de todos los caracteres.
		$arrParam = str_split($param);

		//Recorremos erl array $arrParam.
		foreach ($arrParam as $key => $value) 
		{
			//Validamos que $value sea una letra.
			if(ctype_alpha($value)){
				//Verificamos si es mayuscula.
				if(ctype_upper($value))
				{
					$is_mayus = 1; //Es mayuscula
					$value = strtolower($value);
				}
				else
				{
					$is_mayus = 0; //Es minuscula
				}

				//Buscamos $value en el array $this->abc
				$index = array_search($value, $this->abc);

				//Obtenemos el nuevo indice y el nuevo caracter.
				$newIndex = $index + 1;

				//Verificamos si $value es igual a "z" para asignar a $newIndex el valor 0.
				if($value == 'z')
				{
					$newIndex = 0;
				}

				//Validamos si $value fue mayuscula o minuscula.
				if($is_mayus == 1)
				{
					$newString .= strtoupper($this->abc[$newIndex]);
				}
				else
				{
					$newString .= $this->abc[$newIndex];
				}

			}
			else
			{
				//Concatenamos los mismo caracteres.
				$newString .= $value;
			}

		}

		return $newString;
	}
}

//Usamos la clase.
$changeString = new changeString();

$entrada01 = "123 abcd*3";
$salida01 = $changeString->build($entrada01);

$entrada02 = "**Casa 52";
$salida02 = $changeString->build($entrada02);

$entrada03 = "**Casa 52Z";
$salida03 = $changeString->build($entrada03);

//Mostramos los resultados.
echo "<h2>Problema 01</h2>";

echo $entrada01 . " => <strong>".$salida01."</strong>";
echo "<hr>";

echo $entrada02 . " => <strong>".$salida02."</strong>";
echo "<hr>";

echo $entrada03 . " => <strong>".$salida03."</strong>";
echo "<hr>";