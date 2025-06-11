<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job 
{
    public static function all(){
        return [
            ['id' => 1, 'title' => 'Software Engineer', 'company' => 'Tech Corp', 'location' => 'New York'],
            ['id' => 2, 'title' => 'Data Scientist', 'company' => 'Data Inc', 'location' => 'San Francisco'],
            ['id' => 3, 'title' => 'Web Developer', 'company' => 'Web Solutions', 'location' => 'Los Angeles'],
        ];
    }
    //
}
