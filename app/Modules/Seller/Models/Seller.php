<?php namespace App\Modules\Seller\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Seller extends Model {

    public function registerSeller($data)
    {

        try
        {
            DB::table('sellers')
                ->insert($data);


        }catch(\Exception $e){
            dd($e->getMessage());

        }

    }

    public function updateSeller($data,$id)
    {

        $accountHolderName=$data['accountHolderName'];
         //dd($accountHolderName);
        $accountNo=$data['accountNumber'];

        $ifscCode=$data['ifscCode'];

        $panNo=$data['panNo'];

        try
        {
            DB::table('sellers')
                ->where('id',$id)
                ->update(['accountHolderName' =>$accountHolderName,'accountNo'=>$accountNo,'ifscCode'=>$ifscCode,'panNo'=>$panNo]);

        }catch(\Exception $e){
            dd($e->getMessage());

        }

    }




}
