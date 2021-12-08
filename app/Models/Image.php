<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  
    protected $fillable =[

        "url",
        "imageable_id"

    ];

    public function imageable(){
        return $this->morphTo();
    }
}
