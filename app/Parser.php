<?php
/**
 * Created by PhpStorm.
 * User: User-PC
 * Date: 09.03.2019
 * Time: 9:54
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Parser extends Model
{
    protected $fillable = ['link', 'title', 'body'];
    //создаем в модели массив в котором перечислены все атрибуты массового заполнения
}