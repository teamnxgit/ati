<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function registrations(){
        return $this->hasMany(StudentRegistration::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }
}
