<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medecin extends BaseModel
{
   public function user(){
       return $this->belongsTo(User::class);
   }
}
