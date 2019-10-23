<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    protected $fillable = [
        'name', 'slug'
    ];

    public function posts(){
        return $this->belongsToMany('App\Post','post_tags')->withTimestamps()->orderBy('created_at','DESC')->paginate(6);
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


}
