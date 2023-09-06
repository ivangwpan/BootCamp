<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    protected $table = 'product_types';

    protected $fillable = ['name', 'desc'];

    public function productTypeImg()
    {
        // hasMany ( 關聯，對方欄位，自己欄位 )
        return $this->hasMany(ProductTypeImg::class, 'product_type_id', 'id');
    }
}
