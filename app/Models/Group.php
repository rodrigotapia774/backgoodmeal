<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'groups';

  public function merma()
  {
      return $this->hasOne(Merma::class);
  }

  public function products()
  {
      return $this>hasMany(MermaProduct::class);
  }
}