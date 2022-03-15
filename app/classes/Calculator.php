<?php


namespace App\classes;


class Calculator
{
    private $startingNumber;
    private $endingNumber;
    private $action;
    private $result;
    public function __construct($post = null)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber   = $post['ending_number'];
        $this->action         = $post['action'];
    }

    public function myCalculator()
    {
        switch ($this->action)
        {
            case '+':
                $this->result = $this->startingNumber + $this->endingNumber;
                break;
            case '-':
                $this->result = $this->startingNumber - $this->endingNumber;
                break;
            case '*':
                $this->result = $this->startingNumber * $this->endingNumber;
                break;
            case '/':
                $this->result = $this->startingNumber / $this->endingNumber;
                break;
            case '%':
                $this->result = $this->startingNumber % $this->endingNumber;
                break;
        }
        return $this->result;
    }

}