<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function getData()
    {
        return '番号：'.$this -> id.'---名前：'.$this -> name;
    }
}
