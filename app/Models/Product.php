<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'products';
    protected $fillable = [
        'id_list', 'id_cat', 'id_item', ' id_sub', ' photo', 'photo1', 'photo2', 'namevi', 'nameen', 'code', 'price_old', 'price_new', 'discount', 'options', 'slugvi', 'slugen', 'descvi', 'descen', 'numb', 'status', ' type', 'view', 'contentvi', 'contenten'
    ];
}
