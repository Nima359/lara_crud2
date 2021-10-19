<?php

namespace Nima\Crud\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model {
  use HasFactory;
  
  
//  public function crud () {
//    $this->morphTo ();
//  }
  
  
  public function user () {
    $this->belongsTo (User::class);
  }
  
  
  protected $guarded = [
  "post_id",
  ];
  
  protected $fillable = [
      'name' ,
      'email' ,
      'password' ,
  ];
  
  
  protected $hidden = [
      'password' ,
      'remember_token' ,
  ];
  
  
  protected $casts = [
      'email_verified_at' => 'datetime' ,
  ];
  
}


