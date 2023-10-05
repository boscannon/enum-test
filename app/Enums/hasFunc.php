<?php

namespace App\Enums;

trait hasFunc
{
  public static function options()
  {
    return collect(static::cases())->map(function($item){
      return [
        'value' => $item->value,
        'label' => $item->name,
      ];
    });
  }
}