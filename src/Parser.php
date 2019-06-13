<?php
namespace Model;

class Parser {

  private $input;

  public function __construct($input) {
    $this->ensureInputIsValid($input);
    $this->input = $input;
  }

  public function ensureInputIsValid($input) {
    if (is_null($input)) {
      throw new InvalidArgumentException('Null input');
    }
    if (!is_array($input)) {
      throw new InvalidArgumentException('Not an Array');
    }
  }
}
