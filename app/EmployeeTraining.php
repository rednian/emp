<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeTraining extends Model
{
    protected $table = 'employee_training';
    protected $primaryKey = 'et_id';
    protected $fillable = ['emp_id','t_id'];

}
