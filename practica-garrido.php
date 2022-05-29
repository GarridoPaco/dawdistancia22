<?php
/**
  *  @author Paco Garrido
  *  @version 1.0
  * {@internal Anotación solo visible para desarrolladores}
*/

  /**
    * Función suma de dos números
    * @param int $num1
    * @param int $num2
    * @return float
  */

  function suma ($num1, $num2) {
      $resultadosuma = $num1 + $num2;
      return $resultadosuma;

  }

$suma = suma (24,42);
echo $suma;

/**
    * Función resta de dos números
    * @param int $num1
    * @param int $num2
    * @return float
  */

  function resta ($num1, $num2) {
    $resultadoresta = $num1 - $num2;
    return $resultadoresta;

}

$resta = resta (63,36);
echo $resta;

?>