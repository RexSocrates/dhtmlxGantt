<html>
   <head>
      <title>Ajax Example</title>
      
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      
      <script>
//         function getMessage(){
//            $.ajax({
//               type:'POST',
//               url:'/getmsg',
//               data:'_token = <?php echo csrf_token() ?>',
//               success:function(data){
//                  $("#msg").html(data.msg);
//               }
//            });
//         }
          
          function getMessage() {
              var xhttp = new XMLHttpRequest();
              
              xhttp.onreadystatechange = function() {
                  alert('AJAX');
              };
              
              xhttp.open('GET', 'getmsg', true);
              xhttp.send();
          }
      </script>
   </head>
   
   <body>
      <div id = 'msg'>This message will be replaced using Ajax. 
         Click the button to replace the message.</div>
       <button value="Replace message" onclick="getMessage">Replace message</button>
   </body>

</html>