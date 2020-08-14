<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function student(){
        return $this->brlongsTo(Student::class);
    }

    public function registration(){
        return $this->belongsTo(StudentRegistration::class);
    }
}
