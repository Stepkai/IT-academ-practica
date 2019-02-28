<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'description'];
    //создаем в модели массив в котором перечислены все атрибуты массового заполнения
}
