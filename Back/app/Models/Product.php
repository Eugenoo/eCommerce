<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'manufacturer_id',
        'name',
        'description',
        'price',
        'age',
        'stock',
        'photo',
        'bestseller',
        'sale',
        'photosrc'
    ];

    /** Relations */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function create($data):self
    {
        $product = new Product($data);
        $product->save();
        return $product;
    }

    public function edit($data)
    {
        $this->update($data);
        return $data;
    }

    public function remove()
    {
        $this->delete();
        return $this;
    }
}
