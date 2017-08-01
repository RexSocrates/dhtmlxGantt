<html>
    <head>
        <title>AJAX TEST</title>
        
        <script type="text/javascript" src="jquery.js" ></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <script>
            $(document).ready(function(){
                $("button").click(function(){
//                    $.post("ajaxPost2",
//                           {
//                        name: "Donald Duck",
//                        city: "Duckburg"
//                    },
//                           function(data,status){
//                                alert("Success");
//                    });
                    $.post("ajaxPost2", {
                        text : 'This is text'
                    },
                          function() {
                                alert('Can we do it');
                    });
                });
            });
        </script>
    </head>
    
    <body>
        <button>Send an HTTP POST request to a page and get the result back</button>
    </body>
    
    
</html>