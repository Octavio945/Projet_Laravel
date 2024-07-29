<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'category_id',
    ];

    public function categories()
    {
        return $this->belongsTo(categories::class, 'category_id');
    }
}
