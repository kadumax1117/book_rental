<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $primaryKey = 'reserve_id';

    public function user()
    {
        return $this->belongsTo('App\User','user_id','user_id');
    }

    public function book()
    {
        return $this->belongsTo('App\Book','book_id','book_id');
    }

    protected $fillable = [
        'name'
    ];
}
