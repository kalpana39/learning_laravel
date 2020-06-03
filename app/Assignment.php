<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function complete(){
        $this->complete_at= true;
        $this->save();
    }
}
