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
    protected $fillable = ['firstname','middlename','lastname','password','username','image','role','address','position','birthdate'];

    protected function logs()
    {
        return $this->hasMany(EmployeeLog::class, 'emp_id');
    }

    protected function trainings()
    {
        return $this->belongsToMany(Training::class,'employee_training','emp_id','t_id');
    }

    public function role()
    {
        return $this->role;
    }
}
