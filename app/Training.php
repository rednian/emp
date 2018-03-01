<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table = 'training';
    protected $primaryKey = 't_id';
    protected $fillable = ['title','end','start','description','venue'];

    protected function employees()
    {
        return $this->belongsToMany(Employee::class,'employee_training','emp_id','t_id');
    }
}
