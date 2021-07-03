<?php

use gapple\StructuredFields\Bytes;
use gapple\StructuredFields\Serializer;
use gapple\StructuredFields\Token;
use PHPUnit\Framework\TestCase;

class Tester extends TestCase {

  public function testSerializeList() {
    $this->assertEquals(
      '"one", "two", three',
      Serializer::serializeList([
        ['one', new stdClass()],
        ['two', new stdClass()],
        [new Token('three'), new stdClass()],
      ])
    );
  }

  public function testSerializeDictionary() {
    $this->assertEquals(
      'one=("two" :dGhyZWU=:)',
      Serializer::serializeDictionary((object) [
        'one' => [
          [
            ['two', new stdClass()],
            [new Bytes('three'), new stdClass()],
          ],
          new stdClass(),
        ]
      ])
    );
  }

}
