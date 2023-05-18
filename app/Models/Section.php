<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Class_;

class Section extends Model
{
    use HasFactory;

    protected $filable = [
        'name',
        'class_id',
    ];

    public function class()
    {
        return $this->belongsTo(Classess::class,'class_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class,'section_id');
    }
}
