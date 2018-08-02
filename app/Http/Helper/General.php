<?php


namespace App\Http\Helper;
use App\User;
use Illuminate\Support\Facades\DB;

class General  {

  
    public function delete($table, $id)
    {
       try{
           
            $delete  = DB::table($table)->where('id', $id)->delete();
           

       }catch(\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
        


    }
    



    
}    