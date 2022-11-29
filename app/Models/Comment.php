<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class Comment extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'comment';
    protected $fillable = ['user_id','only_id','type','comment'];
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
