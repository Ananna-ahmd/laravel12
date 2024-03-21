<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class TestStudent extends Model
{
    protected $table = 'brta_arch.TEST_STUDENT';
    protected $primaryKey = 'TEST_STUDENT_ID';
    public $timestamps = false;
}
