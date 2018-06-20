<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Role;
class Staff extends Model
{
    protected $table = 'staffs';

    protected $fillable = ['firstname', 'lastname','email', 'role_id'];

    public function role()
    {
        return $this->hasOne('App\Role');
    }

    
}
