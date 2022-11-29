<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'cart';
    protected $fillable = ['user_id','product_id','price','quantity','total_price','status'];
    public function product()
    {
        return $this->hasOne('App\Models\Product','id','product_id');
    }
}
