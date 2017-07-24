<!DOCTYPE html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <script src="dhtmlxScheduler/codebase/dhtmlxscheduler.js"></script>
    <link rel="stylesheet" href="dhtmlxScheduler/codebase/dhtmlxscheduler.css">
</head>
 
<body>
    <div id="scheduler_here" class="dhx_cal_container">
        <div class="dhx_cal_navline">
            <div class="dhx_cal_prev_button">&nbsp;</div>
            <div class="dhx_cal_next_button">&nbsp;</div>
            <div class="dhx_cal_today_button"></div>
            <div class="dhx_cal_date"></div>
            <div class="dhx_cal_tab" name="day_tab" style="right:204px;"></div>
            <div class="dhx_cal_tab" name="week_tab" style="right:140px;"></div>
            <div class="dhx_cal_tab" name="month_tab" style="right:76px;"></div>
        </div>
        <div class="dhx_cal_header">
        </div>
        <div class="dhx_cal_data">
        </div>
    </div>
 
    <script type="text/javascript" charset="utf-8">
        document.body.onload = function() {
            scheduler.init('scheduler_here',new Date(2010,7,1),"month");
            scheduler.setLoadMode("month");
            // refers to the 'data' action that we will create in the next substep
            scheduler.load("./scheduler_data");
            // refers to the 'data' action as well
            var dp = new dataProcessor("./scheduler_data");
            dp.init(scheduler);
        };
    </script>
</body>