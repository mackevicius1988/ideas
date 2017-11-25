<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{

    protected $table = 'post';

    protected $fillable = array('id',
        'url',
        'saves',
        'price',
        'savings',
        'priceIndex',
        'name',
        'description',
        'rating',
        'ratingIndex',
        'tags',
        'imageUrl',
        'availability',
        'category');


    public function category()
    {
        return $this->belongsTo('App\Category', 'categoryId');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Category', 'tagsMap', 'postId', 'tagId');
    }



    public function findByCategories($categoryIds)
    {
        return Posts::whereIn('categoryId', $categoryIds);
    }


    public function comments()
    {
        return $this->hasMany('App\Comment', 'postId');
    }

}
