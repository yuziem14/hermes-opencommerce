<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name',
      'price',
      'amount',
      'description'
  ];

  public function user() {
    return $this->belongsTo('App\Models\User');
  }

  public function images() {
    return $this->hasMany('App\Models\Image');
  }

  public function tags() {
    return $this->belongsToMany('App\Models\Tag', 'product_tags');
  }
}
