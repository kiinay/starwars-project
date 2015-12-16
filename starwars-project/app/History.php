<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
  protected $fillable = [
      'total',
      'commanded_at'
  ];

  public function customers() {
    return $this->belongsTo('App\Customer');
  }
}
