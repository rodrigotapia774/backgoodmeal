<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merma extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'mermas';

  public function creator()
  {
      return $this->hasOne(User::class);
  }

  public function products()
  {
      return $this>hasMany(MermaProduct::class);
  }
}