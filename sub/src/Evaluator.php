<?php

namespace gapple\DpbotMergeSub;

use gapple\StructuredFields\Parser;

class Evaluator {

  public static function run() {
    $data = Parser::parseList('"one", "two"');

    $expected = [
      "one",
      "two",
    ];

    foreach ($data as $index => $value) {
      if ($value[0] != $expected[$index]) {
        user_error("Parse Failed", E_USER_ERROR);
        return;
      }
    }

    print "Parse succeeded\n";
  }

}
