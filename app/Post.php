<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected  static function boot()
    {
        parent::boot();

//        static::addGlobalScope('idsGreaterThan15', function ($query){
//            $query->where('id', '>', 15);
//        });
    }

    protected $table = 'posts';

    protected $primaryKey = 'id';

    public $timestamps = true;

    public $dates = ['deleted_at'];

    protected $connection = 'mysql';

    protected $fillable = ['title', 'user_id', 'body'];
//    protected $guarded = ['password'];

    public function scopeIdsIn102030($query)
    {
        $query->whereIn('id', [10,20,30]);
    }

    public function scopeIdsIn($query, $ids = [])
    {
        $query->whereIn('id', $ids);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
