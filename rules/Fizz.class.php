<?php

include_once 'Rule.php';

class Fizz extends Rule
{
  public function contains(int $number): bool
  {
    return $number % 3 === 0;
  }

  public function newString(): string
  {
    return 'Fizz';
  }
}