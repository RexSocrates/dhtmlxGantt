<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\GanttTask;
use App\GanttLink;
use Dhtmlx\Connector\GanttConnector;

class GanttController extends Controller
{
    //
    public function  data() {
        $connector = new GanttConnector(null, "PHPLaravel");
        $connector->render_links(new $modelName, $id, $links);
        $connector->render_table(new $modelName, $id, $tasks);
    }
}
