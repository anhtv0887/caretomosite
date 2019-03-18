<?php
/**
 * Created by PhpStorm.
 * User: Tom Hu Hong
 * Date: 3/9/2019
 * Time: 10:57 PM
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\AddUser;
use Mockery\CountValidator\Exception;

class RegisterController extends Controller {
    public function register(){
    return view('demo.register');
    }

    public function createUser(Request $request){
        if($request->input('submit')!=null){
            $data = array(
                'name'=>$request->input('name','abc'),//truyen them gia tri mac dinh neu khong co
                'kana_name'=>$request->input('kana'),
                'sex'=>$request->input('sex'),
                'birthyear'=>$request->input('year'),
                'birthmonth'=>$request->input('month'),
                'birthday'=>$request->input('day'),
                'billcode_No1'=>$request->input('billCode1'),
                'billcode_No2'=>$request->input('billCode2'),
                'pref'=>$request->input('pref'),
                'city'=>$request->input('city'),
                'mailaddress'=>$request->input('Tel_mail'),
                'mobile_mailaddress'=>$request->input('MB_mail'),
                'tel_No1'=>$request->input('TelNo1'),
                'tel_No2'=>$request->input('TelNo2'),
                'tel_No3'=>$request->input('TelNo3'),
                'tel_mbNo1'=>$request->input('MBNo1'),
                'tel_mbNo2'=>$request->input('MBNo2'),
                'tel_mbNo3'=>$request->input('MBNo3')
            );
            $value = AddUser::insertUser($data);
            if($value){echo "Insert DB successfully";}
            else {echo "Insert DB failed";}
        }
    }
}