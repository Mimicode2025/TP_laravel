<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    
        /**
     * The attributes that should be visible in arrays.
     *
     * @var array
     */

    public int $id;
    public String $lastname;
    public String $firstname;
    public int $age;
}
