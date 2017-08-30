<?php
use Foo\Bar;
class Test2 {
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

  public function nest($abc){
    if($abc == 1){
      if($abc == 1){
        if($abc == 1){
          if($abc == 1){
            if($abc == 1){
              return $abc;
            }
          }
        }
      }
    }
    return "";
  }  
}
