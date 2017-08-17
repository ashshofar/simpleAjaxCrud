<?php

namespace App\Helpers;

class Helper {
  
  public static function activeIfSegment($segment, $value)
  {
    if(!is_array($value)) {
      return request()->segment($segment) == $value ? ' active' : '';
    }
    foreach ($value as $v) {
      if(request()->segment($segment) == $v) return ' active';
    }
    return '';
  }

}
