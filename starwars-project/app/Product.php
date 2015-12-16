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

  public function images() {
    return $this->belongsTo('App\Image');
  }
}
