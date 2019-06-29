<?php

declare(strict_types=1);

namespace src;

abstract class EditDistance {

    protected  $firstSentence;
    protected  $secondSentence;
    protected  $firstSentenceLength, $secondSentenceLength;

    public function __construct(string $firstSentence, string $secondSentence)
    {    
         // initialise the state
         $this->firstSentence = $firstSentence;
         $this->secondSentence = $secondSentence;
         $this->firstSentenceLength = strlen($firstSentence);
         $this->secondSentenceLength = strlen($secondSentence);
    }

    protected abstract function calc_dis():int;
}
