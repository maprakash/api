<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\genre;
class movie extends Model
{
 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'title', 'genre_id', 'rate','stock',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    public function genre()
    {
        return $this->belongsto('App\genre');

    }
}
