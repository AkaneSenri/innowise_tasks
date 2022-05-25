<?php

namespace src;

class Task11 {

    private $_fval, $_sval;
    public function main( $fval, $sval ) {
    $this->_fval = $fval;
    $this->_sval = $sval;
    }
    public function add() {
    return $this->_fval + $this->_sval;
    }
    public function subtract() {
    return $this->_fval - $this->_sval;
    }
    public function multiply() {
    return $this->_fval * $this->_sval;
    }
    public function divide() {
    return $this->_fval / $this->_sval;
    }

}

?>