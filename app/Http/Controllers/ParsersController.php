<?php
/**
 * Created by PhpStorm.
 * User: User-PC
 * Date: 09.03.2019
 * Time: 23:00
 */

namespace App\Http\Controllers;

use App\Parser;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;



class ParsersController extends Controller
{

    use ValidatesRequests;

    public function index(){
        $res = Parser::all();
        return response()->json([$res->all()]);
    }

    public function stored(Request $re){
        $parser = new Parser();
        $parser->fill($re->all()); //метод fill перед данные из запроса и подставляет в нужные поля
        $parser->save();
        return response()->json([$parser]);
    }



}