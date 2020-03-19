<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table='employee';
    protected $primaryKey='id';
    protected  $fillable =[
    'employee_name',
    'employee_salary',
    'employee_age'];
}
