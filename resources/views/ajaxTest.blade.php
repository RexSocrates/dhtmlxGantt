<html>
    <head>
        <title>AJAX TEST</title>
        
        <script src="dhtmlxScheduler/codebase/sources/dhtmlxscheduler.js" 	type="text/javascript" charset="utf-8"></script>
        <script src="../../codebase/dhtmlxscheduler.js" type="text/javascript" charset="utf-8"></script>
    </head>
    
    <body>
        <button onclick="sendData">Click here</button>
    </body>
    
    <script type="text/javascript" charset="utf-8">
        function sendData() {
//            dhx.ajax().post("ajaxPost");
//            dhx.ajax().sync().post("ajaxPost");
            
            var xhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "ajaxPost", false);
            xmlhttp.send();
        }
    </script>
</html>