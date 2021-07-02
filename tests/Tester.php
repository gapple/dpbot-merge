<?php

use gapple\StructuredFields\Serializer;
use PHPUnit\Framework\TestCase;

class Tester extends TestCase {

  public function testFunction() {
    $this->assertEquals(
      '"one", "two", three',
      Serializer::serializeList([
        ['one', new stdClass()],
        ['two', new stdClass()],
        [new \gapple\StructuredFields\Token('three'), new stdClass()],
      ])
    );
  }

}
