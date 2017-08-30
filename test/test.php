<?php
use Foo\Bar;
class Test {
  public $value1='';

  /**
   * @param integer $a
   * @param integer $b
   * @param integer $c
   */
  public function Execute($acc,$bcc,$ccc){
    if($ccc){
      // aaaa
      $bcc = 2;
    } else {
      $acc = 3;
    }
    $acc=10;
    return;
  }
}
