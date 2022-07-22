<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiImg extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function product(){
      return $this->belongsTo(Product::class,'product_id','id');
  }
  // public function blogposts(){
  //   return $this->belongsTo(BlogPost::class,'blogposts_id','id');
  // }
  public function category(){
    return $this->belongsTo(BlogPostCategory::class,'category_id','id');
  }

}
