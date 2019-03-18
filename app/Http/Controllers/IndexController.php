<?php
/**
 * Created by PhpStorm.
 * User: Tom Hu Hong
 * Date: 3/9/2019
 * Time: 11:39 AM
 */
//khai bao namespace den thu muc controller chua file controller demo >> de sau này goi qua namespace + classname
namespace App\Http\Controllers;//dinh nghia path folder chua file dang coding.
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request; //Luon phai include controller nay de extends trong moi controller
class IndexController extends  Controller{
    public function index(Request $request)// de nhan request tu client theo method get, post
    {
        return view('demo.index');
    }
}
