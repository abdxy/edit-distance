<?php

declare(strict_types=1);

namespace src;

class Hamming extends EditDistance {

   private function __construct(string $firstSentence, string $secondSentence)
   {
    parent :: __construct($firstSentence,$secondSentence);
   }

   public static function create(string $firstSentence, string $secondSentence):int
   {
       // create an instance
        $instance = new  Hamming($firstSentence, $secondSentence);
        // do the calculation and return the result 
        return $instance->calc_dis();
   }

   protected function calc_dis():int
   {
       return $this->hamming_dis();
   }

   private function hamming_dis():int 
   {    
        $count = 0;
        //if two sentences not same length add spaces to sohortest one 

        if($this->firstSentenceLength>$this->secondSentenceLength)
         {
              $spaces = $this->firstSentenceLength-$this->secondSentenceLength;
              $this->secondSentence.=str_repeat(' ', $spaces);

         }else if($this->firstSentenceLength<$this->secondSentenceLength){

              $spaces =$this->secondSentenceLength-$this->firstSentenceLength;
              $this->firstSentence.=str_repeat(' ', $spaces);
         }

        $i = 0;  
        while ($i<$this->firstSentenceLength) 
        { 
            if ($this->firstSentence[$i] != $this->secondSentence[$i]) 
                $count++; 
            $i++; 
        } 
        return $count; 
	}	

}