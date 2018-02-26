<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'emp_id';
    protected $fillable = ['firstname','middlename','lastname','password','username','image'];
}
