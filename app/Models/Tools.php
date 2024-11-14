<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tools extends Model
{
    use HasFactory;

    
    protected $fillable=[
        'name',
        'category_id',
        'desc',
        'link',
        'plan',
        'price',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
