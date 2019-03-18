<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class AddUser extends Model
{
    public static function insertUser($data){
        $checkExistEmail = DB::table('tbl_user')->where('mailaddress',$data['mailaddress'])->get();
       // dd($checkExistEmail);check key hay mang ra da
        if($checkExistEmail->count()==0){
            DB::table('tbl_user')->insert($data);
            return 1;
        }else {
            return 0;
        }
    }
}
