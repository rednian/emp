<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table = 'training';
    protected $primaryKey = 't_id';
    protected $fillable = ['title','end','start','description','venue'];
}
