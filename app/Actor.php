<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
  protected $fillable = ['name','surname','birthplace','birth', 'photo'];
}
