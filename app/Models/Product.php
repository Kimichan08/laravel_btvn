<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','price','sale_price','image','category_id','description','status'];

    public function categories()
    {
        return $this->hasOne(Category::class, 'id','category_id');
    }
    public function scopeSearch($query)
    {
        if (request()->keyword) {
            $keyword = request()->keyword;
            $query = $query->where('name','like','%'.$keyword.'%');
        }
        return $query;
    }
}
