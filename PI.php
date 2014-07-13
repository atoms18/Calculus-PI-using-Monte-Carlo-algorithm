<?php

class PI {
  private static $shoot = 10000;
  
  public static function cal() {
    $enter = 0;
    for($i = 0; $i < self::$shoot; $i++) {
      $x = self::random() * 2 - 1;
      $y = self::random() * 2 - 1;
      $distance = sqrt(($x * $x) + ($y * $y));
      if($distance < 1) {
        $enter++;
      }
    }
    
    $pi = (4 * $enter) / self::$shoot;
    $diff = (abs($pi - pi()) * 100) / pi();
    
    echo 'In Circle '.$enter.'/'.self::$shoot.' times<br>';
    echo 'PI Estimate: '.$pi.'<br>';
    echo 'Expected PI: '.pi().'<br>';
    echo '% Diff: '.$diff.'<br>';
  }
  
  private static function random() {
    return mt_rand() / mt_getrandmax();
  }
}
