<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // app/Models/Student.php
public function profile()
{
return $this->hasOne(Profile::class);
}
public function classroom()
{
return $this->belongsTo(Classroom::class, 'class_id');
}
public function courses()
{
return $this->belongsToMany(Course::class)->withTimestamps();
}
public function grades()
{
return $this->hasMany(Grade::class);
}

}

