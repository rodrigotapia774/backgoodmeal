<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'categorys';

  public function Group()
  {
      return $this->hasOne(Group::class);
  }

  public function products()
  {
      return $this>hasMany(MermaProduct::class);
  }
}