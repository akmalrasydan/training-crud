<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schadule extends Model
{
    use HasFactory;
    //use SoftDeletes;

    public function User()
    {
        //user.php - fk user_id,refer pada id (model,FK,PK)
        // link to function schadule
        return $this->belongsTo('App\Models\User');
    }
}
