<?php

namespace App\Enums;

enum StatusEnum:string {
    use hasFunc;

    case Pending = '1';
    case Active = '2';
    case Inactive = '3';
    case Rejected = '4';
}