<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dish;

class Order extends Model
{
    use HasFactory;
    public function dishes()
    {
        return $this->belongsToMany(Dish::class);
    }
}
