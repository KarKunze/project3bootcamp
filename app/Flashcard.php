<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Flashcard extends Model
{

  public function creator ()
      {
        return $this->belongsTo('App\User', 'creator_id');
      }

}
