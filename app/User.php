<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
//	 protected $table = "admins";
    
    protected $primaryKey = "id";
    public $timestamps = false;
}
