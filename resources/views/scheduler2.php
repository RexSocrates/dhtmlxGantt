
<!doctype html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Loading data from a database</title>

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-11031269-1', 'auto');
	ga('send', 'pageview');
</script>
<script src="https://cdn.ravenjs.com/3.10.0/raven.min.js"></script>
<script>Raven.config('https://b506cc95e6244203a69070d518196d06@sentry.dhtmlx.ru/7').install()</script></head>
	<script src="../../codebase/dhtmlxscheduler.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="../../codebase/dhtmlxscheduler.css" type="text/css" charset="utf-8">

	
<style type="text/css" >
	html, body{
		margin:0px;
		padding:0px;
		height:100%;
		overflow:hidden;
	}	
</style>

<script type="text/javascript" charset="utf-8">
	function init() {
		
		scheduler.config.xml_date="%Y-%m-%d %H:%i";
		scheduler.config.prevent_cache = true;
		
		scheduler.config.lightbox.sections=[	
			{name:"description", height:130, map_to:"text", type:"textarea" , focus:true},
			{name:"location", height:43, type:"textarea", map_to:"details" },
			{name:"time", height:72, type:"time", map_to:"auto"}
		];
		scheduler.config.first_hour = 4;
		scheduler.config.limit_time_select = true;
		scheduler.locale.labels.section_location="Location";
		//scheduler.config.details_on_create=true;
		//scheduler.config.details_on_dblclick=true;


		
		scheduler.init('scheduler_here',new Date(2017,10,1),"month");
		scheduler.setLoadMode("month")
		scheduler.load("./scheduler_data");
		
		var dp = new dataProcessor("./scheduler_data");
		dp.init(scheduler);

	}
</script>

<body onload="init();">
	<div id="scheduler_here" class="dhx_cal_container" style='width:100%; height:100%;'>
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
</body>