<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Student extends Model
{
     use SoftDeletes;
    protected $table = 'students';

    const FIRSR_SEMESTER 	= 1;
    const SECOND_SEMESTER 	= 2;
    const SUMMER_SEMESTER 	= 3;

    const STATUS_NEW		 = 1;
    const STATUS_CANCELED 	 = 2;
    const STATUS_EXPIRED 	 = 3;
    const STATUS_REJECT 	 = 4;



}
