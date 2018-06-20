<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $table = 'roles';

    public function staff()
    {
        return $this->belongsTo('App\Staff');
    }

    
}
