<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    // app/Models/Location.php
public function users()
{
    return $this->hasMany(User::class);
}

}
