<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Data extends Model
{
    //
    protected $table = "Data";
    public $primaryKey = "serial";
    public $timestamps = false;
    
    public function getDataList() {
        $list = DB::table('Data')->get();
        
        return $list;
    }
    
    public function insertData($text) {
        DB::table('Data')->insert([
            'text' => $text
        ]);
    }
}
