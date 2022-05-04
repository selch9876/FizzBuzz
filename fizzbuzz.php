<?php

include 'includes/autoloader.inc.php';

/**
 *
 * Task: Given is the following FizzBuzz application which counts from 1 to 100 and outputs either the corresponding
 * number or if one of the following rules apply output the corresponding text.
 * Rules:
 *  - dividable by 3 without a remainder -> Fizz
 *  - dividable by 5 without a remainder -> Buzz
 *  - dividable by 3 or 5 without a remainder -> FizzBuzz
 *
 * Please refactor this code so that it can be extended in the future with other rules, such as
 * "if it is dividable by 7 without a remainder output Bar"
 * "if multiplied by 10 is larger than 100 output Foo"
 *
 */

class FizzBuzzEngine
{
  
    private $rules;

    public function __construct(array $rules)
    {
      $this->rules = $rules;
    }

    public function run(int $limit = 100): array
    {
      $list = [];
      for ($number = 1; $number <= $limit; $number++) {
        $list[] = $this->generateNumber($number);
      }
      return $list;
    }

    private function generateNumber(int $number)
    {
      $output = '';
      foreach ($this->rules as $rule) {
        if ($rule->contains($number)) $output .= $rule->newString();
      }
      if (empty($output)) $output = 'None';
      echo sprintf('%d: %s', $number, $output . PHP_EOL);
    }

}

$rules = [
  new Fizz(),
  new Buzz(),
  new Bar(),
  new Foo(),
];

$engine = new FizzBuzzEngine($rules);
$engine->run();


