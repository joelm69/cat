<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $primaryKey = 'student_number';

    public function feePayments() {
        return $this->hasMany('App\Fees', 'student_number');
    }
}
