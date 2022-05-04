<?php

include_once 'Rule.php';

class Foo extends Rule
{
  public function contains(int $number): bool
  {
    return $number * 10 > 100 ;
  }

  public function newString(): string
  {
    return 'Foo';
  }
}