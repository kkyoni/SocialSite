<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Colors extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'colors';
    protected $fillable = ['color_name','color_code','status'];
}
