<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeLog extends Model
{
    protected $table = 'employee_log';
    protected $primaryKey = 'l_id';
    protected $fillable = ['start_date','end_date','emp_id'];

    protected function employee()
    {
        return $this->belongsTo(Employee::class,'emp_id');
    }
}
