<?php

include_once 'Rule.php';

class Buzz extends Rule
{
  public function contains(int $number): bool
  {
    return $number % 5 === 0;
  }

  public function newString(): string
  {
    return 'Buzz';
  }
}