<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MermaProduct extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'merma_products';

  public function merma()
  {
      return $this->hasOne(Merma::class);
  }

  public function group()
  {
      return $this->hasOne(Group::class);
  }

  public function category()
  {
      return $this->hasOne(Category::class);
  }

  public function product()
  {
      return $this->hasOne(Product::class);
  }
}