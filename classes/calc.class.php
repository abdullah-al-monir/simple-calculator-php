<?php


class Calc
{
  /**
   * @var string The operator to perform the calculation.
   */
  public $operator;

  /**
   * @var int The first number for the calculation.
   */
  public $num1;

  /**
   * @var int The second number for the calculation.
   */
  public $num2;

  /**
   * Calc constructor.
   *
   * @param string $operator The operator to perform the calculation.
   * @param int $num1 The first number for the calculation.
   * @param int $num2 The second number for the calculation.
   */
  public function __construct(string $operator, int $num1, int $num2)
  {
    $this->operator = $operator;
    $this->num1 = $num1;
    $this->num2 = $num2;
  }

  /**
   * Performs the calculation based on the specified operator.
   *
   * @return int|float The result of the calculation.
   * @throws RuntimeException When an invalid operator is provided.
   */
  public function calculator()
  {
    switch ($this->operator) {
      case 'add':
        return $this->num1 + $this->num2;
      case 'div':
        if ($this->num2 !== 0) {
          return $this->num1 / $this->num2;
        } else {
          throw new RuntimeException("Cannot divide by zero.");
        }
      case 'sub':
        return $this->num1 - $this->num2;
      case 'mul':
        return $this->num1 * $this->num2;
      default:
        throw new RuntimeException("Invalid operator: {$this->operator}");
    }
  }
}
