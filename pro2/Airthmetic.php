<?php
class Airthmetic
{
    public $firstNumber;
    public $secondNumber;
    
    function addition()
    {
        return $this->firstNumber + $this->secondNumber;
    }
    function subtraction()
    {
        return $this->firstNumber - $this->secondNumber;
    }
    function multiplcation()
    {
        return $this->firstNumber * $this->secondNumber;
    }
    function division()
    {
        return $this->firstNumber / $this->secondNumber;
    }
}