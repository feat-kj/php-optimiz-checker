<?php
use Foo\Bar;
class abc {
  public $value1='';

  /**
   * @param integer $a
   * @param integer $b
   * @param integer $c
   */
  public function Execute($acc,$bcc,$ccc){
    if($bcc){
echo 'echo echo';
      // aaaa

    } else {
      var_dump('aaa'.$ccc);
    }
    $acc=10;
    return;
  }
}
