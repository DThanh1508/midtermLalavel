<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Food extends Model
{
    use HasFactory;
    protected $table = "foods";

    public function category()
    {
        # code...
        return $this->belongsTo(Category::class,'cate_id');
    }
}
