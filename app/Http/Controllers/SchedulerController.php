<?php
namespace App\Http\Controllers;
use App\SchedulerEvent;
use Dhtmlx\Connector\SchedulerConnector;
// use App\test;

class SchedulerController extends Controller
{
    public function data() {
        $connector = new SchedulerConnector(null, "PHPLaravel");
        $connector->configure(new SchedulerEvent(), "event_id", "start_date, end_date, event_name");
//        $connector->configure(                                  
//            SchedulerEvent::where('event_id', '=', 5)->get(),
//            "event_id",                                         
//            "start_date, end_date, event_name"                  
//        );
        $connector->render();     
    }

}
