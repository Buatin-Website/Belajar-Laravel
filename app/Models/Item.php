<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items'; // Optional ketika saat membuat model bersamaan dengan membuat migration dan tidak dirubah namanya

    protected $guarded = [
        'id',
    ];
}
