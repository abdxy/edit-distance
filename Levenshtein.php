<?php

declare(strict_types=1);

namespace src;

class Levenshtein extends EditDistance  {

   private $dp;

   private function __construct(String $firstSentence, String $secondSentence)
   {
    parent :: __construct($firstSentence,$secondSentence);
    $this->dp = [];
   }

   public static function create(String $firstSentence, String $secondSentence):int
   {
       // create an instance
        $instance = new  Levenshtein($firstSentence, $secondSentence);
        // do the calculation and return the result 
        return $instance->calc_dis();
   }

   protected function calc_dis():int
   {
       return $this->levenshtein_dis($this->firstSentenceLength, $this->secondSentenceLength);
   }
  
   private function levenshtein_dis(int $m, int $n):int 
   {
        // If first Sentence is empty,  
        //insert all characters of second Sentence into first  
        if ($m == 0) 
            return $n;  
    
        // If second Sentence is empty, 
        //remove all characters of first Sentence  
        if ($n == 0)  
            return $m;  
        
        // if the recursive call has been 
        // called previously, return 
        // the stored value that was calculated 
        // previously 
        if (isset($this->dp[$m - 1][$n - 1])) 
            return $this->dp[$m - 1][$n - 1]; 

        // If last characters of two  
        // Sentences are same, nothing  
        // much to do. Ignore last  
        // characters and get count  
        // for remaining Sentences.  
        if ($this->firstSentence[$m - 1] == $this->secondSentence[$n - 1]) 
        {  
            return $this->dp[$m - 1][$n - 1] = $this->levenshtein_dis($m - 1, $n - 1);  
        } 
        
        // If last characters are not same 
        // consider all three operations on  
        // last character of first string.
    
        return $this->dp[$m - 1][$n - 1] = 1 + min( $this->levenshtein_dis($m, $n - 1), // Insert  
                                              $this->levenshtein_dis($m - 1, $n), // Remove  
                                              $this->levenshtein_dis($m - 1, $n - 1)); // Replace  
	}	

}
