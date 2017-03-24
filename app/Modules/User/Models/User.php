<?php namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model {


    public function registerUser($data)
    {

        try
        {
            DB::table('users')
                ->insert($data);


        }catch(\Exception $e){
            dd($e->getMessage());

        }

    }



}
