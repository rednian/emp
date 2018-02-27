<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    use Notifiable;

    protected $table = 'employee';
    protected $primaryKey = 'emp_id';
    protected $fillable = ['firstname','middlename','lastname','password','username','image','remember_token','role'];

    public function role()
    {
        return $this->role;
    }
}
