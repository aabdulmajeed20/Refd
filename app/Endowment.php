<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Endowment extends Authenticatable
{
    use Notifiable;
    
    protected $guard = 'endowment';

    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
