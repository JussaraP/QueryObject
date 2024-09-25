<?php

/* Classe TExpression
*  Classe abstratapara gerenciar espressões
*/

abstract class TExpression{
    // operadores lógicos
    const AND_OPERATOR = 'AND' ;
    const OR_OPERATOR = 'OR' ;
    
    // marca método dump como obrigatório

    abstract public function dump();

}

?>