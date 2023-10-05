<?php

namespace App\Enums;

trait hasFunc
{
  public static function options()
  {
    return collect(static::cases())->map(function($item){
      return [
        'id' => $item->value,
        'label' => $item->name,
      ];
    });
  }
}
