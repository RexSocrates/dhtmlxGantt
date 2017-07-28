<html>
    <head>
        <title>AJAX TEST</title>
        
        <script src="dhtmlxScheduler/codebase/sources/dhtmlxscheduler.js" 	type="text/javascript" charset="utf-8"></script>
        <script src="../../codebase/dhtmlxscheduler.js" type="text/javascript" charset="utf-8"></script>
    </head>
    
    <body>
        <script type="text/javascript" charset="utf-8">
            function sendData() {
                dhx.ajax().post('ajaxPostRoute');
            }
        </script>
    </body>
</html>