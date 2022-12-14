<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ProductImges extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'product_imges';
    protected $fillable = ['product_id','images'];
}
