<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'like';
    protected $fillable = ['user_id','only_id','type'];
}
