<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Page extends Model {

   public static function insertData($data){

     
         DB::table('applicants')->insert($data);
      
   }

}