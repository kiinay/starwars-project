<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
      'category_id',
      'image_id',
      'title',
      'abstract',
      'content',
      'status'
  ];

  public function category() {
    return $this->belongsTo('App\Category');
  }

  public function image() {
    return $this->belongsTo('App\Image');
  }

  public function tags(){
      return $this->belongsToMany('App\Tag');
  }
}
