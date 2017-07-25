<!DOCTYPE html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <script src="dhtmlx/codebase/dhtmlx.js"></script>
    <link rel="stylesheet" href="dhtmlx/codebase/dhtmlx.css">
</head>
 
<body>
    <div id="grid_here" style="width: 600px; height: 400px;"></div>
    <script type="text/javascript" charset="utf-8">
        mygrid = new dhtmlXGridObject('grid_here');
        mygrid.setHeader("Start date,End date,Text");
        mygrid.init();
        // refers to the 'data' action that we will create in the next substep
        mygrid.load("./grid_data");
        // refers to the 'data' action as well
        var dp = new dataProcessor("./grid_data");
        dp.init(mygrid);
    </script>
</body>