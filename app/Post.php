<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Post extends Model
{
    protected $fillable = [
        'title', 'subtitle','slug','body','image','status'
    ];

    public function tags(){
        return $this->belongsToMany('App\Tag','post_tags')->withTimestamps();
    }

    public function categories(){
        return $this->belongsToMany('App\Category','category_posts')->withTimestamps();
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


}
