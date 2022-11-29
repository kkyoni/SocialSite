<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'product';
    protected $fillable = ['brand_id','images','product_name','information','description','color_id','price','status'];
    public function brand()
    {
        return $this->hasOne('App\Models\Brand','id','brand_id');
    }

    public function color()
    {
        return $this->hasOne('App\Models\Colors','id','color_id');
    }
}
