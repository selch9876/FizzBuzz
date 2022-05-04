<?php

abstract class Rule
{
  abstract public function contains(int $number): bool;
  abstract public function newString(): string;
}