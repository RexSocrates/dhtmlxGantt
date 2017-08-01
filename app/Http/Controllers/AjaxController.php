<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Data;

class AjaxController extends Controller
{
    //
    
    public function index() {
        $msg = 'This is a simple message.';
        return response()->json(array('msg' => $msg), 200);
    }
    
    public function getPostRequest() {
        $dataObj = new Data();
        
        $dataObj->insertData('1234');
        
        return "I'm in";
    }
    
    public function updateTaskRecord(Request $request) {
        $data = $request->all();
        
//        var_dump($data);
        
        $dataObj = new Data();
        
        $text = $data['text'];
        
        $dataObj->insertData($text);
        
        echo 'ASDFGHJ';
    }
}
