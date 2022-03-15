<?php


namespace App\classes;


class Series
{
    private $startingNumber;
    private $endingNumber;
    private $s_Array = [];

    public function __construct($post = null)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber   = $post['ending_number'];
    }
    public function seriesFunction()
    {
        for ($i = $this->startingNumber; $i <= $this->endingNumber; $i++)
        {
            $this->s_Array[] = $i;
        }
        return $this->s_Array;
    }

}