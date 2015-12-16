<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $fillable = [
    'username',
    'email',
    'password'
  ];

  protected $hidden = ['password'];

  public function histories() {
    return $this->hasMany('App\History');
  }
}
