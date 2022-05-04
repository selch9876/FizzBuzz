<?php

include_once 'Rule.php';

class Bar extends Rule
{
  public function contains(int $number): bool
  {
    return $number % 7 === 0;
  }

  public function newString(): string
  {
    return 'Bar';
  }
}