<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// Model
class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'ItemName',
        'ItemPrice',
        'Quantity',
        'Color',
        'Image',
        'ItemGroupId',
    ];
}
