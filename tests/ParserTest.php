<?php

class ParserTest extend PHPUnit_Framework_TestCase {

  public function testFlattenSimpleReturnsSameArray() {
      $input = [1,2,3];
      $expected = [1,2,3];
      $service = new Model\Parser($input);
      $result = $service->flatten();
      $this->assertEquals($expected, $input);
  }

  public function testStringInputIsThrowingException() {
      $this->expectException('InvalidArgumentException');
      $input = "string";
      $service = new Model\Parser($input);
  }

  public function testEmptyArrayIsThrowingException() {
      $this->expectException('InvalidArgumentException');
      $input = array();
      $service = new Model\Parser($input);
  }

  public function testNullInputIsThrowingException() {
      $this->expectException('InvalidArgumentException');
      $input = null;
      $service = new Model\Parser($input);
  }

  public function testMultipleLevelArrayReturnsFlatArray() {
    $input = array(10,11,12,array(13,14));
    $expected = array(10,11,12,13,14);
    $parser = new Model\Parser($input);
    $result = $parser->flatten();
    $this->assertEquals($expected, $input);
  }
}
