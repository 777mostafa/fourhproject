<?php
class Airthmetic
{
    private $firstNumber;
    private $secondNumber;
    
    public function setValues($firstNum, $secondNum)
    {
        $this->firstNumber = $firstNum;
        $this->secondNumber = $secondNum;
    }
    public function addition()
    {
        return $this->firstNumber + $this->secondNumber;
    }
    public function subtraction()
    {
        return $this->firstNumber - $this->secondNumber;
    }
    public function multiplcation()
    {
        return $this->firstNumber * $this->secondNumber;
    }
    public function division()
    {
        return $this->firstNumber / $this->secondNumber;
    }
}