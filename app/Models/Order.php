<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Enums\StatusEnum;

class Order extends Model
{
    use HasFactory;

    /**
     * Write code on Method
     *
     * @return response()
     */
    protected $fillable = [
        'name', 'status'
    ];

    /**
     * Write code on Method
     *
     * @return response()
     */
    protected $casts = [
        'status' => StatusEnum::class
    ];

    protected $appends = ['status_name'];

    public function getStatusNameAttribute()
    {
        return $this->status->name;
    }
}
