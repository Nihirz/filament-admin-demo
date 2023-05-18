<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $filable = [
        'section_id'   ,
        'class_id'     ,
        'name'         ,
        'email'        ,
        'address'      ,
        'phone_number' ,
    ];
}
