<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $fillable = [
    'filename'
  ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function files()
{
   return $this->hasMany(File::class);
}

public function uploads()
{
   return $this->hasMany(Upload::class);
}

}
