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

  public function categories() {
    return $this->belongsTo('App\Category');
  }

  public function image() {
    return $this->hasOne('App\Image');
  }
}
