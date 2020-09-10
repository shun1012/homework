<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    public function getData()
    {
        return '名前：'.$this -> name.'-----値段：'.$this ->price;
    }
}
